<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Oauth_new_provider extends Admin_Controller {



    public function __construct()

    {
        parent::__construct();
        // pre-load
        validate_application();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('adminpanel/oauth_new_provider_model');
    }



    public function index() {

       /* $this->template->set_theme('adminpanel');

        $this->template->set_layout('adminpanel');

        $this->template->title('admin panel :: OAuth new provider');

        $this->process_partial('header', 'adminpanel/header');

        $this->process_partial('footer', 'adminpanel/footer');

        $this->process_template_build('adminpanel/oauth_new_provider');*/
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
       $this->template->load('adminpanel/oauth_new_provider', $content_data); 

    }



    /**

     *

     * save: store new oauth provider

     *

     */



    public function save() {

        $this->form_validation->set_error_delimiters('<p>', '</p>');

        $this->form_validation->set_rules('name', 'name', 'trim|required|max_length[50]|min_length[2]|is_existing_unique_field[oauth_providers.name]');

        $this->form_validation->set_rules('key', 'key', 'trim|required|max_length[255]|min_length[2]');

        $this->form_validation->set_rules('secret', 'secret', 'trim|required|max_length[255]|min_length[2]');



        if (!$this->form_validation->run()) {

            $this->session->set_flashdata('error', validation_errors());

            $this->session->set_flashdata($_POST);

            redirect('/adminpanel/oauth_new_provider');

            exit();

        }



        $data = array(

            'name' => $this->input->post('name'),

            'key' => $this->input->post('key'),

            'secret' => $this->input->post('secret'),

            'enabled' => ($this->input->post('enabled') != "" ? true : false)

        );



        if ($this->oauth_new_provider_model->save_provider($data)) {

            $this->session->set_flashdata('success', '<p>New provider added.</p>');

        }



        redirect('/adminpanel/oauth_new_provider');

    }



}