<?php 
@session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rocklister extends CI_Controller 
{
   public function __construct()
     {
         
        parent::__construct();    
        validate_user();
        validate_application();
        $this->output->enable_profiler(False); 
       //  $this->output->cache(1000);
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
       // $this->load->helper('ckeditor');
        $this->load->model('Ebaydesigns_model');
        $this->load->model('Storedesign_model');
        $this->load->model('Listingdesign_model');
        $this->load->model('Ebayapi_model');
        $this->load->model('HTMLtojs_model');
        $this->load->helper('load_controller');
        $this->load->helper("simple_html_dom");
        $this->load->helper('url');
        $this->load->model('Configuration_model');
        $this->load->library('breadcrumbs'); 
        
        
     } 
     public function validate_token_access()
     {
        $this->load->library('../controllers/Ebaycontroller');
        $_EC = new  Ebaycontroller();
        $has_token = $_EC->validate_token_access();
        if(!$has_token):
            $this->load->library('../controllers/store_design/installation');
        
        
        $_Installation = new  Installation();
        $_Installation->authorize_app();
            die();
        endif;   
     }
    public function index()
    {   
        $this->validate_token_access();     
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Rocklister";
        $data["widgettitle"] = "Listing Template Settings";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
         $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' ); 
        $listing_designs = $this->Ebaydesigns_model->get_listing_designs($data["user_id"]);
        if($listing_designs):
           foreach($listing_designs as $listing_design):
            $listing_id = $listing_design->id;
            $this->session->set_userdata('id_listing_design', $listing_id);
        endforeach; 
        endif;
        $active_items = $this->get_active_items(); 
        /*check if needs sync*/
        $installation_wizard = $this->Ebayapi_model->get_installation_wizard($data["user_id"]);
        $this->load->library('../controllers/Ebaycontroller');
        $_EC = new  Ebaycontroller();
        $data["total_pages"] = $_EC->get_active_items_total_pages();
        $data["require_sync"] = $installation_wizard->installed;        
           
        if($this->_check_require_sync($active_items)=="yes"):
            $data["require_sync"] = "false";//mean sync  like is_installed==false :) yes it was stupid.
        endif;
        $data["require_sync"] = "true";
   /* echo $data["require_sync"];
        die("****");*/
        /*site domain*/
        $this->load->library('../controllers/store_design/ebayapi');
        $eBayAPI = new Ebayapi(); 
        $eBayAPI->Set_API_Data();
        $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$data["user_id"] );
        $data["domain_name"]  = $eBayAPI->getDomainnameBySiteId( $store_settings->site_id) ;
        $data["ebay_user_id"] = $store_settings->ebay_user_id;
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $data["import_mode"] = $store_settings->import_mode;
       // $data["all_items_data_table"] = $this->load_all_items_data_table();
        $data["active_items_data_table"] = $this->_load_active_items_data_table($active_items);
       /* $data["sold_items_data_table"] = $this->load_sold_items_data_table();
        $data["unsold_items_data_table"] = $this->load_unsold_items_data_table();
        $data["deleted_items_data_table"] = $this->load_deleted_items_data_table();*/
        $data["prepared_items_data_table"] = $this->load_prepared_items_data_table();
       // echo $data["items_data_table"];
        $this->template->load('rock_lister/index', $data); 
    }
    function check_require_sync()
    {
        $active_items = $this->get_active_items();
        if($active_items):
        foreach($active_items as $item):
               $end_time = strtotime($item->end_time) ;
               $difference = $end_time-time();
               $days = /*floor*/($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
               if($days<=0):
                   return "yes";
               endif;
        endforeach;
    endif;
        return "no";
    }
    function _check_require_sync($items)
    {
        $active_items = $items;
        if($active_items):
        foreach($active_items as $item):
               $end_time = strtotime($item->end_time) ;
               $difference = $end_time-time();
               $days = /*floor*/($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
               if($days<=0):
                   return "yes";
               endif;
        endforeach;
    endif;
        return "no";
    }
    function delete_items_pictures()
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
        $id_user           = $this->session->userdata( 'user_id' );
        $items_list = $this->Ebayapi_model->get_seller_list($id_user,$id_ebay_design);
        if($items_list):
            foreach($items_list as $item):            ;
              $this->Ebayapi_model->item_picture_delete($item->item_id);  
            endforeach;          
        endif;
        
    }
    ######################## BG DESIGNMANAGER CRONJOBS #####################
    public function cron_items_sync()
    {
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $installation_wizard = $this->Ebayapi_model->get_installation_wizard($data["user_id"]);
         $data = array();
         $this->load->library('../controllers/ebaycontroller');
         $_EC = new  Ebaycontroller();
         //do here condition
       //  if($installation_wizard->installed=="false"):        
       //  $items_collection_to_import = $_EC->import_items("all");
      //   else:
             $items_collection_to_import = $_EC->import_items("active");
             $this->sync_ended_listings();
        // endif;
         if(!empty($items_collection_to_import)):
          $data["items_collection_to_import"] = $items_collection_to_import;
           $data["items_collection_to_import_length"] = sizeof($items_collection_to_import);
          // echo $_SESSION["pages_to_import"];die("**********");
            if(isset($_SESSION["pages_to_import"])):
               $data["pages_to_import"] = $_SESSION["pages_to_import"];
               $data["current_page_to_import"] = $_SESSION["current_page_to_import"]-1;
               else:
                   $data["pages_to_import"] = -1;
            endif;
           
         else:
          $data["items_collection_to_import"] = false; 
         endif;
         return $data;
    }
    public function cron_item_import_single($item_id)
    {
        $this->load->library('../controllers/ebaycontroller');
        $_EC = new  Ebaycontroller(); 
        $_EC->item_import_single($item_id);
    }
    ######################## EOF DESIGNMANAGER CRONJOBS #####################
    public function items_sync()
    {
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $installation_wizard = $this->Ebayapi_model->get_installation_wizard($data["user_id"]);
         $data = array();
         $this->load->library('../controllers/ebaycontroller');
         $_EC = new  Ebaycontroller();
         //do here condition
       //  if($installation_wizard->installed=="false"):        
       //  $items_collection_to_import = $_EC->import_items("all");
      //   else:
             $items_collection_to_import = $_EC->import_items("active");
             $this->sync_ended_listings();
        // endif;
         if(!empty($items_collection_to_import)):
          $data["items_collection_to_import"] = $items_collection_to_import;
           $data["items_collection_to_import_length"] = sizeof($items_collection_to_import);
          // echo $_SESSION["pages_to_import"];die("**********");
            if(isset($_SESSION["pages_to_import"])):
               $data["pages_to_import"] = $_SESSION["pages_to_import"];
               $data["current_page_to_import"] = $_SESSION["current_page_to_import"]-1;
               else:
                   $data["pages_to_import"] = -1;
            endif;
           
         else:
          $data["items_collection_to_import"] = false; 
         endif;
         echo json_encode($data);
    }
    function reset_sync_sessions()
    {
        unset($_SESSION["pages_to_import"]);
        unset($_SESSION["current_page_to_import"]);
        $this->Ebayapi_model->reset_sync($this->session->userdata( 'user_id' ));
    }
    public function set_sync_sessions()
    {
     $_SESSION["pages_to_import"] = $this->input->post('pages');
     $_SESSION["current_page_to_import"] = $this->input->post('page_selected');     
    }
    function sync_ended_listings()
    {
          $active_items = $this->get_active_items();
          if($active_items):
        foreach($active_items as $item):
               $end_time = strtotime($item->end_time) ;
               $difference = $end_time-time();
               $days =/* floor*/($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
              
               if($days<=0):
                   $this->Ebayapi_model->item_update_status($item->ItemID, "Completed");
               endif;
        endforeach;
        endif;
    }
    function update_installation_wizard_installed_field()
    {
      $id_user           = $this->session->userdata( 'user_id' );
      $value= $this->input->post('value'); 
      $information = array("installed"=>"$value");
      $this->Ebayapi_model->update_installation($id_user, $information);
    }
    public function item_import_single()
    {
        $this->load->library('../controllers/ebaycontroller');
        $_EC = new  Ebaycontroller();
        $item_id= $this->input->post('item_id'); 
        echo json_encode($_EC->item_import_single($item_id));
    }
    public function load_all_items_data_table()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_all_items($id_user,$id_ebay_design);       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/all_items_data_table', $data,true);                  
       return $items_data_table;
    }
    public function load_prepared_items_data_table()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_prepared_items($id_user,$id_ebay_design);       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/prepared_items_data_table', $data,true);                  
       return $items_data_table;
    }
    public function load_active_items_data_table()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_active_items($id_user,$id_ebay_design);       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/active_items_data_table', $data,true);                  
       return $items_data_table;
    }
    public function _load_active_items_data_table($items)
    {       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/active_items_data_table', $data,true);                  
       return $items_data_table;
    }
     public function get_active_items()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_active_items($id_user,$id_ebay_design);       
       return $items;
    }
    public function load_sold_items_data_table()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_sold_items($id_user,$id_ebay_design);       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/sold_items_data_table', $data,true);                  
       return $items_data_table;
    }
     public function load_unsold_items_data_table()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_unsold_items($id_user,$id_ebay_design);       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/unsold_items_data_table', $data,true);                  
       return $items_data_table;
    }
    public function load_deleted_items_data_table()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_deleted_items($id_user,$id_ebay_design);       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/deleted_items_data_table', $data,true);                  
       return $items_data_table;
    }
    public function load_extractor_form()
    {
       $json = array();
        $data = array();
        $data["items_collection"] =  $this->input->post('items_collection'); 
       $json["form"]  = $this->template->ajax_load_view('rock_lister/extractor_form', $data,true);                  
       echo json_encode($json);
    }
    public function load_find_replace_form()
    {
       $json = array();
        $data = array();
        $data["items_collection"] =  $this->input->post('items_collection'); 
       $json["form"]  = $this->template->ajax_load_view('rock_lister/find_replace_form', $data,true);                  
       echo json_encode($json);
    }
    public function get_item($item_id)
    {
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $item_object = $item->get_item($item_id);
       return $item_object;
    }
    /*Start Listing design installation*/
    public function is_installed_rockscripts_template()
    {
        $item_id= $this->input->post('item_id'); 
        $item = $this->get_item($item_id);
        $current_description = $item->Description;
        $is_installed = strpos($current_description, "<<rockscripts>>");
        $json = array();
        $data  = array();
        $data["item_id"] = $item_id;
        if(!$is_installed):
            $json["is_installed"] = "no installed";
            /*get view for not found */
            $json["html"] = $this->template->ajax_load_view('rock_lister/unistalled_template_dialog', $data,true);
            else:
            $json["is_installed"] = "installed";
             /*get view for  found */
            $json["html"] = $this->template->ajax_load_view('rock_lister/installed_template_dialog', $data,true);          
        endif;
        echo json_encode($json);
    }
    public function load_view_destination_for_listing_template_installation()
    {
        $json = array();
        $data  = array();
        $json["html"] = $this->template->ajax_load_view('rock_lister/destination_for_listing_template_installation', $data,true);  
        echo json_encode($json);
    }
    public function create_listings_session_for_process()
    {
        $listings_collection = $this->input->post('listings_collection'); 
        $this->session->set_userdata('listings_collection', $listings_collection);
    }
    public function set_session_listing_proccess($listings_collection)
    {
        $this->session->set_userdata('listings_collection', $listings_collection);
    }
    public function get_listings_collection_to_process()
    {
        if($this->session->userdata( 'listings_collection' )):
              return $this->session->userdata( 'listings_collection' );
            else:
            return false;
        endif;
    }
     public function ajax_get_listings_collection_to_process()
    {
         $json=array();
        if($this->session->userdata( 'listings_collection' )):
              $json["listings_collection"] = $this->session->userdata( 'listings_collection' );
            else:
            $json["listings_collection"] = false;
        endif;
         echo json_encode($json);
    }



    public function install_listing_template()
    { 
                $itemID= $this->input->post('item_id'); 
                $json = array();     
                $listing_design_code = $this->generate_listing_design_code($itemID,true);                
                $this->send_item_to_prepared_items($itemID);
                $this->Ebayapi_model->update_item_prepared_description($itemID,$listing_design_code["listing_code"]);                               
                $item_object  = $this->get_item($itemID);                                
                $json["title"] = $item_object->Title;
                $json["status"] = "added";
                echo json_encode($json);           
    }
    public function is_rockscripts_template($description)
    {
        $pos = strrpos($description, 'class="rockscripts-description"');
        if ($pos === false) { // nota: tres signos de igual
            // no encontrado...
            return false;
        }
        else
        {
            return true;
        }
    }
    public function item_extract()
    { 
                $itemID= $this->input->post('item_id'); 
                $description_search_by= $this->input->post('description_search_by'); 
                $description_selector_value= $this->input->post('description_selector_value'); 
                $image_search_by= $this->input->post('image_search_by'); 
                $image_selector_value= $this->input->post('image_selector_value'); 
                $item_object  = $this->get_item($itemID);   
                $this->extract_description($itemID, utf8_decode(html_entity_decode($item_object->Description, ENT_QUOTES, 'UTF-8')),$description_search_by,$description_selector_value);
                if($image_selector_value !="")
                $this->extract_images($itemID, utf8_decode(html_entity_decode($item_object->Title, ENT_QUOTES, 'UTF-8')), utf8_decode(html_entity_decode($item_object->Description, ENT_QUOTES, 'UTF-8')),$image_search_by,$image_selector_value);
               
                $json["title"] = utf8_decode(html_entity_decode($item_object->Title, ENT_QUOTES, 'UTF-8'));
                $json["status"] = "extracted";
                echo json_encode($json);           
    }
    public function extract_images($itemID, $title, $description,$image_search_by,$image_selector_value)
    {
        $id_user           = $this->session->userdata( 'user_id' );
        $html = str_get_html($description);
        if($image_search_by=="Class")
        $ret = $html->find(".$image_selector_value img") ;
        if($image_search_by=="ID")
        $ret = $html->find("#$image_selector_value img") ;
        
        $path = $this->Configuration_model->get_configuration_value('clients-hosting-path');
        $url_hosting = $this->Configuration_model->get_configuration_value('client-hosting');
        $index = 0;
                foreach($ret as $element):
                   //echo $element->src;
                    $image_server_path = $path.$id_user."/listing_images/"."$itemID/";   
                   if(!file_exists($image_server_path)){
                       if (!mkdir($image_server_path, 0777, true)) {//0777
                            die('Failed to create listing image folder...');
                       }
                      }
                    if(copy($element->src, $image_server_path.$title."-".$index.".jpg"))
                    {
                         $this->Ebayapi_model->item_picture_import_from_extract($itemID, $url_hosting.$id_user."/listing_images/".$itemID."/".$title."-".$index.".jpg");
                    }
                    $index++;
                endforeach;
                $html->clear(); 
                unset($html);
    }
      public function extract_and_get_description($description,$description_search_by,$description_selector_value)
    {
                $html = str_get_html($description);
                if($description_search_by=="Class")
                $ret = $html->find(".$description_selector_value") ;
                if($description_search_by=="ID")
                $ret = $html->find("#$description_selector_value") ;                
                foreach($ret as $element):
                $new_description =  $element->innertext;
                return $new_description;
                endforeach;
                return false;
    }
    public function extract_description($itemID, $description,$description_search_by,$description_selector_value)
    {
                $html = str_get_html($description);
                if($description_search_by=="Class")
                $ret = $html->find(".$description_selector_value") ;
                if($description_search_by=="ID")
                $ret = $html->find("#$description_selector_value") ;                
                foreach($ret as $element):
                $new_description =  $element->innertext;
                $this->Ebayapi_model->send_item_to_prepared_items($itemID);
                $this->Ebayapi_model->update_item_prepared_description($itemID,utf8_decode(html_entity_decode($new_description, ENT_QUOTES, 'UTF-8')));
                endforeach;
    }
     public function extract_description_to_edit($itemID, $description,$description_search_by,$description_selector_value)
    {
                $html = str_get_html($description);
                if($description_search_by=="Class")
                $ret = $html->find(".$description_selector_value") ;
                if($description_search_by=="ID")
                $ret = $html->find("#$description_selector_value") ;                
                foreach($ret as $element):
                $new_description =  $element->innertext;
                return utf8_decode(html_entity_decode($new_description, ENT_QUOTES, 'UTF-8'));
                endforeach;
    }
    public function fix_utf($text)
    {
      return  utf8_decode(html_entity_decode($text, ENT_QUOTES, 'UTF-8'));
    }
    public function find_and_remplace($description,$description_search_by,$description_selector_value,$new_text_inner)
    {
                $html = str_get_html($description);
                if($description_search_by=="Class")
                $ret = $html->find(".$description_selector_value") ;
                if($description_search_by=="ID")
                $ret = $html->find("#$description_selector_value") ;                
                foreach($ret as $element):
                $element->innertext = $new_text_inner;                
                endforeach;
                return $html;
    }
    public function item_find_and_replace()
    { 
                $itemID= $this->input->post('item_id'); 
                $find_what= $this->input->post('find_what'); 
                $replace_with= $this->input->post('replace_with'); 
                $item_object  = $this->get_item($itemID);   
                $this->find_and_replace_description($itemID, $item_object->Description,$find_what,$replace_with);               
                $json["title"] = $item_object->Title;
                $json["status"] = "found";
                echo json_encode($json);           
    }
        public function find_and_replace_description($itemID, $description,$find_what,$replace_with)
    {
                $new_description =  str_replace($find_what,$replace_with,$description);
                $this->Ebayapi_model->send_item_to_prepared_items($itemID);
                $this->Ebayapi_model->update_item_prepared_description($itemID,$new_description);                
    }
    public function send_item_to_prepared_items()
    {
        $itemID= $this->input->post('item_id'); 
        $this->Ebayapi_model->send_item_to_prepared_items($itemID);
    }
   public function send_item_to_prepared_items1($itemID)
    {
        $this->Ebayapi_model->send_item_to_prepared_items($itemID);
    }
    public function generate_listing_design_code($itemID,$include_description = true)
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        $item_object = $this->get_item($itemID);
        /*vars definition for all listing parts code*/
        $out_put_main_image = "";
        $out_put_thumbs_images = "";
        $out_put_mobile_images = "";
        $out_put_description = "";  
        $warning_message = "Warning!";
        /*Start getting all listings pictures and videos*/
        $listing_pictures_array = $this->Ebayapi_model->item_picture_get($itemID);    
      /*get listing design*/
        $listing_design = $this->Ebaydesigns_model->get_listing_design($user_id,$id_ebay_design,$id_listing_design);
        $listing_design_code = $listing_design->html_code;
         if(is_array($listing_pictures_array)):
        if(sizeof($listing_pictures_array)>0):
            $has_main_image = false;
            $index = 0;
            foreach($listing_pictures_array as $listing_picture):
                $prepare_out_put_main_image = "";         
                $prepare_out_put_thumbs_images = "";
                $prepare_out_put_mobile_images = "";
         
                 /*generate thumbs*/
                 /*generate main images*/
                
                   $listing_thumbs_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-thumbs',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_thumbs_images =  str_replace("[IMAGE_URL]",$listing_picture->picture_url,$listing_thumbs_picture_code_tagged_part);
                   $prepare_out_put_thumbs_images =  str_replace("[TITLE]",$item_object->Title,$prepare_out_put_thumbs_images);
                   $out_put_thumbs_images .= $prepare_out_put_thumbs_images;
                   /*Generate for mobile devices*/
                   $listing_mobile_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-mobile',$id_ebay_design, $id_listing_design, $user_id);    
                   
                   $prepare_out_put_mobile_images =  str_replace("[IMAGE_URL]",$listing_picture->picture_url,$listing_mobile_picture_code_tagged_part);
                   $prepare_out_put_mobile_images =  str_replace("[TITLE]",$item_object->Title,$prepare_out_put_mobile_images);
                   $out_put_mobile_images .= $prepare_out_put_mobile_images;
                   
                   /*use follow vars if there is not main image*/
                   if($index==0):
                   $image_url =   $listing_picture->picture_url;
                   $image_title = $item_object->Title;
                   endif;
        $index++;
            endforeach;
            if(!$has_main_image):
                   $prepare_out_put_content  = "";
                   $listing_main_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-main',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_content =  str_replace("[IMAGE_URL]",$image_url,$listing_main_picture_code_tagged_part);
                   $prepare_out_put_content =  str_replace("[TITLE]",$image_title,$prepare_out_put_content);
                   $out_put_main_image = $prepare_out_put_content;
            endif;
            $listing_design_code = str_replace("[MAIN_IMAGE]",$out_put_main_image,$listing_design_code);
            $listing_design_code = str_replace("[THUMBNAILS]",$out_put_thumbs_images,$listing_design_code);
            $listing_design_code = str_replace("[MOBILE_IMAGES_VIEW]",$out_put_mobile_images,$listing_design_code);
             endif;
            else:
                $warning_message .= "<br/>- Listing Picture(s) is required.";
        endif;
        /*start getting listing title*/
          $listing_title =  utf8_encode($this->fix_utf($item_object->Title));
         if($listing_title != ""):
       $out_put_title = $listing_title;
         $listing_design_code = str_replace("[LISTING_TITLE]",$out_put_title,$listing_design_code);
       else:
           $warning_message .= "<br/>- Listing Title is required.";
       endif;
       /*start getting listing description*/
       $description =  utf8_encode($this->fix_utf($item_object->Description));
       if($description != ""):
           $item = $this->get_item($itemID);
                if($this->is_rockscripts_template($description)):
                   $description =  $this->extract_and_get_description($description,"ID","rockscripts-description");    
                endif;
            $out_put_description = $description;
            if($include_description):
                $listing_design_code = str_replace("[LISTING_DESCRIPTION]",$out_put_description,$listing_design_code);
            endif;
            
           else:
            $warning_message .= "<br/>- Listing Description is required.";
       endif;       
        /*start adding data*/                
        if($warning_message!="Warning!"):
             $data["warning"] = $warning_message;
        $data["listing_code"] = "";
            else:
             $data["listing_code"] = $listing_design_code;
        endif;               
        return ($data);
    }
    public function generate_listing_design_code_view($itemID)
    {
        $item_object = $this->Ebayapi_model->item_prepared_get($itemID);
        $listing_design_code = $item_object->Description;             
        /*start adding data*/                        
        $data["listing_code"] = $listing_design_code;              
        return ($data);
    }
    /*function fro prepared items*/
    public function item_send_to_ebay()
    {
        $itemID = $this->input->post('item_id'); 
        $json = array();                   
        $item_object  = $this->item_prepared_get($itemID);
        /*revise item*/
        
        $json["title"] = $item_object->Title;
        $json["status"] = "sent";
        echo json_encode($json); 
    }
    public function remove_prepared_listing()
    {
                $itemID = $this->input->post('item_id'); 
                $json = array();     
                $this->Ebayapi_model->item_delete_prepared_item($itemID);                
                $item_object  = $this->get_item($itemID);
                $json["title"] = $item_object->Title;
                $json["status"] = "deleted";
                echo json_encode($json);   
    }
    public function ebay_update_listing_description()
    {
        $json = array();    
        $this->load->library('../controllers/ebaycontroller');
        $_EC = new  Ebaycontroller();
        $item_id = $this->input->post('item_id'); 
        $item_object = $this->Ebayapi_model->item_prepared_get($item_id);
        $params = array("ItemID"=>$item_id,"Description"=> utf8_decode(html_entity_decode($item_object->Description , ENT_QUOTES, 'UTF-8')));
        $response = $_EC->ebay_update_listing_description($params);
        if($response->Ack=="Failure"):
            $json["error_message"] = $response->Errors[0]->ShortMessage;
        endif;
        $json["title"] = utf8_encode ($item_object->Title);
        $json["status"] = "sent";
        echo json_encode($json);   
    }   
    
    public function ebay_update_listing_description_from_backup()
    {
        //die("***");
        $json = array();    
        $this->load->library('../controllers/ebaycontroller');
        $_EC = new  Ebaycontroller();
        $item_id = $this->input->post('item_id'); 
        $group_id = $this->input->post('group_id'); 
        $item_object = $this->Ebaydesigns_model->get_single_listing_backup($item_id, $group_id);
        $params = array("ItemID"=>$item_id,"Description"=>$item_object->description);
        $_EC->ebay_update_listing_description($params);
        $json["title"] = $item_object->title;
        $json["status"] = "sent";
        echo json_encode($json);   
    }    
    public function ebay_relist_item()
    {
        $json = array();    
        $this->load->library('../controllers/ebaycontroller');
        $_EC = new  Ebaycontroller();
        $item_id = $this->input->post('item_id'); 
        $item_object = $this->get_item($item_id);
        $_EC->ebay_relist_item($item_id);
        $json["title"] = $item_object->Title;
        $json["status"] = "relisted";
        echo json_encode($json);   
    }   
    public function ebay_end_item()
    {
        $json = array();    
        $this->load->library('../controllers/ebaycontroller');
        $_EC = new  Ebaycontroller();
        $item_id = $this->input->post('item_id'); 
        $item_object = $this->get_item($item_id);
        $_EC->ebay_end_item($item_id);
        $this->update_listing_status($item_id,"Completed");
        $json["title"] = $item_object->Title;
        $json["status"] = "ended";
        echo json_encode($json);   
    }   
    public function update_listing_status($item_id,$status)
    {
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $item->item_update_status($item_id,$status);
    }
    public function item_prepared_remove_single()
    {
        $item_id = $this->input->post('item_id'); 
        $this->Ebayapi_model->item_delete_prepared_item($item_id);
    }
    public function load_view_item()
    {
        $item_id = $this->input->get('item_id');
        $response = $this->generate_listing_design_code_view($item_id);
        echo $response["listing_code"];
    }
       /*STORE PAGES */
    function save_store_page($title, $content)
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $user_id           = $this->session->userdata( 'user_id' );
        $this->load->library('../controllers/store_design/ebayapi');
        $_EC = new  Ebayapi();  
        $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$user_id );
        $token = $store_settings->token;
       $title =  str_replace("&","and",$title);
        $_EC->set_store_page($token,$title,$content);
    }
      function update_store_page($page_id, $title, $content)
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $user_id           = $this->session->userdata( 'user_id' );
        $this->load->library('../controllers/store_design/ebayapi');
        $_EC = new  Ebayapi();  
        $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$user_id );
        $token = $store_settings->token;
        $_EC->update_store_page($page_id, $token,$title,$content);
    }
      function delete_store_page($page_id, $status)
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $user_id           = $this->session->userdata( 'user_id' );
        $this->load->library('../controllers/store_design/ebayapi');
        $_EC = new  Ebayapi();  
        $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$user_id );
        $token = $store_settings->token;
        $_EC->change_status_store_page($page_id, $token,$status);
    }
    public function sync_store_pages()
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $user_id           = $this->session->userdata( 'user_id' );
         $this->load->library('../controllers/ebaycontroller');
         $_EC = new  Ebaycontroller();
         $response  = $_EC->ebay_get_store_pages();
         if(!$response)
         {}
         else
         {
             $this->load->library('../controllers/store_design/storedesign');
             $_SD= new  Storedesign();              
             /*get, order and add to database*/
             for($i=0;$i<sizeof($response->CustomPageArray);$i++):  
                 $page = $this->get_store_page($response->CustomPageArray[$i]->PageID);
                 for($j=0;$j<sizeof($page->CustomPageArray);$j++): 
                     $this->Storedesign_model->ebay_save_store_page($page->CustomPageArray[$j]->PageID,$page->CustomPageArray[$j]->Name,$page->CustomPageArray[$j]->URL,$page->CustomPageArray[$j]->Status,$page->CustomPageArray[$j]->Content,$page->CustomPageArray[$j]->Order,$id_ebay_design,$user_id);
                 endfor;
             endfor;
             $_SD->save_pages_is_js_file($user_id, $id_ebay_design);
         }                      
    }
    public function get_store_page($ebay_page_id)
    {
         $this->load->library('../controllers/ebaycontroller');
         $_EC = new  Ebaycontroller();
         $response  = $_EC->ebay_get_store_page($ebay_page_id);
          return $response;
    }
    /*STORE PAGES */   
    
    
    /*EDIT DESCRIPTION / OVERVIEW*/
    public function load_edit_description_form()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $item_id = $this->input->post('item_id'); 
        $item_object = $this->get_item($item_id);
        $json = array();       
         
//        echo $item_object->Description;
        if($this->is_rockscripts_template($item_object->Description)):       
        $json["is_rockscripts_template"] = "true";
        $description = utf8_encode($this->extract_description_to_edit($item_id, $item_object->Description,"ID","rockscripts-description"));            
        else:
            $description = $item_object->Description;
             $json["is_rockscripts_template"] = "false";
        endif;   
        $data  = array("item_id"=>$item_id,"item_title"=>$item_object->Title,"description"=>$description);       
        # Variables de sesion de KCFinder, 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
         $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        $json["html"] = $this->template->ajax_load_view('ebay_items/edit_description', $data,true);  
        echo json_encode($json);
    }
    public function save_item_description()
        {
          $user_id = $this->session->userdata( 'user_id' );
          $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
          $id_home_design = $this->session->userdata( 'id_home_design' );
          $item_id = $this->input->post('item_id'); 
          $action = $this->input->post('action'); 
          $edit_description_overview = $this->input->post('edit_description_overview');
          $item_object = $this->get_item($item_id);
           if($this->is_rockscripts_template($item_object->Description)):  
           $this->install_listing_template_after_edit_description($item_id,utf8_encode($this->fix_utf("$edit_description_overview")) );
          else:
          $this->Ebayapi_model->send_item_to_prepared_items($item_id);
            $this->Ebayapi_model->update_item_prepared_description($item_id,"$edit_description_overview");
          endif;
          if($action=="ebay"):
                          
          else:                     
                       
          endif;                    
    }
    public function install_listing_template_after_edit_description($itemID, $new_description)
    {     
                $listing_design_code = $this->generate_listing_design_code($itemID,false);      
                $listing_design_code1 = str_replace("[LISTING_DESCRIPTION]",$new_description,$listing_design_code["listing_code"]);
                $this->send_item_to_prepared_items($itemID);
                $this->Ebayapi_model->update_item_prepared_description($itemID,$listing_design_code1);   
    }
    
    /*FUNCTION TO FIND LISTINGS IDs DEPENDING WITH SOME CONDICTIONS*/
    public function get_listings_IDs()
    {
        $user_id = 80;
        $active_items = $this->get_active_items();
        $i = 1;
        foreach($active_items as $item):            
              $pos = strrpos($item->Description, "auctionimage");
              if($pos !== false):
                $pos_start = strrpos($item->Description, "<!-- Start Description AucLister -->");
                $pos_ends = strrpos($item->Description, "<!-- End Description AucLister -->");
                $pos_ends = $pos_ends - $pos_start;
                $description_updated = substr($item->Description, $pos_start, $pos_ends);         
                $data  = array("Description"=>$description_updated);
                $this->Ebayapi_model->item_update($item->ItemID, $data);
                $this->Ebayapi_model->send_item_to_prepared_items($item->ItemID);
                echo $item->ItemID."<br>";
                else:
              endif;
              
           //  endif;            
        endforeach;   
        
    }
    public function install_template_prepared()
    {
        $id_user = 80;
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $active_items = $this->Ebayapi_model->get_prepared_items($id_user,$id_ebay_design);
        $i = 1;
        foreach($active_items as $item):
           
            if($item->ItemID)
              $this->install_listing_template1 ($item->ItemID);          
        endforeach;   
        
    } 
    public function install_listing_template1($item_id)
    { 
                $itemID= $item_id; 
                if($item_id!=""):
                  
                  $json = array();     
                $listing_design_code = $this->generate_listing_design_code($itemID,true); 
               
                $this->send_item_to_prepared_items1($itemID);
                $this->Ebayapi_model->update_item_prepared_description($itemID,$listing_design_code["listing_code"]);                                
                endif;
               
                          
    }
    public function update_import_mode()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $import_mode_setting = $this->input->post('import_mode_setting'); 
        $this->Storedesign_model->update_store_settings_import_mode($id_ebay_design, $user_id, $import_mode_setting);
    }
}
?>