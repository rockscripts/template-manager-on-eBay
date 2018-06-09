<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Featured extends CI_Controller {

     public function __construct()
     {
        parent::__construct();
 validate_user();
 validate_application();
        $this->load->model('Csv_model');
        $this->load->model('Configuration_model');
        $this->load->model('Featured_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('html'); 
     }
     public function load_featured_listing()
     {
        $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Featured Listings";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/       
       $data["id_ebay_design"]  = 1;
       $data["array_featured"]  = $this->Featured_model->get_featured_listing( $data["id_ebay_design"],$data["user_id"]);
       $data["passed_to_view"] = $this->breadcrumbs->get();  
       $data["currency"] = "USD";
       if($this->input->get('id'))
       {
           $data["id_featured_listing_updated"] = $this->input->get('id');
           $data["message"] = "Featured Listing was updated";
       }
       $this->template->load('store_design/listings/load_featured_listing', $data);  
       
     }
     
     public function add_featured_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Featured Listings";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/
       
       $data["id_ebay_design"]  = 1;
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/listings/add_featured_listing', $data);  
     }
     public function save_featured_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Featured Listings";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/
       
       
       $id_ebay_design     =  $this->input->post('id_ebay_design'); 
       $title =  $this->input->post('title'); 
       $price =  $this->input->post('price'); 
       $link =  $this->input->post('link'); 
       $image_url = $this->input->post('image_url'); 
       $this->Featured_model->add_featured_listing($id_ebay_design,$title,$price,$link,$image_url);
       
       $data["id_ebay_design"]  = 1;
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/listings/load_featured_listing', $data);  
     }
      public function change_status()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Featured Listings";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/       
       $data["id_ebay_design"]  = 1;
       
       $data["passed_to_view"] = $this->breadcrumbs->get();  
       /*CHANGE STATUS PROCESS*/
       $current_status =  $this->input->post('current_status');
       $data["currency"] = "USD";
       $id_featured_listing =  $this->input->post('featured_listing_id'); 
       
       if($this->input->get('id'))
       {
           $data["id_featured_listing_updated"] = $this->input->get('id');
           $data["message"] = "Status was changed successfull.";
       }
       if($current_status == "Active"):
           $this->Featured_model->change_status_to($id_featured_listing, "Deactive");
       else:
           $this->Featured_model->change_status_to($id_featured_listing, "Active");
       endif;
       $data["array_featured"]  = $this->Featured_model->get_featured_listing( $data["id_ebay_design"]);
       $this->template->load('store_design/listings/load_featured_listing', $data); 
     }
     /*edit banner - load interface*/
     public function edit_featured_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Featured Listings";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/             
       $data["passed_to_view"] = $this->breadcrumbs->get(); 
       
       /*get current values for featured listing to edit*/
        $data["id_featured_listing"]  =  $this->input->post('id_featured_listing'); 
        $data["current_title"] =  $this->input->post('current_title'); 
        $data["current_price"] =  $this->input->post('current_price'); 
        $data["current_link"] =  $this->input->post('current_link'); 
        $data["current_image_url"] = $this->input->post('current_image_url'); 
        
       $this->template->load('store_design/listings/edit_featured_listing', $data);      
     }
     /*update image and listing*/	
     public function update_featured_listing()
     {
        $id_featured_listing  =  $this->input->post('id_featured_listing'); 
        $title =  $this->input->post('title'); 
        $price =  $this->input->post('price'); 
         $link =  $this->input->post('link'); 
        $image_url = $this->input->post('image_url'); 
        /*delete old image from server if image was updated*/
        if($image_url!="not-defined"):
             $this->delete_old_image_from_server($id_featured_listing);
        endif;
        $this->Featured_model->update_featured_listing($id_featured_listing,$title,$price,$link,$image_url);
                
       
     }
     /*delete iamge and update list*/
     public function delete_featured_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Featured Listings";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/       
       $data["id_ebay_design"]  = 1;
       
       $data["passed_to_view"] = $this->breadcrumbs->get();  
       /*DELETE STATUS PROCESS*/
       $id_featured_listing =  $this->input->post('featured_listing_id'); 
       
       $this->delete_old_image_from_server($id_featured_listing);
       $this->Featured_model->delete_featured_listing($id_featured_listing);
      $data["currency"] = "USD";
       if($this->input->get('id'))
       {
           $data["id_featured_listing_updated"] = $this->input->get('id');
           $data["message"] = "Featured listing was deleted successfull.";
       }
       $data["array_featured"]  = $this->Featured_model->get_featured_listing( $data["id_ebay_design"]);
        
       $this->template->load('store_design/listings/load_featured_listing', $data); 
     }
     
     function delete_old_image_from_server($id_featured_listing)
     {
         $array = $this->Featured_model->get_featured_listing_with_id($id_featured_listing);
         $base_path = $this->Configuration_model->get_configuration_value('base-path');
         foreach ($array as $row)
            {
               $image_path = $this->get_clean_image_path($row->image_url);
               $thumb_image_path = $this->get_clean_thumbail_image_path($row->image_url);
             
            }
            if(file_exists($base_path.$image_path)) 
            {
                unlink($base_path.$image_path) ;
                if(file_exists($base_path.$thumb_image_path));
                unlink($base_path.$thumb_image_path) ;
            }
      }
     
     function get_clean_image_path($logo_url)
     {
         $array_parts = explode("/",$logo_url);
         $file_path = "";
         for($i=3;$i<sizeof($array_parts);$i++)
         {
             if($i == (sizeof($array_parts)-1))
                 $file_path .= $array_parts[$i];
            else
             $file_path .= $array_parts[$i]."/";
         }
         return  $file_path;
     }
     function get_clean_thumbail_image_path($logo_url)
     {
         $array_parts = explode("/",$logo_url);
         $file_path = "";
         for($i=3;$i<sizeof($array_parts);$i++)
         {
             if($i == (sizeof($array_parts)-1))
                 $file_path .= $array_parts[$i];
            else if($i == (sizeof($array_parts)-2))
             $file_path .=$array_parts[$i]."/"."thumbnail/";
            else
                $file_path .= $array_parts[$i]."/";
         }
         return  $file_path;
     }     
}  