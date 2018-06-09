<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Developerzone extends CI_Controller {
private  $files;
     public function __construct()
     {
        parent::__construct();   
        validate_user();
        validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
       // $this->load->helper('ckeditor');
        $this->load->model('Header_model');
        $this->load->model('Ebaydesigns_model');
        $this->load->model('Ebayapi_model');
        $this->load->model('Listingdesign_model');
        $this->load->model('Configuration_model');
        $this->load->model('Popularcategories_model');
        $this->load->model('Featured_model');
        $this->load->model('Storedesign_model');
        $this->load->model('membership/login_model');
        $this->load->model('HTMLtojs_model');
        $this->load->model('Suggested_templates_model');
        non_ssl_redirect();
        $this->files = array();
     }
     
     /*Load all listings designs purchased*/
    public function index()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $id_home_design = $this->session->userdata( 'id_home_design' );  
       $content_data["page_title"] = "Developer Zone";       
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );    
       /*load header display*/
       /*load  client custom code */
       $header_display = $this->HTMLtojs_model->get_code_tagged_part('front', 'custom-header',$id_ebay_design, $id_home_design, $content_data["user_id"] );
       $footer_display = $this->HTMLtojs_model->get_code_tagged_part('front', 'custom-footer',$id_ebay_design, $id_home_design, $content_data["user_id"] );
       if($header_display):
           $content_data['header_display_code'] = $header_display;
       else:
           $content_data['header_display_code'] = false;
       endif;
         if($footer_display):
           $content_data['footer_display_code'] = $footer_display;
       else:
           $content_data['footer_display_code'] = false;
       endif;
       $base_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
       $client_path = $base_path.$content_data["user_id"]."/assets/";
       $client_path_js = $client_path."js/";
       $client_path_css = $client_path."css/";
       
       
       $content_data['front_custom_css_code'] = file_get_contents($client_path_css."front_custom_css_code.css");
       $content_data['listing_custom_css_code'] = file_get_contents($client_path_css."listing_custom_css_code.css");
       $content_data['listing_custom_js_code'] = file_get_contents($client_path_js."listing_custom_js_code.js");
       $content_data['front_custom_js_code'] = file_get_contents($client_path_js."front_custom_js_code.js");
       
       // Variable passed into the view
       $content_data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('developers_zone/index', $content_data); 
     }
     public function load_template_management()
     {
      $content_data["username"] = $this->session->userdata( 'username' );
      $content_data["user_id"]  = $this->session->userdata( 'user_id' );
      $id_ebay_design = $this->session->userdata( 'id_ebay_design' );  
      $content_data["page_title"] = "Template management";       
         // This can be autoloaded //
         $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
         // as an array //
         $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );   
         // Variable passed into the view
         $content_data["passed_to_view"] = $this->breadcrumbs->get();
      $content_data["templates_installed"] = $this->Storedesign_model->get_templates_installed($content_data["user_id"], $id_ebay_design);
      $this->template->load('developers_zone/list_templates', $content_data); 
      
     }
     public function suggested_templates()
     {
      $content_data["username"] = $this->session->userdata( 'username' );
      $content_data["user_id"]  = $this->session->userdata( 'user_id' );
      $id_ebay_design = $this->session->userdata( 'id_ebay_design' ); 
      $content_data["page_title"] = "Suggested templates";       
         // This can be autoloaded //
         $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
         // as an array //
         $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );   
         // Variable passed into the view
         $content_data["passed_to_view"] = $this->breadcrumbs->get();
      $content_data["suggested_templates_categories"] = $this->get_suggested_templates_categories();
      $this->template->load('templates/suggested_templates_by_category', $content_data); 
     }
     public function get_suggested_templates_categories()
     {
         return $this->Suggested_templates_model->get_suggested_templates_categories(); 
     }
     public function active_template()
     {
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $id_home_design = $this->session->userdata( 'id_home_design' );
       $template_name = $type = $this->input->post("template_name");
       $id_template = $type = $this->input->post("id_template_installed");
       $current_active_template = $this->Storedesign_model->get_templates_actived($content_data["user_id"], $id_ebay_design);
       $base_path_installed_dir = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["user_id"]."/installed/".$template_name."/";
       $base_client_hosting_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
       $client_path = $base_client_hosting_path.$content_data["user_id"]."/assets/";
       $client_path_js = $client_path."js/";
       $client_path_css = $client_path."css/";
       $json = array();
       /*
        * get common code and set on database and write on js dynamic files
        */
       $template_common_data = $this->Storedesign_model->get_template_modified($template_name, $content_data["user_id"] ,$id_ebay_design);
       
       $header_display = $template_common_data->custom_header;
       $footer_display = $template_common_data->custom_footer;
       //write header
       $this->write_log_in_js_file($content_data["user_id"], "header_display.js",$header_display,"header_display");
       $this->HTMLtojs_model->update_home_part_tagged("custom-header",$id_ebay_design,$id_home_design,$content_data["user_id"] ,$header_display);
       //write footer
       $this->write_log_in_js_file($content_data["user_id"], "footer_display.js",$footer_display,"footer_display");
       $this->HTMLtojs_model->update_home_part_tagged("custom-footer",$id_ebay_design,$id_home_design,$content_data["user_id"] ,$footer_display);
       /*
        * get css code and write on dynamic css files
        */
       $css_storefront = $template_common_data->front_style;
       $css_listing    = $template_common_data->listing_style;
       /*write css code*/
       $File = $client_path_css."front_custom_css_code.css";
       $Handle = fopen($File, 'w');
       fwrite($Handle, $css_storefront);
       $File = $client_path_css."listing_custom_css_code.css";
       $Handle = fopen($File, 'w');
       fwrite($Handle, $css_listing);
       /*
        * get js code and write on dynamic js files
        */
       $js_storefront = $template_common_data->front_script;
       $js_listing    = $template_common_data->listing_script;
       $File = $client_path_js."front_custom_js_code.js";
       $Handle = fopen($File, 'w');
       fwrite($Handle, $js_storefront);
       $File = $client_path_js."listing_custom_js_code.js";
       $Handle = fopen($File, 'w');
       fwrite($Handle, $js_listing);
       /*
        * Install Theme options
        */
       if($template_name!="default")
       $this->install_theme_options($template_name);
       $this->Storedesign_model->update_template_installed_status($id_template, "on", $content_data["user_id"], $id_ebay_design);
       $this->Storedesign_model->update_template_installed_status($current_active_template->id_template_installed, "off", $content_data["user_id"], $id_ebay_design);
       $json["id_old_template_active"] = $current_active_template->id_template_installed;
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$content_data["user_id"] );
       store_front_all_in_one($content_data["user_id"] ,$store_settings->language);
       store_listing_all_in_one($content_data["user_id"] ,$store_settings->language);
       echo json_encode($json);
     }
     public function download_template()
     {
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $id_home_design = $this->session->userdata( 'id_home_design' );
       $template_name = $this->input->post("template_name");
       $id_template = $this->input->post("id_template_installed");
       $base_path_templates_dir = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["user_id"]."/";
       $base_client_hosting_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
       $base_path_default_files = $this->Configuration_model->get_configuration_value('default-files');   
       $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');          
       $client_path = $base_client_hosting_path.$content_data["user_id"]."/assets/";
       $client_path_images_template = $client_path."images/templates/".$template_name."/";
       $this->deleteDir($base_path_templates_dir."tmp_download/") ;
       $this->makeDir($base_path_templates_dir."tmp_download");
       $this->makeDir($base_path_templates_dir."tmp_download/template-original-files");
       $this->makeDir($base_path_templates_dir."tmp_download/template-updated-files");
       $this->makeDir($base_path_templates_dir."tmp_download/template-updated-files/theme-options");
       $this->recurse_copy($base_path_templates_dir."installed/".$template_name."/",$base_path_templates_dir."tmp_download/template-original-files");
       /*build files structure for update files*/
       $this->recurse_copy($base_path_default_files."template_installation/",$base_path_templates_dir."tmp_download/template-updated-files/");
       /*send images from hosting*/
       $this->recurse_copy($client_path_images_template,$base_path_templates_dir."tmp_download/template-updated-files/images/");
       $this->recurse_copy($base_path_templates_dir."installed/".$template_name."/theme-options/",$base_path_templates_dir."tmp_download/template-updated-files/theme-options/");
       $template_common_data = $this->Storedesign_model->get_template_modified($template_name, $content_data["user_id"] ,$id_ebay_design);
       //write header
       $this->write_code_on_any_file($base_path_templates_dir."tmp_download/template-updated-files/common/header_display.html",$template_common_data->custom_header);
       //write footer
       $this->write_code_on_any_file($base_path_templates_dir."tmp_download/template-updated-files/common/footer_display.html",$template_common_data->custom_footer);
       $this->write_code_on_any_file($base_path_templates_dir."tmp_download/template-updated-files/css/storefront.css",$template_common_data->front_style);
       $this->write_code_on_any_file($base_path_templates_dir."tmp_download/template-updated-files/css/listing.css",$template_common_data->listing_style);       
       $this->write_code_on_any_file($base_path_templates_dir."tmp_download/template-updated-files/js/storefront.js",$template_common_data->front_script);
       $this->write_code_on_any_file($base_path_templates_dir."tmp_download/template-updated-files/js/listing.js",$template_common_data->listing_script);
       $this->zip_dir($base_path_templates_dir."tmp_download/", $base_path_templates_dir."tmp_download/".$template_name.".zip");
       $json= array();
       $json["download_url"] = $clients_file_hosting."files/templates_installation/{$content_data["user_id"]}/tmp_download/$template_name.zip";
       
       $template = $this->Storedesign_model->get_template_installed($id_template);
       $json["download_full_url"] = $template->download_files;
       echo json_encode($json);
     }
     public function delete_template()
     {
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' ); 
       $template_name = $this->input->post("template_name");
       $id_template = $this->input->post("id_template_installed");
       $base_path_templates_dir = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["user_id"]."/";
       $base_client_hosting_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
       $client_path = $base_client_hosting_path.$content_data["user_id"]."/assets/";
       $client_path_images_template = $client_path."images/templates/".$template_name."/";
       /*delete template folder for images located in hosting path*/
       $this->deleteDir($client_path_images_template);
       $this->deleteDir($base_path_templates_dir."extracted/".$template_name."/");
       $this->deleteDir($base_path_templates_dir."installed/".$template_name."/");
       $this->deleteDir($base_path_templates_dir."zip/".$template_name.".zip");
       $this->Storedesign_model->delete_template_installed($template_name,$id_ebay_design, $content_data["user_id"]);
       $this->Storedesign_model->delete_template_installed_modified($template_name,$id_ebay_design, $content_data["user_id"]);
     }
   public function save_development_code()
        {
            $content_data["user_id"]  = $this->session->userdata( 'user_id' );
            $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
            $id_home_design = $this->session->userdata( 'id_home_design' );  
            $type = $this->input->post("type");
            $code = $this->input->post("code");
            $template_actived_name = $this->Storedesign_model->get_templates_actived($content_data["user_id"], $id_ebay_design);
            $base_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
            $client_path = $base_path.$content_data["user_id"]."/assets/";
            $client_path_js = $client_path."js/";
            $client_path_css = $client_path."css/";
            switch ($type)
            {
                case "front_custom_css_code":
                   $File = $client_path_css."front_custom_css_code.css";
                   $Handle = fopen($File, 'w');
                   fwrite($Handle, $code);
                   $this->Storedesign_model->update_template_modified($code,$template_actived_name->name, "front_style",$id_ebay_design,$content_data["user_id"]);
                   break;
               case "listing_custom_css_code":
                   $File = $client_path_css."listing_custom_css_code.css";
                   $Handle = fopen($File, 'w');
                   fwrite($Handle, $code);
                   $this->Storedesign_model->update_template_modified($code,$template_actived_name->name, "listing_style",$id_ebay_design,$content_data["user_id"]);
                   break;
               case "front_custom_js_code":
                   $File = $client_path_js."front_custom_js_code.js";
                   $Handle = fopen($File, 'w');
                   fwrite($Handle, $code);
                   $this->Storedesign_model->update_template_modified($code,$template_actived_name->name, "front_script",$id_ebay_design,$content_data["user_id"]);
                   break;
               case "listing_custom_js_code":
                   $File = $client_path_js."listing_custom_js_code.js";
                   $Handle = fopen($File, 'w');
                   fwrite($Handle, $code);
                   $this->Storedesign_model->update_template_modified($code,$template_actived_name->name, "listing_script",$id_ebay_design,$content_data["user_id"]);
                   break;
               case "header_display":
                   $this->write_log_in_js_file($content_data["user_id"], "header_display.js",$code,"header_display");
                   $this->HTMLtojs_model->update_home_part_tagged("custom-header",$id_ebay_design,$id_home_design,$content_data["user_id"] ,$code);
                   $this->Storedesign_model->update_template_modified($code,$template_actived_name->name, "custom_header",$id_ebay_design,$content_data["user_id"]);
                   break;
               case "footer_display":
                   $this->write_log_in_js_file($content_data["user_id"], "footer_display.js",$code,"footer_display");
                   $this->HTMLtojs_model->update_home_part_tagged("custom-footer",$id_ebay_design,$id_home_design,$content_data["user_id"] ,$code);
                   $this->Storedesign_model->update_template_modified($code,$template_actived_name->name, "custom_footer",$id_ebay_design,$content_data["user_id"]);
                   break;
            }
            /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
        }
     public function install_template()
     {
        $content_data["username"] = $this->session->userdata( 'username' );
        $content_data["id_user"]  = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );  
        $content_data["page_title"] = "Template management";       
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );   
        // Variable passed into the view
        $content_data["passed_to_view"] = $this->breadcrumbs->get();         
        $this->template->load('developers_zone/install_template', $content_data); 
     }
     public function init_install_template()
     {
       $content_data["id_user"]  = $this->session->userdata( 'user_id' ); 
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $id_home_design = $this->session->userdata( 'id_home_design' );  
       $json = array();
       $file_name = $this->input->post('file_name',TRUE);  
       $this->extract_template_zip_file($file_name,"installed");
       $folder_name = pathinfo($file_name, PATHINFO_FILENAME);
       $base_path_installed_dir = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["id_user"]."/installed/".$folder_name."/";
       $base_client_hosting_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
       $client_path = $base_client_hosting_path.$content_data["id_user"]."/assets/";
       $client_path_js = $client_path."js/";
       $client_path_css = $client_path."css/";
       $base_path_installed_images_dir = $base_path_installed_dir."images/";
       $client_path_images_template = $client_path."images/templates/".$folder_name;
       /*
        * get common code and set on database and write on js dynamic files
        */
       $header_display = file_get_contents($base_path_installed_dir."common/header_display.html");
       $info['custom_header']= $header_display;
       $footer_display = file_get_contents($base_path_installed_dir."common/footer_display.html");   
       $info['custom_footer']= $footer_display;
       /*
        * get css code and write on dynamic css files
        */
       $css_storefront = file_get_contents($base_path_installed_dir."css/storefront.css");
       $info['front_style']= $css_storefront;
       $css_listing    = file_get_contents($base_path_installed_dir."css/listing.css");
       $info['listing_style']= $css_listing;
       /*
        * get js code and write on dynamic js files
        */
       $js_storefront = file_get_contents($base_path_installed_dir."js/storefront.js");
       $info['front_script']= $js_storefront;
       $js_listing    = file_get_contents($base_path_installed_dir."js/listing.js");  
       $info['listing_script']= $js_listing;
       /*send images to hosting files assets/images/templates*/
       
       $this->makeDir($client_path."images/templates");
       $this->makeDir($client_path_images_template);
       $this->transport_template_images($base_path_installed_images_dir, $client_path_images_template."/");
       
       /*add row on templates_installed*/
       $this->Storedesign_model->add_template_installed($folder_name, $id_ebay_design,$content_data["id_user"]);
       $data["download_template_file"] = "false";
       if(file_exists($base_path_installed_dir.'/information.xml')):
           $sx = simplexml_load_file($base_path_installed_dir.'/information.xml');
           $this->Storedesign_model->update_template_installed_download_files($folder_name,  "$sx->templatefile", $content_data["id_user"], $id_ebay_design);           
           $data["download_template_file"] = "$sx->templatefile";
       endif;
       $this->Storedesign_model->add_template_installed_modified($folder_name,$info,$id_ebay_design, $content_data["id_user"]) ;  
       /*send JSON*/
       echo json_encode($data);
     }
     
     /*This function install theme options such logo, background, header background...*/
     public function install_theme_options($folder_name)
     {
         $id_user  = $this->session->userdata( 'user_id' );
         $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
         $id_home_design = $this->session->userdata( 'id_home_design' );  
         $client_files_hosting_url = $this->Configuration_model->get_configuration_value('clients-file-hosting');
         $base_path_installed_dir = $this->Configuration_model->get_configuration_value('template-installation-user-files').$id_user."/installed/".$folder_name."/";
         $base_path_design = $this->Configuration_model->get_configuration_value('base-path')."server/php/files/store_design/";
         $this->makeDir($base_path_design."general_images/".$id_user."/");
         $theme_options_images = $this->listDirectory($base_path_installed_dir."theme-options/");
         foreach($theme_options_images as $image):
           $image_file_info = pathinfo($image);
         switch ($image_file_info["filename"]):
             case "logo":
                $this->makeDir($base_path_design."logos/".$id_user."/");                 
                copy($base_path_installed_dir."theme-options/".$image_file_info["filename"].".".$image_file_info["extension"], $base_path_design."logos/".$id_user."/".$image_file_info["filename"].".".$image_file_info["extension"]);             
                $logo_data = $this->Header_model->get_logo($id_user, $id_ebay_design,$id_home_design);
                $logo_url = $client_files_hosting_url."files/store_design/logos/$id_user/".$image_file_info["filename"].".".$image_file_info["extension"];
                if($logo_data):
                    $this->Header_model->update_logo($logo_data[0]->id_logo,$logo_url);
                    else:
                    $this->Header_model->insert_logo_design($id_user,$id_ebay_design,$id_home_design,$logo_url);
                endif;                
                    $out_put =  '<a href="" class="store-home-url"><img class="logo store-home-url" src="'.$logo_url.'" /></a>'."\n";
                    $this->write_log_in_js_file($id_user,"logo.js",$out_put,"logo_display");
             break;
             case "header":
                 copy($base_path_installed_dir."theme-options/".$image_file_info["filename"].".".$image_file_info["extension"], $base_path_design."general_images/".$id_user."/".$image_file_info["filename"].".".$image_file_info["extension"]);  
                 $header_background_url = $client_files_hosting_url."files/store_design/general_images/$id_user/".$image_file_info["filename"].".".$image_file_info["extension"];
                 $this->Ebaydesigns_model->save_general_setting($id_user, $id_home_design,$id_ebay_design,"header-background",$header_background_url);
                 $out_put = '<img src="'.$header_background_url.'"  class="img-responsive header-background-image">';
                 $this->write_log_in_js_file($id_user, "header_background.js",$out_put,"header_background");
             break;
             case "background":                 
                 copy($base_path_installed_dir."theme-options/".$image_file_info["filename"].".".$image_file_info["extension"], $base_path_design."general_images/".$id_user."/".$image_file_info["filename"].".".$image_file_info["extension"]);  
                 $background_url = $client_files_hosting_url."files/store_design/general_images/$id_user/".$image_file_info["filename"].".".$image_file_info["extension"];
                 $this->Ebaydesigns_model->save_general_setting($id_user, $id_home_design,$id_ebay_design,"background",$background_url);
                 $out_put = ".background-style{background-image: url('".$background_url."')!important;}";
                 $this->write_in_js_file_without_document_write($id_user, "background-style.css",$out_put);
             break;
         endswitch;  
         endforeach;                      
     }
     /*Transport css images to client hosting path*/
     public function transport_template_images($path_source, $path_target)
     {
       $this->files = array();
       $this->files = $this->get_folders_files_from_extracted_path($path_source); 
       foreach ($this->files as $file):
       copy($path_source.$file, $path_target.$file);
       endforeach;       
     }
     /*
          * 1. Get Zip file
          * 2. Extract Zip File DONE
          * 3. Check if exist necessary files to set on system
          * 4. Success: return ok-flag = true
          * 5. Failure: return ok-flag = false
          */
     public function install_template_check_files()
     {
         $content_data["id_user"]  = $this->session->userdata( 'user_id' ); 
         $json = array();
         $json["show_errors"] = false;
         $file_name = $this->input->post('file_name',TRUE);
         $folder_name = pathinfo($file_name, PATHINFO_FILENAME);
           /*file paths*/
         $base_path_unzipped_files = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["id_user"]."/extracted/".$folder_name."/";                           
         $base_path_zipped_files = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["id_user"]."/zip/".$file_name;
         $base_path_installed_files = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["id_user"]."/installed/".$file_name."/";
         if($this->was_installed($base_path_installed_files)):
             die("*************");
         endif;
         $this->extract_template_zip_file($file_name,"extracted");        
         $errors_folders = $this->check_folders_required($base_path_unzipped_files);
         //
         if(is_array($errors_folders)):
             $json["errors_folders"] = $errors_folders;
             $json["show_errors"] = true;
         else:
          $errors_files = $this->check_files_required($base_path_unzipped_files);
         if(is_array($errors_files)):
             $json["errors_files"] = $errors_files ;
             $json["show_errors"] = true;
         endif; 
         endif;
            
         if($json["show_errors"]):
             $this->deleteDir($base_path_unzipped_files);
             $this->deleteDir($base_path_zipped_files);
         endif;
         echo json_encode($json);
     }
     public function exist_zip_file()
     {
       $content_data["id_user"]  = $this->session->userdata( 'user_id' ); 
       $file_name = $this->input->post('file_name',TRUE);
       $base_path_zipped_file = $this->Configuration_model->get_configuration_value('template-installation-user-files').$content_data["id_user"]."/zip/".$file_name;
       $json = array();
       if(is_file($base_path_zipped_file))
         $json["exist"] = "true";
       else
        $json["exist"] = "false";
       echo json_encode($json);
     }
     public function check_folders_required($base_path_unzipped_files)
     {
        $folders_required = $this->get_template_folders_required();
        $folders_fetched = $this->get_folders_from_extracted_path($base_path_unzipped_files);
        $errors = array();
        if(is_array($folders_fetched)):
            
        foreach($folders_required  as $folder):
           if(!in_array($folder,$folders_fetched)):
               array_push($errors,"- <b>$folder</b> folder is required.");
           endif;
        endforeach;
        if(sizeof($errors)>0):
            return $errors;
        else:
            return true;
        endif;
        else:
             array_push($errors,"Folders don't match, please check more information at <a href='#'>Basic Folders and files structure to install template on Design manager</a>.");
        return $errors;
        endif;
        return true;
     }
     public function was_installed($base_path_installed_files)
     {
         if(is_dir($base_path_installed_files))
             return true;
          else 
            return false;
     }
     
     
      public function check_files_required($base_path_unzipped_files)
     {
       $folders_files_required = $this->get_template_files_required(); 
       $folders_files_fetched = $this->get_folders_files_from_extracted_path($base_path_unzipped_files);
       $errors = array();
       if(is_array($folders_files_fetched)):
            
        foreach($folders_files_required  as $file):
           $file_parts = pathinfo($file);
       if(!isset($file_parts["extension"])):
           /*check if it is an image*/
           /*temporal to fix header preg match*/
           $folders_files_fetched_temp = $folders_files_fetched;
           unset($folders_files_fetched_temp[0]);
           $image_file_name = $this->get_value_where_like($file, $folders_files_fetched_temp);
           if($image_file_name):
             if(!$this->validate_images($image_file_name)):
               array_push($errors,"- <b>$file</b> isen't an image.");
           endif;
           else:
               array_push($errors,"- <b>$file</b> image is required.");
           endif;           
       else:
           if(!in_array($file,$folders_files_fetched)):
               array_push($errors,"- <b>$file</b> file is required.");
           endif;           
       endif;
        endforeach;
        if(sizeof($errors)>0):
            return $errors;
        else:
            return true;
        endif;
        else:
            return array_push($errors,"Files don't match, please check more information at <a href='#'>Basic Folders and files structure to install template on Design manager</a>.");
        endif;
        return true;
     }
     public function fetch_dir_contents($contents)
     {
         $folders = array();
         $folders_files = array();
         $return = array();
         foreach($contents as $item):
           $pieces = explode(DIRECTORY_SEPARATOR,$item);
           $file_name = $pieces[sizeof($pieces)-1];
           $directory_name = $pieces[sizeof($pieces)-2];
           $folders [] = $directory_name;
           $folders_files[] = $file_name;
         endforeach;
         $return["folders_fetched"] = $folders;
         $return["folders_files_fetched"] = $folders_files;
         return $return;
     }
     public function get_template_folders_required()
     {
         $folders_required = array();
         array_push($folders_required,"common");
         array_push($folders_required,"css");
         array_push($folders_required,"js");
         array_push($folders_required,"images");
         return $folders_required;
     }
     public function get_template_files_required()
     {
         $folders_required = array();
         /*common folder*/
         $folders_required[] = "footer_display.html";
         $folders_required[] = "header_display.html";
         //css folder
         $folders_required[] = "listing.css";
         $folders_required[] = "storefront.css";
         //js folder
         $folders_required[] = "listing.js";
         $folders_required[] = "storefront.js";
         //images
         $folders_required[] = "header";
         $folders_required[] = "logo";
         $folders_required[] = "background";
         return $folders_required;         
     }
  
  public   function get_folders_from_extracted_path($Mydir)
    {  
    $folders_fetched = array(); 
    if(is_dir($Mydir)):
      $dir = new DirectoryIterator($Mydir);
    foreach ($dir as $fileinfo) 
        {
        if ($fileinfo->isDir() && !$fileinfo->isDot()) {
            $folders_fetched[] = $fileinfo->getFilename();
        }
      }
      return $folders_fetched;  
      else:
          return false;
    endif;    
    }
  public function get_folders_files_from_extracted_path($path)
    {        
    $h=opendir($path);
    $dirarray = explode('/',$path);
    $dirarray = array_reverse($dirarray);
    $key=$dirarray[1];
    while (false !== ($file = readdir($h)))
    {
    #get files from top directory   
    if(is_file($path.$file))
    {
      array_push($this->files,$file);
    }
    #get files from child folders
    if(is_dir($path.$file) && $file != '.' && $file !='..')
    {
    $npath = $path.$file.'/';
    $this->get_folders_files_from_extracted_path($npath);
    }
    }
    return $this->files;
    }
     public function extract_template_zip_file($file_name,$folder)
     {
         $content_data["id_user"]  = $this->session->userdata( 'user_id' ); 
         //$file_name = "template_installl.zip";
         $template_files_base_path = $this->Configuration_model->get_configuration_value('template-installation-user-files');
         $zip = new ZipArchive;
         if ($zip->open($template_files_base_path."/".$content_data["id_user"]."/zip/".$file_name) === TRUE) 
             {
                $zip->extractTo($template_files_base_path."/".$content_data["id_user"]."/$folder/");
                $zip->close();
                return true;
            } else {
                return false;
            }
     }
     public function zip_dir($source_dir, $zip_file)
     {      
      $file_list = $this->listDirectory($source_dir); 
      $zip = new ZipArchive();
      if ($zip->open($zip_file, ZIPARCHIVE::CREATE) === true) {
      foreach ($file_list as $file) 
      {
        if ($file !== $zip_file) 
        {        
          $zip->addFile($file, substr($file, strlen($source_dir)));
        }
      }
  }
  
     }
     public  function listDirectory($dir)
  {
    $result = array();
    $root = scandir($dir);
    foreach($root as $value) {
      if($value === '.' || $value === '..') {
        continue;
      }
      if(is_file("$dir$value")) {
        $result[] = "$dir$value";
        continue;
      }
      if(is_dir("$dir$value")) {
        $result[] = "$dir$value/";
      }
      foreach(self::listDirectory("$dir$value/") as $value)
      {
        $result[] = $value;
      }
    }
    return $result;
  }
     function deleteDir($dir) 
     {
        if(is_dir($dir))
            {
               $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
               $files = new RecursiveIteratorIterator($it,
               RecursiveIteratorIterator::CHILD_FIRST);
               foreach($files as $file) 
                   {
                        if ($file->getFilename() === '.' || $file->getFilename() === '..') 
                            {
                              continue;
                            }
                        if ($file->isDir())
                            {
                              rmdir($file->getRealPath());
                            }
                        else
                            {
                             unlink($file->getRealPath());
                             }
                  }
            rmdir($dir);
            }
            if(is_file($dir))
            {
            @unlink($dir);
            }
      }
      function write_in_js_file_without_document_write($id_user, $file_name,$out_put)
     {
       $js_file = fopen( str_replace('admin','clients',$_SERVER['DOCUMENT_ROOT']."/".$id_user."/assets/css/dynamic_styles/".$file_name ),"w");
       fwrite($js_file,$out_put);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
       function write_log_in_js_file($id_user, $file_name,$out_put,$var_name=null)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
       $out_put = trim($out_put);
       $out_put = str_replace(array("\r\n", "\r"), "\n", $out_put);
       $out_put = str_replace("'", "\'", $out_put);
       $lines = explode("\n", $out_put);
       $new_lines = array();
       $result_html = "";
       $lngth = sizeof($lines);
       foreach ($lines as $i => $line) 
       {
            if(!empty($line)):
                if($var_name!=null):
                if($lngth == ($i+1)):
               $result_html  .= "'".trim($line)."';"."\n"; 
               else:
               $result_html  .= "'".trim($line)."'+"."\n"; 
           endif; 
                else:
                 $result_html  .= "document.write('".trim($line)."');"."\n";
               endif;                
            endif;                    
       }
       if($var_name!=null):
           $result_html = "var $var_name = ".$result_html;
       endif;
       fwrite($js_file,$result_html);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
     function write_code_on_any_file($path_file,$code)
     {
       $file = fopen($path_file,"w");
       fwrite($file,$code);
       fclose($file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
     function makeDir($path)
    {
       return is_dir($path) || mkdir($path);
    }
   public function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                $this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 
public function validate_images($src_file_name)
     {
         $supported_image = array(
                                    'gif',
                                    'jpg',
                                    'jpeg',
                                    'bmp',
                                    'png'
                                 );
         $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
         if (in_array($ext, $supported_image)) 
           return true;
         else 
           return false;
     }
     public function get_value_where_like($like_string, $array)
     {
         $input = preg_quote("$like_string", '~'); // don't forget to quote input string!
         $result = preg_grep('~' . $input . '~', $array);
         if(is_array($result)):
           foreach($result as $key=>$value)
             return $value; 
         else:
            return false; 
         endif;
         
     }
} 