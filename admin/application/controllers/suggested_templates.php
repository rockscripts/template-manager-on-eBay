<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Suggested_templates extends CI_Controller {



    public function __construct()

    {

        parent::__construct();

        $this->load->helper('form');
        validate_application(); 
        validate_user();
        $this->load->library('form_validation');
        $this->load->model('Suggested_templates_model');
        $this->load->model('Configuration_model');
        $this->load->database();
    } 
   public function index()
   {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Suggested Templates";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data['suggested_templates_array'] = $this->get_suggested_templates();      
       // Variable passed into the view
       $content_data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('templates/templates', $content_data);
   }
   public function load_suggested_templates_by_categories()
     {        
        $data["category_id"] = $this->input->post( 'category_id' );
        $data['suggested_templates_array'] = $this->get_suggested_templates_by_category($data["category_id"]);
        $data["html"]   = $this->template->ajax_load_view('templates/templates_selection', $data,true);                  
        echo  json_encode($data);         
     }
    public function load_suggested_template_part()
     {        
        $data["load_type"] = $this->input->post( 'load_type' );
        $data['suggested_templates_array'] = $this->get_suggested_templates();
        $data["html"]   = $this->template->ajax_load_view('templates/templates', $data,true);                  
        echo  json_encode($data);         
     }
   public function load_suggested_template()
    {        
       $id_suggested_template = $this->input->post('id_suggested_template');
       $data["suggested_template"]   = $this->Suggested_templates_model->get_suggested_template($id_suggested_template);        
       echo  json_encode($data);         
    }
    public function load_suggested_template_zip_file_name()
    {        
       $id_suggested_template = $this->input->post('id_suggested_template');
       $suggested_template = $this->Suggested_templates_model->get_suggested_template_details($id_suggested_template);
       /*echo "<pre>";
       print_r($suggested_template);*/
       $data["zip_file_name"]  = $suggested_template->zip_file_name;
       echo  json_encode($data);         
    }
    public function load_suggested_template_form()
     {
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('templates/templates_part', $data,true);                  
        echo json_encode($data);          
     }
   public function save_suggested_template()
   {
    $data = array();   
    $data["id_suggested_template"] = $this->input->post('id');
    $data["name"] = $this->input->post('title');       
    $data["url_image"] = $this->input->post('image_url');  
    $data["link"] = $this->input->post('link'); 
    $this->Suggested_templates_model->save_suggested_templates($data);
    $data["message"] = "Suggested template was saved successful";        
    echo  json_encode($data); 
   }
    public function delete_suggested_template()
    {  
        $user_id  = $this->session->userdata( 'user_id' );
        $id_suggested_template = $this->input->post('id_suggested_template');  
        $suggested_template = $this->get_suggested_template($id_suggested_template );
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $this->delete_image_from_server($suggested_template,$base_path) ;   
        $this->Suggested_templates_model->delete_suggested_template($id_suggested_template);
        /*get html tagged*/
        $data["message"] = "Suggested template was deleted successful";        
        echo  json_encode($data);   
    }
   public function get_suggested_templates()
   {
     return $this->Suggested_templates_model->get_suggested_templates(); 
   }
   public function get_suggested_templates_by_category($category_id)
   {
     return $this->Suggested_templates_model->get_suggested_templates_by_category($category_id); 
   }
   public function get_suggested_template($id_suggested_template)
    {        
       return $this->Suggested_templates_model->get_suggested_template($id_suggested_template);                
    }
    public function create_template_selected_session()
    {
     $id_suggested_template = $this->input->post('suggested_template_id');   
     $this->session->set_userdata('id_suggested_template_selected', $id_suggested_template);
    }
    public function send_suggested_template_to_installation()
    {
        $user_id  = $this->session->userdata( 'user_id' );
        $file_name = $this->input->post('file_name'); 
        $source = $this->Configuration_model->get_configuration_value('suggested-templates-zipped').$file_name;
        $destination = $this->Configuration_model->get_configuration_value('template-installation-user-files').$user_id."/"."zip/".$file_name;
        $destination_folder = $this->Configuration_model->get_configuration_value('template-installation-user-files');
        @mkdir($destination_folder.$user_id);
        @mkdir($destination_folder.$user_id."/zip");
        copy($source,$destination); 
    }
    public function delete_image_from_server($object,$base_path)
    {
         foreach ($object as $row)
            {
                $image_path = $this->get_clean_image_path($row->url_image);
                $thumb_image_path = $this->get_clean_thumbail_image_path($row->url_image);              
                  if(file_exists($base_path.$image_path)) 
                 {                 
                    unlink($base_path.$image_path) ;
                    if(file_exists($base_path.$thumb_image_path));
                    unlink($base_path.$thumb_image_path) ;
                 }
            }
    }
    function get_clean_thumbail_image_path($logo_url)
     {
         $array_parts = explode("/",$logo_url);
         $file_path = "";
         for($i=3;$i<sizeof($array_parts);$i++)
         {
             if($i == (sizeof($array_parts)-1))
                 $file_path .= $array_parts[$i];
            else if($i == (sizeof($array_parts)-2))
             $file_path .=$array_parts[$i]."/"."thumbnail/";
            else
                $file_path .= $array_parts[$i]."/";
         }
         return  $file_path;
     }  
    function get_clean_image_path($logo_url)
     {
         $array_parts = explode("/",$logo_url);
         $file_path = "";
         for($i=3;$i<sizeof($array_parts);$i++)
         {
             if($i == (sizeof($array_parts)-1))
                 $file_path .= $array_parts[$i];
            else
             $file_path .= $array_parts[$i]."/";
         }
         return  $file_path;
     }
      public function recurse_copy($src,$dst) { 
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