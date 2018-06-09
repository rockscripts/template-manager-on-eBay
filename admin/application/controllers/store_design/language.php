<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {
     public $data = array();
     public function __construct()
     {
        parent::__construct();
        validate_user();
        validate_application();
        $this->load->model('Languages');
        $this->load->model('Storedesign_model'); 
        $this->load->model('Ebaydesigns_model');           
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
        
     }
     public function index($message=null,$message_type=null)
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
       $data["page_title"] = "Languages & Translator";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $data["passed_to_view"] = $this->breadcrumbs->get();
       $store_settings = $this->Storedesign_model->get_store_setting($data["id_ebay_design"] ,$data["user_id"] );
       $data["main_language"] = $store_settings->language;
       $data["fields_translated"] = $this->Languages->get_rows($data["user_id"], $data["id_ebay_design"]); 
       if(!$data["fields_translated"]):
           $this->duplicate_default_rows();
           $data["fields_translated"] = $this->Languages->get_rows($data["user_id"], $data["id_ebay_design"]); 
       endif;
       $data["fields_data_table"] = $this->template->ajax_load_view('language/fields_data_table', $data,true); 
       if($message!=null):
           $data["message"] = $message;
           $data["type"] = $message_type;
       endif;           
       $this->template->load('language/index', $data);
     }
     public function save_row()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
       $data["page_title"] = "Languages & Translator";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $data_translator = $this->input->post('data_translator');//array
       
       if($this->input->post('id')>0)
       {
           $this->Languages->update_row($data,$this->input->post('id'), $data["user_id"], $data["id_ebay_design"]);
           $data["message"] = "Fields were updated";
           
       }
       else{
           $this->Languages->add_row($data, $data["user_id"], $data["id_ebay_design"]);
           $data["message"] = "Fields were added.";
       }
        $this->template->load('language/index', $data);       
     }
     public function change_main_language()
     {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
         if($this->input->get('language'))
         {
           $available_languages = array("EN","SP","FR","GR");
           if(in_array($this->input->get('language'),$available_languages)) :
               $this->Languages->update_main_language($this->input->get('language'), $data["user_id"], $data["id_ebay_design"]);
           endif; 
           $this->save_constants_js_output();
         }
         $message = "Main language was updated.";
         $this->index($message, "alert-success");
         
     }
     public function load_language_translator_form()
     {    
        $user_id = $this->session->userdata( 'user_id' );
         if($this->input->post('id_language_translator')>0)
         {
           //edit 
             $data = $this->Languages->get_row($this->input->post('id_language_translator'));
              if(isset($data)):
                $data["html"]   = $this->template->ajax_load_view('language/language_translator_form', $data,true); 
              echo  json_encode($data);
              endif;  
         }
         else
         {
            //add                    
             $data["id"] = -1;//this indicates add action
             $data["html"]   = $this->template->ajax_load_view('language/language_translator_form', $data,true);          
             echo  json_encode($data); 
         }
     }
     public function load_translator_fields_datable()
     {
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
       $data["fields_translated"] = $this->Languages->get_rows($data["user_id"], $data["id_ebay_design"]); 
       $data["html"] = $this->template->ajax_load_view('language/fields_data_table', $data,true);       
         echo  json_encode($data);   
     }
     public function update_language_fields()
     {
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
        $data_fields = $this->input->post('data');
        if($data_fields["id_language_translator"]>0):
            $this->Languages->update_row($data_fields,$data["user_id"], $data["id_ebay_design"]);
        else:
            unset($data_fields["id_language_translator"]);
            $this->Languages->add_row($data_fields,$data["user_id"], $data["id_ebay_design"]);            
        endif; 
        $this->save_constants_js_output();
     }   
     public function remove_row_translator()
     {
        if($this->input->post('id_language_translator')):
            $this->Languages->delete_row($this->input->post('id_language_translator'));   
        endif; 
        $this->save_constants_js_output();
     }  
     public function duplicate_default_rows()
     {
         $data["user_id"] = $this->session->userdata( 'user_id' );
         $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );
         $this->Ebaydesigns_model->duplicate_default_rows_translated($data["id_ebay_design"], $data["user_id"]);
     } 
     public function save_constants_js_output()
     {
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' ); 
        $fields_translated = $this->Languages->get_rows($data["user_id"], $data["id_ebay_design"]); 
        if($fields_translated)
        {
          $out_put = "";
          $store_settings = $this->Storedesign_model->get_store_setting($data["id_ebay_design"] ,$data["user_id"] );
          foreach($fields_translated as $field_translated):
              switch($store_settings->language):
               case "EN":
                   $out_put .= "var ".$field_translated->constant.' = "'.$field_translated->english.'";';
               break;
               case "SP":
                   $out_put .= "var ".$field_translated->constant.' = "'.$field_translated->spanish.'";';
               break;
               case "FR":
                   $out_put .= "var ".$field_translated->constant.' = "'.$field_translated->french.'";';
               break;
               case "GR":
                   $out_put .= "var ".$field_translated->constant.' = "'.$field_translated->german.'";';
               break;
              endswitch;               
          endforeach;
          $this->write_log_in_js_file($data["user_id"], $store_settings->language.".js",$out_put,$var_name=null);
          return $out_put;
        }
     }
     function write_log_in_js_file($id_user, $file_name,$out_put,$var_name=null)
     {
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' ); 
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/designmanager/server/ajax_design/".$id_user."/languages/".$file_name,"w");
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
                 $result_html  .= trim($line).""."\n";
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
       $store_settings = $this->Storedesign_model->get_store_setting($data["id_ebay_design"] ,$data["user_id"] );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
}  