<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Add_member extends Admin_Controller {



    public function __construct()

    {

        parent::__construct();

        $this->load->helper('form');
        validate_application(); 
        $this->load->library('form_validation');

    }



    public function index() {

       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"] = $this->session->userdata( 'user_id' );  
       $content_data["page_title"] = "Members";
       $content_data["widgettitle"] = "";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $content_data["passed_to_view"] = $this->breadcrumbs->get(); 

      /*  $this->template->set_theme('adminpanel');

        $this->template->set_layout('adminpanel');

        $this->template->title('admin panel :: '. $this->lang->line('add_member'));

        $this->process_partial('header', 'adminpanel/header');

        $this->process_partial('footer', 'adminpanel/footer');

        $this->process_template_build('adminpanel/add_member');*/
        $this->template->load('adminpanel/add_member', $content_data);   

    }



    /**

     *

     * add: add member from post data.

     *

     */



    public function add() {

        $this->form_validation->set_error_delimiters('<p>', '</p>');

        $this->form_validation->set_rules('first_name', 'first name', 'trim|required|max_length[40]|min_length[2]');

        $this->form_validation->set_rules('last_name', 'last name', 'trim|required|max_length[60]|min_length[2]');

        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|max_length[255]|is_valid_email|is_existing_unique_field[user.email]');

        $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[16]|min_length[6]|is_valid_username|is_existing_unique_field[user.username]');

        $this->form_validation->set_rules('password', 'password', 'trim|required|max_length[64]|min_length[9]|matches[password_confirm]|is_valid_password');

        $this->form_validation->set_rules('password_confirm', 'repeat password', 'trim|required|max_length[64]|min_length[9]');



        if (!$this->form_validation->run()) {

            $this->session->set_flashdata('error', validation_errors());

            $this->session->set_flashdata($_POST);

            redirect('/adminpanel/add_member');

            exit();

        }



        // load membership model

        $this->load->model('membership/register_model');

        if($nonce = $this->register_model->create_member($this->input->post('username'), $this->input->post('password'), $this->input->post('email'), $this->input->post('first_name'), $this->input->post('last_name'))) {

            $this->load->helper('send_email');

            $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));

            $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);

            $this->email->to($this->input->post('email'));

            $this->email->subject($this->lang->line('membership_subject'));

            $this->email->message($this->lang->line('email_greeting') . " ". $this->input->post('username') . $this->lang->line('membership_message'). base_url() ."membership/activate_membership/check/". urlencode($this->input->post('email')) ."/". $nonce);

            $this->email->send();

            $this->session->set_flashdata('success', '<p>'. $this->lang->line('account_created') .'</p>');

        }else{

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('unable_to_register') .'</p>');

        }

        redirect('/adminpanel/add_member');

    }



}



/* End of file add_member.php */

/* Location: ./application/controllers/adminpanel/add_member.php */