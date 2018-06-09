<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Oauth_providers extends Admin_Controller {



    public function __construct()

    {

        parent::__construct();

        // pre-load
validate_application();
        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->load->model('adminpanel/oauth_providers_model');

    }



    public function index() {



        $content_data['providers'] = $this->oauth_providers_model->get_providers();
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


       /* $this->template->set_theme('adminpanel');

        $this->template->set_layout('adminpanel');

        $this->template->title('admin panel :: oauth providers');

        $this->process_partial('header', 'adminpanel/header');

        $this->process_partial('footer', 'adminpanel/footer');

        $this->process_template_build('adminpanel/oauth_providers', $content_data);*/
         $this->template->load('adminpanel/oauth_providers', $content_data);      

    }



    /**

     *

     * action: used to handle both save and delete below

     *

     */



    public function action() {

        if (isset($_POST['delete'])) {

            $this->_delete();

        }else{ // delete needs to be sent or else it will always save, for example when hitting enter on keyboard

            $this->_save();

        }

    }



    private function _save() {

        if ($this->input->post('id') != strval(intval($this->input->post('id')))) {

            redirect('private/oauth_profile');

        }



        $this->form_validation->set_error_delimiters('<p>', '</p>');

        $this->form_validation->set_rules('name', 'name', 'trim|required|max_length[50]|min_length[2]');

        $this->form_validation->set_rules('key', 'key', 'trim|required|max_length[255]|min_length[2]');

        $this->form_validation->set_rules('secret', 'secret', 'trim|required|max_length[255]|min_length[2]');



        if (!$this->form_validation->run()) {

            $this->session->set_flashdata('error', validation_errors());

            redirect('/adminpanel/oauth_providers');

            exit();

        }



        $data = array(

            'id' => $this->input->post('id'),

            'name' => $this->input->post('name'),

            'key' => $this->input->post('key'),

            'secret' => $this->input->post('secret'),

            'enabled' => $this->input->post('enabled') == 1 ? true : false,

        );



        if ($this->oauth_providers_model->save_provider($data)) {

            $this->session->set_flashdata('success', '<p>Provider saved.</p>');

        }



        redirect('/adminpanel/oauth_providers');

    }



    private function _delete() {

        if ($this->input->post('id') != strval(intval($this->input->post('id')))) {

            redirect('private/oauth_profile');

        }



        if ($this->oauth_providers_model->delete_provider($this->input->post('id'))) {

            $this->session->set_flashdata('success', '<p>Provider deleted.</p>');

        }



        redirect('/adminpanel/oauth_providers');

    }



}