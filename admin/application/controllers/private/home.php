<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(false);
class Home extends Private_Controller {

    public function __construct()
    {
        
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
         $this->load->model('Ebaydesigns_model');
         $this->load->model('Listingdesign_model');
         $this->load->model('private/Home_model');
         validate_user();
         validate_application();
         if(!$this->Ebaydesigns_model->validate_app($this->session->userdata( 'user_id' ),$this->session->userdata( 'id_ebay_design' ))):
             redirect('https://'.$_SERVER['HTTP_HOST'].'/designmanager/store_design/installation/install');
         endif;
          non_ssl_redirect();
    }

    public function index() 
{
       
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"] = $this->session->userdata( 'user_id' );
       $content_data["role_id"] = $this->session->userdata( 'role_id' );
       $content_data["page_title"] = "Design Manager";
       $content_data["widgettitle"] = "";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $content_data["passed_to_view"] = $this->breadcrumbs->get(); 
        
        // set content data
        $content_data['welcome'] = "Welcome, ". $this->session->userdata('username') ."!";
        if($content_data["role_id"]  != 1):
        $content_data['array_listing_design']  = $this->Ebaydesigns_model->get_listing_designs($content_data["user_id"] ); 
        $content_data['array_front_design']  = $this->Ebaydesigns_model->get_ebay_home_designs($content_data["user_id"] ); 
        //$content_data['array_listing_designs'] =  $this->Listingdesign_model->list_all_listings_designs($ebay_designs);
           /* echo "<pre>";
            print_r($content_data['array_listing_designs'] );die();*/
        $this->template->load('subscribers/private/homepage', $content_data);   
        else:
           $this->template->load('subscribers/private/home_administrator', $content_data);   
        endif;
       
    }


}

/* End of file home.php */
/* Location: ./application/controllers/private/home.php */