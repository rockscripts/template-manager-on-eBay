<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start(); # Aqui para que inicie la sesi�n
class Storedesign extends CI_Controller {

     public function __construct()
     {
        parent::__construct();      
        validate_user();
        validate_application();
        
        $this->load->helper(array('form', 'url'));
        $this->load->helper('html');
       // $this->load->helper('ckeditor');
        $this->load->model('Header_model');
        $this->load->model('Ebaydesigns_model');
        $this->load->model('Listingdesign_model');
        $this->load->model('Configuration_model');
        $this->load->model('Popularcategories_model');
        $this->load->model('Featured_model');
        $this->load->model('Storedesign_model');
        $this->load->model('membership/login_model');
        $this->load->model('HTMLtojs_model');        
       $this->load->database();
     }
     
     /*Load all listings designs purchased*/
    public function index()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "My Store Front Designs";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data['array_store_front_designs'] = $this->Ebaydesigns_model->get_ebay_home_designs($content_data["user_id"] ); 
     
       // Variable passed into the view
       $content_data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/front_design/index', $content_data); 
     }
     
/*listing listing settings: start interface to add listing data*/
 public function design_settings()
    {
    $data["username"] = $this->session->userdata( 'username' );
    
    $data["user_id"] = $this->session->userdata( 'user_id' );
    $data["page_title"] = "Design Options";
    $data["widgettitle"] = "Store Front Template Settings";        
     // This can be autoloaded //
    $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
     // as an array //
    $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
     // Variable passed into the view
    $data["passed_to_view"] = $this->breadcrumbs->get();    
    /*Get Vars to identify listing design data*/
    $data['id_home_design'] = $this->session->userdata('id_home_design');
    $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
    //$this->session->set_userdata('id_ebay_design', $data['id_ebay_design']);
    //$this->session->set_userdata('id_home_design', $data['id_home_design'] ); 
    /*Get design settings*/
    $store_settings = $this->Storedesign_model->StoreSettingDetails($data['id_ebay_design'], $data["user_id"]);      
    $this->session->set_userdata('currency', $store_settings['currency']);
    $this->template->load('store_design/front_design/design_options', $data);   
    }
    public function update_screenshot()
    {
        $data['id_home_design'] = $this->session->userdata('id_home_design');
        $data['id_listing_design'] = $this->session->userdata('id_listing_design');
        $url = $this->input->post('url',TRUE);  
        $type = $this->input->post('type',TRUE);  
        if($type=="front"):
             $this->Ebaydesigns_model->update_screenshot($data['id_home_design'] , $url,"home_design","id_home_design");
        endif;
         if($type=="listing"):
             $this->Ebaydesigns_model->update_screenshot($data['id_listing_design'] , $url,"listign_design","id");
        endif;
    }
    public function load_store_pages()
    {
        $id_user = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $data["store_pages"] = $this->Storedesign_model->get_store_pages($id_user, $id_ebay_design);       
        $json["html"]   = $this->template->ajax_load_view('store_design/pages/index', $data,true);          
        echo  json_encode($json);   
    }
    public function load_add_store_pages()
    {           
        $user_id = $this->session->userdata( 'user_id' );
        $id_page= $this->input->post('id_page',TRUE);
        $data = array();
        if($id_page>0)
         $page = $this->Storedesign_model->get_store_page($id_page);
         # Variables de sesion de KCFinder, 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
        # Al hacer LogOut deber�amos cambiar disabled a true: $_SESSION['KCFINDER']['disabled'] = true;
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        if(isset($page)):
             $data["page_text"]=  $page->text;
             $data["title"] =  $page->title;  
             $data["id_page"] =  $page->id_store_page;  
         endif;  
         $data["html"]   = $this->template->ajax_load_view('store_design/pages/add', $data,true);          
         echo  json_encode($data); 
    }
    public function delete_store_page()
    {
      $user_id = $this->session->userdata( 'user_id' );
      $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
      $this->load->library('../controllers/rocklister/rocklister');
      $_RL= new  Rocklister(); 
      $id_page = $this->input->post('id_page',TRUE);   
      $single_store_page = $this->Storedesign_model->get_store_page($id_page);  
      $_RL->delete_store_page($single_store_page->ebay_page_id,"Delete");     
      $this->Storedesign_model->delete_store_page($id_page);
      $this->save_pages_is_js_file($user_id, $id_ebay_design);
    }
    public function sync_pages()
    {
        $this->load->library('../controllers/rocklister/rocklister');
        $_RL= new  Rocklister(); 
        $_RL->sync_store_pages();
    }
   public function save_store_page()
    {
        $data = array();
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $data["id_page"]    = $this->input->post('id_page');                          
        $data["page_text"]    = $this->input->post('page_text');    
        $data["title"]    = $this->input->post('title');  
        $this->load->library('../controllers/rocklister/rocklister');
        $_RL= new  Rocklister(); 
        if($data["id_page"]>0):
             $single_store_page = $this->Storedesign_model->get_store_page($data["id_page"]);        
             $_RL->update_store_page($single_store_page->ebay_page_id, $data["title"], $data["page_text"]);
             $this->Storedesign_model->save_store_page($data["id_page"], $data["title"], $data["page_text"],$id_ebay_design, $user_id); 
            else:           
             $_RL->save_store_page($data["title"], $data["page_text"]);
             $_RL->sync_store_pages();
        endif;                
        $recent_store_page_object = $this->Storedesign_model->get_store_page2($data["title"], $id_ebay_design, $user_id);                 
        $data["id_page"] = $recent_store_page_object->id_store_page;
        $this->save_pages_is_js_file($user_id, $id_ebay_design);
        # Variables de sesion de KCFinder, 
       $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
        # Al hacer LogOut deber�amos cambiar disabled a true: $_SESSION['KCFINDER']['disabled'] = true;
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        $data["html"]   = $this->template->ajax_load_view('store_design/pages/add', $data,true);          
        echo  json_encode($data); 
    }
    public function save_pages_is_js_file($id_user, $id_ebay_design)
    {
        $store_pages = $this->Storedesign_model->get_store_pages($id_user, $id_ebay_design);       
        $output = "";
        $prepared_out_put = "var pages_array = new Array();"."\n";
        if(is_array($store_pages)):            
            foreach($store_pages as $page):
            $title =  str_replace("'","\'",$page->title);
            $content = preg_replace( "/\r|\n/", "", $page->text );
            $content = str_replace("'", "\'", $content);
            $prepared_out_put .= "object = {'title':'$title','url':'{$page->url}','content':'{$content}'};"."\n";
            $prepared_out_put .= "pages_array.push(object);"."\n";
            endforeach;
            $output = $prepared_out_put;
            else:
                $output = "var pages_array = new Array();"."\n";
        endif;
        $this->write_in_js_file_without_document_write($id_user, "store_pages.js", $output);       
    }
   public function form_store_logo()
    {         
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
         $array   = $this->Header_model->get_logo($user_id, $id_ebay_design,$id_home_design);
         $data["user_id"]= $user_id;
         $data["id_ebay_design"]= $id_ebay_design;
         $data["id_home_design"]= $id_home_design;
        if($array)
        {
            foreach ($array as $row)
             {
                  $data["logo_url"] = $row->logo_url;
                  $data["id_logo"] = $row->id_logo;
             }
        }
       else
        $data["logo_url"]  = false;       
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/logo', $data,true);          
        echo  json_encode($data);   
    }
    public function new_logo()
     {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $logo_url    =  $this->input->post('logo_url',TRUE); 
        $this->Header_model->insert_logo_design($user_id,$id_ebay_design,$id_home_design,$logo_url);
        $array = $this->Header_model->get_logo($user_id,$id_ebay_design,$id_home_design);
         if($array)
       {
           foreach ($array as $row)            
                 $logo_url = $row->logo_url;         
           $out_put =  '<a href="" class="store-home-url"><img class="logo store-home-url" src="'.$logo_url.'" /></a>'."\n";
           $this->write_log_in_js_file($user_id,"logo.js",$out_put,"logo_display");
       }
       
     }
    public function update_logo()
     {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
         $id_logo    =  $this->input->post('id_logo'); 
         $logo_url    =  $this->input->post('logo_url'); 
         $base_path = $this->Configuration_model->get_configuration_value('base-path');
         $array = $this->Header_model->get_logo($user_id,$id_ebay_design,$id_home_design);
         $this->delete_image_from_server1($array,$base_path);
         $this->Header_model->update_logo($id_logo,$logo_url);
         $array = $this->Header_model->get_logo($user_id,$id_ebay_design,$id_home_design);
         if($array)
       {
           foreach ($array as $row)            
                 $logo_url = $row->logo_url;         
           $out_put =  '<a href="" class="store-home-url"><img class="logo store-home-url" src="'.$logo_url.'" /></a>'."\n";
           $this->write_log_in_js_file($user_id,"logo.js",$out_put,"logo_display");
       }
     }
     public function form_welcome_text()
    {           
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $array_welcome_text  = $this->Storedesign_model->get_welcome_text($id_ebay_design,$id_home_design , $user_id);
         # Variables de sesion de KCFinder, 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
        # Al hacer LogOut deber�amos cambiar disabled a true: $_SESSION['KCFINDER']['disabled'] = true;
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        if(is_array($array_welcome_text)):
        foreach($array_welcome_text as $welcome_text):
             $current_welcome_text =  $welcome_text->text;
             $data["id_home_design_welcome_text"] =  $welcome_text->id_home_design_welcome_text;
         endforeach;
         else:
             $current_welcome_text = "";
         endif;
         $data["current_welcome_text"] = $current_welcome_text;        
         $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/welcome_text', $data,true);          
         echo  json_encode($data); 
    }
   public function update_welcome_text()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $data["welcome_text"]    = $this->input->post('welcome_text');                          
        $this->Storedesign_model->add_welcome_text($data["welcome_text"],$id_ebay_design, $id_home_design,$user_id);
        $data["message"] = " Welcome text was added successful";   
        $array_welcome_text  = $this->Storedesign_model->get_welcome_text($id_ebay_design,$id_home_design , $user_id);
        if(is_array($array_welcome_text)):
        foreach($array_welcome_text as $welcome_text):
             $current_welcome_text =  $welcome_text->text;
             $data["id_home_design_welcome_text"] =  $welcome_text->id_home_design_welcome_text;
         endforeach;
         else:
             $current_welcome_text = "";
         endif;        
         $current_welcome_text = trim($current_welcome_text);
         if($current_welcome_text=="")
            $current_welcome_text =  '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Custom text widget is active but has not text to show.';
        $this->write_in_js_file($user_id,"welcome_text.js",$current_welcome_text, "welcome_text");
        $data["current_welcome_text"] = $current_welcome_text;         
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/welcome_text', $data,true);          
        echo  json_encode($data); 
    }
   
    /*Functions for image and video slider*/
        public function load_image_video_slider()
     {        
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $data["currency"] = $this->session->userdata( 'currency' );       
        $images_videos_slider_array  = $this->Storedesign_model->get_images_videos_slider($id_ebay_design,$id_home_design,$user_id );     

       // $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $array_images = array();
        $array_videos = array();
        $index_image = 0;
        $index_video = 0;        
        if(!empty($images_videos_slider_array)):         
       foreach ($images_videos_slider_array as $images_videos_slider):
           if($this->check_image_or_video($images_videos_slider->image_url)=='image'):
             $array_images[$index_image] ['id_home_design_slider'] = $images_videos_slider->id_home_design_slider;
             $array_images[$index_image] ['image_url'] = $images_videos_slider->image_url;
             $array_images[$index_image] ['link'] = $images_videos_slider->link;
             $index_image++;
             else:
             $array_videos[$index_video] ['id_home_design_slider'] = $images_videos_slider->id_home_design_slider;
             $array_videos[$index_video] ['image_url'] = $images_videos_slider->image_url;
             $array_videos[$index_video] ['link'] = $images_videos_slider->link;
             $array_videos[$index_video] ['type'] = $images_videos_slider->type;
             $index_video++;
           endif;         
       endforeach;
         endif;
        $data["array_videos"]  = $array_videos;
        $data["array_images"]  = $array_images;
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/image_video_slider', $data,true);          
      
        echo  json_encode($data);         
     }
  /*Load form to add an image*/   
   public function load_images_videos_slider_part()
     {
        $data  = array() ;
        $data["id_user"] = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/image_video_slider_part', $data,true);         
        echo  json_encode($data);         
     }
     /*Load form to add youtube, vimeo videos*/
   public function load_images_videos_slider_part_providers_part()
     {
        $data           = array() ;
        $provider = $this->input->post('provider'); 
        $data["provider"] = $provider;
        if($provider=="Youtube"):
           $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/image_video_slider_part_youtube', $data,true);     
        elseif($provider=="Vimeo") :
           $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/image_video_slider_part_vimeo', $data,true);     
        endif;        
        echo  json_encode($data);         
     }
     function check_image_or_video($file)
     {
        $handlers = array ('jpeg','png','gif','jpg','bmp');        
        $extension = strtolower(substr($file, strrpos($file, '.')+1));
       
        if (in_array($extension,$handlers))
           {    
             return 'image';
             //do the rest of your thumbnail stuff here
           }
        else
            {
             return 'video'; 
            //throw an 'invalid image' error
            }
     }
     
      public function save_images_videos_slider()
     {
      $data["username"] = $this->session->userdata( 'username' );
      $data["user_id"] = $this->session->userdata( 'user_id' );
      $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );;
      $id_home_design = $this->session->userdata( 'id_home_design' );  
      
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $id_ebay_design     =  $data["id_ebay_design"] ;
       $id = $this->input->post('id',TRUE); 
       $link =  $this->input->post('link',TRUE); 
       $image_url = $this->input->post('image_url',TRUE); 
       $type = $this->input->post('type',TRUE); 
        if($image_url!="ignore")
        {
            $images_videos_slider = $this->Storedesign_model->get_images_videos_slider_with_id($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($images_videos_slider,$base_path) ;           
        }        
       $this->Storedesign_model->add_images_videos_slider($id,$id_ebay_design,$link,$image_url,  $data["user_id"],$id_home_design,$type);
       $slider_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'image-slider',$id_ebay_design, $id_home_design, $data["user_id"]);
       $slider_array = $this->Storedesign_model->get_images_videos_slider($id_ebay_design,$id_home_design,$data["user_id"] );        
  
       $slide_videor_code_tagged_part = $this->HTMLtojs_model->get_code_tagged_part('front', 'video-slider',$data["id_ebay_design"], $id_home_design, $data["user_id"]);  
         
       $this->save_slider_images_code_in_js_file($slider_array,$slider_code_tagged_part,$slide_videor_code_tagged_part,"front_slider.js",$data["user_id"]);
      
      
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $data["message"] = "Image / Video was saved successful";
        echo  json_encode($data);
     }
     
   public function load_images_videos_slider_array()
    {
        $id_home_design_slider = $this->input->post('id_home_design_slider',TRUE);        
        $data["html"] = $this->Storedesign_model->load_images_videos_slider_array($id_home_design_slider);        
        echo  json_encode($data); 
    }
     public function delete_images_videos_slider()
    {
      $data["username"] = $this->session->userdata( 'username' );
      $data["user_id"] = $this->session->userdata( 'user_id' );
      $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );;
      $id_home_design = $this->session->userdata( 'id_home_design' );  
        $id_home_design_slider = $this->input->post('id_home_design_slider',TRUE); 
        $home_design_slider                = $this->Storedesign_model->get_images_videos_slider_with_id($id_home_design_slider); 

        $base_path = $this->Configuration_model->get_configuration_value('base-path');   
        
        $this->delete_image_from_server($home_design_slider,$base_path) ;

        $this->Storedesign_model->delete_images_videos_slider($id_home_design_slider);
         $slider_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'image-slider',$data["id_ebay_design"], $id_home_design, $data["user_id"]);
         $slide_videor_code_tagged_part = $this->HTMLtojs_model->get_code_tagged_part('front', 'video-slider',$data["id_ebay_design"], $id_home_design, $data["user_id"]);  
            $slider_array = $this->Storedesign_model->get_images_videos_slider($data["id_ebay_design"],$id_home_design,$data["user_id"] );        
            $this->save_slider_images_code_in_js_file($slider_array,$slider_code_tagged_part,$slide_videor_code_tagged_part,"front_slider.js",$data["user_id"]);
        $data["message"] = "Image / Video was deleted successful";
        
        echo  json_encode($data);   
    }
     public function save_slider_images_code_in_js_file($slider_array, $slider_code_tagged_part,$slide_videor_code_tagged_part,$file_name, $id_user)
    {
       $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slider widget is active but has not images or videos to show.';
       $prepare_out_put = "";
      /* print_r($slider_array);*/
      // die("****");
       if(is_array($slider_array)):
           $out_put = "";
       foreach($slider_array as $slider):
           if($slider->type == ""):
           if($slider->link == ""):
               $prepare_out_put =  str_replace("[LINK]","#",$slider_code_tagged_part);
           else:
               $prepare_out_put =  str_replace("[LINK]",$slider->link,$slider_code_tagged_part);
           endif;         
         $prepare_out_put =  str_replace("[IMAGE_URL]",$slider->image_url,$prepare_out_put);
         $out_put .= $prepare_out_put;
         endif;
          if($slider->type == "Vimeo"):
             $video_id =   (int) substr(parse_url($slider->image_url , PHP_URL_PATH), 1);
             $share =  '<iframe src="//player.vimeo.com/video/'.$video_id.'?portrait=0&amp;color=ffffff" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';                     
             $prepare_out_put =  str_replace("[VIDEO]",$share,$slide_videor_code_tagged_part);
             $out_put .= $prepare_out_put;
          endif;
          
          if($slider->type == "Youtube"):
             $url = $slider->image_url;
             $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
             preg_match($pattern, $url, $matches);
             $video_id =  (isset($matches[1])) ? $matches[1] : false;
             $share =  '<iframe width="100%" height="auto" src="//www.youtube.com/embed/'.$video_id.'" frameborder="0" allowfullscreen></iframe>';      
             $prepare_out_put =  str_replace("[VIDEO]",$share,$slide_videor_code_tagged_part);
             $out_put .= $prepare_out_put;
          endif;
       endforeach;
       endif;
       
       $this->write_in_js_file($id_user,$file_name,$out_put,"slider_images");      
    }
    /*EOF image and video slider Functions*/
   
    /*BG tabs functions for front design*/
    public function form_tabs()
    {            
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $data["home_tabs_array"]   = $this->Storedesign_model->get_all_tabs($id_ebay_design,$id_home_design,$user_id );
        # Variables de sesion de KCFinder, 
       $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/tabs', $data,true);                  
        echo  json_encode($data);   
    }
    
    public function add_tab()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $title = $this->input->post('tab_title');  
        $content = $this->input->post('tab_content');
        if ( $this->input->post('tab_id') ) 
         {
            $id = $this->input->post('tab_id') ;
            $this->Storedesign_model->update_tab($id,$title, $content,$id_ebay_design, $id_home_design,$user_id);
             $data["message"] = " Tab was Updated";
          } 
        else 
          {
            $this->Storedesign_model->add_tab($title, $content,$id_ebay_design, $id_home_design,$user_id);
            $data["message"] = " Tab was added successful";   
          }
          $tabs_titles_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'tabs-title',$id_ebay_design, $id_home_design, $user_id);
          $tabs_contents_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'tabs-content',$id_ebay_design, $id_home_design, $user_id);         
          $tabs_array = $this->Storedesign_model->get_all_tabs($id_ebay_design,$id_home_design,$user_id );        
          $this->save_tabs_code_in_js_file($tabs_array,$tabs_titles_code_tagged_part, $tabs_contents_code_tagged_part,"front_tabs_titles.js","front_tabs_content.js",$user_id); 
        echo  json_encode($data);    
    }

    public function delete_tab()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $id_tab = $this->input->post('id_tab');        
        $this->Storedesign_model->delete_tab($id_tab);
        $tabs_titles_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'tabs-title',$id_ebay_design, $id_home_design, $user_id);
        $tabs_contents_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'tabs-content',$id_ebay_design, $id_home_design, $user_id);         
        $tabs_array = $this->Storedesign_model->get_all_tabs($id_ebay_design,$id_home_design,$user_id );        
        $this->save_tabs_code_in_js_file($tabs_array,$tabs_titles_code_tagged_part, $tabs_contents_code_tagged_part,"front_tabs_titles.js","front_tabs_content.js",$user_id); 
        $data["message"] = "Tab was deleted successful";
        echo  json_encode($data);   
    }  

    public function load_tab()
    {
        $id_tab = $this->input->post('id_tab');        
        $data["html"] = $this->Storedesign_model->load_tab($id_tab);        
        echo  json_encode($data); 
    }
 public function save_tabs_code_in_js_file($tabs_array, $tabs_titles_code_tagged_part,$tabs_contents_code_tagged_part,$file_name_titles,$file_name_content, $id_user)
    {
      $out_put_titles = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tab widget is active but has not items to show.';
      $out_put_content = " ";
      if(is_array($tabs_array)):
          $out_put_titles = '';
       foreach($tabs_array as $tabs):             
         $prepare_out_put_titles = "";         
         $prepare_out_put_content = "";
         $tab_title_data = $tabs->title;
         $tab_title_data = str_replace(" ","-",$tab_title_data);
         $tab_title_data = strtolower($tab_title_data);
         $prepare_out_put_titles =  str_replace("[TAB_TITLE]",$tabs->title,$tabs_titles_code_tagged_part);         
         $prepare_out_put_titles =  str_replace("[TAB_TITLE_DATA]",$tab_title_data,$prepare_out_put_titles);
         $out_put_titles .= $prepare_out_put_titles;
         
         $prepare_out_put_content =  str_replace("[TAB_CONTENT]",$tabs->content,$tabs_contents_code_tagged_part);         
         $prepare_out_put_content =  str_replace("[TAB_TITLE_DATA]",$tab_title_data,$prepare_out_put_content);
         $out_put_content .= $prepare_out_put_content;
         //echo $out_put_content;
       endforeach;
   endif;
    
       $this->write_in_js_file($id_user,$file_name_titles,$out_put_titles,"tab_titles");     
       $this->write_in_js_file($id_user,$file_name_content,$out_put_content,"tab_ontent");
    }
   /*BG Advertising functions*/
     public function load_advertising()
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );        
        $data["home_advertising_array"]   = $this->Storedesign_model->get_home_advertising($id_ebay_design,$id_home_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/home_advertising', $data,true);                  
        echo  json_encode($data);         
     }
    public function load_home_advertising()
    {
        $id_home_design_advertising = $this->input->post('id_home_design_advertising',TRUE);     
        
        $data["html"] = $this->Storedesign_model->load_home_advertising($id_home_design_advertising);        
        echo  json_encode($data); 
    }
     public function load_advertising_part()
     {
        $data           = array() ;
        $data["id_user"] = $this->session->userdata( 'user_id' );;
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/home_advertising_part', $data,true);                  
        echo  json_encode($data);         
     }

    public function save_home_advertising()
    {
        $id                = $this->input->post('id',TRUE);  ;
        $title             = $this->input->post('title',TRUE); 
        $link              = $this->input->post('link');
        $image_url         = $this->input->post('image_url',TRUE);         
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        echo $link;
       if($image_url!="ignore")
        {
           $advertising = $this->Storedesign_model->load_home_design_advertising($id );
           $base_path = $this->Configuration_model->get_configuration_value('base-path');
           $this->delete_image_from_server($advertising,$base_path) ;           
        }
        $this->Storedesign_model->save_home_design_advertising( $id , $title , $link , $image_url ,$id_ebay_design, $id_home_design,$user_id) ;
        $advertising_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'advertisings',$id_ebay_design, $id_home_design, $user_id);
        $advertising_array = $this->Storedesign_model->get_home_advertising($id_ebay_design,$id_home_design,$user_id );        
        $this->save_advertising_code_in_js_file($advertising_array,$advertising_code_tagged_part,"front_advertisings.js",$user_id);
        $data["message"] = "Advertising was saved successful";
        echo  json_encode($data);
    }
    public function delete_home_advertising()
    {   
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );  
        $id_home_design_advertising = $this->input->post('id_home_design_advertising',TRUE); 
        $advertising = $this->Storedesign_model->load_home_advertising($id_home_design_advertising); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');          
        $this->delete_image_from_server($advertising,$base_path) ;
        $this->Storedesign_model->delete_home_advertising($id_home_design_advertising);
         $advertising_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'advertisings',$id_ebay_design, $id_home_design, $user_id);
        $advertising_array = $this->Storedesign_model->get_home_advertising($id_ebay_design,$id_home_design,$user_id );        
        $this->save_advertising_code_in_js_file($advertising_array,$advertising_code_tagged_part,"front_advertisings.js",$user_id);
        $data["message"] = "Advertising was deleted successful";        
        echo  json_encode($data);   
    }
    public function update_order_advertising()
    {
      $user_id           = $this->session->userdata( 'user_id' );
      $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
      $id_home_design = $this->session->userdata( 'id_home_design' ); 
      /*order code*/
      $id = $this->input->post('id',TRUE);
      $order_value = $this->input->post('order_value',TRUE);
      $this->Storedesign_model->update_order_advertising( $id , $order_value);
      $advertising_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'advertisings',$id_ebay_design, $id_home_design, $user_id);
      $advertising_array = $this->Storedesign_model->get_home_advertising($id_ebay_design,$id_home_design,$user_id );        
      $this->save_advertising_code_in_js_file($advertising_array,$advertising_code_tagged_part,"front_advertisings.js",$user_id);
    }
    public function save_advertising_code_in_js_file($advertising_array, $advertising_code_tagged_part,$file_name, $id_user)
    {
        if(!is_array($advertising_array))
       $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Advertising widget is active but has not items to show.';
        else
           $out_put = ""; 
       $prepare_out_put = "";
       foreach($advertising_array as $advertising):
           if($advertising->link == ""):
              $prepare_out_put =  str_replace("[LINK]","javascript:void(0);",$advertising_code_tagged_part);
           else:
               $prepare_out_put =  str_replace("[LINK]",$advertising->link,$advertising_code_tagged_part);
           endif;
         $prepare_out_put =  str_replace("[TITLE]",$advertising->title,$prepare_out_put);
         $prepare_out_put =  str_replace("[IMAGE_URL]",$advertising->image_url,$prepare_out_put);
         $out_put .= $prepare_out_put;
       endforeach;
   
       $this->write_in_js_file($id_user,$file_name,$out_put,"front_advertisings");     
    }
    /*EOF Advertisings functions*/
    
    /*Layout settings*/
     function load_layout_maker() { 

        $data               = array() ;
        $data['availables'] = array( 
                                    'store-categories' => 'Store Categories',
                                    'store-listings' => 'Store Listings',
                                    'tabs' => 'Tabs',
                                    //'newsletter' => 'Newsletter',
                                    'advertising' => 'Advertising',
                                   'popular-categories' => 'Popular Categories',
                                    'featured' => 'Featured Listings',
                                    'specials' => 'Special Discounts', 
                                    'arrivals' => 'New Arrivals',                                     
                                    'slider' => 'Image & Video Slider',
            'welcometext' => 'Custom Rich Text',
                                     'browse-by-specifics' => 'browse by specifics',
                                    
                                    ) ;
        $data['type']       = 1 ;
        $data['widgets']    = array(array(),array(),array());
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );

        $layout          = $this->Storedesign_model->load_layout($id_ebay_design,$id_home_design,$user_id);
        
        if ( $layout ) {
            $data['type']    = $layout->layout_type ;
            $data['widgets'] = unserialize($layout->layout_widgets) ;

            foreach ($data['widgets'] as $sections )
                foreach ($sections as $widget )
                    if ( isset($data['availables'][$widget]) )
                        unset($data['availables'][$widget]);
        }

        $data["html"] = $this->template->ajax_load_view('store_design/front_design/forms/front_layout', $data,true);          

        echo  json_encode($data); 
    }

    function save_layout () 
    {
        $data         = array() ;
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $type              = $this->input->post('type');
        $widgets           = $this->input->post('widgets');
        $data['type']    = $type ;

        // Fix Widgets
        if ( ! is_array($widgets) )
            $widgets = array(array(),array(),array());

        $data['widgets'] = serialize($widgets) ;

        $result = $this->Storedesign_model->save_layout($type,$widgets,$id_ebay_design,$id_home_design,$user_id);
         if($result):
            $this->save_layout_in_js_file($type);
            $this->save_column_left_in_js_file();
            $this->save_column_center_in_js_file();
            $this->save_column_right_in_js_file();
         endif;
        echo  json_encode($data); 
    }
    public function save_layout_in_js_file($layout_type)
    {
        $out_put =  'var layout_type = '.($layout_type).';'."\n";   
        $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'front_layout_type.js',$out_put);   
    }
     public function save_column_left_in_js_file()
    {
       $out_put = "";
       $widgets_return = $this->get_column_left_layout();
      if(is_array($widgets_return)):
           $out_put =  'var left_widgets = '.json_encode($widgets_return).';'."\n";         
      else:
          $out_put =  'var left_widgets = false;'."\n";  
      endif;
       $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'front_left_widgets.js',$out_put);     
    }
     public function save_column_center_in_js_file()
    {
       $out_put = "";
       $widgets_return = $this->get_column_center_layout();
      if(is_array($widgets_return)):
           $out_put =  'var center_widgets = '.json_encode($widgets_return).';'."\n";      
      else:
          $out_put =  'var center_widgets = false;'."\n";  
      endif;
       $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'front_center_widgets.js',$out_put);     
    }
     public function save_column_right_in_js_file()
    {
       $out_put = "";
       $widgets_return = $this->get_column_right_layout();
      if(is_array($widgets_return)):
           $out_put =  'var right_widgets = '.json_encode($widgets_return).';'."\n";         
      else:
          $out_put =  'var right_widgets = false;'."\n";  
      endif;
       $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'front_right_widgets.js',$out_put);     
    }
    function get_column_left_layout()
    {
        $widgets = array(array(),array(),array());
        $widgets_return = array();
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        //$layout = $this->Listingdesign_model->load_layout($id_ebay_design,$id_listing_design,$user_id);
        $layout = $this->Storedesign_model->load_layout($id_ebay_design,$id_home_design,$user_id);
        if ( $layout ):
            $widgets = unserialize($layout->layout_widgets);
            if(isset($widgets[0])):
                 foreach($widgets[0] as $widget):
                  $widget = strtolower($widget);
                $widgets_return[] = $widget;
                 endforeach;
                 else:
                     return false;
            endif;
            else:
                return false;
        endif;
        return $widgets_return;
    }
     function get_column_center_layout()
    {
        $widgets = array(array(),array(),array());
        $widgets_return = array();
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $layout = $this->Storedesign_model->load_layout($id_ebay_design,$id_home_design,$user_id);
        if ( $layout ):
            $widgets = unserialize($layout->layout_widgets);
        if(isset($widgets[1])):
                 foreach($widgets[1] as $widget):
                  $widget = strtolower($widget);
                $widgets_return[] = $widget;
                 endforeach;
                 else:
                     return false;
            endif;
            else:
                return false;
        endif;
        return $widgets_return;
    }
     function get_column_right_layout()
    {
        $widgets = array(array(),array(),array());
        $widgets_return = array();
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_home_design = $this->session->userdata( 'id_home_design' );
        $layout = $this->Storedesign_model->load_layout($id_ebay_design,$id_home_design,$user_id);
        if ( $layout ):
            $widgets = unserialize($layout->layout_widgets);
            if(isset($widgets[2])):
                 foreach($widgets[2] as $widget):
                  $widget = strtolower($widget);
                $widgets_return[] = $widget;
                 endforeach;
                 else:
                     return false;
            endif;
            else:
                return false;
        endif;
        return $widgets_return;
    }
    /*End Layout*/
    /*BG Popular categories functions*/
    public function save_popular_categories()
    {
        $id = $this->input->post('id',TRUE);  ;
        $title = $this->input->post('title',TRUE); 
        $link = $this->input->post('link',TRUE);
        $image_url = $this->input->post('image_url',TRUE);         
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );   
        $id_home_design = $this->session->userdata( 'id_home_design' );
        if($image_url!="ignore")
        {
            $advertising = $this->Listingdesign_model->load_listing_advertising($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($advertising,$base_path) ;           
        }
        $this->Popularcategories_model->save_popular_categories( $id , $title , $link , $image_url ,$id_ebay_design,$user_id);
        $popular_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'popular-categories',$id_ebay_design, $id_home_design, $user_id);
        $popular_categories_array = $this->Popularcategories_model->get_popular_categories($id_ebay_design,$user_id);
        $this->save_popular_categories_code_in_js_file1($popular_categories_array,$popular_categories_code_tagged_part,"popular_categories.js",$user_id);
        $data["message"] = "Advertising was saved successful";
        echo  json_encode($data);
    }              
    
    public function load_popular_categories()
     {        
        $user_id  = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $data["listing_popular_categories_array"] = $this->Popularcategories_model->get_popular_categories($id_ebay_design,$user_id );        
        $data["html"] = $this->template->ajax_load_view('store_design/popular_categories/ajax/popular_category', $data,true);                  
        echo  json_encode($data);         
     }
     
   public function load_popular_category()
     {        
        $id_popular_category = $this->input->post('id_popular_category');
        $data["popular_category"]   = $this->Popularcategories_model->get_popular_category($id_popular_category );        
        echo  json_encode($data);         
     }
     
   public function popular_categories_part()
     {
        $data = array() ;
        $data["html"] = $this->template->ajax_load_view('store_design/popular_categories/ajax/popular_category_part', $data,true);                  
        echo  json_encode($data);         
     }
     
    public function delete_popular_category()
    {    
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );   
        $id_home_design = $this->session->userdata( 'id_home_design' );  
        $id_popular_category = $this->input->post('id_popular_category',TRUE);  
        $popular_category = $this->Popularcategories_model->get_popular_category($id_popular_category );
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $this->delete_image_from_server($popular_category,$base_path) ;   
        $this->Popularcategories_model->delete_popular_category($id_popular_category);
        $popular_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'popular-categories',$id_ebay_design, $id_home_design, $user_id);
        $popular_categories_array = $this->Popularcategories_model->get_popular_categories($id_ebay_design,$user_id);
        $this->save_popular_categories_code_in_js_file($popular_categories_array,$popular_categories_code_tagged_part,"popular_categories.js",$user_id);
        $data["message"] = "Popular Category was deleted successful";        
        echo  json_encode($data);   
    }
    
    /*BG Featured listings functions used for listing and store front design*/
    public function load_featured_listing()
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );        
        $data["currency"] = $this->session->userdata( 'currency' );
        $data["listing_featured_array"]   = $this->Featured_model->get_featured_listing($id_ebay_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/featured', $data,true);                  
        echo  json_encode($data);         
     }
     
   public function load_featured_listings_array()
    {
        $id_featured_listing = $this->input->post('id_featured_listing',TRUE);        
        $data["html"] = $this->Listingdesign_model->load_featured_listing($id_featured_listing);        
        echo  json_encode($data); 
    }
  public function load_featured_listing_part()
     {
        $data           = array() ;
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/featured_part', $data,true);             
        echo  json_encode($data);         
     }
 public function save_featured_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );;
       $id_home_design = $this->session->userdata( 'id_home_design' );  
       $data["page_title"] = "Featured Listings";
       $this->load->library('breadcrumbs');    
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );       
       $id_ebay_design     =  $data["id_ebay_design"] ;
       $id = $this->input->post('id',TRUE); 
       $title =  $this->input->post('title',TRUE); 
       $price =  $this->input->post('price',TRUE); 
       $link =  $this->input->post('link',TRUE); 
       $image_url = $this->input->post('image_url',TRUE);         
        if($image_url!="ignore")
        {
            $featured_listing = $this->Featured_model->get_featured_listing_with_id($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($featured_listing,$base_path) ;           
        }        
       $this->Featured_model->add_featured_listing($id,$id_ebay_design,$title,$price,$link,$image_url,  $data["user_id"]);       
       $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front','featured',$id_ebay_design, $id_home_design, $data["user_id"]);
       $featured_listings_array = $this->Featured_model->get_featured_listing($id_ebay_design,$data["user_id"] );
       $this->save_featured_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"featured_listing.js", $data["user_id"]);
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $data["message"] = "Featured Listing was saved successful";
        echo  json_encode($data);
     }
     public function delete_featured_listing()
    {    
        $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );;
       $id_home_design = $this->session->userdata( 'id_home_design' );  
        $id_featured_listing = $this->input->post('id_featured_listing',TRUE); 
        $featured_listing                = $this->Featured_model->get_featured_listing_with_id($id_featured_listing); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');           
        $this->delete_image_from_server($featured_listing,$base_path) ;
        $this->Featured_model->delete_featured_listing($id_featured_listing);
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front','featured', $data["id_ebay_design"] , $id_home_design, $data["user_id"]);
       $featured_listings_array = $this->Featured_model->get_featured_listing( $data["id_ebay_design"] ,$data["user_id"] );
       $this->save_featured_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"featured_listing.js", $data["user_id"]);
        $data["message"] = "Featured Listing  was deleted successful";        
        echo  json_encode($data);   
    }
    /*Generate code into featured_listing.js*/
    public function save_featured_code_in_js_file($featured_listings_array, $featured_code_tagged_part,$file_name, $id_user)
    {
        if(!is_array($featured_listings_array)):
             $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This widget has not items to show.';
            else:
             $out_put = '';
        endif;
      
       $prepare_out_put = "";
       if(is_array($featured_listings_array)):
            foreach($featured_listings_array as $featured_listing):
         $prepare_out_put =  str_replace("[TITLE]",$featured_listing->title,$featured_code_tagged_part);
         $prepare_out_put =  str_replace("[PRICE]",$this->session->userdata( 'currency' )." ".$featured_listing->price,$prepare_out_put);
         $prepare_out_put =  str_replace("[LINK]",$featured_listing->link,$prepare_out_put);
         $prepare_out_put =  str_replace("[IMAGE_URL]",$featured_listing->image_url,$prepare_out_put);
         $out_put .= $prepare_out_put;
       endforeach;
       endif;              
       /*open file*/
       $this->write_in_js_file($id_user,$file_name,$out_put);
    }
    /*EOF Functions for featured listings*/
    /*Store Settings*/
     public function form_general_settings()
    {           
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $data['all_urls'] = $this->Storedesign_model->StoreSettingDetails($id_ebay_design, $user_id);     
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/store_settings', $data,true);          
        echo  json_encode($data); 
    }
    public function save_store_settings()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $info = array(
                "ebay_user_id"	=>	$this->input->post('store_id',TRUE),
                "store_url"	=>	$this->input->post('store_url',TRUE),
                "store_name"	=>	$this->input->post('store_name',TRUE),
               
                "phone"	=>	$this->input->post('phone',TRUE),
                "currency"	=>	$this->input->post('currency',TRUE),
                "id_ebay_design"	=>	$id_ebay_design,
                "id_user"	=>	$user_id
        );
        $result = $this->Storedesign_model->save_store_settings($id_ebay_design, $user_id, $info);
        if($result)
        {        
        $store_settings_array = $this->Storedesign_model->StoreSettingDetails($id_ebay_design,$user_id);    
        $this->load->library('../controllers/store_design/ebayapi');
        $eBayAPI = new Ebayapi(); 
        $store_settings_array["site_domain"] = $eBayAPI->getDomainnameBySiteId($store_settings_array["site_id"]);
        $this->save_general_settings_in_js_file($store_settings_array,"vars_settings.js",$user_id);
        }
    } 
     public function save_general_settings_in_js_file($store_settings_array,$file_name, $id_user)
    {
       $client_hosting_url = $this->Configuration_model->get_configuration_value('client-hosting');       
       $out_put = "";
       $out_put = 'var store_name = "'.$store_settings_array["store_name"].'";'."\n";
       $out_put .= 'var store_id = "'.$store_settings_array["ebay_user_id"].'";'."\n";
       $out_put .= 'var store_url = "'.$store_settings_array["store_url"].'";'."\n";
       $out_put .= 'var store_phone = "'.$store_settings_array["phone"].'";'."\n";
       $out_put .= 'var currency = "'.$store_settings_array["currency"].'";'."\n";
       $out_put .= 'var hosting_url = "'.$client_hosting_url.$store_settings_array["id_user"].'";'."\n";
       $out_put .= 'var site_domain = "'.$store_settings_array["site_domain"].'";'."\n";
      
       $this->write_in_js_file_without_document_write($id_user,$file_name,$out_put);     
    }
    /*Social media*/
    public function form_social_media() 
    {           
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $data['all_urls'] = $this->Storedesign_model->SocialMediaDetails($id_ebay_design,$user_id);     
        $data["html"]   = $this->template->ajax_load_view('store_design/front_design/forms/social_media', $data,true);           echo  json_encode($data); 
    }
    public function save_social_media()
    {
            $user_id = $this->session->userdata( 'user_id' );
            $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
            $info = array(
                    "twiter_url"	=>	$this->input->post('twitter_url',TRUE),
                    "facebook_url"	=>	$this->input->post('facebook_url',TRUE),
                    "youtube_url"	=>	$this->input->post('youtube_url',TRUE),
                    "printerest_url"	=>	$this->input->post('printerest_url',TRUE),
                    "linkedin_url"	=>	$this->input->post('linkedin_url',TRUE),
                    "google_url"	=>	$this->input->post('google_url',TRUE),
                    "delicious_url"	=>	$this->input->post('delicious_url',TRUE),
                    "id_ebay_design"	=>	$id_ebay_design,
                    "id_user"	=>	$user_id
            );
            
            
         $result =$this->Storedesign_model->save_social_media($id_ebay_design, $user_id, $info);
        if($result)
        {        
        $social_media_array = $this->Storedesign_model->SocialMediaDetails($id_ebay_design,$user_id);        
        $this->save_save_social_in_js_file($social_media_array,"social_media.js",$user_id);
        }
    }
      public function save_save_social_in_js_file($social_media_array,$file_name, $id_user)
    {
       $out_put = "";
       $out_put = 'var twiter_url = "'.$social_media_array["twiter_url"].'";'."\n";
       $out_put .= 'var facebook_url = "'.$social_media_array["facebook_url"].'";'."\n";
       $out_put .= 'var youtube_url = "'.$social_media_array["youtube_url"].'";'."\n";
       $out_put .= 'var printerest_url = "'.$social_media_array["printerest_url"].'";'."\n";
       $out_put .= 'var linkedin_url = "'.$social_media_array["linkedin_url"].'";'."\n";
       $out_put .= 'var google_url = "'.$social_media_array["google_url"].'";'."\n";
       $out_put .= 'var delicious_url = "'.$social_media_array["delicious_url"].'";'."\n";
       $this->write_in_js_file_without_document_write($id_user,$file_name,$out_put);     
    }
    /*some security*/
    public function authorization_request_form()
    {
       $data = array();
       $data["html"]   = $this->template->ajax_load_view('security/form_authorization', $data,true);          
       echo json_encode($data);
    }
    public function authorization_request()
    {
       $data = array();
        $result = false;
        $user_name = $this->session->userdata( 'username' );
        $result_login_validation = $this->login_model->validate_login($user_name, $this->input->post('password'));   
         if(is_array($result_login_validation)):
             $result = "true";
             $data["authorize"] = $result;
         else:
             $result = "false";
             $data["authorize"] = $result;
         endif;
         echo json_encode($data);
    }
    public function load_store_front_backup()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design,$user_id);
        $this->load->library('../controllers/store_design/ebayapi');
        $eBayAPI = new Ebayapi(); 
       $eBayAPI->Set_API_Data();   
    
        $data = array();
        $data["site_domain"]  = $eBayAPI->getDomainnameBySiteId($store_settings->site_id);
        $store_backups = $this->Storedesign_model->load_store_backups($user_id);
        if($store_backups):
            $data["store_backup_object"] = $store_backups;
            $data["html"] =  $this->template->ajax_load_view('security/store_front_backup', $data,true);          
            echo  json_encode($data); 
        endif;
    }
    
 
    /*Interna functions*/
  function write_in_js_file($id_user, $file_name,$out_put,$var_name)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
       $out_put = str_replace(array("\r\n", "\r"), "\n", $out_put);
       $out_put = str_replace("'", "\'", $out_put);
       $lines = explode("\n", $out_put);
       $new_lines = array();
       $result_html = "";
       $lngth = sizeof($lines);
       foreach ($lines as $i => $line) 
       { 
           if(!empty($line)):
            //   echo $i;
           if($lngth == ($i+1)):
               $result_html  .= "'".trim($line)."';"."\n"; 
               else:
               $result_html  .= "'".trim($line)."'+"."\n"; 
           endif;   
        endif;                    
       }
       $result_html = "var  $var_name = ".$result_html;
       fwrite($js_file,$result_html);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design  = $this->session->userdata( 'user_id' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
      function write_log_in_js_file($id_user, $file_name,$out_put,$var_name=null)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
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
                 $result_html  .= "document.write('".trim($line)."');"."\n";
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
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user);
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
     function write_in_js_file_without_document_write($id_user, $file_name,$out_put)
     {
       $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
       fwrite($js_file,$out_put);
       fclose($js_file);
       /*write all code in one :) fast loading*/
       $id_user = $this->session->userdata( 'user_id' );
       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user);
       store_front_all_in_one($id_user,$store_settings->language);
       store_listing_all_in_one($id_user,$store_settings->language);
     }
     public function delete_image_from_server($object,$base_path)
    {
     foreach ($object as $row)
        {
            $image_path = $this->get_clean_image_path($row->image_url);
            $thumb_image_path = $this->get_clean_thumbail_image_path($row->image_url);              
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
  public function delete_image_from_server1($object,$base_path)
    {
     foreach ($object as $row)
        {
            $image_path = $this->get_clean_image_path($row->logo_url);
            $thumb_image_path = $this->get_clean_thumbail_image_path($row->logo_url);              
              if(file_exists($base_path.$image_path)) 
            {                 
                unlink($base_path.$image_path) ;
                if(file_exists($base_path.$thumb_image_path));
                unlink($base_path.$thumb_image_path) ;
            }
        }
     }
} 