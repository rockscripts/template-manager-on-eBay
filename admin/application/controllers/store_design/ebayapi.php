<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ebayapi extends CI_Controller 
{
    /*Define connection vars*/
    public $endpoint;
    public $api_dev_name;
    public $api_app_name;
    public $api_cert_name;
    public $auth_token;
    public $sessionID;
    public $api_url;
    public $sign_in;
    public $sandbox;
    public $comp_level;
    public $run_name;
    public $call_name;
    public $site_id;
    public $site_domain;
    public $service_proxi;
    /*store data*/
     public $store_name;
          public $session1;
    //https://signin.ebay.sp/ws/eBayISAPI.dll?SignIn&RuName=rockscripts-rockscri-7a27-4-ronge&SessID=OAcCAA**bfdc2a151420a5e6e97460d4ffffb594
    //https://signin.com/ws/eBayISAPI.dll?SignIn&RuName=rockscripts-rockscri-7a27-4-ronge&SessiID=OAcCAA**be6ec4401420a2a6e2b5bec5ffff2b01
    //https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&runame=rockscripts-rockscri-7a27-4-ronge&SessID=OAcCAA**be1a9bab1420a56167376b77ffffab83
    /*build rockscripts and ebay connection API*/
     public function __construct()
     {
        parent::__construct();   
         validate_user();
         validate_application();
         $this->load->model('Ebayapi_model'); 
            $this->load->model('Storedesign_model');
        $this->endpint = "https://api.ebay.com/ws/api.dll";
        $this->api_dev_name = "f579acc9-abc6-4e3b-bd27-8f9bd868b664";
        $this->api_app_name = "rockscri-7a27-4c7a-b095-e8cbe5ebb63b";
        $this->api_cert_name = "1a6a02c2-9eba-4725-aafa-f1b2d519b678";
        $this->auth_token = "AgAAAA**AQAAAA**aAAAAA**Klq0Ug**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AFloCiAJKBpwidj6x9nY+seQ**OAcCAA**AAMAAA**r1CBVFzLdTGhXXVgK4KItvIHFtwK5w/F2HjFo9nJbbCxLFzbpfHJuB2Viegre8OlvF5Lh9eemsfrDJ/KUjN0Zcw1s6sfH1RwAW8hfeTyq4uk+8NVqRx19qoUCIxLLVY1j1fIKLA+Ks1w/UdxIJW2nD13wZl3zTjsGegFrqNuuXFNHGzuWKi3eHP7cLoau8Tkh7htx//PtFYJHfwGj/M/aqXmCDIrDvgdAxpkxaruIlvyIdD4MjejjyMsrUnEHlO7V8l7CbQoY/gvDAfys6sPWUqLgchNeuWAZqx6Jle8kCGFPEcw3iORAUAOsp6fVyBvsjVBYj1+Or042nMqCeFNe5Wgfje/4LMF/ro8kms02sm+ermk+T1KL0XMj9Xmw/IVT22U4U/c2Hy385/F+M4fLWvbJb6030evUpr8jpS/IenQb6YKtlP57DeIBk4FxR9Tc60A377+HYxX9JNTs2h8FUCYQ0/8Pfnqoy+pFdXsVhOJQnTdWuEfRtUj9Mbh+qJWri36VjsQUo10YV4Jui97dluZD9iAPZceaOV0Su/jXHV8s9gfv6dwjiBQGX+zSAiW1GICrRD9iZ0Jk0kooCaj/w2tS6eoKg9ejmknA9YZwZpsb1LWByOif3ncS11jF/eQ2W/0bngX9mw05D5SeTxCJO5MEgOxDErDaUpkf+kw2f8tOs0U3AiI+2PyfvEaBIoudd9/EvTIWiOFdYPDN46WTQz1nEe7zncKGylawaf/dYzFEplNUdd60DHHCm00caVl";
        $this->call_name =  "GetStore";
        $this->store_name =  "rockscripts";
        $this->user_id =  "rockscripts";
        if($this->session->userdata( 'site_id' ))
        $this->site_id = $this->session->userdata( 'site_id' );  
        else
        $this->site_id = 1 ;
        $this->site_domai = "com";  
        $this->sessionID = null;
        $this->session1 = null;
     }
      function set_token($token)
      {
                  $this->auth_token =  $token;

      }
     function Set_API_Data( $store_name=null, $sandbox_enabled = false ) 
      {
          //  $this->load->library('../controllers/EbatNs/EbatNs_ServiceProxy');
            $this->store_name = $store_name;
            $this->sandbox = $sandbox_enabled;
            $user_id  = $this->session->userdata( 'user_id' );
            $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
            $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$user_id );
            if(!$store_settings):
                
                
                else:
                   $this->site_id = $store_settings->site_id;
            $this->user_id = $store_settings->ebay_user_id;
            $this->site_domai =$this->getDomainnameBySiteId($store_settings->site_id);   
            endif;
            
            $this->comp_level = 765;
           
            if ( $sandbox_enabled ) 
                {
                    // sandbox keys
                    $this->api_dev_name  = 'f579acc9-abc6-4e3b-bd27-8f9bd868b664';
                    $this->api_app_name  = 'rockscri-de85-43d0-a7ac-b26221849977';
                    $this->api_cert_name = '48cdea4b-f1d1-4655-b474-2bc16b9f0ef5';
                    $this->run_name = 'rockscripts-rockscri-7a27-4-ronge';

                    $this->api_url = 'https://api.sandbox.ebay.com/ws/api.dll';
                    $this->sign_in = 'https://signin.sandbox.ebay.com/ws/eBayISAPI.dll?SignIn&';
                    $this->sessionID = null;
            } 
            else 
                {
                    // production keys
                    $this->api_dev_name  = 'f579acc9-abc6-4e3b-bd27-8f9bd868b664';
                    $this->api_app_name  = 'rockscri-7a27-4c7a-b095-e8cbe5ebb63b';
                    $this->api_cert_name = '1a6a02c2-9eba-4725-aafa-f1b2d519b678';
                    $this->run_name = 'rockscripts-rockscri-7a27-4-ronge';

                    $this->api_url = 'https://api.ebay.com/ws/api.dll';
                    $this->sign_in = 'https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&';
                    $this->sessionID = null;
            }
           
     }
      function Set_API_Data_Auth($site_id=0) 
      {
            $this->site_id = $site_id;
            $this->site_domai =$this->getDomainnameBySiteId($site_id);  
            $this->comp_level = 765;
           $sandbox_enabled = false;
            if ( $sandbox_enabled ) 
                {
                    // sandbox keys
                    $this->api_dev_name  = 'f579acc9-abc6-4e3b-bd27-8f9bd868b664';
                    $this->api_app_name  = 'rockscri-de85-43d0-a7ac-b26221849977';
                    $this->api_cert_name = '48cdea4b-f1d1-4655-b474-2bc16b9f0ef5';
                    $this->run_name = 'rockscripts-rockscri-7a27-4-ronge';

                    $this->api_url = 'https://api.sandbox.ebay.com/ws/api.dll';
                    $this->sign_in = 'https://signin.sandbox.ebay.com/ws/eBayISAPI.dll?SignIn&';
                    $this->sessionID = null;
            } 
            else 
                {
                    // production keys
                    $this->api_dev_name  = 'f579acc9-abc6-4e3b-bd27-8f9bd868b664';
                    $this->api_app_name  = 'rockscri-7a27-4c7a-b095-e8cbe5ebb63b ';
                    $this->api_cert_name = '1a6a02c2-9eba-4725-aafa-f1b2d519b678';
                    $this->run_name = 'rockscripts-rockscri-7a27-4-ronge';

                    $this->api_url = 'https://api.ebay.com/ws/api.dll';
                    $this->sign_in = 'https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&';
                    $this->sessionID = null;
            }
           
     }
     function send_client_to_ebay_authorization_page($ebay_site = null,$sessionID)
     {
         if($ebay_site != null):
             $this->site_id  = $ebay_site;
             $this->session->set_userdata('site_id',$ebay_site );  
         endif;
             
         
         $this->sessionID = $sessionID;
         $url = $this->GetEbaySignInUrl($this->run_name, $this->sessionID);
         $this->session->set_userdata('ebay_session_id',$this->sessionID );  
         echo "<script>window.location='".$url."'</script>";
         header('HTTP/1.1 302 Login via eBay');
         header('Location:' . $url); 
         exit();
     }
         function GetEbaySignInUrl($RuName = null, $sessionID = null, $Params = null)
    {
        if (!$this->sandbox) 
                     $url = 'https://signin.' . $this->getDomainnameBySiteId( $this->site_id) . '/ws/eBayISAPI.dll?SignIn';        
        else 
            $url = 'https://signin.sandbox.' . $this->getDomainnameBySiteId( $this->site_id ) . '/ws/eBayISAPI.dll?SignIn';
        
         if ($RuName != null)
              $url .= '&RuName=' . $RuName;
        if ($sessionID != null)
            $url .= '&SessID=' . $sessionID;
return $url;
        }
    function getDomainnameBySiteId($site_id)
    {
        $object = $this->Ebayapi_model->get_global_site($site_id);
        return $object->domain;
    }
    function TradeAPI( $call, $body, $field ) 
                {

		if ( ( $response = file_get_contents( $this->api_url, 'r', stream_context_create( array( 'http' => array(
			'method' => 'POST',

			'header' =>
				"Content-Type: text/xml; charset=utf-8\r\n"
				. "X-EBAY-API-SITEID: {$this->site_id}\r\n"
				. "X-EBAY-API-COMPATIBILITY-LEVEL: {$this->comp_level}\r\n"
				. "X-EBAY-API-CALL-NAME: {$call}\r\n"

				// these headers are only required for GetSessionID and FetchToken
				. "X-EBAY-API-DEV-NAME: {$this->api_dev_name}\r\n"
				. "X-EBAY-API-APP-NAME: {$this->api_app_name}\r\n"
				. "X-EBAY-API-CERT-NAME: {$this->api_cert_name}\r\n",

			'content' => $request =
				"<?xml version='1.0' encoding='utf-8'?>\n"
				. "<{$call} xmlns='urn:ebay:apis:eBLBaseComponents'>{$body}</{$call}>"
			) ) ) ) ) === FALSE ) 
		{
			exit( 'No response from eBay server!' );
		}
                                    $pos = strpos($response, "<Ack>Failure</Ack>");
                                    if(!$pos):
                                        else:
                                        header("Location:https://".$_SERVER['HTTP_HOST']."/membership/logout/");
                                    endif;
                                            
		// echo "<pre>request:\n";
		// echo	"Content-Type: text/xml; charset=utf-8\r\n"
		// 		. "X-EBAY-API-SITEID: {$this->siteId}\r\n"
		// 		. "X-EBAY-API-COMPATIBILITY-LEVEL: {$this->compLevel}\r\n"
		// 		. "X-EBAY-API-CALL-NAME: {$call}\r\n"

		// 		// these headers are only required for GetSessionID and FetchToken
		// 		. "X-EBAY-API-DEV-NAME: {$this->devId}\r\n"
		// 		. "X-EBAY-API-APP-NAME: {$this->appId}\r\n"
		// 		. "X-EBAY-API-CERT-NAME: {$this->certId}\r\n";
		// echo 	htmlentities("<{$call} xmlns='urn:ebay:apis:eBLBaseComponents'>{$body}</{$call}>");
		// echo "</pre>";


		// found open tag?
		if ( ( $begin = strpos( $response, "<{$field}>" ) ) !== FALSE ) {
			// skip open tag
			$begin += strlen( $field ) + 2;

			// found close tag?
			if ( ( $end = strpos( $response, "</{$field}>", $begin ) ) !== FALSE ) {
				return substr( $response, $begin, $end - $begin );
			}
		}
                                    
		echo "<pre>response:\n";
		echo( htmlentities($response) );
		echo "</pre>";

		exit( "Field <b>{$field}</b> not found in eBay response!<p/>\n\n{$response}" );
	} 
     
     /**TESTERS*/
     public function run_test_get_store()
     {
       $array_categories=   $this->get_categories();
      // echo "<pre>";
      // print_r($array_categories);
       echo $array_categories[1]['category_name'];
     
     }
     public function run_test_get_categories()
     {
       $xml_store_data=   $this->get_store();
       print_r($xml_store_data);
     
     }
     

     
   /*Run ebay queries*/
    function run_ebay_query($ebay_xml_body)
    {   
      
    $headers = array
        (
       
            'Content-Type:text/xml',
            'X-EBAY-API-COMPATIBILITY-LEVEL: 819',
            'X-EBAY-API-DEV-NAME: '.$this->api_dev_name,
            'X-EBAY-API-APP-NAME: '.$this->api_app_name,
            'X-EBAY-API-CERT-NAME :'.$this->api_cert_name ,
            'X-EBAY-API-CALL-NAME: '.$this->call_name ,
            'X-EBAY-API-SITEID: '.$this->site_id 
        );
  /*  echo $ebay_xml_body;
     echo $this->site_id; 
        die("**********");*/
    $ebay_xml_body = utf8_encode($ebay_xml_body); 
    $curl = curl_init(); 
    curl_setopt_array
    (
    $curl,
    array
        (
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->endpint,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $ebay_xml_body,
            CURLOPT_HTTPHEADER => $headers
        )
       );  
       $response = curl_exec($curl); 
       curl_close($curl); 
       if(!$response):
           return false;
       else:
           return   simplexml_load_string($response); 
       endif;
    }     /*CORE CODE*/
     /*GetStore data*/
     public function get_store()
     {
         $this->Set_API_Data();
       $this->call_name = "GetStore";
         $ebay_xml_body = <<<BODY
                     <?xml version="1.0" encoding="utf-8"?>
                        <GetStoreRequest xmlns="urn:ebay:apis:eBLBaseComponents">
                          <RequesterCredentials>
                        <eBayAuthToken>$this->auth_token</eBayAuthToken>
                        </RequesterCredentials>
                        <LevelLimit>3</LevelLimit>
                          <UserID>$this->user_id</UserID>
                        </GetStoreRequest>
BODY;
       //  echo $ebay_xml_body; die("****");
         return $this->run_ebay_query($ebay_xml_body);
     }
     
     /*getCategories list*/
     public function get_categories()
     {
         $array_categories = array();
         $array_categories_level_2 = array();
         $array_categories_level_3 = array();
         $index = 0;
         $index_level_2 = 0;
         $index_level_3 = 0;
         $xml_store_data=   $this->get_store();
         if($xml_store_data->Ack[0] == 'Failure')
         return array('FAILURE'=>true,'eMessage'=>$xml_store_data->Errors->LongMessage); 

      foreach($xml_store_data as $CustomCategories):
          foreach($CustomCategories as $CustomCategory):
           foreach($CustomCategory as $category):
          if($category->CategoryID):
               $array_categories[$index]['category_id'] = $category->CategoryID;
               $array_categories[$index]['category_name'] = $category->Name;
               $array_categories[$index]['category_order'] = $category->Order;               
                if($category->ChildCategory and sizeof($category->ChildCategory)>0):
                    foreach($category->ChildCategory as $subcategory_lev2):
                    $array_categories_level_2[$index_level_2]["category_id"] = $subcategory_lev2->CategoryID;
                    $array_categories_level_2[$index_level_2]["category_name"] = $subcategory_lev2->Name;
                    $array_categories_level_2[$index_level_2]["category_order"] = $subcategory_lev2->Order;         
                        if($subcategory_lev2->ChildCategory and sizeof($subcategory_lev2->ChildCategory)>0):
                                foreach($subcategory_lev2->ChildCategory as $subcategory_lev3):
                                $array_categories_level_3[$index_level_3]["category_id"] = $subcategory_lev3->CategoryID;
                                $array_categories_level_3[$index_level_3]["category_name"] = $subcategory_lev3->Name;
                                $array_categories_level_3[$index_level_3]["category_order"] = $subcategory_lev3->Order;                  
                                $index_level_3++;
                                endforeach;
                                $array_categories_level_2[$index_level_2]['category_array_level_3'] = $array_categories_level_3;
                     endif;
                    $index_level_2++;
                    endforeach;
                    $array_categories[$index]['category_array_level_2'] = $array_categories_level_2;
                endif;                
               $index++;
          endif;
           
           endforeach;           
          endforeach;
      endforeach;
      return $array_categories;
     }
      public function get_user($token)
     {
       $this->Set_API_Data();
       $this->call_name = "GetUser";
       //<eBayAuthToken>AgAAAA**AQAAAA**aAAAAA**YoigUg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AFloCiAJKBpwidj6x9nY+seQ**OAcCAA**AAMAAA**p9XZ89Bg+Ort5/H+C6veiiqn9Pv1EOyPuxFNJ07Q4t7vnTwvflDZqCUeXglU9tYWacDLGzwIcVeCaM+TPTURBxQeGvld0p++Z1Q85/M3VIiGfY35ZhipnqwK7DwKt7MsrUXcym4z2u75sJJbi08154aMwaId8uj/nmtcNU7OhMY1EZfH4W7psXCiSh61CIKdGYlwk8r3ks9Ua+6khI/uAuMnAFcPc97lA4uj6IR7DvrEPgHiWqCnkegPP/zo/D2PKXQKUvUWOrLqN3K6pfzz7dyRhKossJw6qynQkoliBVyfNkBelastGk1g8As1OzIHNvhgpiEjnHGA7qBxn4XdJD3BuYoNJp0CVMJ16KuykfQd7Em5jGe90wg/SQAJ0dl3yld/hDOtfe+KYrwuOX+XdOpTGqgDEgqb0uPD9MUEAKOFjkIPAKRKiRt13fdFqnV1yROwT4Io2/04IjtJcl0qcVbegBRxUVTbibApnw8KsEVDxgfMdDaVpQTORWYf0V6Iq6Bul4gGJo3WlIYpok+0gF4P9a1p9IXOQRWCqW4leZP9yYVzUnBkCIlwulj8sYOPxemdh15CkopbPhIxSmpE7vCaZmHuSPODi4yS0WIQwX+DhHNT9s06SjXBrmWPEhJQ9kwVhAFAVZ3EvNJ8pjR7waQBato/egIGceH6CbnjJLH3WY6IpvYAD8ytmS77L3jKlD4jKwZgXNIA3O4FOvJEsi0yS/20sQ6XToUnYeL4bpRNMSIB6K2h1JII+ICPqKzZ</eBayAuthToken>
       $body =<<<BODY
<<?xml version="1.0" encoding="utf-8"?>
<GetUserRequest xmlns="urn:ebay:apis:eBLBaseComponents">
<RequesterCredentials>
<eBayAuthToken>$token</eBayAuthToken>
</RequesterCredentials>
</GetUserRequest>
BODY;
          $user_account = $this->run_ebay_query($body) ;
   return $user_account;
     }
     public function get_user_information($token)
     {
       $xml_user_account =  $this->get_user($token);
       $array_user_information = array();
       foreach($xml_user_account as $User):    
           $array_user_information['email'] = $User->Email;          
           $array_user_information['userID'] = $User->UserID; 
           $array_user_information['store_url'] = $User->SellerInfo->StoreURL; 
       endforeach;
       return $array_user_information;
     }
   
      public function get_store_information($token, $user_id)
     {
       $this->user_id = $user_id;
       $this->auth_token = $token;       
       $xml_store=  $this->get_store($token);
        
       $array_store_information = array();
       foreach($xml_store as $Store):   
           $array_store_information['store_name'] = $Store->Name;          
           $array_store_information['store_url'] = $Store->URL; 
           $array_store_information['custom_header'] = $Store->CustomHeader; 
           $array_store_information['custom_header_layout'] = $Store->CustomHeaderLayout; 
           $array_store_information['header_style'] = $Store->HeaderStyle; 
           $array_store_information['home_page'] = $Store->HomePage; 
           $array_store_information['item_list_layout'] = $Store->ItemListLayout; 
           $array_store_information['item_list_sort_order'] = $Store->ItemListSortOrder; 
           $array_store_information['theme_id'] = $Store->Theme->ThemeID; 
           $array_store_information['color_scheme_id'] = @$Store->Theme->ColorScheme->ColorSchemeID; 
           $array_store_information['color_scheme_primary'] = @$Store->Theme->ColorScheme->Color->Primary; 
           $array_store_information['color_scheme_secondary'] = @$Store->Theme->ColorScheme->Color->Secondary;             
           $array_store_information['color_scheme_accent'] = @$Store->Theme->ColorScheme->Color->Accent; 
           $array_store_information['font_name_color'] = @$Store->Theme->ColorScheme->Font->NameColor; 
           $array_store_information['font_title_color'] = @$Store->Theme->ColorScheme->Font->TitleColor; 
           $array_store_information['font_desc_color'] = @$Store->Theme->ColorScheme->Font->DescColor; 
       endforeach;
       return $array_store_information;
     }
 
 public function set_store($token, $user_id, $xml_body)
 {
     $this->user_id = $user_id;
     $this->auth_token = $token;  
     $this->call_name= "SetStore";
     return $this->run_ebay_query($xml_body);    
 }
 public function set_store_page($token,$name,$content)
     {
         $this->Set_API_Data();
       $this->call_name = "SetStoreCustomPage";
         $ebay_xml_body = <<<BODY
                     <?xml version="1.0" encoding="utf-8"?>
                        <SetStoreCustomPageRequest  xmlns="urn:ebay:apis:eBLBaseComponents">
                          <RequesterCredentials>
                        <eBayAuthToken>$token</eBayAuthToken>
                        </RequesterCredentials>
                          <CustomPage>
                           <Name>$name</Name>
                           <Status>Active</Status>
                           <Content><![CDATA[$content]]></Content>
                         </CustomPage>
                     </SetStoreCustomPageRequest >
BODY;
       //  echo $ebay_xml_body; die("****");
         return $this->run_ebay_query($ebay_xml_body);
     }
      public function update_store_page($page_id,$token, $name,$content)
     {
         $this->Set_API_Data();
       $this->call_name = "SetStoreCustomPage";
         $ebay_xml_body = <<<BODY
                     <?xml version="1.0" encoding="utf-8"?>
                        <SetStoreCustomPageRequest  xmlns="urn:ebay:apis:eBLBaseComponents">
                          <RequesterCredentials>
                        <eBayAuthToken>$token</eBayAuthToken>
                        </RequesterCredentials>
                          <CustomPage>
                           <PageID>$page_id</PageID>
                           <Name>$name</Name>
                           <Status>Active</Status>
                           <Content><![CDATA[$content]]></Content>
                         </CustomPage>
                     </SetStoreCustomPageRequest >
BODY;
         return $this->run_ebay_query($ebay_xml_body);
     }
     public function change_status_store_page($page_id,$token, $status)
     {
         $this->Set_API_Data();
       $this->call_name = "SetStoreCustomPage";
         $ebay_xml_body = <<<BODY
                     <?xml version="1.0" encoding="utf-8"?>
                        <SetStoreCustomPageRequest  xmlns="urn:ebay:apis:eBLBaseComponents">
                          <RequesterCredentials>
                        <eBayAuthToken>$token</eBayAuthToken>
                        </RequesterCredentials>
                          <CustomPage>
                           <PageID>$page_id</PageID>
                           <Status>$status</Status>
                         </CustomPage>
                     </SetStoreCustomPageRequest >
BODY;
         return $this->run_ebay_query($ebay_xml_body);
     }
} 