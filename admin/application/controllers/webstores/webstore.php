<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webstore extends CI_Controller { 
public $webstore_db;    
     public function __construct()
     {
         
        parent::__construct();     
        validate_user();
        validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
        $this->load->model('Storedesign_model');
        $this->load->model('Listingdesign_model');
        $this->load->model('Configuration_model');
        $this->load->model('Webstores_model');
        $this->load->database('default',TRUE);
        $this->webstore_db = $this->load->database('webstore', TRUE);
        $this->load->library('Mage_api');
        $this->load->library('breadcrumbs'); 
     }
      public function index()
     {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Webstore";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $data["user_id"]);
        $this->load->database('default',TRUE);
        $store_settings = $this->Storedesign_model->StoreSettingDetails($id_ebay_design, $data["user_id"]); 
        $data["store_settings"] = $store_settings;
        $this->load->database('webstore', TRUE);
        $data["nice_store_name"] = $this->nice_store_name($store_settings["store_name"]);
        if($webstore_information):
             $data["webstore_information"] = $webstore_information;
            else:             
             $this->template->load('webstores/magento/install/step_1', $data); 
        endif;
        $this->template->load('webstores/magento/index', $data);      
     }
     public function install_webstore()
     {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Webstore";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $data["user_id"]);
        
        if($webstore_information):
             $data["webstore_information"] = $webstore_information;
             $this->template->load('webstores/magento/index', $data);  
            else:
             $this->load->database('default',TRUE);
             $store_settings = $this->Storedesign_model->StoreSettingDetails($id_ebay_design, $data["user_id"]); 
             $data["store_settings"] = $store_settings;
             $this->load->database('webstore', TRUE);
             $data["nice_store_name"] = $this->nice_store_name($store_settings["store_name"]);
             $this->build_webstore($store_settings["store_name"]);
             /*load categories and subcategories*/
             $data["categories_tree"] = $this->get_categories_tree();
             $this->template->load('webstores/magento/install/step_2', $data); 
        endif;     
     }
     public function install_categories()
     {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Webstore";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $data["user_id"]);        
        if($webstore_information):
             $this->import_store_categories_from_designmanager();
             $data["webstore_information"] = $webstore_information;
             $active_items = $this->get_active_items(); 
             $data["active_items_data_table"] = $this->_load_active_items_data_table($active_items);
             $data["active_items"] = $active_items;
             $this->template->load('webstores/magento/install/step_3', $data);  
            else:
             $this->load->database('default',TRUE);
             $store_settings = $this->Storedesign_model->StoreSettingDetails($id_ebay_design, $data["user_id"]); 
             $data["store_settings"] = $store_settings;
             $this->load->database('webstore', TRUE);
             $data["nice_store_name"] = $this->nice_store_name($store_settings["store_name"]);
             $this->template->load('webstores/magento/install/step_1', $data); 
        endif;   
     }
     public function synchronize_categories()
     {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Webstore";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );  
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $data["user_id"]);    
        $this->load->database('default',TRUE);
        $store_settings = $this->Storedesign_model->StoreSettingDetails($id_ebay_design, $data["user_id"]); 
        $data["store_settings"] = $store_settings;
        $this->load->database('webstore', TRUE);
        $data["nice_store_name"] = $this->nice_store_name($store_settings["store_name"]);       
        if($webstore_information):
           $data["webstore_information"] = $webstore_information;
           $this->import_store_categories_from_designmanager(); 
           $data["message"] = "All categories were updated successful";
           $this->template->load('webstores/magento/index', $data); 
        endif;
        
     }
      public function synchronize_categories_view()
     {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Webstore";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $data["user_id"]);
        $this->load->database('default',TRUE);
        $store_settings = $this->Storedesign_model->StoreSettingDetails($id_ebay_design, $data["user_id"]); 
        $data["store_settings"] = $store_settings;
        $this->load->database('webstore', TRUE);
        $data["nice_store_name"] = $this->nice_store_name($store_settings["store_name"]);
        if($webstore_information):
             $data["webstore_information"] = $webstore_information;
             $data["categories_tree"] = $this->get_categories_tree();
             $this->template->load('webstores/magento/synchronize/categories', $data); 
            else:
              //will not enter here 
             $this->template->load('webstores/magento/install/step_1', $data); 
        endif;      
     }
     public function install_listing()
    { 
        $itemID= $this->input->post('item_id'); 
        $json = array();     
        /*start installation*/
        $this->load->library('../controllers/webstores/product');        
        $item_object  = $this->get_item($itemID);  
        $this->product->add_single_product($item_object);
        $json["title"] = $item_object->Title;
        $json["status"] = "added";
        echo json_encode($json);           
    }
    public function synchronize_listings_view()
    {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Webstore";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );             
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $data["user_id"]);        
        if($webstore_information):
             $data["webstore_information"] = $webstore_information;
             $active_items = $this->get_active_items(); 
             $data["active_items_data_table"] = $this->_load_active_items_data_table($active_items);
             $data["active_items"] = $active_items;
             $this->template->load('webstores/magento/synchronize/listings', $data);  
        endif;   
    }
    public function get_item($item_id)
    {
       $this->load->library('../controllers/store_design/item');
       $this->load->database('default',TRUE);
       $item = new Item();
       $item_object = $item->get_item($item_id);
       $this->load->database('webstore', TRUE); 
       return $item_object;
    }
     public function get_categories_tree()
     {
     
        $id_ebay_design = $this->session->userdata('id_ebay_design');
        $user_id = $this->session->userdata( 'user_id' );
        $this->load->database('default',TRUE);
        $store_category_group = $this->Listingdesign_model->get_dynamic_categories_group_id($id_ebay_design,$user_id);
        $store_categories = $this->Listingdesign_model->get_current_categories($store_category_group["id"],true);
        /*category*/
       // print_r($store_categories);
        if($store_categories):
            $rows = array();
          foreach($store_categories as $category):
            $rows[] =  array("id"=>$category->id,"parent_id"=>$category->parent_id,"title"=>$category->title);          
          endforeach;
          $new = array();
          foreach ($rows as $a)
            {
             $new[$a['parent_id']][] = $a;
            }
            $tree = $this->createTree($new, $new[0]);
            return $tree;
        endif;                
     }
    function createTree(&$list, $parent)
    {
       $tree = array();
    foreach ($parent as $k=>$l){
        if(isset($list[$l['id']])){
            $l['children'] = $this->createTree($list, $list[$l['id']]);
        }
        $tree[] = $l;
    } 
    return $tree;
    }
     public function build_webstore($store_name)
     {
      $id_ebay_design = $this->session->userdata('id_ebay_design');
      $user_id = $this->session->userdata( 'user_id' );
      $website_code = $this->nice_code($store_name)."_code";
      $store_view_code = $website_code."_english";
      /*category*/
      $category_information = array();
      $category_information['name'] = $store_name;
      $category_information['is_active'] = 1;
      $category_information['position'] = 1;
      $category_information['name'] = $store_name;
      $category_information['description'] = $store_name;
      $category_information['meta_description'] = $store_name;
      $category_information['meta_keywords'] = $store_name;
      $category_information['meta_title'] = $store_name;      
      $category_information = $this->build_category_information($category_information);
      /*website*/
      $data = array();
      $data['code'] = $website_code;
      $data['name'] = $store_name;
      $data['sort_order'] = 0;
      $data['default_group_id'] = 0;
      $data['is_default'] = 0;
      
      /*
       * 1.Add root category for store.
       * 2.Add website (website name,code).
       * 3.Add store (store name, set root category).
       * 4.Add store view (set store,store name, code "store_name_english", status )
       */
      $store_category_id = $this->add_category($category_information);
      $website_id = $this->add_web_site($data);
      /*add store view*/
      $data = array();
      $data['website_id'] = $website_id;
      $data['name'] = $store_name;
      $data['root_category_id'] = $store_category_id;
      $data['default_store_id'] = 0;
      $store_group_id = $this->add_store_group($data);   
      /*add store view*/
      $data = array();
      $data['code'] = $store_view_code;
      $data['website_id'] = $website_id;
      $data['group_id'] = $store_group_id;
      $data['name'] = $store_name;
      $data['sort_order'] = 0; 
      $data['is_active'] = 1;
      $store_id = $this->add_store_view($data);
      /*upfate the website*/
      $this->Webstores_model->update_website_default_group_id($website_id, $store_group_id);
      $this->Webstores_model->update_store_group_default_store_id($store_group_id, $store_id);
      $this->load->database('default',TRUE);
      $this->Webstores_model->add_webstore_information($store_category_id, $website_id, $store_group_id, $store_id, $id_ebay_design, $user_id);        
      $this->load->database('webstore', TRUE); 
      $this->duplicate_default_websotre_files($this->nice_store_name($store_name));
      $this->update_tags_in_store_files($this->nice_store_name($store_name), $website_code);
     }
     public function import_store_categories_from_designmanager()
     {
        $id_ebay_design = $this->session->userdata('id_ebay_design');
        $user_id = $this->session->userdata( 'user_id' );
        $this->load->database('default',TRUE);
        $store_category_group = $this->Listingdesign_model->get_dynamic_categories_group_id($id_ebay_design,$user_id);
        $store_categories = $this->Listingdesign_model->get_current_categories($store_category_group["id"],true);
        /*category*/
       // print_r($store_categories);
        if($store_categories):
          foreach($store_categories as $category):
            $webstore_category = $this->Webstores_model->get_webstore_category_bridge($category->id,$user_id);        
            $category_information = array();
            $category_information['name'] = $category->title;
            $category_information['is_active'] = 1;
            $category_information['position'] = 1;
            $category_information['description'] = $category->title;
            $category_information['meta_description'] = $category->title;
            $category_information['meta_keywords'] = $category->title;
            $category_information['meta_title'] = $category->title;      
            $category_information = $this->build_category_information($category_information);
            $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $user_id);
            if(!$webstore_category):
            if($category->parent_id==0):                
                $id_mg_category = $this->add_category($category_information, $webstore_information->id_category_root,$webstore_information->id_store_view);
                $id_dm_category = $category->id;
                $this->Webstores_model->add_webstore_category_bridge($id_dm_category, $id_mg_category, $id_ebay_design, $user_id);
                else:
                $category_bridge = $this->Webstores_model->get_webstore_category_bridge($category->parent_id,$user_id);
                if($category_bridge):
                  $id_mg_category = $this->add_category($category_information,$category_bridge->id_mg_category);  
                  $id_dm_category = $category->id;
                  $this->Webstores_model->add_webstore_category_bridge($id_dm_category, $id_mg_category, $id_ebay_design, $user_id);
                endif;
            endif;
            else:
                $id_category_to_update = $webstore_category->id_mg_category;
                $this->update_category_name($id_category_to_update,$category->title);
            endif;
        endforeach;        
        $this->load->database('webstore', TRUE);  
        endif;
           
     }
     public function get_active_items()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->database('default',TRUE);
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_active_items($id_user,$id_ebay_design);   
       $this->load->database('webstore', TRUE);  
       return $items;
    }
     public function _load_active_items_data_table($items)
    {       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/active_items_data_table_webstore_installation', $data,true);                  
       return $items_data_table;
    }
   /*Add new category on magento webstore*/
     public function add_category($category_information, $parent_id=1/*default for magento*/,$id_store_view=1)
     {
        $data = $this->build_category_information($category_information);
        return  $this->mage_api->catalog_category_create($parent_id, $data,"$id_store_view");
     }
     /*Update category on magento webstore*/
     public function update_category_name($category_id,$new_name)
     {
         $data = array
        (
        'name' => $new_name,
        //<!-- position parameter is deprecated, category anyway will be positioned in the end of list
        //and you can not set position directly, use catalog_category.move instead -->
        'available_sort_by' => 'position',
        'default_sort_by' => 'position',
        'description' => $new_name,
        'meta_description' => $new_name,
        'meta_keywords' => $new_name,
        'meta_title' => $new_name,
        'url_key' => $this->get_url_key($new_name)
        
        );
        return  $this->mage_api->catalog_category_update($category_id, $data);
     }
      /*Remove a category on magento webstore*/
     public function remove_category($category_id)
     {
        $data = array('categoryId' => $category_id);
        return  $this->mage_api->catalog_category_delete($data);
     }
      /*Remove multiple categories on magento webstore*/
     public function remove_multiple_categories($categories_id)
     {
        return  $this->mage_api->catalog_category_delete($categories_id);
     }
     /*Build necessaray data to insert new category
      * Call before add_category function
      * @parm $category_information Category information fetched from design manager database
      */
     public function build_category_information($category_information)
     {
        $url_key = $this->get_url_key($category_information['name']);
        $data = array
        (
        'name' => $category_information['name'],
        'is_active' => $category_information['is_active'],
        'position' => $category_information['position'],
        //<!-- position parameter is deprecated, category anyway will be positioned in the end of list
        //and you can not set position directly, use catalog_category.move instead -->
        'available_sort_by' => 'position',
        'custom_design' => null,
        'custom_apply_to_products' => null,
        'custom_design_from' => null,
        'custom_design_to' => null,
        'custom_layout_update' => null,
        'default_sort_by' => 'position',
        'description' => $category_information['description'],
        'display_mode' => null,
        'is_anchor' => 0,
        'landing_page' => null,
        'meta_description' => $category_information['meta_description'],
        'meta_keywords' => $category_information['meta_keywords'],
        'meta_title' => $category_information['meta_title'],
        'page_layout' => 'two_columns_left',
        'url_key' => $url_key,
        'include_in_menu' => 1,
        );
        return $data; 
     }
     public function get_url_key($key)
     {
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $key);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

	return $clean;
     }
     /*Functions for store information*/
     /*Get single store info
      * @param id_store
      */
     public function get_store_info($id_store)
     {
       $data = array('storeId' => $id_store);
       return  $this->mage_api->store_info($data);
     }
     /*Get single store info
      */
     public function get_store_list()
     {
       return  $this->mage_api->store_list();
     }
     /*add website*/
     public function add_web_site($data)
     {
       return $this->Webstores_model->add_web_site($data['code'],$data['name'],$data['sort_order'],$data['default_group_id'],$data['is_default']);
     }
     /*add store group to website*/
     public function add_store_group($data)
     {
      return $this->Webstores_model->add_store_group($data['website_id'],$data['name'],$data['root_category_id'],$data['default_store_id']); 
     }
      /*add store view*/
     public function add_store_view($data)
     {
      return $this->Webstores_model->add_store_view($data['code'],$data['website_id'],$data['group_id'],$data['name'],$data['sort_order'],$data['is_active']); 
     }
     public function nice_code($string)
     {
       $string = str_replace(" ","_",$string);    
       $string = str_replace("-","_",$string);
       return strtolower($string);
     }
     public function nice_store_name($string)
     {
       $string = str_replace(" ","-",$string);    
       $string = str_replace("_","-",$string);
       return strtolower($string);
     }
     
     public function update_tags_in_store_files($store_folder, $website_code)
     {
        $this->load->database('default',TRUE);
        $web_store_path = $this->Configuration_model->get_configuration_value('web-store-path');
        $web_store_default_index_code = $this->Configuration_model->get_configuration_value('webstore_default_index_code');
        $out_put = str_replace("[WEBSITE_CODE]",$website_code,$web_store_default_index_code);
        $this->write_code($web_store_path, $store_folder, "index.php",$out_put);
        $this->load->database('webstore', TRUE);
     }
     function write_code($path, $folder, $file_name,$out_put)
     {
       $dir = $path.$folder;          
        if (!file_exists($dir)) 
         mkdir($dir, 0777, true);
       $file = fopen($dir."/".$file_name,"w");
       fwrite($file,$out_put);
       fclose($file);
     }
     public function duplicate_default_websotre_files($nice_store_name)
     {         
         $this->load->database('default',TRUE);
         $dafault_source = $this->Configuration_model->get_configuration_value('web-store-path')."default_web_store_files/";
         $dafault_destination = $this->Configuration_model->get_configuration_value('web-store-path').$nice_store_name."/";
         $this->recurse_copy($dafault_source,$dafault_destination);
         $this->load->database('webstore', TRUE);
     }
     function recurse_copy($src,$dst) 
     {
      $dir = opendir($src); 
      @mkdir($dst); 
      while(false !== ( $file = readdir($dir)) ) 
      { 
          
        if (( $file != '.' ) && ( $file != '..' )) 
        { 
            if ( is_dir($src . '/' . $file) ) 
                $this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            else 
                copy($src . '/' . $file,$dst . '/' . $file); 
        } 
      } 
      closedir($dir); 
     }
     public function test()
     {
     //$this->build_webstore("rockscripts");
      $this->import_store_categories_from_designmanager();
     }
     
}  
