<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends CI_Controller {

     public function __construct()
     {
        parent::__construct();
 validate_user();
 validate_application();
        $this->load->model('Csv_model');
        $this->load->model('Configuration_model');
        $this->load->model('Header_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('html'); 
     }
     public function index()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Header Setting";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/
       $array = $this->Header_model->get_logo(1,1);
       if($array)
       {
           foreach ($array as $row)
            {
                 $data["logo_url"] = $row->logo_url;
                 $data["id_logo"] = $row->id_logo;
            }
       }
       else
       $data["logo_url"]  = false;
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/index', $data); 
     }
     public function new_logo()
     {
         $user_id     =  $this->input->post('user_id'); 
         $id_design =  $this->input->post('id_design'); 
         $logo_url    =  $this->input->post('logo_url'); 
         $this->Header_model->insert_logo_design($user_id,$id_design,$logo_url);
     }
     public function update_logo()
     {
         $id_logo    =  $this->input->post('id_logo'); 
         $logo_url    =  $this->input->post('logo_url'); 
         $this->delete_old_image_from_server($id_logo);
         $this->Header_model->update_logo($id_logo,$logo_url);
     }
     function delete_old_image_from_server($id_logo)
     {
         $array = $this->Header_model->get_old_logo($id_logo);
         $base_path = $this->Configuration_model->get_configuration_value('base-path');
         foreach ($array as $row)
            {
               $image_path = $this->get_clean_image_path($row->logo_url);
               $thumb_image_path = $this->get_clean_thumbail_image_path($row->logo_url);
             
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