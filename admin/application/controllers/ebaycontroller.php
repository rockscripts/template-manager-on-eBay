<?php
 error_reporting(true);

require_once 'ebaycalls/GetSellerList.php';
require_once 'ebaycalls/GetItem.php';
require_once 'ebaycalls/GeteBayOfficialTime.php';
require_once 'ebaycalls/GetMyeBaySelling.php';
require_once 'ebaycalls/ReviseItem.php';
require_once 'ebaycalls/RelistItem.php';
require_once 'ebaycalls/EndItem.php';
require_once 'ebaycalls/GetStoreCustomPage.php';
require_once 'ebaycalls/SetStoreCustomPage.php';
require_once 'ebaycalls/GetOrders.php';

class Ebaycontroller extends CI_Controller 
{
   public $token;   
   
   public function __construct() 
   {
      parent::__construct(); 
       validate_user();
       validate_application();
       
      $this->load->model('Storedesign_model');
      $this->load->model('Itemspecifics_model');
      $this->load->model('Ebayapi_model');
      $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
      $id_user           = $this->session->userdata( 'user_id' );
      $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$id_user);
      $this->load->helper('url');
      $this->token = $store_settings->token;
    }
     /**
     * Ebaycontroller::import_items()     
     * Import each item itno tool database
     */
    public function import_items($type)
    {
      $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
      $id_user           = $this->session->userdata( 'user_id' );
      $items_collection = false;
      $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$id_user );
       
     /*prepare classification*/
  /*    $this->Ebayapi_model->reset_unsold_items($id_user, $id_ebay_design);
      $this->Ebayapi_model->circumvent_MYSQL_GO_EWAY();
      $this->Ebayapi_model->reset_sold_items($id_user, $id_ebay_design);
      $this->Ebayapi_model->circumvent_MYSQL_GO_EWAY();*/
      /*define items*/
      /*$this->classified_sold_items(array());
      $this->Ebayapi_model->circumvent_MYSQL_GO_EWAY();
      $this->classified_unsold_items(array());
      $this->Ebayapi_model->circumvent_MYSQL_GO_EWAY();
      $this->classified_deleted_items(array());*/
      if($store_settings->import_mode=="only_new_items"):
          $this->import_seller_list();
          $items_collection = $this->get_seller_list_unimported($id_user,$id_ebay_design);
          else:
        $seller_list = $this->Ebayapi_model->get_seller_list($id_user,$id_ebay_design);
       if(sizeof($seller_list)<1000 && isset($_SESSION["pages_to_import"])):
            $items_collection = $this->import_seller_list(); 
        endif;
       if(!isset($_SESSION["pages_to_import"])):
               $items_collection = $this->import_seller_list(); 
            endif; 
             if($type=="active"):          
          $this->Ebayapi_model->circumvent_MYSQL_GO_EWAY();
          $items_collection = $this->get_active_listings();
      endif;
      endif;            
      return $items_collection;
    }
    public function get_seller_list_unimported($id_user,$id_ebay_design)
    {
      $items_collection = false;
      $seller_list_unimported = $this->Ebayapi_model->get_seller_list_unimported($id_user,$id_ebay_design);  
      
      $index = 0;
      foreach($seller_list_unimported as $item):
          $items_collection[$index]["ItemID"] = $item->item_id;
          $index++;
      endforeach;
      return $items_collection;
    }       
    public function item_import_single($item_id)
    {   
          $json = array();
          if($item_id != ""):
          $item = $this->get_item($item_id);          
          $data = $this->build_items_data($item);
          $this->import_item_specifics($item);
          $result = $this->Ebayapi_model->import_item($data);
          
           if($result=="updated"):
              $json["title"] = htmlentities ( $data["Title"]);
              $json["status"] = "updated";
              $this->Ebayapi_model->item_picture_delete($item->Item->ItemID);
              else:
                 if($result):
              $json["title"] = htmlentities ( $data["Title"]);
              $json["status"] = "added";          
          endif; 
          endif;
          $this->import_item_pictures($item);
          $this->update_import_status($item_id,"true");
          
            return $json;  
     endif;
    }
    
    /*
     *update_import_status 
     * this function update status on seller list table to know if it was imported
     * it is used if import mode settign is equals to "only new items"
     */
    public function update_import_status($item_id, $status)
    {
       $this->Ebayapi_model->update_import_status($item_id, $status);
    }
    
    public function test_import_single()
    {   
          $item = $this->get_item(111417506621); 
          $this->import_item_specifics($item);
         /* echo "<pre>";
          print_r($item);*/
    }
    /**
     * Ebaycontroller::classified_sold_items()     
     * Define if items was sold
     */ 
    public function classified_sold_items($params)
    {
        
        $myEbaySelling = new GetMyeBaySelling();
        $object_response = $myEbaySelling->get_sold_items();
        for($i = 0; $i < sizeof($object_response->SoldList->OrderTransactionArray);$i++):
            $item_id = $object_response->SoldList->OrderTransactionArray[$i]->Transaction->Item->ItemID;
            $this->Ebayapi_model->classified_sold_items($item_id);
        endfor;
    }
    //DEVELOP//
    public function import_sold_items_analisis()
    {
        
        $myEbaySelling = new GetMyeBaySelling();
        $object_response = $myEbaySelling->get_sold_items();
        echo "<pre>";
        print_r($object_response);die();
        for($i = 0; $i < sizeof($object_response->SoldList->OrderTransactionArray);$i++):
            $item_id = $object_response->SoldList->OrderTransactionArray[$i]->Transaction->Item->ItemID;
            $this->Ebayapi_model->classified_sold_items($item_id);
        endfor;
    }
    public function import_sold_items_analisis1()
    {
        
        $Orders = new GetOrders();
        $object_response = $Orders->get_orders();
        $data = array();             
       for($i = 0; $i < sizeof($object_response->OrderArray);$i++):
         $data["Title"] = $item_title = $object_response->OrderArray[$i]->TransactionArray[0]->Item->Title;
        // $data["AmountPaid"] = $amount_paid = $object_response->OrderArray[$i]->AmountPaid->value;
         $data["Price"] = $item_price = $object_response->OrderArray[$i]->TransactionArray[0]->TransactionPrice->value;
         $data["QuantityPurchased"] = $quantity_purchased = $object_response->OrderArray[$i]->TransactionArray[0]->QuantityPurchased;
         $this->Ebayapi_model->import_order($data);        
        endfor;
       
    }
    public function get_orders()
    {
     $orders = $this->Ebayapi_model->get_orders();  
      $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Installation Wizard";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data["passed_to_view"] = "";
       $content_data["orders"] =  $orders;
       $this->template->load('analisis/index', $content_data); 
     
    }
    //DEVELOP//
    public function classified_unsold_items($params)
    {        
        $myEbaySelling = new GetMyeBaySelling();
        $object_response = $myEbaySelling->get_unsold_items();
        for($i = 0; $i < sizeof($object_response->UnsoldList->ItemArray);$i++):
            $item_id = $object_response->UnsoldList->ItemArray[$i]->ItemID;
            $this->Ebayapi_model->classified_unsold_items($item_id);
        endfor;
    }
     public function classified_deleted_items($params)
    {
        $myEbaySelling = new GetMyeBaySelling();
        $object_response = $myEbaySelling->get_deleted_from_unsold_items();
        for($i = 0; $i < sizeof($object_response->DeletedFromUnsoldList->ItemArray);$i++):
            $item_id = $object_response->DeletedFromUnsoldList->ItemArray[$i]->ItemID;
            $this->Ebayapi_model->classified_deleted_items($item_id);
        endfor;
        $object_response1 = $myEbaySelling->get_deleted_from_sold_items ();         
        for($i = 0; $i < sizeof($object_response1->DeletedFromSoldList->ItemArray);$i++):
            $item_id = $object_response1->DeletedFromSoldList->ItemArray[$i]->ItemID;
            $this->Ebayapi_model->classified_deleted_items($item_id);
        endfor;         
    }
    /**
     * Ebaycontroller::import_item_pictures()     
     * Import pictures to database
     * @param item objects
     */
    public function import_item_pictures($item)
    {
        $id_user           = $this->session->userdata( 'user_id' );
        $array_pictures = $item->Item->PictureDetails->PictureURL;
        foreach($array_pictures as $picture_url):
            $this->Ebayapi_model->item_picture_import($id_user,$item->Item->ItemID,$picture_url);
        endforeach;
    }
    /**
     * Ebaycontroller::build_items_data()     
     * Get data to insert or update an item
     * @param item object
     * @return data array
     */
    public function build_items_data($item)
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
        $id_user           = $this->session->userdata( 'user_id' );
        $payment_methods = "";
        foreach($item->Item->PaymentMethods as $payment_method):
            $payment_methods .= "$payment_method"."<>";
        endforeach;
        $data = array(
                                'ItemID' => "{$item->Item->ItemID}",
                                'Title'=> utf8_encode ($item->Item->Title),
                                'Description' => utf8_encode($item->Item->Description),
                                'ConvertedBuyItNowPriceValue' => $item->Item->ListingDetails->ConvertedBuyItNowPrice->value,
                                'ConvertedStartPriceValue' => $item->Item->ListingDetails->ConvertedStartPrice->value,
                                'ConvertedReversePriceValue' => $item->Item->ListingDetails->ConvertedReservePrice->value,
                                'ViewItemURL' => $item->Item->ListingDetails->ViewItemURL,
                                'ViewItemURLForNaturalSearch' => $item->Item->ListingDetails->ViewItemURLForNaturalSearch,
                                'LayoutID' => $item->Item->ListingDesigner->LayoutID,
                                'ThemeID' => $item->Item->ListingDesigner->ThemeID,
                                'ListingDuration' => $item->Item->ListingDuration,
                                'ListingType' => $item->Item->ListingType,
                                'Location' => $item->Item->Location,
                                'PaymentMethods' => $payment_methods,
                                'PayPalEmailAddress' => $item->Item->PayPalEmailAddress,
                                'PrimaryCategoryID' => $item->Item->PrimaryCategory->CategoryID,
                                'PrimaryCategoryCategoryName' => $item->Item->PrimaryCategory->CategoryName,
                                'ReversePriceValue' => $item->Item->ReservePrice->value,
                                'StoreCategoryID' => $item->Item->Storefront->StoreCategoryID,
                                'StoreCategory2ID' => $item->Item->Storefront->StoreCategory2ID,
                                'Quantity' => $item->Item->Quantity,
                                'Currency' => $item->Item->Currency,
                                         'StartTime1' => $item->Item->ListingDetails->StartTime,
                                         'EndTime1' => $item->Item->ListingDetails->EndTime,
                                'ListingStatus' => $item->Item->SellingStatus->ListingStatus,
                                'id_ebay_design' => $id_ebay_design,
                                'id_user' => $id_user,
                                );
       return $data;
        
    }
     public function import_item_specifics($item)
    {        
         $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
         $id_user           = $this->session->userdata( 'user_id' );
             if(is_array($item->Item->ItemSpecifics)):
                 foreach($item->Item->ItemSpecifics as $item_specific):
                 $data = array("name"=>htmlentities ($item_specific->Name),"id_ebay_design"=>$id_ebay_design,"id_user"=>$id_user);
                 $this->Itemspecifics_model->import_items_specifics($data);
                 if(is_array($item_specific->Value)):
                   foreach($item_specific->Value as $item_specific_value):
                          $data = array("name"=>htmlentities ($item_specific->Name),"value"=>htmlentities($item_specific_value),"id_ebay_design"=>$id_ebay_design,"id_user"=>$id_user);
                          $this->Itemspecifics_model->import_items_specifics_values($data);                
                   endforeach;
                 endif;
                 endforeach;
             endif;
       
         
         
        
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
        $id_user           = $this->session->userdata( 'user_id' );
        $data_items_specifics    = array(
                                'ItemID' => "{$item->Item->ItemID}",
                                'Title'=> htmlentities ($item->Item->Title),
                                'Description' => $item->Item->Description,
                                'ConvertedBuyItNowPriceValue' => $item->Item->ListingDetails->ConvertedBuyItNowPrice->value,
                                'ConvertedStartPriceValue' => $item->Item->ListingDetails->ConvertedStartPrice->value,
                                'ConvertedReversePriceValue' => $item->Item->ListingDetails->ConvertedReservePrice->value,
                                'ViewItemURL' => $item->Item->ListingDetails->ViewItemURL,
                                'ViewItemURLForNaturalSearch' => $item->Item->ListingDetails->ViewItemURLForNaturalSearch,
                                'LayoutID' => $item->Item->ListingDesigner->LayoutID,
                                'ThemeID' => $item->Item->ListingDesigner->ThemeID,
                                'ListingDuration' => $item->Item->ListingDuration,
                                'ListingType' => $item->Item->ListingType,
                                'Location' => $item->Item->Location,
                                'PaymentMethods' => $payment_methods,
                                'PayPalEmailAddress' => $item->Item->PayPalEmailAddress,
                                'PrimaryCategoryID' => $item->Item->PrimaryCategory->CategoryID,
                                'PrimaryCategoryCategoryName' => $item->Item->PrimaryCategory->CategoryName,
                                'ReversePriceValue' => $item->Item->ReservePrice->value,
                                'StoreCategoryID' => $item->Item->Storefront->StoreCategoryID,
                                'StoreCategory2ID' => $item->Item->Storefront->StoreCategory2ID,
                                'Quantity' => $item->Item->Quantity,
                                'Currency' => $item->Item->Currency,
                                         'StartTime1' => $item->Item->ItemSpecifics->StartTime,
                                         'EndTime1' => $item->Item->ListingDetails->EndTime,
                                'ListingStatus' => $item->Item->SellingStatus->ListingStatus,
                                'id_ebay_design' => $id_ebay_design,
                                'id_user' => $id_user,
                                );
       return $data;
        
    }
    
     /**
     * Ebaycontroller::get_item()     
     * Get items collection to import
     * @param item id
     * @return item object
     */
    public function get_item($itemID)
    {        
        /*get items list*/
        $items = array('ItemID' => $itemID);        
        $GetItem = new GetItem();      
        $GetItem->Array_itemsID = $items;          
        $item_object = $GetItem->get_item();
        return $item_object;
    }
       
   /**
     * Ebaycontroller::get_seller_list()     
     * Get items collection to import
     * @return sellinglist
     */
    public function get_seller_list()
    {       
        /*get items list*/
        $GetSellerList = new GetSellerList();           
        $res = $GetSellerList->get_list($this->get_ebay_official_time());
        return $res;
    }
      public function get_active_listings()
    {       
        /*get items list*/
        $GetMyeBaySelling = new GetMyeBaySelling();           
        $items_collection = $GetMyeBaySelling->get_active_items();
         return $items_collection;
    }
     /*public function get_active_listings()
    {       
        /*get items list*/
       /* $GetMyeBaySelling = new GetMyeBaySelling();           
        $seller_list = $GetMyeBaySelling->get_active_items();
        $items_collection = array();
        $index = 0;
         for($i=0;$i<sizeof($seller_list->ActiveList->ItemArray);$i++):             
          $items_collection[$index]["ItemID"] = $seller_list->ActiveList->ItemArray[$i]->ItemID;
         $index ++;
         endfor;
         return $items_collection;
    }*/
    public function get_active_items_total_pages()
    {       
        /*get items list*/
        $GetMyeBaySelling = new GetMyeBaySelling();           
        $pages_info = $GetMyeBaySelling->get_active_items_total_pages();
        $total_pages = $pages_info["total_pages"];
         return $total_pages ;
    }
     /**
     * Ebaycontroller::import_seller_list()     
     * Get items collection to import
     * @return items_collection
     */
    public function import_seller_list()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
        $id_user           = $this->session->userdata( 'user_id' );
       $seller_list = $this->get_seller_list(); 
       $items_collection = array();
       $index = 0;
       for($i=0;$i<sizeof($seller_list->ItemArray);$i++):
           $data = array(
                                'item_id' => $seller_list->ItemArray[$i]->ItemID,
                                'start_time'=>$seller_list->ItemArray[$i]->ListingDetails->StartTime,
                                'end_time' => $seller_list->ItemArray[$i]->ListingDetails->EndTime,
                                'id_ebay_design' => $id_ebay_design,
                                'user_id' => $id_user,
                                );
           
           if($this->Ebayapi_model->import_seller_list($data)):
               $items_collection[$index]["ItemID"] = $data["item_id"];
           $index++;
           endif;    
           $this->Ebayapi_model->circumvent_MYSQL_GO_EWAY();
       endfor;
       return $items_collection;
    }    
    
      /**
     * GeteBayOfficialTime::get_ebay_official_time()     
     * get ebay official time
     * @return Timestamp current ebay date
     */
    public function get_ebay_official_time()
    {
        $ebay_official_time = new GeteBayOfficialTime();
        $object = $ebay_official_time->get_ebay_official_time();
        if($object->Ack=="Failure"):
         $errors = $this->is_token_revoked_by_user($object);
         if(is_array($errors)):
             return $errors; 
         endif;
        endif;
        return $object->Timestamp;
    }
    public function validate_token_access()
    {
     $ebay_official_time = $this->get_ebay_official_time();
     if(is_array($ebay_official_time)):
         return false;
     endif;
     return true;
    }
    
    public function is_token_revoked_by_user($errors)
    {
        $errors_string = array();
        for($i=0;$i<sizeof($errors->Errors);$i++):
            $errors_string[] = $errors->Errors[$i]->LongMessage;
        endfor;
        if (sizeof($errors_string)>0)
        return $errors_string;
        else
        return false;
    }
     /**
     * Update Listing Description on eBay 
      * ebay_update_listing_description
     * @return 
     */
    public function ebay_update_listing_description($params)
    {
        $reviseItem = new ReviseItem();  
        $response = $reviseItem->revise_item($params);
      /*  echo "<pre>";
        print_r($response);*/
        return $response;
    }
    /**
     * relist item on eBay 
      * ebay_relist_item
     * @return 
     */
    public function ebay_relist_item($item_id)
    {
        $reviseItem = new RelistItem();  
        $response = $reviseItem->revise_item($item_id);
        return $response;
    }
    /**
     * end item on eBay 
      * ebay_end_item
     * @return 
     */
    public function ebay_end_item($item_id)
    {
        $end_item = new EndItem();  
        $response = $end_item->end_item($item_id);
        return $response;
    }
    
     public function ebay_get_store_pages()
    {
        $GetStoreCustomPage = new GetStoreCustomPage();  
        $response = $GetStoreCustomPage->get_store_pages();
        return $response;
    }
    public function ebay_get_store_page($ebay_page_id)
    {
        $GetStoreCustomPage = new GetStoreCustomPage();  
        $response = $GetStoreCustomPage->get_store_page($ebay_page_id);
        return $response;
    }
    public function ebay_set_store_page($name,$content)
    {
        $SetStoreCustomPage = new SetStoreCustomPage();  
        $response = $SetStoreCustomPage->save_store_page($name,$content);
        return $response;
    }
    /**
     * Test Funcions
     */
     public function get_seller_list1()
    {       
        /*get items list*/
        $GetSellerList = new GetSellerList();           
        $res = $GetSellerList->get_list($this->get_ebay_official_time());
        return $res;
    }
    public function get_item1($itemID)
    {        
        /*get items list*/
        $items = array('ItemID' => 281201466046 );        
        $GetItem = new GetItem();      
        $GetItem->Array_itemsID = $items;          
        $item_object = $GetItem->get_item();
        echo "<pre>";
        echo print_r($item_object->Item) ;
      //  echo "<pre>";
       //   var_dump($item_object);
 
        }
        public function fix_utf($text)
    {
      return  utf8_decode(html_entity_decode($text, ENT_QUOTES, 'UTF-8'));
    }
}

?>