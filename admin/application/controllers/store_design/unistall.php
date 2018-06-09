<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unistall extends CI_Controller { 
public  $sessionID;
     public function __construct()
     {
        parent::__construct();    
         validate_user();
         validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
       // $this->load->helper('ckeditor');
        $this->load->model('Ebayapi_model'); 
        $this->load->model('Ebaydesigns_model'); 
        $this->load->model('Storedesign_model');
        $this->load->model('Configuration_model');
        $this->load->library('../controllers/store_design/ebayapi');       
       $this->sessionID = null;
     }
     /*Load all listings designs purchased*/
    public function index()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Uninstall";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data["passed_to_view"] = "";              
       $content_data["ebay_global"] = $this->Ebayapi_model->get_global_sites();
       $this->template->load('install_wizard/unistall', $content_data); 
     }
     public function uninstall_store_front()
     {
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $backup_id = $this->input->post('backup_id');
       $backup = $this->Storedesign_model->get_store_backup($backup_id);
       $this->load->library('../controllers/store_design/ebayapi');
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$content_data["user_id"] );
       $this->backup_store_front($store_settings->token, $store_settings->ebay_user_id);
       $eBayAPI = new Ebayapi(); 
       $eBayAPI->Set_API_Data();
       if($backup->custom_header=="")
           $custom_header = "add your custome code here";
       else
           $custom_header = $backup->custom_header;
       /*run installation*/
       $body = <<<BODY
<?xml version="1.0" encoding="utf-8"?>
<SetStoreRequest xmlns="urn:ebay:apis:eBLBaseComponents">
  <RequesterCredentials>
    <eBayAuthToken>{$store_settings->token}</eBayAuthToken>
  </RequesterCredentials>
    <Store>
    <CustomHeader><![CDATA[{$custom_header}]]></CustomHeader>
    <CustomHeaderLayout>{$backup->custom_header_layout}</CustomHeaderLayout>
    <CustomListingHeader>
      <AddToFavoriteStores>true</AddToFavoriteStores>
      <DisplayType>{$backup->header_style}</DisplayType>
      <SearchBox>true</SearchBox>
      <SignUpForStoreNewsletter>true</SignUpForStoreNewsletter>
    </CustomListingHeader>    
    <HeaderStyle>{$backup->header_style}</HeaderStyle>
    <HomePage>{$backup->home_page}</HomePage>
    <ItemListLayout>{$backup->item_list_layout}</ItemListLayout>
    <ItemListSortOrder>{$backup->item_list_sort_order}</ItemListSortOrder>
  </Store>
</SetStoreRequest>
BODY;
   // echo $body;
       $eBayAPI->set_store($store_settings->token, $content_data["user_id"] , $body);
     }
     
      public function backup_store_front($token, $ebay_user_id)
     {
          $content_data["user_id"]  = $this->session->userdata( 'user_id' );
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
                                                 "id_ebay_design" =>"1",// $id_ebay_design
                                                 "date_added" =>"$datenow" ,    
                                                 "reazon" =>"Store Unistalled"   
                                                 );
           $this->Ebayapi_model->backup_store_front($store_backup);
     }
     
     public function send_client_to_ebay_authorization_page()
     {
         $user_id  = $this->session->userdata( 'user_id' );
        // $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
         $this->load->library('../controllers/store_design/ebayapi');
         $eBayAPI = new Ebayapi(); 
         $eBayAPI->Set_API_Data();
         $this->sessionID = $eBayAPI->TradeAPI( "GetSessionID", "\n  <RuName>{$eBayAPI->run_name}</RuName>\n", 'SessionID' ) ;
         $ebay_site = $this->input->get('ebay_site');          
         $information = array("ebay_session_id"=>$this->sessionID, "user_id"=>$user_id, "date_inserted"=>$this->MySQL_NOW(),"site_id"=>$ebay_site,"installed"=>"false");         
         $this->Ebayapi_model->insert_new_istallation($user_id,$information);        
         $eBayAPI->send_client_to_ebay_authorization_page($ebay_site,$this->sessionID);         
     }
     public function fetch_token()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Installation Wizard";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data["passed_to_view"] = "";    
       $user_id  = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $installation_wizard = $this->Ebayapi_model->get_installation_wizard($user_id);
       $this->load->library('../controllers/store_design/ebayapi');
       $eBayAPI = new Ebayapi(); 
       $eBayAPI->Set_API_Data();
        //echo "**".$store_setting->session_id."**";die("***");
        $sessionID = (string)$installation_wizard->ebay_session_id;
        $fetch_token = $eBayAPI->TradeAPI( "FetchToken", "\n <SessionID>$sessionID</SessionID>\n", 'eBayAuthToken' ) ;
        $information = array("token"=>$fetch_token);
        $this->Ebayapi_model->update_installation($user_id,$information);
        $content_data["ebay_global"] = $this->Ebayapi_model->get_global_sites();
        $content_data["fetch_token"] = $fetch_token;
        $content_data["step"] = $this->input->get('step');
        $content_data["installation_wizard_data"] = $installation_wizard;
        $user_store_info  = $this->get_user($fetch_token);
        $global_site =  $this->Ebayapi_model->get_global_site($installation_wizard->site_id);
        $content_data["currency"] = $global_site->currency;
        $content_data["user_store_info"] = $user_store_info;
        /*begin get and save user information in store settings*/
        $user_info = $user_store_info["user_info"];
        $store_info = $user_store_info["store_info"];
        /*recolect vars*/
        $userID = $user_info["userID"];
        $storeURL = $store_info["store_url"];
        $storeName = $store_info["store_name"];
        $siteID = $installation_wizard->site_id;
        $currency = $content_data["currency"];
        $info_to_update = array("ebay_user_id"=>"$userID",
                                               "store_url"=>"$storeURL",
                                               "store_name"=>"$storeName",
                                               "currency"=>"$currency",
                                               "session_id"=>"$sessionID",
                                               "site_id"=> "$siteID",
                                               "token"=>"$fetch_token"
                                            );
                                        /*end*/
       $this->Storedesign_model->save_store_settings($id_ebay_design,$user_id,$info_to_update);
       $content_data["home_design"] = $this->Ebaydesigns_model->get_ebay_home_designs($user_id);
       $this->template->load('install_wizard/index', $content_data);        
     }
     
    public function  install_store_front()
    {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Installation Wizard";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data["passed_to_view"] = "";    
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$content_data["user_id"] );
       $token = $store_settings->token;
       $custom_header = $this->Ebaydesigns_model->get_ebay_home_designs_header_display($content_data["user_id"] );
       /*backup before*/
       $this->backup_store_front($token, $store_settings->ebay_user_id);
       $this->load->library('../controllers/store_design/ebayapi');
       $eBayAPI = new Ebayapi(); 
       $eBayAPI->Set_API_Data();
       /*run installation*/
       $body = <<<BODY
<?xml version="1.0" encoding="utf-8"?>
<SetStoreRequest xmlns="urn:ebay:apis:eBLBaseComponents">
  <RequesterCredentials>
    <eBayAuthToken>$token</eBayAuthToken>
  </RequesterCredentials>
    <Store>
    <CustomHeader><![CDATA[ $custom_header]]></CustomHeader>
    <CustomHeaderLayout>CustomHeaderShown</CustomHeaderLayout>
    <CustomListingHeader>
      <AddToFavoriteStores>false</AddToFavoriteStores>
      <DisplayType>Full</DisplayType>
      <Logo>false</Logo>
      <SearchBox>false</SearchBox>
      <SignUpForStoreNewsletter>false</SignUpForStoreNewsletter>
    </CustomListingHeader>    
    <HeaderStyle>Full</HeaderStyle>
    <HomePage>0</HomePage>
    <ItemListLayout>GalleryView</ItemListLayout>
    <ItemListSortOrder>EndingFirst</ItemListSortOrder>
  </Store>
</SetStoreRequest>
BODY;
       $eBayAPI->set_store($token, $content_data["user_id"] , $body);
       $info = array("is_installed"=>"true");
       $this->Storedesign_model->save_store_settings($id_ebay_design, $content_data["user_id"] , $info);
       $this->copy_default_files($content_data["user_id"] );
       $this->duplicate_default_hosting_design_files($content_data["user_id"]);
       $content_data["step"] = $this->input->get('step');
       $this->template->load('install_wizard/successfull', $content_data); 
    }
     
  function show()
  {
      $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Installation Wizard";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data["passed_to_view"] = "";    
      $this->template->load('install_wizard/successfull', $content_data); 
  }
     
     public function get_user($token=null)
     {
       //$token = "AgAAAA**AQAAAA**aAAAAA**YoigUg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AFloCiAJKBpwidj6x9nY+seQ**OAcCAA**AAMAAA**p9XZ89Bg+Ort5/H+C6veiiqn9Pv1EOyPuxFNJ07Q4t7vnTwvflDZqCUeXglU9tYWacDLGzwIcVeCaM+TPTURBxQeGvld0p++Z1Q85/M3VIiGfY35ZhipnqwK7DwKt7MsrUXcym4z2u75sJJbi08154aMwaId8uj/nmtcNU7OhMY1EZfH4W7psXCiSh61CIKdGYlwk8r3ks9Ua+6khI/uAuMnAFcPc97lA4uj6IR7DvrEPgHiWqCnkegPP/zo/D2PKXQKUvUWOrLqN3K6pfzz7dyRhKossJw6qynQkoliBVyfNkBelastGk1g8As1OzIHNvhgpiEjnHGA7qBxn4XdJD3BuYoNJp0CVMJ16KuykfQd7Em5jGe90wg/SQAJ0dl3yld/hDOtfe+KYrwuOX+XdOpTGqgDEgqb0uPD9MUEAKOFjkIPAKRKiRt13fdFqnV1yROwT4Io2/04IjtJcl0qcVbegBRxUVTbibApnw8KsEVDxgfMdDaVpQTORWYf0V6Iq6Bul4gGJo3WlIYpok+0gF4P9a1p9IXOQRWCqW4leZP9yYVzUnBkCIlwulj8sYOPxemdh15CkopbPhIxSmpE7vCaZmHuSPODi4yS0WIQwX+DhHNT9s06SjXBrmWPEhJQ9kwVhAFAVZ3EvNJ8pjR7waQBato/egIGceH6CbnjJLH3WY6IpvYAD8ytmS77L3jKlD4jKwZgXNIA3O4FOvJEsi0yS/20sQ6XToUnYeL4bpRNMSIB6K2h1JII+ICPqKzZ";
       $this->load->library('../controllers/store_design/ebayapi');
       $eBayAPI = new Ebayapi(); 
       $array_user_information = $eBayAPI->get_user_information($token);
       $array_store_information = $eBayAPI->get_store_information($token, $array_user_information["userID"]);
       $user_store_info = array("user_info"=>$array_user_information,"store_info"=>$array_store_information);
       return $user_store_info;
       
     }
     
        
        
     function MySQL_NOW(){ return date('Y-m-d H:i:s'); }
     public function copy_default_files($id_user)
     {
         $dir_source    = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/default";
         $dir_destination    = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/";
         $default_files = scandir($dir_source);
         for($i=2;$i<sizeof($default_files);$i++):
             $srcfile = $dir_source."/".$default_files[$i];
             $dstfile = $dir_destination."/".$default_files[$i];
             @mkdir(dirname($dstfile), 0777, true);
             copy($srcfile, $dstfile);
         endfor;
     }
     public function duplicate_default_hosting_design_files($user_id)
     {         
         $dafault_source = $this->Configuration_model->get_configuration_value('clients-hosting-path')."default/";
         $dafault_destination = $this->Configuration_model->get_configuration_value('clients-hosting-path').$user_id."/";
         $this->recurse_copy($dafault_source,$dafault_destination);
     }
     function recurse_copy($src,$dst) {
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
}  
