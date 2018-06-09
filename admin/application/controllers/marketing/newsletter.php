<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {  
 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
     public function __construct() 

     {

        parent::__construct();
 validate_user();
        $this->load->model('Newsletter_model');
        $this->load->model('Configuration_model');
        $this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

        $this->load->helper('html');

        $this->is_saved_basic_details = false;

       

    }
    public function index()
    {
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Newsletter Design";
        $data["widgettitle"] = "2) Select File And Generate Templates";
         // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
         // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
         // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();         
         /*get files*/
       /* $data['csv_files_directory'] =  $this->Configuration_model->get_configuration_value('csv-files-path');*/
        $id_ebay_design =  $this->input->get('id_ebay_design');
        $data['id_ebay_design'] =$id_ebay_design;
        $data['newsletter_designs'] = $this->Newsletter_model->get_templates($id_ebay_design);
        $this->template->load('marketing/newsletter/index', $data);  
    }
       public function design_options()
    {
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Design Options";
        $data["widgettitle"] = "Newsletter Theme Settings";
         // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
         // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
         // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();
         $data['id_newsletter_design']  =  $this->input->post('id_newsletter_design');
        $this->template->load('marketing/newsletter/design_options', $data);  
    }
    public function form_welcome_text()
    {      
        $data["id_newsletter_design"]   = $this->input->post('id_newsletter_design'); 
        $data["current_welcome_text"]  = $this->get_welcome_text($data["id_newsletter_design"] );
        $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/welcome_text', $data,true);          
         echo  json_encode($data);  
    }
    function update_welcome_text()
    { 
        $data["id_newsletter_design"]    = $this->input->post('id_newsletter_design'); 
        $data["current_welcome_text"]   = $this->input->post('current_welcome_text'); 
        $this->Newsletter_model->update_welcome_text($data["id_newsletter_design"],$data["current_welcome_text"]);
        echo  json_encode($data);  
    }
    
    function get_welcome_text($id_newsletter_design)
    {
         $array_newsletter_design_data = $this->Newsletter_model->get_newsletter_design($id_newsletter_design);
         foreach($array_newsletter_design_data as $newsletter_design_data):
             return $newsletter_design_data->welcome_text;
         endforeach;
          
    }
    
    /*Functions for main banner*/
    public function form_main_banner()
    { 
        $data["id_newsletter_design"]   = $this->input->post('id_newsletter_design'); 
         $array_newsletter_design_data = $this->Newsletter_model->get_main_banner($data["id_newsletter_design"]);
         foreach($array_newsletter_design_data as $newsletter_design_data):
             $data["banner_url"]  = $newsletter_design_data->value;
             $data["id_newsletter_component"]  = $newsletter_design_data->id_newsletter_component;
         endforeach;  
        $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/main_banner', $data,true);          
        echo  json_encode($data);  
    }
    function update_main_banner()
    { 
        $data["id_newsletter_component"] = $this->input->post('id_newsletter_component'); 
        $data["value"]   = $this->input->post('value');   
        $this->delete_old_image_from_server($data["id_newsletter_component"]);
        $this->Newsletter_model->update_main_banner($data["id_newsletter_component"],$data["value"]);
        echo  json_encode($data);
    }
      /*END Functions for main banner*/
    
    /*START Functions for listings*/
   public function load_listings()
     {     
       $data["id_newsletter_design"] = $this->input->post('id_newsletter_design');
       $data["array_newsletter_listings"]  = $this->Newsletter_model->get_newsletter_listings( $data["id_newsletter_design"]);
       $data["currency"] = "USD";    
       $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/listings/load_listings', $data,true);   
       echo  json_encode($data);  
     }   
     public function add_listing_form()
     {
       $data = array();
       if($this->input->post('message'))
       {
           $data["message"] = $this->input->post('message');
       }
       $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/listings/add_listing', $data,true);   
       echo  json_encode($data);
     }
     public function save_listing()
     {       
       $id_newsletter_design     =  $this->input->post('id_newsletter_design'); 
       $title =  $this->input->post('title'); 
       $price =  $this->input->post('price'); 
       $image_url = $this->input->post('image_url'); 
       $description = $this->input->post('description'); 
       $link = $this->input->post('link'); 
       $this->Newsletter_model->add_newsletter_listing($id_newsletter_design,$title,$price,$image_url,$description,$link);   
       $data = array();
       $this->template->ajax_load_view('store_design/listings/load_featured_listing', $data,true);  
     }
     public function change_listing_status()
     {
         $data["id_newsletter_design"] = $this->input->post('id_newsletter_design');
         $data["id_neswletter_listing"]   = $this->input->post('id_neswletter_listing');
         $data["current_status"]            = $this->input->post('current_status');          
       if($data["current_status"] == "Active"):
           $this->Newsletter_model->change_listing_status_to($data["id_neswletter_listing"], "Deactive");
       else:
           $this->Newsletter_model->change_listing_status_to($data["id_neswletter_listing"], "Active");
       endif;
       $data["array_newsletter_listings"]  = $this->Newsletter_model->get_newsletter_listings( $data["id_newsletter_design"]);
       $data["currency"] = "USD";    
       $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/listings/load_listings', $data,true);   
       echo  json_encode($data);  
     }
     public function edit_listing_form()
     {
        $data["id_neswletter_listing"]  =  $this->input->post('id_neswletter_listing'); 
        $data["current_title"] =  $this->input->post('current_title'); 
        $data["current_price"] =  $this->input->post('current_price'); 
        $data["current_image_url"] = $this->input->post('current_image_url'); 
        $data["description"] = $this->input->post('description'); 
        $data["link"] = $this->input->post('link'); 
        $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/listings/edit_listing', $data,true);    
        echo  json_encode($data); 
     }
       /*update image and listing*/	
     public function update_listing()
     {
        $id_neswletter_listing  =  $this->input->post('id_neswletter_listing'); 
        $title =  $this->input->post('title'); 
        $price =  $this->input->post('price'); 
        $image_url = $this->input->post('image_url'); 
        //echo $image_url;
        
        /*delete old image from server if image was updated*/
        if($image_url!="not-defined"):
             $this->delete_old_listing_image_from_server($id_neswletter_listing);
        endif;
        $this->Newsletter_model->update_listing($id_neswletter_listing,$title,$price,$image_url);           
       
     }
     public function delete_listing()
     {
       /*DELETE STATUS PROCESS*/
       $data["id_neswletter_listing"]  =  $this->input->post('id_neswletter_listing');     
       $data["id_newsletter_design"] =  $this->input->post('id_newsletter_design');   
       $this->delete_old_listing_image_from_server($data["id_neswletter_listing"]);
       $this->Newsletter_model->delete_listing($data["id_neswletter_listing"]);
       $data["array_newsletter_listings"]  = $this->Newsletter_model->get_newsletter_listings( $data["id_newsletter_design"]);
       $data["currency"] = "USD";    
       $data["html"]   = $this->template->ajax_load_view('marketing/newsletter/forms/listings/load_listings', $data,true);   
       echo  json_encode($data);          
     }
     function get_last_listing_id_inserted()
    {
         $id_newsletter_design = $this->input->post('id_newsletter_design'); 
         $data["last_id"]  = $this->Newsletter_model->get_last_listing_id_inserted($id_newsletter_design);
         echo  json_encode($data); 
    }
     /*END Functions for listings*/
    /*Generate template*/
    function generate_template()
    {
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Newsletter Design";
        $data["widgettitle"] = "2) Select File And Generate Templates";
         // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
         // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
         // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get();       
        $data["id_newsletter_design"] =  $this->input->post('id_newsletter_design'); 
        $data["currency_symbol"] = "$";
        $template = $this->Newsletter_model->get_newsletter_design($data["id_newsletter_design"]);
         foreach($template as $tpl):
            $template_code = $tpl->html_code;        
            
            /*get main banner url*/
            $main_banner_url = $this->Newsletter_model->get_main_banner_url($data["id_newsletter_design"]);
            $template_code = $this->replace_tag("[NEWSLETTER_MAIN_BANNER]",$main_banner_url,$template_code);
            /*get welcome text*/
            $welcome_text = $this->Newsletter_model->get_welcome_text($data["id_newsletter_design"]);
            $template_code = $this->replace_tag("[NEWSLETTER_WELCOME]",$welcome_text,$template_code);
            /*get listings */
            $listings = $this->Newsletter_model->get_active_newsletter_listings($data["id_newsletter_design"]);
            if(!empty($listings)):
            $index = 1;
            foreach ($listings as $listing):
             $template_code = $this->replace_tag("[NEWSLETTER_LISTING_TITLE_".$index."]",$listing->title,$template_code);    
             $template_code = $this->replace_tag("[NEWSLETTER_LISTING_IMAGE_".$index."]",$listing->image_url,$template_code);   
             $template_code = $this->replace_tag("[NEWSLETTER_LISTING_PRICE_".$index."]", $data["currency_symbol"]." ".number_format($listing->price, 2, '.', ''),$template_code);  
             $template_code = $this->replace_tag("[NEWSLETTER_LISTING_DESCRIPTION_".$index."]",$listing->description,$template_code);  
             $template_code = $this->replace_tag("[NEWSLETTER_LISTING_LINK_".$index."]",$listing->link,$template_code); 
             $index++;
            endforeach;          
        endif;        
        endforeach;
        $data["template_code"] = $template_code;
        $this->template->load('marketing/newsletter/view_code', $data);  
    }
    function replace_tag($tag,$value,$subject)
    {
        return str_replace($tag,$value, $subject);
    }
     function delete_old_image_from_server($id_newsletter_component)
     {
         $array = $this->Newsletter_model->get_old_main_banner($id_newsletter_component);
         $base_path = $this->Configuration_model->get_configuration_value('base-path');
         foreach ($array as $row)
            {
               $image_path = $this->get_clean_image_path($row->value);
               $thumb_image_path = $this->get_clean_thumbail_image_path($row->value);
              $image_name = $row->value;
            }
            if($image_name!="default")
            {
                if(file_exists($base_path.$image_path)) 
            {
                unlink($base_path.$image_path) ;
                if(file_exists($base_path.$thumb_image_path));
                unlink($base_path.$thumb_image_path) ;
            }
            }          
     }
      function delete_old_listing_image_from_server($id_neswletter_listing)
     {
         $array = $this->Newsletter_model->get_listing_with_id($id_neswletter_listing);
         $base_path = $this->Configuration_model->get_configuration_value('base-path');
         foreach ($array as $row)
            {
               $image_path = $this->get_clean_image_path($row->image_url);
               $thumb_image_path = $this->get_clean_thumbail_image_path($row->image_url);             
            }
            if(file_exists($base_path.$image_path)) 
            {
                unlink($base_path.$image_path) ;
                if(file_exists($base_path.$thumb_image_path));
                unlink($base_path.$thumb_image_path) ;
            }
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
}  


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */