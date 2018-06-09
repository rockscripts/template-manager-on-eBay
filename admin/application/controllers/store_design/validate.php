<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate extends CI_Controller {

     public function __construct()
     {
        parent::__construct();
        validate_user();
        validate_application(); 
        non_ssl_redirect();
        $this->load->model('Configuration_model');
     }
     public function validate_images()
     {
         $src_file_name = $this->input->post('file_name',TRUE);
         $json = array();
         $supported_image = array(
                                    'gif',
                                    'jpg',
                                    'jpeg',
                                    'bmp',
                                    'png'
                                 );
         $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
         if (in_array($ext, $supported_image)) 
           $json["is_image"] = "true";
         else 
           $json["is_image"] = "false";
         echo json_encode($json);
     }
     public function blueimp_remove_image()
     {
         $user_id = $this->session->userdata( 'user_id' );
         $src = $this->input->post('src'); 
         $type = $this->input->post('type');
         $file_name = $this->get_file_name($src);
         $base_path = $this->Configuration_model->get_configuration_value('base-path');
         switch($type)
         {
          case "front-screenshot": 
           $source = $base_path."server/php/files/store_design/screenshots/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/screenshots/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
         case "listing-screenshot": 
           $source = $base_path."server/php/files/store_design/screenshots/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/screenshots/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "logo": 
           $source = $base_path."server/php/files/store_design/logos/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/logos/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "general-image": 
           $source = $base_path."server/php/files/store_design/general_images/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/general_images/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "front-slider": 
           $source = $base_path."server/php/files/store_design/home_image_video_slider/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/home_image_video_slider/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "listing-slider": 
           $source = $base_path."server/php/files/store_design/listing_image_video_slider/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/listing_image_video_slider/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "front-advertising": 
           $source = $base_path."server/php/files/store_design/home_design_advertisements/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/home_design_advertisements/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "listing-advertising": 
           $source = $base_path."server/php/files/store_design/advertisements/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/advertisements/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "popular-category": 
           $source = $base_path."server/php/files/store_design/popular_categories/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/popular_categories/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "featured": 
           $source = $base_path."server/php/files/store_design/featured/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/featured/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "specials": 
           $source = $base_path."server/php/files/store_design/specials/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/specials/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
          case "arrivals": 
           $source = $base_path."server/php/files/store_design/arrivals/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/store_design/arrivals/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
        case "suggested-template": 
           $source = $base_path."server/php/files/suggested_templates/".$user_id."/".$file_name;
           $this->delete_image_from_server($source);
           $source = $base_path."server/php/files/suggested_templates/".$user_id."/thumbnail/".$file_name;
           $this->delete_image_from_server($source);
          break;
         }
     }
     public function get_file_name($src)
     {
        $path_parts = pathinfo($src); 
        return $path_parts['filename'].".".$path_parts['extension'];
     }
     public function delete_image_from_server($source)
    {      
              if(file_exists($source)) 
               unlink($source);
    }
}  