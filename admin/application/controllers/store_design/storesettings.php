<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start(); # Aqui para que inicie la sesión
class Storesettings extends CI_Controller {

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
        $this->load->model('Listingdesign_model');
        $this->load->model('Configuration_model');
        $this->load->model('Popularcategories_model');
        $this->load->model('Featured_model');  
        $this->load->model('Storedesign_model');
        $this->load->model('membership/login_model');
        $this->load->model('HTMLtojs_model');   
     }
  /*listing listing settings: start interface to add listing data*/
 public function design_settigns ()
    {
    $data["username"] = $this->session->userdata( 'username' );    
    $data["user_id"] = $this->session->userdata( 'user_id' );
    $data["page_title"] = "Theme Options";
    $data["widgettitle"] = "Theme Options";        
     // This can be autoloaded //
    $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
     // as an array //
    $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
     // Variable passed into the view
    $data["passed_to_view"] = $this->breadcrumbs->get();    
    /*Get Vars to identify listing design data*/
    $data['id_home_design'] = $this->session->userdata('id_home_design');
    $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
    //$this->session->set_userdata('id_ebay_design', $data['id_ebay_design']);
    //$this->session->set_userdata('id_home_design', $data['id_home_design'] ); 
    /*Get design settings*/
    $store_settings = $this->Storedesign_model->StoreSettingDetails($data['id_ebay_design'], $data["user_id"]);      
    $this->session->set_userdata('currency', $store_settings['currency']);
    $this->template->load('store_design/settings/design_options', $data);   
    }
    function form_store_background()
    {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data['id_home_design'] = $this->session->userdata('id_home_design');
         $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
         $general_setting   = $this->Ebaydesigns_model->get_general_setting($data["user_id"], $data['id_home_design'],$data['id_ebay_design'],"background");
         if($general_setting):
         $data["url"]  = $general_setting->url;
         $data["id_setting"]  = $general_setting->id_setting;
         else: 
         $data["url"]  = false;
         $data["id_setting"]  = false;
         endif; 
         $data["html"]   = $this->template->ajax_load_view('store_design/settings/forms/background', $data,true);  
         $json = array("html"=>$data["html"]);
         echo json_encode($json);
    }
    function save_general_setting()
    {
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data['id_home_design'] = $this->session->userdata('id_home_design');
       $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
       $data["type"] = $this->input->post('type');   
       $data["url"] = $this->input->post('url');   
       $this->Ebaydesigns_model->save_general_setting($data["user_id"], $data['id_home_design'],$data['id_ebay_design'],$data["type"],$data["url"]);
       $out_put = ".".$data["type"] ."-style{background-image: url('".$data["url"]."')!important;}";
       $file_name = $data["type"]."-style.css";
       if( $data["type"]=="header-background"):
           $out_put = '<img src="'.$data["url"].'"  class="img-responsive header-background-image">';
           $file_name = "header_background.js";
           $this->write_log_in_js_file($data["user_id"] , $file_name,$out_put,"header_background");
           else:
           $this->write_in_js_file_without_document_write($data["user_id"] , $file_name,$out_put);
       endif; 
      
    }
    function form_store_header_background()
    {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data['id_home_design'] = $this->session->userdata('id_home_design');
         $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
         $general_setting   = $this->Ebaydesigns_model->get_general_setting($data["user_id"], $data['id_home_design'],$data['id_ebay_design'],"header-background");
         if($general_setting):
         $data["url"]  = $general_setting->url;
         $data["id_setting"]  = $general_setting->id_setting;
         else:
         $data["url"]  = false;
         $data["id_setting"]  = false;
         endif;
         $data["html"]   = $this->template->ajax_load_view('store_design/settings/forms/header_background', $data,true);  
         $json = array("html"=>$data["html"]);
         echo json_encode($json);
    }
    function form_front_design_options()
     {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data['id_home_design'] = $this->session->userdata('id_home_design');
         $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');   
         $theme_option = $this->Ebaydesigns_model->get_theme_option( $data["user_id"],$data['id_home_design'],$data['id_ebay_design'],"front-design-option-is-active-listings-on-front" );
         $theme_option = $this->Ebaydesigns_model->get_theme_option( $data["user_id"],$data['id_home_design'],$data['id_ebay_design'],"front-design-option-display-widgets-categories" );
         if(!$theme_option):
            $data['is_active_listings_on_home'] = "ON"; //on by default
            else :
            $data['is_active_listings_on_home'] = $theme_option->value; 
         endif;
         $theme_option = $this->Ebaydesigns_model->get_theme_option( $data["user_id"],$data['id_home_design'],$data['id_ebay_design'],"front-design-option-number-listings-on-front" );
         if(!$theme_option):
             $data['number_listings_on_home'] = "12"; 
          else:
             $data['number_listings_on_home'] = $theme_option->value;
         endif;
         $theme_option = $this->Ebaydesigns_model->get_theme_option( $data["user_id"],$data['id_home_design'],$data['id_ebay_design'],"front-design-option-display-widgets-categories" );
          if(!$theme_option):
            $data['display_widgets_categories'] = "OFF"; //off by default
            else :
            $data['display_widgets_categories'] = $theme_option->value; 
         endif;
         $data["html"]   = $this->template->ajax_load_view('store_design/settings/forms/front_design_options', $data,true);  
         $json = array("html"=>$data["html"]);
         echo json_encode($json);
     }
     function form_listing_design_options()
     {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data['id_home_design'] = $this->session->userdata('id_home_design');
         $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');   
         $theme_option = $this->Ebaydesigns_model->get_theme_option( $data["user_id"],$data['id_home_design'],$data['id_ebay_design'],"listing-design-option-is-active-image-viewer" );
         if(!$theme_option):
            $data['is_active_listing_image_viewer'] = "ON"; //on by default
            else :
            $data['is_active_listing_image_viewer'] = $theme_option->value; 
         endif;        
         $data["html"]   = $this->template->ajax_load_view('store_design/settings/forms/listing_design_options', $data,true);  
         $json = array("html"=>$data["html"]);
         echo json_encode($json);
     }
     function save_theme_option()
     {
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data['id_home_design'] = $this->session->userdata('id_home_design');
        $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');  
        $data["key"] = $this->input->post('key');   
        $data["value"] = $this->input->post('value');   
        $this->Ebaydesigns_model->save_theme_option($data["user_id"],$data['id_home_design'],$data['id_ebay_design'],$data["key"],  $data["value"]);
         /*save in theme_options.js*/
        $theme_option =  $this->Ebaydesigns_model->get_theme_options($data["user_id"],$data['id_home_design'],$data['id_ebay_design']);
        $out_put = "";
        if($theme_option):
             foreach($theme_option as $option):
              $out_put .=" var ".str_replace("-","_",$option->key)." = '{$option->value}';"."\n";
             endforeach;
        endif;    
        $this->write_in_js_file_without_document_write_1($data["user_id"] , "front_theme_options.js",$out_put);
     }  
     function form_google_fonts()
    {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');  
         $data['google_fonts_collection'] = $this->Ebaydesigns_model->get_google_fonts();                    
         $active_font = $this->Ebaydesigns_model->get_active_font($data["user_id"], $data['id_ebay_design']);
         if(!$active_font):
             $data["actived_font_id"] = false ;
             $data["actived_font_name"] = false ;
             else:
             $data["actived_font_id"] = $active_font->id_google_font ;
             $data["actived_font_name"] = $active_font->name ; 
         endif;
         $data["html"]   = $this->template->ajax_load_view('store_design/settings/forms/form_google_fonts', $data,true);
         $json = array("html"=>$data["html"],"actived_font_id"=>$data["actived_font_id"],"actived_font_name"=>$data["actived_font_name"]);
         echo json_encode($json);
    }
    function active_font()
    {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data['id_ebay_design'] = $this->session->userdata('id_ebay_design'); 
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $font_id = $this->input->post('font_id'); 
         $this->Ebaydesigns_model->add_actived_google_font($font_id,$data["user_id"],$data['id_ebay_design']);
         $google_font = $this->Ebaydesigns_model->get_google_font($font_id);
         $this->write_dynamic_css($data["user_id"],"font-style.css",$google_font->code);         
    }
    function write_dynamic_css($id_user,$file_name,$out_put)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/hosting/".$id_user."/assets/css/dynamic_styles/".$file_name,"w");
       fwrite($js_file,$out_put);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
     function write_in_js_file_without_document_write($id_user, $file_name,$out_put)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/hosting/".$id_user."/assets/css/dynamic_styles/".$file_name,"w");
       fwrite($js_file,$out_put);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
      function write_in_js_file_without_document_write_1($id_user, $file_name,$out_put)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/designmanager/server/ajax_design/".$id_user."/".$file_name,"w");
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
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/designmanager/server/ajax_design/".$id_user."/".$file_name,"w");
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
     
     
} 
