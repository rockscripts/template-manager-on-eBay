<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item extends CI_Controller 
{
   public function __construct()
     {
         
        parent::__construct();    
         validate_user();
         validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
       // $this->load->helper('ckeditor');
        $this->load->model('Ebaydesigns_model');
        $this->load->model('Storedesign_model');
        $this->load->model('Listingdesign_model');
        $this->load->model('Ebayapi_model');
        $this->load->helper('load_controller');
     }  
    
     public function get_all_items($id_user,$id_ebay_design)
     {
         return $this->Ebayapi_model->get_all_items($id_user,$id_ebay_design);
     }
     public function get_active_items($id_user,$id_ebay_design)
     {
         return $this->Ebayapi_model->get_active_items($id_user,$id_ebay_design);
     }
     public function get_sold_items($id_user,$id_ebay_design)
     {
         return $this->Ebayapi_model->get_sold_items($id_user,$id_ebay_design);
     }
     public function get_unsold_items($id_user,$id_ebay_design)
     {
         return $this->Ebayapi_model->get_unsold_items($id_user,$id_ebay_design);
     }
     public function get_deleted_items($id_user,$id_ebay_design)
     {
         return $this->Ebayapi_model->get_deleted_items($id_user,$id_ebay_design);
     }
     public function get_prepared_items($id_user,$id_ebay_design)
     {
         return $this->Ebayapi_model->get_prepared_items($id_user,$id_ebay_design);
     }
     public function get_item($item_id)
     {
         return $this->Ebayapi_model->item_get($item_id);
     }
     public function item_update_status($item_id, $status)
     {
          return $this->Ebayapi_model->item_update_status($item_id, $status);
     }
}


?>