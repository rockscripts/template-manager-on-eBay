<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Controller 
{
     public function __construct() 
     {
        parent::__construct();        
         validate_user();
         validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('html');    
        $this->load->model('Configuration_model');
    }
    public function add_configuration()
    {
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Software Configuration ";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');

        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'cursos' ,'title' => 'Home' );
        $this->breadcrumbs->method = array('link'=> base_url().'configuration/add_configuration' ,'title' => 'Software Configuration - New' );

        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $data["array_configuration_data"] = $this->Configuration_model->get_configuration_data();
        $this->template->load('configuration/add_configuration', $data);     
    }
    public function save_new_configuration()
    {  
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"]     = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Software Configuration";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');

        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'cursos' ,'title' => 'Home' );
        $this->breadcrumbs->method = array('link'=> base_url().'configuration/index' ,'title' => 'Software Configuration' );
        
        $configuration_name =  $this->input->post('configuration_name'); 
        $configuration_value =  $this->input->post('configuration_value'); 
        $configuration_key    =  $this->input->post('configuration_key'); 
        $this->Configuration_model->insert_configuration($configuration_name,$configuration_value,$configuration_key);
        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $data["array_configuration_data"] = $this->Configuration_model->get_configuration_data();
        $this->template->load('configuration/index', $data);     
    }
    public function edit_configuration()
    {
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Software Configuration ";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');

        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'cursos' ,'title' => 'Home' );
        $this->breadcrumbs->method = array('link'=> base_url().'configuration/edit_configuration' ,'title' => 'Software Configuration - Edit' );

        // Variable passed into the view
        $data["passed_to_view"]        = $this->breadcrumbs->get();
        $data["configuration_name"]  =  $this->input->post('current_name'); 
        $data["configuration_value"] =  $this->input->post('current_value'); 
        $data["configuration_key"]     =  $this->input->post('current_key'); 
        $data["id_configuration"]     =  $this->input->post('id_configuration'); 

        
        $data["array_configuration_data"] = $this->Configuration_model->get_configuration_data();
        $this->template->load('configuration/edit_configuration', $data);     
    }
     
    public function update_configuration()  
    {  
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Software Configuration ";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');

        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'cursos' ,'title' => 'Home' );
        $this->breadcrumbs->method = array('link'=> base_url().'configuration/add_configuration' ,'title' => 'Software Configuration - New' );

        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();
        
        $id_configuration    =  $this->input->post('id_configuration'); 
        /*New Data*/
        $configuration_name =  $this->input->post('configuration_name'); 
        $configuration_value =  $this->input->post('configuration_value'); 
        $configuration_key    =  $this->input->post('configuration_key'); 
        /*Old data used for compare if was update*/
        $current_name =  $this->input->post('current_name'); 
        $current_value =  $this->input->post('current_value'); 
        $current_key    =  $this->input->post('current_key'); 
        $message = "";
        $type        = "";
        if($configuration_name != $current_name):
            $this->Configuration_model->update_name($id_configuration, $configuration_name);
            $message = "* Configuration name was updated to <b>'$configuration_name'</b><br>";
            $type = "alert-success";
        endif;
        if($configuration_value != $current_value):
            $this->Configuration_model->update_value($id_configuration, $configuration_value);
            $message .= "* Configuration value was updated to <b>'$configuration_value'</b><br>";
            $type= "alert-success";
        endif;
        if($configuration_key != $current_key):
            $this->Configuration_model->update_key($id_configuration, $configuration_key);
            $message .= "* Configuration key was updated to <b>'$configuration_key'</b><br>";
            $type = "alert-success";
        endif;   
        $data["type"]         = $this->get_message_type($type);
        $data["message"] = $this->set_message($message);      
        
        $data["array_configuration_data"] = $this->Configuration_model->get_configuration_data();
        $this->template->load('configuration/index', $data);    
    }
    public function delete_configuration()
    {        
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Software Configuration";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');

        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'cursos' ,'title' => 'Home' );
        $this->breadcrumbs->method = array('link'=> base_url().'configuration/index' ,'title' => 'Software Configuration' );

        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();
        /*Delete Item*/
        $id_configuration    =  $this->input->post('id_configuration'); 
        $name    =  $this->input->post('current_name'); 
        $result = $this->Configuration_model->delete_configuration($id_configuration); 
        if($result)
        {
        $data["type"]         = $this->get_message_type("alert-success");
        $data["message"] = $this->set_message("Configuration option '$name' was deleted successfully.");    
        
        }
        else
        {
          $data["type"]         = $this->get_message_type("alert-error");
          $data["message"] = $this->set_message("Sorry, configuration option was not deleted for some internal. Error was logged, we will revise it.");     
        }
        $data["array_configuration_data"] = $this->Configuration_model->get_configuration_data();
        $data["type"]         = $this->get_message_type("alert-success");
        $data["message"] = $this->set_message("Configuration was deleted");    
        $this->template->load('configuration/index', $data);     
    
    }
   public function get_message_type($type)
   {
        if(empty($type))            
        $data["type"] = "hide";
        else
        $data["type"] = $type; 
        return $data["type"] ;
   }
    public function set_message($message)
   {
        if(empty($message))            
        $data["message"] = "";
        else
        $data["message"] = $message; 
        return $data["message"] ;
   }
    public function index()  
     {       
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Software Configuration";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');

        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'cursos' ,'title' => 'Home' );
        $this->breadcrumbs->method = array('link'=> base_url().'configuration/index' ,'title' => 'Software Configuration' );

        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $data["array_configuration_data"] = $this->Configuration_model->get_configuration_data();
        $this->template->load('configuration/index', $data);     
    }
 } 