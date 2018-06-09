<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends CI_Controller {

     public function __construct()
     {
        parent::__construct();
        validate_user();
        validate_application();
        $this->load->model('Csv_model');
        $this->load->model('Configuration_model');
        $this->load->model('Banners_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('html'); 
          non_ssl_redirect();
     }
   public function index()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Banners Manager";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/
	   $array = $this->Banners_model->get_logo(1,1);
       if($array)
       {
           foreach ($array as $row)
            {
                 $data["banner_url"] = $row->banner_url;
                 $data["id_logo"] = $row->id_banner;
            }
       }
       else{
       $data["banner_url"]  = base_url()."themes/katniss/img/coming_soon.png";
	    $data["id_logo"] = false;
	   }

		
		// Banner 2
	   $array = $this->Banners_model->get_logo(1,2);
       if($array)
       {
           foreach ($array as $row)
            {
                 $data["banner_url_2"] = $row->banner_url;
                 $data["id_logo_2"] = $row->id_banner;
            }
       }
       else{
       $data["banner_url_2"]  = base_url()."themes/katniss/img/coming_soon_1.png";
		 $data["id_logo_2"] = false;
	   }


		// Banner 3
	   $array = $this->Banners_model->get_logo(1,3);
       if($array)
       {
           foreach ($array as $row)
            {
                 $data["banner_url_3"] = $row->banner_url;
                 $data["id_logo_3"] = $row->id_banner;
            }
       }
       else{
       $data["banner_url_3"]  = base_url()."themes/katniss/img/coming_soon_1.png";
	    $data["id_logo_3"] = false;
	   }
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/banners', $data); 
	 
     }
	 public function edit(){
	   $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "Banners Manager";
	   $data["id_design"] = $this->input->get("id_design");
        // This can be autoloaded //

		 /*CHANGE_TEST*/
       $array = $this->Banners_model->get_logo(1,$this->input->get("id_design"));
      
	   if($array)
       {
           foreach ($array as $row)
            {
                 $data["banner_url"] = $row->banner_url;
                 $data["id_banner"] = $row->id_banner;
            }
       }
       else
       $data["banner_url"]  = false;

       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       /*CHANGE_TEST*/
	
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/banners_edit', $data); 
	 }
     public function new_banners()
     {
         $user_id     =  $this->input->post('user_id'); 
         $id_design =  $this->input->post('id_design'); 
         $banner_url    =  $this->input->post('banner_url'); 
         $this->Banners_model->insert_banners_design($user_id,$id_design,$banner_url);
     } 
/*update image */	
     public function update_banners()
     {
         $id_logo    =  $this->input->post('id_banner'); 
         $logo_url    =  $this->input->post('banner_url'); 
         $this->delete_old_image_from_server($id_logo);
         $this->Banners_model->update_logo($id_logo,$logo_url);
     }
	 
     function delete_old_image_from_server($id_logo)
     {
         $array = $this->Banners_model->get_old_logo($id_logo);
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