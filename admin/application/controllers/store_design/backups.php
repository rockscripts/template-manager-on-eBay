<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Backups extends CI_Controller {

     public function __construct()
     {         
        parent::__construct();    
        validate_user();
        non_ssl_redirect();
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
        $this->load->database();
     }
     
     /*Load all listings designs purchased*/
    public function index()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $content_data["page_title"] = "Backups";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data['store_front_backups'] = $this->Ebaydesigns_model->get_store_front_backup($content_data["user_id"] ,$id_ebay_design); 
       $content_data['listing_groups_backups'] = $this->Ebaydesigns_model->get_listing_groups_backup($content_data["user_id"] ,$id_ebay_design);      
       $content_data['developer_zone_backups'] = $this->Storedesign_model->get_all_backup_developer_zone($content_data["user_id"] ,$id_ebay_design);
       /*build datatable store front backups*/
       $content_data["store_front_backups_data_table"]   = $this->template->ajax_load_view('backups/front_backups', $content_data,true);          
       $content_data["listing_groups_backups_data_table"]   = $this->template->ajax_load_view('backups/listing_backups_group', $content_data,true);          
       $content_data["developer_zone_backups_data_table"]   = $this->template->ajax_load_view('backups/developer_zone_backups', $content_data,true);  
       // Variable passed into the view
       $content_data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('backups/index', $content_data); 
     }
     public function get_listings_backup()
        {
            $json = array();
            $group_id = $this->input->post("group_id");
            $content_data['group_id'] =$group_id;
            $content_data['listing_backups'] = $this->Ebaydesigns_model->get_listing_backup($group_id);
            $json["html"]   = $this->template->ajax_load_view('backups/listing_backups', $content_data,true);          
            echo json_encode($json);
        }
        public function backup_store_front($token, $ebay_user_id, $reazon="First Time")
     {
          $content_data["user_id"]  = $this->session->userdata( 'user_id' );
          $content_data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
          $this->load->library('../controllers/store_design/ebayapi');
          $eBayAPI = new Ebayapi(); 
          $eBayAPI->Set_API_Data();
          $this->user_id = $ebay_user_id;
          $this->auth_token = $token; 
          
          $array_store_information =  $eBayAPI->get_store_information( $this->auth_token, $this->user_id);
          
          $datenow = $this->MySQL_NOW();
          $store_backup =  array( "store_name" =>"{$array_store_information['store_name']}",
                                                 "store_url" =>"{$array_store_information['store_url']}",
                                                 "custom_header" =>"{$array_store_information['custom_header']}",
                                                 "custom_header_layout" =>"{$array_store_information['custom_header_layout']}",
                                                 "header_style" =>"{$array_store_information['header_style']}",
                                                 "home_page" =>"{$array_store_information['home_page']}",
                                                 "item_list_layout" =>"{$array_store_information['item_list_layout']}",
                                                 "item_list_sort_order" =>"{$array_store_information['item_list_sort_order']}",
                                                 "theme_id" =>"{$array_store_information['theme_id']}",
                                                 "color_scheme_id" =>"{$array_store_information['color_scheme_id']}",
                                                 "color_scheme_primary" =>"{$array_store_information['color_scheme_primary']}",
                                                 "color_scheme_secondary" =>"{$array_store_information['color_scheme_secondary']}",
                                                 "color_scheme_accent" =>"{$array_store_information['color_scheme_accent']}",
                                                 "font_name_color" =>"{$array_store_information['font_name_color']}",
                                                 "font_title_color" =>"{$array_store_information['font_title_color']}",
                                                 "font_desc_color" =>"{$array_store_information['font_desc_color']}",
                                                 "id_user" =>"{$content_data["user_id"]}",
                                                 "id_ebay_design" =>$content_data["id_ebay_design"],// $id_ebay_design
                                                 "date_added" =>"$datenow",
                                                "reazon"=>$reazon
                                                 );
           $this->Ebayapi_model->backup_store_front($store_backup);
     }
public function  execute_store_front_backup()
    {
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
       $backup_id = $this->input->post("backup_id");
       $store_settings = $this->Storedesign_model->get_store_setting($content_data["id_ebay_design"] ,$content_data["user_id"] );
       $token = $store_settings->token;       
       /*backup before*/
       $this->backup_store_front($token, $store_settings->ebay_user_id,"Backup Executed");
       /*get & prepare store backup data*/
       $store_front_backup =$this->Ebaydesigns_model->get_store_front_single_backup($backup_id);
       $custom_header = $store_front_backup->custom_header;
       $header_style = $store_front_backup->header_style;
       $custom_header_layout = $store_front_backup->custom_header_layout;
       $this->load->library('../controllers/store_design/ebayapi');
       $eBayAPI = new Ebayapi(); 
       $eBayAPI->Set_API_Data();
       //echo $custom_header;die("***");
       /*run installation*/
       $body = <<<BODY
<?xml version="1.0" encoding="utf-8"?>
<SetStoreRequest xmlns="urn:ebay:apis:eBLBaseComponents">
  <RequesterCredentials>
    <eBayAuthToken>$token</eBayAuthToken>
  </RequesterCredentials>
    <Store>
    <CustomHeader><![CDATA[ $custom_header]]></CustomHeader>
    <CustomHeaderLayout>$custom_header_layout</CustomHeaderLayout>
    <CustomListingHeader>
      <AddToFavoriteStores>true</AddToFavoriteStores>
      <DisplayType>None</DisplayType>
      <Logo>false</Logo>
      <SearchBox>true</SearchBox>
      <SignUpForStoreNewsletter>true</SignUpForStoreNewsletter>
    </CustomListingHeader>    
    <HeaderStyle>$header_style</HeaderStyle>
    <HomePage>{$store_front_backup->home_page}</HomePage>
    <ItemListLayout>GalleryView</ItemListLayout>
    <ItemListSortOrder>EndingFirst</ItemListSortOrder>
    <Theme>     
      <ThemeID>{$store_front_backup->theme_id}</ThemeID>
      <ColorScheme>
        <ColorSchemeID>{$store_front_backup->color_scheme_id}</ColorSchemeID>       
      </ColorScheme>
    </Theme>   
  </Store>
</SetStoreRequest>
BODY;
        
       $eBayAPI->set_store($token, $content_data["user_id"] , $body);              
       
    }
    public function delete_store_front_backup()
    {
       $backup_id = $this->input->post("backup_id");
       $this->Ebaydesigns_model->backup_delete($backup_id);
    }
    public function delete_listing_backup_group()
    {
       $backup_group_id = $this->input->post("backup_group_id");
       $this->Ebaydesigns_model->backup_group_delete($backup_group_id);
    }
    public function backup_delete_listing()
    {
       $backup_id = $this->input->post("backup_id");
       $this->Ebaydesigns_model->backup_listing_delete($backup_id);
    }
    /*functions for developer zone backup*/
    public function view_backup_developer_zone()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $id_home_design = $this->session->userdata( 'id_home_design' );  
       $id_backup_developer_zone = $this->input->post("id_backup_developer_zone");
       $content_data["page_title"] = "Developer Zone";       
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );    
        /*get backup*/
        $backup_developer_zone = $this->Storedesign_model->get_backup_developer_zone($id_backup_developer_zone);
       /*load  client custom code */
       $header_display = $backup_developer_zone->header_display_field;
       $footer_display = $backup_developer_zone->footer_display_field;
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
       
       
       $content_data['front_custom_css_code'] = $backup_developer_zone->front_style_field;
       $content_data['listing_custom_css_code'] = $backup_developer_zone->listing_style_field;
       $content_data['listing_custom_js_code'] = $backup_developer_zone->listing_script_field;
       $content_data['front_custom_js_code'] = $backup_developer_zone->front_script_field;
       $content_data['backup_data'] = $backup_developer_zone->date_added;
       $content_data['id_backup_developer_zone'] = $backup_developer_zone->id_backup_developer_zone;
       // Variable passed into the view
       $content_data["passed_to_view"] = $this->breadcrumbs->get();         
     
       $json = array();        
        $json["developer_zone_backup_view"] =  $this->template->ajax_load_view('backups/developer_zone_backup_view', $content_data,true);  
        echo json_encode($json);
     }
     public function execute_backup_developer_zone()
    {
        $id_user = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );        
        $id_home_design = $this->session->userdata( 'id_home_design' );  
        $id_backup_developer_zone = $this->input->post("id_backup_developer_zone");
        /*get backup*/
        $backup_developer_zone = $this->Storedesign_model->get_backup_developer_zone($id_backup_developer_zone);
        /*BG files paths*/
        $base_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
        $client_path = $base_path.$id_user."/assets/";
        $client_path_js = $client_path."js/";
        $client_path_css = $client_path."css/";
        /*EOF files paths*/
        /**
         * 1. backup current data on on developer zone
         * 2. set data to developer zone from backup $backup_developer_zone
         */
        if($backup_developer_zone):
        /*1*/$this->backup_developer_zone();
        /*2*/
        $File = $client_path_css."front_custom_css_code.css";
        $Handle = fopen($File, 'w');
        fwrite($Handle, $backup_developer_zone->front_style_field);
        
         $File = $client_path_css."listing_custom_css_code.css";
         $Handle = fopen($File, 'w');
         fwrite($Handle, $backup_developer_zone->listing_style_field);
         
         $File = $client_path_js."front_custom_js_code.js";
         $Handle = fopen($File, 'w');
         fwrite($Handle, $backup_developer_zone->front_script_field);
        
         $File = $client_path_js."listing_custom_js_code.js";
         $Handle = fopen($File, 'w');
         fwrite($Handle, $backup_developer_zone->listing_script_field);
          
         $this->write_log_in_js_file($id_user, "header_display.js", $backup_developer_zone->header_display_field);
         $this->HTMLtojs_model->update_home_part_tagged("custom-header",$id_ebay_design,$id_home_design,$id_user,$backup_developer_zone->header_display_field);
                   
         $this->write_log_in_js_file($id_user, "footer_display.js",$backup_developer_zone->footer_display_field);
         $this->HTMLtojs_model->update_home_part_tagged("custom-footer",$id_ebay_design,$id_home_design,$id_user ,$backup_developer_zone->footer_display_field);
        endif;   
        $json = array();
        $content_data["developer_zone_backups"] =  $this->Storedesign_model->get_all_backup_developer_zone($id_user,$id_ebay_design);
        $json["developer_zone_backups_data_table"] =  $this->template->ajax_load_view('backups/developer_zone_backups', $content_data,true);  
        echo json_encode($json);
    }
    public function delete_backup_developer_zone()
    {
        $id_user = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_backup_developer_zone = $this->input->post("id_backup_developer_zone");
        $this->Storedesign_model->delete_backup_developer_zone($id_backup_developer_zone);
        $json = array();
        $content_data["developer_zone_backups"] =  $this->Storedesign_model->get_all_backup_developer_zone($id_user,$id_ebay_design);
        $json["developer_zone_backups_data_table"] =  $this->template->ajax_load_view('backups/developer_zone_backups', $content_data,true);  
        echo json_encode($json);
    }
    public function get_all_backup_developer_zone()
    {
        $id_user = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $all_backup_developer_zone = $this->Storedesign_model->get_all_backup_developer_zone($id_user, $id_ebay_design);
        return $all_backup_developer_zone;
    }
    public function get_backup_developer_zone()
    {
        $id_backup_developer_zone= $this->input->post("id_backup_developer_zone");
        $backup_developer_zone = $this->Storedesign_model->get_backup_developer_zone($id_backup_developer_zone);
        return $backup_developer_zone;
    }
   public function backup_developer_zone()
   {
        $id_user = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' ); 
        $base_path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
        $active_template = $this->Storedesign_model->get_templates_actived($id_user, $id_ebay_design);
        $client_path = $base_path.$id_user."/assets/";
        $client_path_js = $client_path."js/";
        $client_path_css = $client_path."css/";
        /*1) open front css code*/
        $File = $client_path_css."front_custom_css_code.css";
        $custom_front_css_code = $this->get_content_file($File);
        /*2) open listing css code*/
        $File = $client_path_css."listing_custom_css_code.css";
        $custom_listing_css_code = $this->get_content_file($File);
        /*3) open front js code*/
        $File = $client_path_js."front_custom_js_code.js";
        $custom_front_js_code = $this->get_content_file($File);
        /*4) open listing js code*/
        $File = $client_path_js."listing_custom_js_code.js";
        $custom_listing_js_code = $this->get_content_file($File);        
        /*5) get from db header-display  from home parts tagged ; key:custom-header*/
        //returns false if it does not exist for old users
        $custom_header_code = $this->HTMLtojs_model->get_code_tagged_part("front", "custom-header",$id_ebay_design,$id_home_design,$id_user);
        if(!$custom_header_code):
            $custom_header_code = "";
            else:
        //work for new users that have this field able , nothing on this condition it brings data from db :)            
        endif;
        /*6) get from db footer-display  from home parts tagged ; key:custom-footer*/
        $custom_footer_code = $this->HTMLtojs_model->get_code_tagged_part("front", "custom-footer",$id_ebay_design,$id_home_design,$id_user);
        if(!$custom_footer_code):
            $custom_footer_code = "";
            else:
        //work for new users that have this field able , nothing on this condition it brings data from db :)             
        endif;
        /*7) do backup with backup model*/
            if(@isset($active_template->name))
             $this->Storedesign_model->backup_developer_zone($custom_front_css_code, $custom_listing_css_code, $custom_front_js_code, $custom_listing_js_code, $custom_header_code, $custom_footer_code,$active_template->name,$id_ebay_design,$id_user);    
            else
             $this->Storedesign_model->backup_developer_zone($custom_front_css_code, $custom_listing_css_code, $custom_front_js_code, $custom_listing_js_code, $custom_header_code, $custom_footer_code,"default",$id_ebay_design,$id_user);     
   }
   public function get_content_file($File)
   {
       $Handle = fopen($File, 'r');
        $content = fread($Handle,filesize($File));
        fclose($Handle);
        return $content;
   }
       function MySQL_NOW(){ return date('Y-m-d H:i:s'); }
          function write_log_in_js_file($id_user, $file_name,$out_put)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/designmanager/server/ajax_design/".$id_user."/".$file_name,"w");
       $out_put = str_replace(array("\r\n", "\r"), "\n", $out_put);
       $out_put = str_replace("'", "\'", $out_put);
       $lines = explode("\n", $out_put);
       $new_lines = array();
       $result_html = "";
       foreach ($lines as $i => $line) 
       {
            if(!empty($line))
                    $result_html  .= "document.write('".trim($line)."');"."\n";
       }
       fwrite($js_file,$result_html);
       fclose($js_file);
     }
} 