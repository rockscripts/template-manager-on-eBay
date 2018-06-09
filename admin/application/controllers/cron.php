<?php
 class Cron extends CI_Controller {
 ///usr/bin/curl --user-agent cPanel-Cron http://rockscripts.org/designmanager/cron/update
    function __construct()
    {
        parent::__construct();
  
        // this controller can only be called from the command line
       // if (!$this->input->is_cli_request()) show_error('Direct access is not allowed');
    }
 
    ######################## BG DESIGNMANAGER CRONJOBS #####################
    function dm_sync_listings()
    {
        $this->load->model('Ebaydesigns_model');
      $ebay_designs = $this->Ebaydesigns_model->get_ebay_designs();
      if($ebay_designs):
          
          foreach($ebay_designs as $ebay_design):
               $user = $this->Ebaydesigns_model->get_user_details($ebay_design->id_user);
                    $this->session->set_userdata('id_ebay_design', $ebay_design->id_ebay_design);
                    $this->session->set_userdata('user_id', $ebay_design->id_user);
                    $this->session->set_userdata('application', "design-manager");
                    $this->session->set_userdata('id_listing_design', $ebay_design->id_listing_design);
                    $this->session->set_userdata('id_home_design', $ebay_design->id_home_design);
                    $this->session->set_userdata('role_id', 2);
                    $this->session->set_userdata('username', $user->username);
                    $this->load->library('../controllers/rocklister/rocklister');
                    $data = $this->rocklister->cron_items_sync(); 
                    $items_collection_to_import = $data["items_collection_to_import"];
                    foreach($items_collection_to_import as $item_id):
                        $this->rocklister->cron_item_import_single($item_id);
                    endforeach;
                    sleep(ini_get('max_execution_time') + 10);   
          endforeach;
      endif; 
    }
    ######################## EOF DESIGNMANAGER CRONJOBS #####################
    
    ######################## BG WEBSTORES CRONJOBS #####################
    function mg_sync_listings()
    {
      $this->load->model('Ebaydesigns_model');
      $ebay_designs = $this->Ebaydesigns_model->get_ebay_designs();
      if($ebay_designs):
          
          foreach($ebay_designs as $ebay_design):
                    $user = $this->Ebaydesigns_model->get_user_details($ebay_design->id_user);
                    $this->session->set_userdata('id_ebay_design', $ebay_design->id_ebay_design);
                    $this->session->set_userdata('user_id', $ebay_design->id_user);
                    $this->session->set_userdata('application', "design-manager");
                    $this->session->set_userdata('id_listing_design', $ebay_design->id_listing_design);
                    $this->session->set_userdata('id_home_design', $ebay_design->id_home_design);
                    $this->session->set_userdata('role_id', 2);
                    $this->session->set_userdata('username', $user->username);
                    $this->load->library('../controllers/webstores/product');
                    $this->product->add_products(); 
                    sleep(ini_get('max_execution_time') + 10);
          endforeach;
      endif;      
    }
    function mg_sync_categories()
    {
      $this->load->model('Ebaydesigns_model');
      $ebay_designs = $this->Ebaydesigns_model->get_ebay_designs();
      if($ebay_designs):
          
          foreach($ebay_designs as $ebay_design):
                    $user = $this->Ebaydesigns_model->get_user_details($ebay_design->id_user);
                    $this->session->set_userdata('id_ebay_design', $ebay_design->id_ebay_design);
                    $this->session->set_userdata('user_id', $ebay_design->id_user);
                    $this->session->set_userdata('application', "design-manager");
                    $this->session->set_userdata('id_listing_design', $ebay_design->id_listing_design);
                    $this->session->set_userdata('id_home_design', $ebay_design->id_home_design);
                    $this->session->set_userdata('role_id', 2);
                    $this->session->set_userdata('username', $user->username);
                    $this->load->library('../controllers/webstores/webstore');
                    $this->webstore->import_store_categories_from_designmanager(); 
                    sleep(ini_get('max_execution_time') + 10);
          endforeach;
      endif;      
    }
    ######################## EOF WEBSTORES CRONJOBS #####################
}