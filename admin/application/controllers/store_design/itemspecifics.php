<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Itemspecifics extends CI_Controller 
{
   public function __construct()
     {
         
        parent::__construct();    
         validate_user();
         validate_application();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
        $this->load->model('Itemspecifics_model');
        $this->load->model('HTMLtojs_model');
     }  
    public function load_item_specifications_widget_view()
    {    
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $data["item_specifics"]   = $this->Itemspecifics_model->get_item_specifics($id_ebay_design,$user_id );        
        $data["view"]   = $this->template->ajax_load_view('store_design/item_specifics/all_specifics', $data,true);          
        echo  json_encode($data);   
    }
    
    public function update_status_variation_specific()
    { 
      $specific_id = $this->input->post('specific_id'); 
      $status= $this->input->post('status'); 
      $this->Itemspecifics_model->active_variation_specific($specific_id,$status); 
      $this->save_specifics_in_js_file();
    }
    public function update_custom_name()
    {
      $specific_id = $this->input->post('specific_id');
      $custom_name = $this->input->post('custom_name');
      $this->Itemspecifics_model->update_custom_name($specific_id,$custom_name); 
      $this->save_specifics_in_js_file();  
    }
    public function specifics_list()
    {
     $user_id = $this->session->userdata( 'user_id' );
     $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
     $data["username"] = $this->session->userdata( 'username' );
     $data["user_id"] = $this->session->userdata( 'user_id' );
     $data["page_title"] = "Specifics Values";
     $data["widgettitle"] = "Specifics Values";   
     $this->load->library('breadcrumbs');      
     $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' ); 
     $data["passed_to_view"] = $this->breadcrumbs->get();
     $specific = $this->input->post('specific');
     $data["specific"]  = $specific;
     $data["item_specific_values"] = $this->Itemspecifics_model->get_item_specific_values($specific,$id_ebay_design,$user_id);   
     $data["view"]   = $this->template->ajax_load_view('store_design/item_specifics/all_specifics_values', $data,true);          
     echo  json_encode($data);  
    }
    public function delete_specifics()
    {
       $user_id = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $specific_id = $this->input->post('specific_id'); 
       $specific_name = $this->input->post('specific_name'); 
       $this->Itemspecifics_model->delete_specifics($specific_id, $specific_name, $user_id, $id_ebay_design);
       $this->Itemspecifics_model->delete_specific_values( $specific_name, $user_id, $id_ebay_design);
       $this->save_specifics_in_js_file();
    }
    public function save_specifics_in_js_file()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $item_specifics = $this->Itemspecifics_model->get_active_item_specifics($id_ebay_design,$user_id ); 
        $output =  "var specifics_array = new Array();"."\n";
        $prepared_out_put = "";
        if(is_array($item_specifics)):            
            foreach($item_specifics as $specific):
            $item_specific_values = $this->Itemspecifics_model->get_item_specific_values($specific->name,$id_ebay_design,$user_id); 
            if(is_array($item_specific_values)):
                $prepared_out_put = "specifics_values_array = new Array();"."\n";
               foreach($item_specific_values as $specific_value):                
                $prepared_out_put .= "specifics_values_array.push('{$specific_value->value}');"."\n";                            
               endforeach; 
                $prepared_out_put .= "object_specific = {'title':'{$specific->name}','custom_title':'{$specific->custom_name}','specifics_values':specifics_values_array};"."\n";
                $prepared_out_put .= "specifics_array.push(object_specific);"."\n";
            endif;
            $output .= $prepared_out_put;
            endforeach;            
            else:
                $output = "var specifics_array = new Array();"."\n";
        endif;       
        $this->write_in_js_file_without_document_write($user_id, "specifics_widgets.js", $output);       
    }
    function write_in_js_file_without_document_write($id_user, $file_name,$out_put)
     { 
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
       fwrite($js_file,$out_put);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       store_front_all_in_one($id_user);
     }
}


?>