<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rocklister extends CI_Controller { 
     public function __construct()
     {
        parent::__construct();    
         validate_user();
         validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
       // $this->load->helper('ckeditor');
        $this->load->model('Ebayapi_model'); 
        $this->load->model('Ebaydesigns_model'); 
        $this->load->model('Storedesign_model');
        $this->load->model('Listingdesign_model');
        $this->load->model('Configuration_model');
        $this->load->library('../controllers/store_design/ebayapi');       
       $this->sessionID = null;
         non_ssl_redirect();
         $this->load->database();
     }
     /*Load all listings designs purchased*/
    public function index()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Uninstall";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data["passed_to_view"] = "";              
       $content_data["ebay_global"] = $this->Ebayapi_model->get_global_sites();
       $this->template->load('install_wizard/unistall', $content_data); 
     }
}  
