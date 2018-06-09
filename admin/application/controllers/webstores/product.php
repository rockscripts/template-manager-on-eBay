<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller { 
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
        $this->load->model('Ebayapi_model');
        $this->load->model('Webstores_model');
        $this->load->database('default',TRUE);
        $this->webstore_db = $this->load->database('webstore', TRUE);
        $this->load->library('Mage_api');
        $this->load->library('../controllers/store_design/item');
        
        $this->load->helper("simple_html_dom");
     }
     
    public function add_products()
     {
        $id_ebay_design = $this->session->userdata('id_ebay_design');
        $id_user = $this->session->userdata( 'user_id' );
        $active_items = $this->item->get_active_items($id_user,$id_ebay_design);
        if($active_items): 
            $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $id_user);
            $websites = array($webstore_information->id_website);   
            $categories = array($webstore_information->id_category_root);
            foreach ($active_items as $item):
              if($this->Webstores_model->get_webstore_product_bridge($item->ItemID, $id_ebay_design, $id_user)){
                $id_mg_category = $this->get_mg_category($item->StoreCategoryID);
                if($id_mg_category)
                    $categories[] = $id_mg_category;
                if($item->StoreCategory2ID > 0):
                $id_mg_category = $this->get_mg_category($item->StoreCategory2ID);

                if($id_mg_category)
                    $categories[] = $id_mg_category;
                endif;
                 $this->load->database('default', TRUE); 
                  $all_pictures = $this->Ebayapi_model->item_picture_get($item->ItemID); 
                  $newProductData = $this->build_product_data($item,$websites,$categories);
                  $ws_product_id = $this->add_product("simple",4,$item->ItemID,$newProductData);
                  $this->Webstores_model->add_product_bridge($ws_product_id,$item->ItemID,$id_ebay_design,$id_user);
                   $this->Webstores_model->update_mg_listing_url($ws_product_id,$item->ViewItemURL);
                  if($all_pictures):
                    foreach ($all_pictures as $item_picture):
                     $this->add_product_image($ws_product_id,$item_picture->picture_url,$item->Title);
                    endforeach;  
                  endif;     
                  $this->load->database('webstore', TRUE);   
              }
              else {
               /*update*/   
               $sku =   $item->ItemID." ";
               $newProductData = $this->build_product_data($item,$websites,$categories);
               $this->update_product($sku,$newProductData);
               if(!$this->sync_ended_listing($item))
                 $this->update_product($sku,$newProductData);
              }
                          
            endforeach;
        endif;               
     }
     public function update_product($sku,$newProductData)
     {
      return $this->mage_api->catalog_product_update($sku,$newProductData);       
     }
     public function add_single_product($item)
     {
        $id_ebay_design = $this->session->userdata('id_ebay_design');
        $id_user = $this->session->userdata( 'user_id' ); 
        $webstore_information = $this->Webstores_model->get_webstore_information($id_ebay_design, $id_user);
        $websites = array($webstore_information->id_website);   
        $categories = array($webstore_information->id_category_root);            
        $id_mg_category = $this->get_mg_category($item->StoreCategoryID);
        if($id_mg_category)
            $categories[] = $id_mg_category;
        if($item->StoreCategory2ID > 0):
        $id_mg_category = $this->get_mg_category($item->StoreCategory2ID);

        if($id_mg_category)
            $categories[] = $id_mg_category;
        endif;
          if(!$this->Webstores_model->get_webstore_product_bridge($item->ItemID, $id_ebay_design, $id_user)){
           $this->load->database('default', TRUE); 
          $all_pictures = $this->Ebayapi_model->item_picture_get($item->ItemID); 
          $newProductData = $this->build_product_data($item,$websites,$categories);
          $ws_product_id = $this->add_product("simple",4,$item->ItemID,$newProductData);
           $this->Webstores_model->add_product_bridge($ws_product_id,$item->ItemID,$id_ebay_design,$id_user);
           $this->Webstores_model->update_mg_listing_url($ws_product_id,$item->ViewItemURL);
          if($all_pictures):
            foreach ($all_pictures as $item_picture):
             $this->add_product_image($ws_product_id,$item_picture->picture_url,$item->Title);
            endforeach;  
          endif;   
          $this->load->database('webstore', TRUE);   
          }
          else
          {
           $sku =   $item->ItemID." ";
           $newProductData = $this->build_product_data($item,$websites,$categories);
           if(!$this->sync_ended_listing($item))
             $this->update_product($sku,$newProductData); 

          }
               
     }
     function sync_ended_listing($item)
    {
               $end_time = strtotime($item->end_time) ;
               $difference = $end_time-time();
               $days =/* floor*/($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
              
               if($days<=0):
                   $this->delete_product($item->ItemID);
                   $this->Webstores_model->delete_webstore_product_bridge($item->ItemID);
                return true;
               endif;
               return false;
    }
    public function delete_product($product_id)
    {
        $sku = $product_id." ";
        return  $this->mage_api->catalog_product_delete($sku);
    }
     public function get_single_product($sku)
     {
      $sku = "$sku ";
      $arguments = array( $sku, NULL);
      $product = $this->mage_api->catalog_product_info($sku,null,"sku");
      if(isset($product)):
        return $product;
      else:
          return false;
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
     public function get_mg_category($cat_id)
     {
        $id_user = $this->session->userdata( 'user_id' );
        $this->load->database('default',TRUE);
        $categoy = $this->Webstores_model->get_category($cat_id);
        $category_bridge = $this->Webstores_model->get_webstore_category_bridge($categoy->id,$id_user);
        if($category_bridge):
          return $category_bridge->id_mg_category;
        else:
            return false;
        endif;        
        $this->load->database('webstore', TRUE);         
     }
     public function build_product_data($item,$websites,$categories)
     {
       $newProductData                     =  array();
       $newProductData["name"]               = $item->Title;
       $newProductData["description"]        = $this->extract_description($item->ItemID, $item->Description,"ID","rockscripts-description");
       $newProductData["short_description"]  = 'Short Description';
       $newProductData["websites"]	    = /*array(22)*/$websites;
       $newProductData["categories"]         = /*array(147)*/$categories;
       $newProductData["status"]             = 1;
       $newProductData["price"]              = $item->ConvertedStartPriceValue;
       $newProductData["tax_class_id"]       = 2;
       $newProductData["weight"]             = 1;  
       return $newProductData;
     }
     public function add_product($type,$set,$sku,$newProductData)
    {        
      $product_id_added = $this->mage_api->catalog_product_create($type,$set,$sku,$newProductData);
      return $product_id_added;
    }
     public function add_product_image($ws_product_id,$url,$product_name)
     {
       $product_id = $ws_product_id;        
       $image_name = $product_name/*$this->get_file_name_from_url($url)*/;
       $headers = get_headers($url, 1);
       $images = array(
       array
        (
            'name' => $image_name,
            'content' => base64_encode(file_get_contents($url)),
            'mime' => $headers["Content-Type"]
        )); 
       foreach ($images as $image) 
           {
             $this->mage_api->catalog_product_attribute_media_create($product_id,array('file'=>$image, 'label'=>$image['name'], 'position'=>'1', 'types'=>array('small_image','thumbnail','image'), 'exclude'=>0));  
           }
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
                return $new_description;
                endforeach;
    }
     public function get_file_name_from_url($url)
     {  
        return  basename($url); 
     }
}  
