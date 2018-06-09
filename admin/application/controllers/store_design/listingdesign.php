<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@session_start(); # Aqui para que inicie la sesi�n
class Listingdesign extends CI_Controller {

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
        $this->load->model('Configuration_model');
        $this->load->model('Popularcategories_model');
        $this->load->model('Featured_model');
        $this->load->model('HTMLtojs_model');
        $this->load->helper('load_controller');
        $this->load->model('Arrivals_model');
        $this->load->model('Discounts_model');
        $this->load->database();
        
     }
     /*Load all listings designs purchased*/
    public function index()
     {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"]  = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "My Listing Designs";
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $content_data['array_listing_designs'] = $this->Ebaydesigns_model->get_listing_designs($content_data["user_id"] ); 
       $content_data["passed_to_view"] = $this->breadcrumbs->get();         
       $this->template->load('store_design/listing_designs/index', $content_data); 
     }
/*listing listing settings: start interface to add listing data*/
 public function design_settings()
    {
    $data["username"] = $this->session->userdata( 'username' );
    $data["user_id"] = $this->session->userdata( 'user_id' );
    $data["page_title"] = "Design Options";
    $data["widgettitle"] = "Listing Template Settings";   
    $this->load->library('breadcrumbs');      
    $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' ); 
    $data["passed_to_view"] = $this->breadcrumbs->get();
    $data['id_listing_design'] = $this->session->userdata('id_listing_design');
    $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
    $data['action'] = $this->input->get('action');
    /*$this->session->set_userdata('id_ebay_design', $data['id_ebay_design']);
    $this->session->set_userdata('id_listing_design', $data['id_listing_design'] );    */
    /*Get design settings*/
    $store_settings = $this->Storedesign_model->StoreSettingDetails($data['id_ebay_design'], $data["user_id"]);      
    $this->session->set_userdata('currency', $store_settings['currency']);
    $this->template->load('store_design/listing_designs/design_options', $data);        
    }
   /*Save categories*/
    public function save_update_categories()
    {
        //http://stores.ebay.com//rockscripts/ebay-design-/_i.html?_fsub=5691058014
        //http://stores.ebay.ebay.com/rockscripts/ebay-design-/_i.html?_fsub=5691058014
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data['id_listing_design'] = $this->session->userdata('id_listing_design');
        $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
        $this->load->library('../controllers/store_design/ebayapi');
        $ebay_api = new $this->ebayapi();
        
        $store_settings = $this->Storedesign_model->get_store_setting( $data['id_ebay_design'],$data["user_id"]);
        $ebay_api->set_token($store_settings->token);
        $ebay_array_categories = $ebay_api->get_categories(); 
        if(isset($ebay_array_categories['FAILURE']))
        {
         echo json_encode($ebay_array_categories);
         return;
        } 
        $array_current_categories = $this->get_current_categories();
        //$this->delete_unecessary_categories($ebay_array_categories,$array_current_categories);
       // die("***");
        $site_domain = $ebay_api->getDomainnameBySiteId($store_settings->site_id);
        $store_name = $store_settings->store_name;
        $this->import_categories($ebay_array_categories,$array_current_categories, $site_domain, $store_name);   
        
        //$dynamic_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'dynamic-categories',$data['id_ebay_design'] , $data['id_listing_design'], $data["user_id"]);        
        $categories_parsed = $this->get_dynamic_categories();
        $this->save_categories_code_in_js_file(/*$ebay_array_categories, $dynamic_categories_code_tagged_part,*/ $categories_parsed,"listing_categories.js",$data["user_id"],$ebay_api);
    }
    public function import_categories($array_categories,$array_current_categories, $site_domai,$store_name)
    {
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data['id_listing_design'] = $this->session->userdata('id_listing_design');
        $data['id_ebay_design'] = $this->session->userdata('id_ebay_design');
        $array_categories_ids =  $this->build_and_get_current_categories_ids($array_current_categories);        
        /*insert level */
        for($i=0; $i<sizeof($array_categories);$i++)
        {
            $id = $array_categories[$i]['category_id'] ;
            $title = ucfirst(strtolower($array_categories[$i]['category_name']));
            $category_name_url = $array_categories[$i]['category_name'];
            $category_name_url = str_replace(" ","-",$category_name_url);
            $store_name = str_replace(" ","-",$store_name);
            $store_name = str_replace("_","",$store_name);
            $category_name_url = strtolower($category_name_url);
            $url = "http://stores.$site_domai/".$store_name."/$category_name_url-/_i.html?_fsub=$id";     
            $categories_group = $this->Listingdesign_model->get_user_categories_group_id($data['id_ebay_design'] , $data["user_id"] );             
            $categories_group_id= $categories_group["id"];
             if(!in_array($id, $array_categories_ids)):             
             $position = $array_categories[$i]['category_order'];                          
             
             $this->Listingdesign_model->add_dynamic_category($id, 0, $title, $url,$position, $categories_group_id);    
              $category = $this->Listingdesign_model->get_category($id);
             else:                 
                 /*Check Update require*/             
                  $category = $this->Listingdesign_model->get_category($id);
                 if($category):
                       if($title != $category->title):
                        $this->Listingdesign_model->update_category($id, $title, $url);
                 endif;   
                 endif;                             
             endif; 
              if($category):
                if(isset($array_categories[$i]['category_array_level_2'])):
                 $this->import_categories_level2($array_categories[$i]['category_array_level_2'], $category->id, $categories_group_id,$site_domai,$array_categories_ids,$store_name);
             endif; 
             endif;
          }
    }
    function import_categories_level2($array_categoriesl_level_2, $parent_id, $categories_group_id,$site_domai,$array_categories_ids,$store_name)
    {
        for($i=0; $i<sizeof($array_categoriesl_level_2);$i++):
            $id = $array_categoriesl_level_2[$i]['category_id'] ;
            $title = ucfirst(strtolower($array_categoriesl_level_2[$i]['category_name']));
            $category_name_url = $array_categoriesl_level_2[$i]['category_name'];
            $category_name_url = str_replace(" ","-",$category_name_url);
            $store_name = str_replace(" ","-",$store_name);
            $store_name = str_replace("_","",$store_name);
            $category_name_url = strtolower($category_name_url);
            $url = "http://stores.$site_domai/".$store_name."/$category_name_url-/_i.html?_fsub=$id";   
            
             if(!in_array($id, $array_categories_ids)):             
             $position = $array_categoriesl_level_2[$i]['category_order'];    
             $this->Listingdesign_model->add_dynamic_category($id, $parent_id, $title, $url,$position, $categories_group_id);
             $category = $this->Listingdesign_model->get_category($id);
             else:                 
                 /*Check Update require*/
                 $category = $this->Listingdesign_model->get_category($id);
                 if($category):
                       if($title != $category->title):
                         $this->Listingdesign_model->update_category($id, $title, $url);
                 endif;   
                 endif;                             
             endif;  
             if($category):
                if(isset($array_categoriesl_level_2[$i]['category_array_level_3'])):
                 $this->import_categories_level3($array_categoriesl_level_2[$i]['category_array_level_3'], $category->id, $categories_group_id,$site_domai,$array_categories_ids,$store_name);
             endif; 
             endif;
        endfor;
        
    }
      function import_categories_level3($array_categoriesl_level_3, $parent_id, $categories_group_id,$site_domai,$array_categories_ids,$store_name)
    {
        for($i=0; $i<sizeof($array_categoriesl_level_3);$i++):
            $id = $array_categoriesl_level_3[$i]['category_id'] ;
            $title = ucfirst(strtolower($array_categoriesl_level_3[$i]['category_name']));
            $category_name_url = $array_categoriesl_level_3[$i]['category_name'];
            $category_name_url = str_replace(" ","-",$category_name_url);
            $store_name = str_replace(" ","-",$store_name);
            $store_name = str_replace("_","",$store_name);
            $category_name_url = strtolower($category_name_url);
            $url = "http://stores.$site_domai/".$store_name."/$category_name_url-/_i.html?_fsub=$id";   
             if(!in_array($id, $array_categories_ids)):             
             $position = $array_categoriesl_level_3[$i]['category_order'];    
             $this->Listingdesign_model->add_dynamic_category($id, $parent_id, $title, $url,$position, $categories_group_id);
             else:                 
                 /*Check Update require*/
                 $category = $this->Listingdesign_model->get_category($id);
                 if($category):
                       if($title != $category->title):
                         $this->Listingdesign_model->update_category($id, $title, $url);
                 endif;   
                 endif;                             
             endif;  
        endfor;
        
    }
    public function delete_unecessary_categories($ebay_array_categories,$current_categories)
    {
       $array_ebay_categories_ids =  $this->build_and_get_ebay_categories_ids($ebay_array_categories);
        foreach($current_categories as $category)
        {
             if(!in_array($category->id, $array_ebay_categories_ids)):
                 $this->Listingdesign_model->delete_category($category->id);
             endif;            
        }
    }
    public function build_and_get_ebay_categories_ids($ebay_array_categories)
    {
        $array_categories_ids = array();
         for($i=0;$i<sizeof($ebay_array_categories);$i++):    
         $array_categories_ids [] = $ebay_array_categories[$i]['category_id'];
         endfor;
         return $array_categories_ids;
    }
    public function build_and_get_current_categories_ids($array_categories)
    {
        $array_categories_ids = array();
         foreach($array_categories as $category):    
         $array_categories_ids [] = $category->id_cat;
         endforeach;
         return $array_categories_ids;
    }
    public function get_current_categories()
    {  
        $array_current_categories = array();
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $user_id = $this->session->userdata( 'user_id' );
        $categories_groups = $this->Listingdesign_model->get_dynamic_categories_group_id($id_ebay_design,$user_id);
        $group_id = $categories_groups["id"];
        $response = $this->Listingdesign_model->get_current_categories($group_id);
        if($response)
        $array_current_categories = $response;
        return $array_current_categories;      
    }
      public function load_dynamic_categories()
    {
        define('_DOC_ROOT', BASEPATH . '../3rdparty/dynamiccategories/'  );
        require_once _DOC_ROOT . 'config.php';
        require_once _DOC_ROOT . 'includes/functions.php';
        define('_DOC_SITE', $this->config->site_url() . '/dynamiccategories/' );
        define('_EASYMENU_USER', $this->session->userdata( 'user_id' ) );
        define('_EASYMENU_DESIGN', $this->session->userdata( 'id_ebay_design' ) );
        define('_EASYMENU_LISTING',$this->session->userdata( 'id_listing_design' ) );      
        /**
         * default controller & method
         */
        $controller = 'home';
        $method     = 'index';

        /**
         * url structure: index.php?act=controller.method
         */
        $menu_group = $this->Listingdesign_model->get_user_categories_group_id(_EASYMENU_DESIGN, _EASYMENU_USER);
            $_GET['group_id'] = $menu_group["id"];
        if (isset($_GET['act'])) {
            $act = explode('.', $_GET['act']);
            $controller = $act[0];
            if (isset($act[1])) {
                $method = $act[1];
            }
        }

        $controller_file = _DOC_ROOT . 'modules/' . $controller . '.php';
        //echo $controller_file;
        if (file_exists($controller_file)) {
            include $controller_file;
            $Class_name = ucfirst($controller);
            $instance = new $Class_name;
            if (!is_callable(array($instance, $method))) {
                die("Cannot call method $method");
            }
            $instance->$method();
        } else {
            die("Cannot include controller $controller");
        }
    
    }
     /**
     * Get menu from database, and generate html nested list
     * @param int $group_id
     * @param string $attr
     * @return string
     */
    function get_dynamic_categories() {
      $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
      $user_id = $this->session->userdata( 'user_id' );
      $this->load->library('../controllers/tree');
      $tree = new Tree();
      $categories_groups = $this->Listingdesign_model->get_dynamic_categories_group_id($id_ebay_design,$user_id);
      $group_id = $categories_groups["id"];
      $menu = $this->Listingdesign_model->get_current_categories($group_id );
      foreach ($menu as $row) 
          {
            $label = '<a href="'.$row->url.'">';
            $label .= $row->title;
            $label .= '</a>';
            $li_attr = '';
            if ($row->class) {$li_attr = ' class="'.$row->class.'"';}
            $tree->add_row($row->id, $row->parent_id, $li_attr, $label);
          }
        $menu = $tree->generate_list('class="vertical blue"');
        return $menu;
    }
    public function save_categories_code_in_js_file(/*$array_categories, $dynamic_categories_code_tagged_part,*/$categories,  $file_name,$id_user,$ebay_api)
    {
      $out_put= $categories;
      /* for($i=0;$i<sizeof($array_categories);$i++):    
         $prepare_out = "";
         $category_name_url = $array_categories[$i]['category_name'];
         $category_name_url = str_replace(" ","-",$category_name_url);
         $category_name_url = strtolower($category_name_url);
         $prepare_out =  str_replace("[NAME]",$array_categories[$i]['category_name'],$dynamic_categories_code_tagged_part);         
         $prepare_out =  str_replace("[NAME_URL]",$category_name_url,$prepare_out);
         $prepare_out =  str_replace("[CATEGORY_ID]",$array_categories[$i]['category_id'],$prepare_out);
         $prepare_out =  str_replace("[STORE_NAME]",$ebay_api->store_name,$prepare_out);
         $out_put .= $prepare_out;
         endfor;*/
    
       $this->write_in_js_file($id_user,$file_name,$out_put,"dynamic_categories");     
    }
    
   public function form_listing_pictures()
    {    
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["listing_images_array"]   = $this->Listingdesign_model->get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/listing_pictures', $data,true);          
        echo  json_encode($data);   
    }
    
   public function upload_pictures()
    {

        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["listing_images_array"]   = $this->Listingdesign_model->get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id );
        $count = count($data["listing_images_array"]) ;
            if (!empty($_FILES))
            {
                $tempFile = $_FILES['file']['tmp_name'];            
                $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/server/php/files/store_design/listing_design/'.$this->session->userdata( 'user_id' ).'/';
                $targetFile = $targetPath . $_FILES['file']['name'];
                    if ( ( count($_FILES['file']['name']) + $count ) > 5 )
                    {
                      header("HTTP/1.0 404 Not Found", TRUE, 404);
                    }
                    else
                    {
                        if(!file_exists($targetPath)){
                       mkdir($targetPath);
                      }
                        move_uploaded_file($tempFile, $targetFile);
                       $user_id = $this->session->userdata( 'user_id' );
                       $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
                       $id_listing_design = $this->session->userdata( 'id_listing_design' );
                       $base_path = $this->Configuration_model->get_configuration_value('listing-images-path');
                       $image_url = $base_path.$user_id."/".$_FILES['file']['name'];;
                       $this->Listingdesign_model->add_listing_image($image_url,$_FILES['file']['name'], $id_ebay_design,$id_listing_design,$user_id);
                    }
           }
    }
    public function get_images_count_per_listing()
    {
       $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' ); 
        $data["listing_images_array"]   = $this->Listingdesign_model->get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id );
        $count = count($data["listing_images_array"]) ;
        $data["count"] = $count;
        echo  json_encode($data);  
    }
   public function update_listing_pictures_area()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["listing_images_array"]   =  $this->Listingdesign_model->get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id );
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/listing_pictures_part', $data,true);          
        echo  json_encode($data);   
    }
   
   public function delete_listing_picture()
    {
     $id_listing_design_picture = $this->input->post('id_listing_design_picture');   
     $image_name = $this->input->post('image_name');       
     $this->Listingdesign_model->delete_listing_picture($id_listing_design_picture);
     $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/server/php/files/store_design/listing_design/'.$this->session->userdata( 'user_id' ).'/';
        if(file_exists($targetPath.$image_name)) 
        {
             unlink($targetPath.$image_name) ;
        }
     $data["message"] = "Picture was deleted successful";
     echo  json_encode($data);   
    }

    public function change_status_listing_picture()
    {
     $id_listing_design_picture = $this->input->post('id_listing_design_picture');   
     $image_name = $this->input->post('image_name');   
     $this->Listingdesign_model->change_status_listing_picture($id_listing_design_picture);
     $data["message"] = " Main listing image was updated successful";
     echo  json_encode($data);   
    }

    public function form_tabs()
    {  
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["listing_tabs_array"]   = $this->Listingdesign_model->get_all_tabs($id_ebay_design,$id_listing_design,$user_id );
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/tabs', $data,true);                  
        echo  json_encode($data);   
    }
    
    public function add_tab()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $title = $this->input->post('tab_title');  
        $content = $this->input->post('tab_content');

        if ( $this->input->post('tab_id') ) 
            {
            $id = $this->input->post('tab_id') ;
            $this->Listingdesign_model->update_tab($id,$title, $content,$id_ebay_design, $id_listing_design,$user_id);
            $data["message"] = " Tab was updated successful";
           } 
        else
          {
            $this->Listingdesign_model->add_tab($title, $content,$id_ebay_design, $id_listing_design,$user_id);
            $data["message"] = " Tab was added successful";   
          }
          $tabs_titles_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'tabs-title',$id_ebay_design, $id_listing_design, $user_id);
          $tabs_contents_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'tabs-content',$id_ebay_design, $id_listing_design, $user_id);         
          $tabs_array = $this->Listingdesign_model->get_all_tabs($id_ebay_design,$id_listing_design,$user_id );        
          $this->save_tabs_code_in_js_file($tabs_array,$tabs_titles_code_tagged_part, $tabs_contents_code_tagged_part,"listing_tabs_titles.js","listing_tabs_content.js",$user_id);
        echo  json_encode($data);    
    }
  
    public function delete_tab()
    {
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $id_tab = $this->input->post('id_tab');        
        $this->Listingdesign_model->delete_tab($id_tab);
        $tabs_titles_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'tabs-title',$id_ebay_design, $id_listing_design, $user_id);
        $tabs_contents_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'tabs-content',$id_ebay_design, $id_listing_design, $user_id);         
        $tabs_array = $this->Listingdesign_model->get_all_tabs($id_ebay_design,$id_listing_design,$user_id );        
        $this->save_tabs_code_in_js_file($tabs_array,$tabs_titles_code_tagged_part, $tabs_contents_code_tagged_part,"listing_tabs_titles.js","listing_tabs_content.js",$user_id);
        $data["message"] = "Tab was deleted successful";
        echo  json_encode($data); 
    }  

    public function load_tab()
    {
        $id_tab = $this->input->post('id_tab');        
        $data["html"] = $this->Listingdesign_model->load_tab($id_tab);        
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
       endforeach;
   endif;
   echo $out_put_content;
       $this->write_in_js_file($id_user,$file_name_titles,$out_put_titles,"tab_titles");     
       $this->write_in_js_file($id_user,$file_name_content,$out_put_content,"tab_ontent");
    }

    public function form_description()
    {            
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["listing_description"]   = $this->Listingdesign_model->get_listing_description($id_ebay_design,$id_listing_design,$user_id );
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $clients_file_hosting = $this->Configuration_model->get_configuration_value('clients-file-hosting');
        $_SESSION['KCFINDER'] = array();        
        $_SESSION['KCFINDER']['disabled'] = false;
        $_SESSION['KCFINDER']['uploadURL'] = $clients_file_hosting.'files/upload/' . $user_id . '/';  
        $_SESSION['KCFINDER']['uploadDir'] = $base_path.'server/php/files/upload/' . $user_id . '/';  
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."ckeditor/", 'outPut' => true));
        
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/description', $data,true);          
        echo  json_encode($data);   
    }


    public function get_listing_description()
    {
        $id = $this->input->post('id_listing_design_description');        
        $data["html"] = $this->Listingdesign_model->get_listing_description($id);        
        echo  json_encode($data); 
    }

    public function update_listing_description()
    {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $description       = $this->input->post('description');  
        $this->Listingdesign_model->update_listing_description( $description,$id_ebay_design, $id_listing_design,$user_id) ;
        $data["message"] = "Description was updated successful";
        echo  json_encode($data);
    }
    //BG TITLE functions
      public function form_title()
    {            
        $user_id = $this->session->userdata( 'user_id' );
        $id_ebay_design = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["listing_title"]   = $this->Listingdesign_model->get_listing_title($id_ebay_design,$id_listing_design,$user_id );
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/title', $data,true);          
        echo  json_encode($data);   
    }
  public function update_listing_title()
    {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $title       = $this->input->post('listing_title');  
        $this->Listingdesign_model->update_listing_title( $title,$id_ebay_design, $id_listing_design,$user_id) ;
        $data["message"] = "Listing title was updated successful";
        echo  json_encode($data);
    }
     public function get_listing_title()
    {
        $id = $this->input->post('id_listing_design_title');        
        $data["html"] = $this->Listingdesign_model->get_listing_title($id);        
        echo  json_encode($data); 
    }
    /*BG advertising function*/
     public function load_advertising()  
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );        
        $data["listing_advertising_array"]   = $this->Listingdesign_model->get_listing_advertising($id_ebay_design,$id_listing_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/listing_advertising', $data,true);                  
        echo  json_encode($data);         
     }
     public function load_advertising_part()
     {
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/listing_advertising_part', $data,true);                  
        echo  json_encode($data);         
     }
    
    public function load_listing_advertising()
    {
        $id_listing_design_advertising = $this->input->post('id_listing_design_advertising');        
        $data["html"] = $this->Listingdesign_model->load_listing_advertising($id_listing_design_advertising);        
        echo  json_encode($data); 
    }
    public function save_listing_advertising()
    {
        $id                = $this->input->post('id');  ;
        $title             = $this->input->post('title'); 
        $link              = $this->input->post('link');
        $image_url         = $this->input->post('image_url');         
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
          if($image_url!="ignore")
        {
           $popular_category = $this->Listingdesign_model->load_listing_advertising($id );
           $base_path = $this->Configuration_model->get_configuration_value('base-path');
           $this->delete_image_from_server($popular_category,$base_path) ;           
        }
        $this->Listingdesign_model->save_listing_advertising( $id , $title , $link , $image_url ,$id_ebay_design, $id_listing_design,$user_id) ;
        /*write in js file*/
        $advertising_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'advertisings',$id_ebay_design, $id_listing_design, $user_id);
        $advertising_array = $this->Listingdesign_model->get_listing_advertising($id_ebay_design,$id_listing_design,$user_id );        
        $this->save_advertising_code_in_js_file($advertising_array,$advertising_code_tagged_part,"listing_advertisings.js",$user_id);
        $data["message"] = "Advertising was saved successful";
        echo  json_encode($data);
    }
    
    
   public function delete_listing_advertising()
    {   
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        $id_listing_design_advertising = $this->input->post('id_listing_design_advertising'); 
        $advertising                   = $this->Listingdesign_model->load_listing_advertising($id_listing_design_advertising); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');           
        $this->delete_image_from_server($advertising,$base_path) ;
        $this->Listingdesign_model->delete_listing_advertising($id_listing_design_advertising);
        $advertising_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'advertisings',$id_ebay_design, $id_listing_design, $user_id);
        $advertising_array = $this->Listingdesign_model->get_listing_advertising($id_ebay_design,$id_listing_design,$user_id );        
        $this->save_advertising_code_in_js_file($advertising_array,$advertising_code_tagged_part,"listing_advertisings.js",$user_id);
        $data["message"] = "Advertising was deleted successful";        
        echo  json_encode($data);   
    }
    public function update_order_advertising()
    {
      $user_id           = $this->session->userdata( 'user_id' );
      $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
      $id_listing_design = $this->session->userdata( 'id_listing_design' );
      /*order code*/
      $id = $this->input->post('id',TRUE);
      $order_value = $this->input->post('order_value',TRUE);
      $this->Listingdesign_model->update_order_advertising( $id , $order_value);
      $advertising_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'advertisings',$id_ebay_design, $id_listing_design, $user_id);
      $advertising_array = $this->Listingdesign_model->get_listing_advertising($id_ebay_design,$id_listing_design,$user_id );        
      $this->save_advertising_code_in_js_file($advertising_array,$advertising_code_tagged_part,"listing_advertisings.js",$user_id);
    }
     public function save_advertising_code_in_js_file($advertising_array, $advertising_code_tagged_part,$file_name, $id_user)
    {
        
        if(!is_array($advertising_array)):
       $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Advertising widget is active but has not items to show.';
        else:
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
   endif;
       $this->write_in_js_file($id_user,$file_name,$out_put,"listing_advertisings");     
    }
    /*EOF Advertisings functions*/


   public function save_popular_categories()
    {
        $id                = $this->input->post('id');  ;
        $title             = $this->input->post('title'); 
        $link              = $this->input->post('link');
        $image_url         = $this->input->post('image_url');         
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );   
         $id_listing_design = $this->session->userdata( 'id_listing_design' );
        if($image_url!="ignore")
        {
            $advertising = $this->Listingdesign_model->load_listing_advertising($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($advertising,$base_path) ;           
        }
        $this->Popularcategories_model->save_popular_categories( $id , $title , $link , $image_url ,$id_ebay_design,$user_id) ;             
        /*get html tagged*/
       if($this->session->userdata( 'id_home_design' ))
        $popular_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'popular-categories',$id_ebay_design, $this->session->userdata( 'id_home_design' ),$user_id);
       else
        $popular_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'popular-categories',$id_ebay_design, $id_listing_design, $user_id);
      
        $popular_categories_array = $this->Popularcategories_model->get_popular_categories($id_ebay_design,$user_id);
        $this->save_popular_categories_code_in_js_file($popular_categories_array,$popular_categories_code_tagged_part,"popular_categories.js",$user_id);
        $data["message"] = "Advertising was saved successful";
        echo  json_encode($data);
    } 
 public function load_popular_categories()
     {        
        $user_id  = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $data["listing_popular_categories_array"]   = $this->Popularcategories_model->get_popular_categories($id_ebay_design,$user_id );
        $data["load_type"] = $this->input->post( 'load_type' );
        $data["html"]   = $this->template->ajax_load_view('store_design/popular_categories/ajax/popular_category', $data,true);                  
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
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/popular_categories/ajax/popular_category_part', $data,true);                  
        echo  json_encode($data);         
     }
 public function delete_popular_category()
    {  
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id  = $this->session->userdata( 'user_id' );
        $id_popular_category = $this->input->post('id_popular_category');  
        $popular_category = $this->Popularcategories_model->get_popular_category($id_popular_category );
        $base_path = $this->Configuration_model->get_configuration_value('base-path');
        $this->delete_image_from_server($popular_category,$base_path) ;   
        $this->Popularcategories_model->delete_popular_category($id_popular_category);
        /*get html tagged*/
       if($this->session->userdata( 'id_home_design' ))
        $popular_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'popular-categories',$id_ebay_design, $this->session->userdata( 'id_home_design' ),$user_id);
       else
        $popular_categories_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'popular-categories',$id_ebay_design, $id_listing_design, $user_id);
      
        $popular_categories_array = $this->Popularcategories_model->get_popular_categories($id_ebay_design,$user_id);
        $this->save_popular_categories_code_in_js_file($popular_categories_array,$popular_categories_code_tagged_part,"popular_categories.js",$user_id);
        $data["message"] = "Popular Category was deleted successful";        
        echo  json_encode($data);   
    }
    public function save_popular_categories_code_in_js_file($popular_categories_array, $popular_categories_code_tagged_part,$file_name, $id_user)
    {
        if(!is_array($popular_categories_array)): 
            $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This widget has not items to show.';
            else :
                    $out_put = '';
        endif;
      
       $prepare_out_put = "";
       if($popular_categories_array):
            foreach($popular_categories_array as $featured_listing):
         $prepare_out_put =  str_replace("[CATEGORY_NAME]",$featured_listing->name,$popular_categories_code_tagged_part);
         $prepare_out_put =  str_replace("[LINK]",$featured_listing->link,$prepare_out_put);
         $prepare_out_put =  str_replace("[IMAGE_URL]",$featured_listing->image_url,$prepare_out_put);
         $out_put .= $prepare_out_put;
       endforeach;
       endif;
      
       /*open file*/
       $this->write_in_js_file($id_user,$file_name,$out_put,"popoular_categories"); 
    }
    public function save_arrival_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );         
       $data["page_title"] = "Arrival Listings";
       
        // This can be autoloaded //
       $this->load->library('breadcrumbs'); 
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );             
       
       $id_ebay_design     =  $data["id_ebay_design"] ;
       $id_listing_design = $this->session->userdata( 'id_listing_design' );
       $id = $this->input->post('id'); 
       $title =  $this->input->post('title'); 
       $price =  $this->input->post('price'); 
       $link =  $this->input->post('link'); 
       $image_url = $this->input->post('image_url'); 
        if($image_url!="ignore")
        {
            $featured_listing = $this->Arrivals_model->get_arrival_listing_with_id($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($featured_listing,$base_path) ;           
        }
        
            $this->Arrivals_model->add_arrival_listing($id,$id_ebay_design,$title,$price,$link,$image_url,  $data["user_id"]);
       
      /*BG generate js file*/
       /*get html tagged*/
       if($this->session->userdata( 'id_home_design' ))
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'arrivals',$id_ebay_design, $this->session->userdata( 'id_home_design' ), $data["user_id"]);
       else
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'arrivals',$id_ebay_design, $id_listing_design, $data["user_id"]);
      
       $featured_listings_array = $this->Arrivals_model->get_arrival_listing($id_ebay_design,$data["user_id"] );
       $this->save_arrival_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"arrivals_listing.js", $data["user_id"]);
      
      /*END generate js file*/
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $data["message"] = "Arrival Listing was saved successful";

        echo  json_encode($data);
     }
     public function load_new_arrivals_listing()
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );        
        $data["currency"] = $this->session->userdata( 'currency' );
        $data["load_type"] = $this->input->post( 'load_type' );
        $data["listing_featured_array"]   = $this->Arrivals_model->get_arrival_listing($id_ebay_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/new_arrivals', $data,true);     
        echo  json_encode($data);         
     } 
     public function load_new_arrivals_listing_part()
     {
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/new_arrivals_part', $data,true);             
        echo  json_encode($data);         
     }
     public function save_arrival_code_in_js_file($featured_listings_array, $featured_code_tagged_part,$file_name, $id_user)
    {
      $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This widget has not items to show.';
       $prepare_out_put = "";
       if(is_array($featured_listings_array)):
           $out_put = '';
       foreach($featured_listings_array as $featured_listing):
         $prepare_out_put =  str_replace("[TITLE]",$featured_listing->title,$featured_code_tagged_part);
         $prepare_out_put =  str_replace("[PRICE]",$this->session->userdata( 'currency' )." ".$featured_listing->price,$prepare_out_put);
         $prepare_out_put =  str_replace("[LINK]",$featured_listing->link,$prepare_out_put);
         $prepare_out_put =  str_replace("[IMAGE_URL]",$featured_listing->image_url,$prepare_out_put);
         $out_put .= $prepare_out_put;
       endforeach;
   endif;
       /*open file*/
       $this->write_in_js_file($id_user,$file_name,$out_put,"arrivals_listings"); 
    }
     public function load_arrival_listings_array()
      {
          $id_featured_listing = $this->input->post('id_featured_listing');
          $data["html"] = $this->Arrivals_model->get_arrival_listing_with_id($id_featured_listing);
          echo  json_encode($data); 
      }
        public function delete_arrival_listing()
    {   
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        $id_featured_listing = $this->input->post('id_featured_listing'); 
        $featured_listing                = $this->Arrivals_model->get_arrival_listing_with_id($id_featured_listing); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');           
        $this->delete_image_from_server($featured_listing,$base_path) ;
        $this->Arrivals_model->delete_arrival_listing($id_featured_listing);
        
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'arrivals',$id_ebay_design, $id_listing_design, $user_id);
       
        $featured_listings_array = $this->Arrivals_model->get_arrival_listing($id_ebay_design,$user_id );
        $this->save_arrival_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"arrivals_listing.js", $user_id);
        $data["message"] = "Arrival Listing  was deleted successful";        
        echo  json_encode($data);   
    }
    /*special discounts*/
    public function save_special_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );         
       $data["page_title"] = "Special Listings";
       
        // This can be autoloaded //
       $this->load->library('breadcrumbs'); 
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );             
       
       $id_ebay_design     =  $data["id_ebay_design"] ;
       $id_listing_design = $this->session->userdata( 'id_listing_design' );
       $id = $this->input->post('id'); 
       $title =  $this->input->post('title'); 
       $price =  $this->input->post('price'); 
       $sale_price =  $this->input->post('sale_price'); 
       
       $link =  $this->input->post('link'); 
       $image_url = $this->input->post('image_url'); 
        if($image_url!="ignore")
        {
            $featured_listing = $this->Discounts_model->get_special_listing_with_id($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($featured_listing,$base_path) ;           
        }
            $this->Discounts_model->add_special_listing($id,$id_ebay_design,$title,$price,$sale_price,$link,$image_url,  $data["user_id"]);
       
      /*BG generate js file*/
       /*get html tagged*/
       if($this->session->userdata( 'id_home_design' ))
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'specials',$id_ebay_design, $this->session->userdata( 'id_home_design' ), $data["user_id"]);
       else
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'specials',$id_ebay_design, $id_listing_design, $data["user_id"]);
      
       $featured_listings_array = $this->Discounts_model->get_special_listing($id_ebay_design,$data["user_id"] );
       $this->save_special_code_in_js_file
               ($featured_listings_array,$featured_code_tagged_part,"special_listing.js", $data["user_id"] );
      
      /*END generate js file*/
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $data["message"] = "Special Listing was saved successful";

        echo  json_encode($data);
     }
     public function load_special_listing()
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );        
        $data["currency"] = $this->session->userdata( 'currency' );
        $data["load_type"] = $this->input->post( 'load_type' );
        $data["listing_featured_array"]   = $this->Discounts_model->get_special_listing($id_ebay_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/discounts', $data,true);     
        echo  json_encode($data);         
     }    
    public function load_special_listing_part()
     {
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/discounts_part', $data,true);             
        echo  json_encode($data);         
     }
     public function delete_special_listing()
    {   
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        $id_featured_listing = $this->input->post('id_featured_listing'); 
        $featured_listing                = $this->Discounts_model->get_special_listing_with_id($id_featured_listing); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');           
        $this->delete_image_from_server($featured_listing,$base_path) ;
        $this->Discounts_model->delete_special_listing($id_featured_listing);
        
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'specials',$id_ebay_design, $id_listing_design, $user_id);
       
        $featured_listings_array = $this->Discounts_model->get_special_listing($id_ebay_design,$user_id );
        $this->save_special_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"special_listing.js", $user_id);
        $data["message"] = "Special Listing  was deleted successful";        
        echo  json_encode($data);   
    }
        public function load_special_listings_array()
      {
          $id_featured_listing = $this->input->post('id_featured_listing');
          $data["html"] = $this->Discounts_model->get_special_listing_with_id($id_featured_listing);
          echo  json_encode($data); 
      }
    public function save_special_code_in_js_file($featured_listings_array, $featured_code_tagged_part,$file_name, $id_user)
    {
      $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This widget has not items to show.';
       $prepare_out_put = "";
       if(is_array($featured_listings_array)):
           $out_put = "";
       foreach($featured_listings_array as $featured_listing):
         $prepare_out_put =  str_replace("[TITLE]",$featured_listing->title,$featured_code_tagged_part);
         $prepare_out_put =  str_replace("[PRICE]",$this->session->userdata( 'currency' )." ".number_format($featured_listing->price,2),$prepare_out_put);
         $prepare_out_put =  str_replace("[SALE_PRICE]",$this->session->userdata( 'currency' )." ".number_format($featured_listing->sale_price,2),$prepare_out_put);
         $prepare_out_put =  str_replace("[DISCOUNT_VALUE]",$this->get_sale_discount($featured_listing->price, $featured_listing->sale_price),$prepare_out_put);
         $prepare_out_put =  str_replace("[LINK]",$featured_listing->link,$prepare_out_put);
         $prepare_out_put =  str_replace("[IMAGE_URL]",$featured_listing->image_url,$prepare_out_put);
         $out_put .= $prepare_out_put;
       endforeach;
   endif;
       /*open file*/
       $this->write_in_js_file($id_user,$file_name,$out_put,"special_listings"); 
    }
    public function get_sale_discount($original_price, $sale_price)
    {
        $discount =  ($sale_price-$original_price);
        $percent = $discount/$original_price;
        return number_format($percent*100,0);
    }
    /*FUNCTION for featured listings*/
    /*this featured listing was used for lstore front and listing design*/
    /*Load and show featured listing*/
     public function load_featured_listing()
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );        
        $data["currency"] = $this->session->userdata( 'currency' );
        $data["load_type"] = $this->input->post( 'load_type' );
        $data["listing_featured_array"]   = $this->Featured_model->get_featured_listing($id_ebay_design,$user_id );        
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/featured', $data,true);     
        echo  json_encode($data);         
     }     
     /*Get featured listings in an array and  send ajax response*/
    public function load_featured_listings_array()
      {
          $id_featured_listing = $this->input->post('id_featured_listing');
          $data["html"] = $this->Listingdesign_model->load_featured_listing($id_featured_listing);
          echo  json_encode($data); 
      }
   /*Load form to add or edit a featured listing*/     
    public function load_featured_listing_part()
     {
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/listings/ajax/featured_part', $data,true);             
        echo  json_encode($data);         
     }
     /*Save or update a featured listing*/
     public function save_featured_listing()
     {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );         
       $data["page_title"] = "Featured Listings";
       
        // This can be autoloaded //
       $this->load->library('breadcrumbs'); 
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );             
       
       $id_ebay_design     =  $data["id_ebay_design"] ;
       $id_listing_design = $this->session->userdata( 'id_listing_design' );
       $id = $this->input->post('id'); 
       $title =  $this->input->post('title'); 
       $price =  $this->input->post('price'); 
       $link =  $this->input->post('link'); 
       $image_url = $this->input->post('image_url'); 
        if($image_url!="ignore")
        {
            $featured_listing = $this->Featured_model->get_featured_listing_with_id($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($featured_listing,$base_path) ;           
        }
        
            $this->Featured_model->add_featured_listing($id,$id_ebay_design,$title,$price,$link,$image_url,  $data["user_id"]);
       
      /*BG generate js file*/
       /*get html tagged*/
       if($this->session->userdata( 'id_home_design' ))
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('front', 'featured',$id_ebay_design, $this->session->userdata( 'id_home_design' ), $data["user_id"]);
       else
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'featured',$id_ebay_design, $id_listing_design, $data["user_id"]);
      
       $featured_listings_array = $this->Featured_model->get_featured_listing($id_ebay_design,$data["user_id"] );
       $this->save_featured_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"featured_listing.js", $data["user_id"]);
      
      /*END generate js file*/
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $data["message"] = "Featured Listing was saved successful";

        echo  json_encode($data);
     }
     /*delete a featured listing*/
     public function delete_featured_listing()
    {   
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        $id_featured_listing = $this->input->post('id_featured_listing'); 
        $featured_listing                = $this->Featured_model->get_featured_listing_with_id($id_featured_listing); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');           
        $this->delete_image_from_server($featured_listing,$base_path) ;
        $this->Featured_model->delete_featured_listing($id_featured_listing);
        
        $featured_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'featured',$id_ebay_design, $id_listing_design, $user_id);
       
        $featured_listings_array = $this->Featured_model->get_featured_listing($id_ebay_design,$user_id );
        $this->save_featured_code_in_js_file($featured_listings_array,$featured_code_tagged_part,"featured_listing.js", $user_id);
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
       $this->write_in_js_file($id_user,$file_name,$out_put,"featured_listings"); 
    }
    /*EOF Functions for featured listings*/
    
    /*BG Functions for image and video slider*/
        public function load_image_video_slider()
     {        
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $data["currency"] = $this->session->userdata( 'currency' );
        $images_videos_slider_array  = $this->Listingdesign_model->get_images_videos_slider($id_ebay_design,$id_listing_design,$user_id );
       // $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $array_images = array();
        $array_videos = array();
        $index_image = 0;
        $index_video = 0;
        
        if(!empty($images_videos_slider_array)):
       foreach ($images_videos_slider_array as $images_videos_slider):
           if($this->check_image_or_video($images_videos_slider->image_url)=='image'):
             $array_images[$index_image] ['id_listing_design_slider'] = $images_videos_slider->id_listing_design_slider;
             $array_images[$index_image] ['image_url'] = $images_videos_slider->image_url;
             $array_images[$index_image] ['link'] = $images_videos_slider->link;
             $index_image++;
             else:
             $array_videos[$index_video] ['id_listing_design_slider'] = $images_videos_slider->id_listing_design_slider;
             $array_videos[$index_video] ['image_url'] = $images_videos_slider->image_url;
             $array_videos[$index_video] ['link'] = $images_videos_slider->link;
             $array_videos[$index_video] ['type'] = $images_videos_slider->type;
             $index_video++;
           endif;
         
       endforeach;
         endif;
        $data["array_videos"]  = $array_videos;
        $data["array_images"]  = $array_images;
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/image_video_slider', $data,true);                 
        echo  json_encode($data);         
     }
     
    public function load_images_videos_slider_part()
     {
        $data           = array() ;
        $data["id_user"]           = $this->session->userdata( 'user_id' );
        $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/image_video_slider_part', $data,true);             
        echo  json_encode($data);         
     }
    public function load_images_videos_slider_part_providers_part()
     {
        $data           = array() ;
        $provider = $this->input->post('provider'); 
        $data["provider"] = $provider;
        if($provider=="Youtube"):
              $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/image_video_slider_part_youtube', $data,true);     
           elseif($provider=="Vimeo") :
                 $data["html"]   = $this->template->ajax_load_view('store_design/listing_designs/forms/image_video_slider_part_vimeo', $data,true);     
        endif;              
        echo  json_encode($data);         
     }
     
     function check_image_or_video($file)
     {
         $handlers = array('jpeg','png','gif','jpg','bmp');              
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
       $id_listing_design = $this->session->userdata( 'id_listing_design' );  
       $data["page_title"] = "Featured Listings"; 
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
       $id_ebay_design     =  $data["id_ebay_design"] ;
       $id = $this->input->post('id'); 
       $link =  $this->input->post('link'); 
       $image_url = $this->input->post('image_url'); 
       $type = $this->input->post('type'); 
        if($image_url!="ignore")
        {
            $images_videos_slider = $this->Listingdesign_model->get_images_videos_slider_with_id($id); 
            $base_path = $this->Configuration_model->get_configuration_value('base-path');           
            $this->delete_image_from_server($images_videos_slider,$base_path) ;           
        }        
       $this->Listingdesign_model->add_images_videos_slider($id,$id_ebay_design,$link,$image_url,  $data["user_id"],$id_listing_design,$type);
       $slider_code_tagged_part = $this->HTMLtojs_model->get_code_tagged_part('listing', 'image-slider',$data["id_ebay_design"], $id_listing_design, $data["user_id"]);       
       $slider_array = $this->Listingdesign_model->get_images_videos_slider($data["id_ebay_design"],$id_listing_design,$data["user_id"] );   
       $slide_videor_code_tagged_part = $this->HTMLtojs_model->get_code_tagged_part('listing', 'video-slider',$data["id_ebay_design"], $id_listing_design, $data["user_id"]);  
       $this->save_slider_images_code_in_js_file($slider_array,$slider_code_tagged_part,$slide_videor_code_tagged_part,"listing_slider.js",$data["user_id"]);
       
       $data["passed_to_view"] = $this->breadcrumbs->get();         
       $data["message"] = "Image / Video was saved successful";
       echo  json_encode($data);
     }
   
     public function load_images_videos_slider_array()
    {
        $iid_listing_design_slider = $this->input->post('id_listing_design_slider');        
        $data["html"] = $this->Listingdesign_model->load_images_videos_slider_array($iid_listing_design_slider);        
        echo  json_encode($data); 
    }
    
     public function delete_images_videos_slider()
    {     
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["id_ebay_design"]  = $this->session->userdata( 'id_ebay_design' );;
        $id_listing_design_slider = $this->input->post('id_listing_design_slider'); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );  
        $listing_design_slider = $this->Listingdesign_model->get_images_videos_slider_with_id($id_listing_design_slider); 
        $base_path = $this->Configuration_model->get_configuration_value('base-path');           
        $this->delete_image_from_server($listing_design_slider,$base_path) ;
        $this->Listingdesign_model->delete_images_videos_slider($id_listing_design_slider);
        $slider_code_tagged_part = $this->HTMLtojs_model->get_code_tagged_part('listing', 'image-slider',$data["id_ebay_design"], $id_listing_design, $data["user_id"]);       
        $slider_array = $this->Listingdesign_model->get_images_videos_slider($data["id_ebay_design"],$id_listing_design,$data["user_id"] );              
        $this->save_slider_images_code_in_js_file($slider_array,$slider_code_tagged_part,"listing_slider.js",$data["user_id"]);
        $data["message"] = "Image / Video was deleted successful";        
        echo  json_encode($data);   
    }
      public function save_slider_images_code_in_js_file($slider_array, $slider_code_tagged_part,$slide_videor_code_tagged_part,$file_name, $id_user)
    {
       $out_put = '<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slider widget is active but has not images or videos to show.';
       $prepare_out_put = "";
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
     /*Easy menu manager*/
      public function easymenu()
    {
          
      define('_DOC_ROOT', BASEPATH . '../3rdparty/easymenu/'  );
     //die("************");
       require_once _DOC_ROOT . 'config.php';
       require_once _DOC_ROOT . 'includes/functions.php';
        define('_DOC_SITE', $this->config->site_url() . 'easymenu/' );
        define('_EASYMENU_USER', $this->session->userdata( 'user_id' ) );
        define('_EASYMENU_DESIGN', $this->session->userdata( 'id_ebay_design' ) );
        define('_EASYMENU_LISTING',$this->session->userdata( 'id_listing_design' ) );      
//die("************");

        /**
         * default controller & method
         */
        $controller = 'home';
        $method     = 'index';

        /**
         * url structure: index.php?act=controller.method
         */
        if(!isset( $_GET['group_id'])):
        $menu_group = $this->Listingdesign_model->get_user_menu_group_id(_EASYMENU_DESIGN, _EASYMENU_USER);
        $_GET['group_id'] = $menu_group["id"];
        endif;
        if (isset($_GET['act'])) {
            $act = explode('.', $_GET['act']);
            $controller = $act[0];
            if (isset($act[1])) {
                $method = $act[1];
            }
        }
        $controller_file = _DOC_ROOT . 'modules/' . $controller . '.php';
        //echo $controller_file;
     if (file_exists($controller_file)) {
            include $controller_file;
          
            $Class_name = ucfirst($controller);
            $instance = new $Class_name;
            if (!is_callable(array($instance, $method))) {
                die("Cannot call method $method");
            }
            $instance->$method();
        } else {
            die("Cannot include controller $controller");
        }
    
       
    }
    /*Layout settings*/
     function load_layout_maker() {

        $data               = array() ;
        $data['availables'] = array( 
                                    'store-categories' => 'Store Categories',
                                    'tabs' => 'Tabs',
                                    'advertising' => 'Advertising',
                                    'featured' => 'Featured Listings',
                                    'specials' => 'Special Discounts', 
                                    'arrivals' => 'New Arrivals', 
                                    'popular-categories' => 'Popular Categories',
                                    'welcometext' => 'Custom Rich Text',
                                    'slider' => 'Image & Video Slider',
                                    'browse-by-specifics' => 'browse by specifics',
                                    ) ;
        $data['type']       = 1 ;
        $data['widgets']    = array(array(),array(),array());
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );

        $layout          = $this->Listingdesign_model->load_layout($id_ebay_design,$id_listing_design,$user_id);
        
        if ( $layout ) {
            $data['type']    = $layout->layout_type ;
            $data['widgets'] = unserialize($layout->layout_widgets) ;

            foreach ($data['widgets'] as $sections )
                foreach ($sections as $widget )
                    if ( isset($data['availables'][$widget]) )
                        unset($data['availables'][$widget]);
        }

        $data["html"] = $this->template->ajax_load_view('store_design/listing_designs/forms/listing_layout', $data,true);          

        echo  json_encode($data); 
    }

    function save_layout () 
    {
        $data         = array() ;
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $type              = $this->input->post('type');
        $widgets           = $this->input->post('widgets');
        $data['type']    = $type ;

        // Fix Widgets
        if ( ! is_array($widgets) )
            $widgets = array(array(),array(),array());

        $data['widgets'] = serialize($widgets) ;

        $result = $this->Listingdesign_model->save_layout($type,$widgets,$id_ebay_design,$id_listing_design,$user_id);
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
        $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'layout_type.js',$out_put);   
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
       $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'left_widgets.js',$out_put);     
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
       $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'center_widgets.js',$out_put);     
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
       $this->write_in_js_file_without_document_write($this->session->userdata( 'user_id' ),'right_widgets.js',$out_put);     
    }
    function get_column_left_layout()
    {
        $widgets = array(array(),array(),array());
        $widgets_return = array();
        $user_id           = $this->session->userdata( 'user_id' );
        $id_ebay_design    = $this->session->userdata( 'id_ebay_design' );
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        //$layout = $this->Listingdesign_model->load_layout($id_ebay_design,$id_listing_design,$user_id);
        $layout = $this->Listingdesign_model->load_layout($id_ebay_design,$id_listing_design,$user_id);
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
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $layout = $this->Listingdesign_model->load_layout($id_ebay_design,$id_listing_design,$user_id);
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
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $layout = $this->Listingdesign_model->load_layout($id_ebay_design,$id_listing_design,$user_id);
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
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
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
       $id_ebay_design  = $this->session->userdata( 'id_ebay_design' );
       $store_settings = $this->Storedesign_model->get_store_setting($id_ebay_design ,$id_user );
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
    
    
     public function generate_listing_design_code()
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        /*vars definition for all listing parts code*/
        $out_put_main_image = "";
        $out_put_thumbs_images = "";
        $out_put_mobile_images = "";
        $out_put_description = "";
        $warning_message = "Warning!";
        /*Start getting all listings pictures and videos*/
        $listing_pictures_array = $this->Listingdesign_model->get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id );    
      /*get listing design*/
        $listing_design = $this->Ebaydesigns_model->get_listing_design($user_id,$id_ebay_design,$id_listing_design);
        $listing_design_code = $listing_design->html_code;
         if(is_array($listing_pictures_array)):
        if(sizeof($listing_pictures_array)>0):
            $has_main_image = false;
            foreach($listing_pictures_array as $listing_picture):
                $prepare_out_put_main_image = "";         
                $prepare_out_put_thumbs_images = "";
                $prepare_out_put_mobile_images = "";
             if($listing_picture->is_main_image):
                 /*generate main images*/
                   $prepare_out_put_content  = "";
                   $listing_main_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-main',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_content =  str_replace("[IMAGE_URL]",$listing_picture->image_url,$listing_main_picture_code_tagged_part);
                   $prepare_out_put_content =  str_replace("[TITLE]",$listing_picture->image_name,$prepare_out_put_content);
                   $out_put_main_image = $prepare_out_put_content;
                   $has_main_image = true;
                 else:
                 /*generate thumbs*/
                 /*generate main images*/
                   $listing_thumbs_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-thumbs',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_thumbs_images =  str_replace("[IMAGE_URL]",$listing_picture->image_url,$listing_thumbs_picture_code_tagged_part);
                   $prepare_out_put_thumbs_images =  str_replace("[TITLE]",$listing_picture->image_name,$prepare_out_put_thumbs_images);
                   $out_put_thumbs_images .= $prepare_out_put_thumbs_images;
                   /*Generate for mobile devices*/
                   $listing_mobile_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-mobile',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_mobile_images =  str_replace("[IMAGE_URL]",$listing_picture->image_url,$listing_mobile_picture_code_tagged_part);
                   $prepare_out_put_mobile_images =  str_replace("[TITLE]",$listing_picture->image_name,$prepare_out_put_mobile_images);
                   $out_put_mobile_images .= $prepare_out_put_mobile_images;
                   /*use follow vars if there is not main image*/
                   $image_url =   $listing_picture->image_url;
                   $image_title = $listing_picture->image_name;
             endif;
            endforeach;
            if(!$has_main_image):
                   $prepare_out_put_content  = "";
                   $listing_main_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-main',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_content =  str_replace("[IMAGE_URL]",$image_url,$listing_main_picture_code_tagged_part);
                   $prepare_out_put_content =  str_replace("[TITLE]",$image_title,$prepare_out_put_content);
                   $out_put_main_image = $prepare_out_put_content;
            endif;
            $listing_design_code = str_replace("[MAIN_IMAGE]",$out_put_main_image,$listing_design_code);
            $listing_design_code = str_replace("[THUMBNAILS]",$out_put_thumbs_images,$listing_design_code);
            $listing_design_code = str_replace("[MOBILE_IMAGES_VIEW]",$out_put_mobile_images,$listing_design_code);
             endif;
            else:
                $warning_message .= "<br/>- Listing Picture(s) is required.";
        endif;
        /*start getting listing title*/
          $listing_title =  $this->Listingdesign_model->get_listing_title($id_ebay_design,$id_listing_design,$user_id );
         if($listing_title!=false):
       $out_put_title = $listing_title->title;
         $listing_design_code = str_replace("[LISTING_TITLE]",$out_put_title,$listing_design_code);
       else:
           $warning_message .= "<br/>- Listing Title is required.";
       endif;
       /*start getting listing description*/
       $description =  $this->Listingdesign_model->get_listing_description($id_ebay_design,$id_listing_design,$user_id );
       if($description!=false):
            $out_put_description = $description->description;
        $listing_design_code = str_replace("[LISTING_DESCRIPTION]",$out_put_description,$listing_design_code);
           else:
            $warning_message .= "<br/>- Listing Description is required.";
       endif;
       
        /*start adding data*/
        
        
        if($warning_message!="Warning!"):
             $data["warning"] = $warning_message;
            else:
             $data["listing_code"] = $listing_design_code;
        endif;
        
       
        echo json_encode($data);
    }
    public function preview_template()
    {
        $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' ); 
        $id_listing_design = $this->session->userdata( 'id_listing_design' );
        $user_id           = $this->session->userdata( 'user_id' );
        /*vars definition for all listing parts code*/
        $out_put_title = "<b class='error'>Listing Title was not defined</b>";
        $out_put_main_image = "<b class='error'>Listing Main image was not added</b>";
        $out_put_thumbs_images = "";
        $out_put_mobile_images = "";
        $out_put_description = "<b class='error'>Listing Description was not added</b>";
            
        /*Start getting all listings pictures and videos*/
        $listing_pictures_array = $this->Listingdesign_model->get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id ); 
        
          if(is_array($listing_pictures_array)):
           if(sizeof($listing_pictures_array)>0):
           
         $has_main_image = false;
            foreach($listing_pictures_array as $listing_picture):
                $prepare_out_put_main_image = "";         
                $prepare_out_put_thumbs_images = "";
                $prepare_out_put_mobile_images = "";
             if($listing_picture->is_main_image):
                 /*generate main images*/
                   $prepare_out_put_content  = "";
                   $listing_main_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-main',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_content =  str_replace("[IMAGE_URL]",$listing_picture->image_url,$listing_main_picture_code_tagged_part);
                   $prepare_out_put_content =  str_replace("[TITLE]",$listing_picture->image_name,$prepare_out_put_content);
                   $out_put_main_image = $prepare_out_put_content;
                   $has_main_image = true;
                 else:
                 /*generate thumbs*/
                   $listing_thumbs_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-thumbs',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_thumbs_images =  str_replace("[IMAGE_URL]",$listing_picture->image_url,$listing_thumbs_picture_code_tagged_part);
                   $prepare_out_put_thumbs_images =  str_replace("[TITLE]",$listing_picture->image_name,$prepare_out_put_thumbs_images);
                   $out_put_thumbs_images .= $prepare_out_put_thumbs_images;
                   /*Generate for mobile devices*/
                   $listing_mobile_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-mobile',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_mobile_images =  str_replace("[IMAGE_URL]",$listing_picture->image_url,$listing_mobile_picture_code_tagged_part);
                   $prepare_out_put_mobile_images =  str_replace("[TITLE]",$listing_picture->image_name,$prepare_out_put_mobile_images);
                   $out_put_mobile_images .= $prepare_out_put_mobile_images;
                   /*use follow vars if there is not main image*/
                   $image_url =   $listing_picture->image_url;
                   $image_title = $listing_picture->image_name;
             endif;
            endforeach;
             if(!$has_main_image):
                   $prepare_out_put_content  = "";
                   $listing_main_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-main',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_content =  str_replace("[IMAGE_URL]",$image_url,$listing_main_picture_code_tagged_part);
                   $prepare_out_put_content =  str_replace("[TITLE]",$image_title,$prepare_out_put_content);
                   $out_put_main_image = $prepare_out_put_content;
            endif;
        endif;
        else:
        /*Deault Values*/
            /*Main Image*/
        $base_path = $this->Configuration_model->get_configuration_value('default-listing-images');  
        $image_url = $base_path."listing_default_image_1.jpg";
         $prepare_out_put_content  = "";
                   $listing_main_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-main',$id_ebay_design, $id_listing_design, $user_id);                       
                   $prepare_out_put_content =  str_replace("[IMAGE_URL]",$image_url,$listing_main_picture_code_tagged_part);
                   $prepare_out_put_content =  str_replace("[TITLE]","Default Main Image",$prepare_out_put_content);
                   $out_put_main_image = $prepare_out_put_content;
                   $has_main_image = true;
        /*Generate Thumbails*/
        for($i=1;$i<=5;$i++):
            $image_url = $base_path."listing_default_image_".$i.".jpg";
            $listing_thumbs_picture_code_tagged_part =   $this->HTMLtojs_model->get_code_tagged_part('listing', 'listing-images-thumbs',$id_ebay_design, $id_listing_design, $user_id);   
            $prepare_out_put_thumbs_images =  str_replace("[IMAGE_URL]",$image_url,$listing_thumbs_picture_code_tagged_part);
            $prepare_out_put_thumbs_images =  str_replace("[TITLE]","Default Images",$prepare_out_put_thumbs_images);     
            $out_put_thumbs_images .= $prepare_out_put_thumbs_images;
        endfor;
        
        
    endif;
        /*start getting listing title*/
          
       $listing_title =  $this->Listingdesign_model->get_listing_title($id_ebay_design,$id_listing_design,$user_id );
       if($listing_title!=false):
       $out_put_title = $listing_title->title;
       else:
           $default_values = $this->Ebaydesigns_model->get_default_value("default-listing-title");
           $out_put_title = $default_values->value;
       endif;
           
       /*start getting listing description*/
       $description =  $this->Listingdesign_model->get_listing_description($id_ebay_design,$id_listing_design,$user_id );
       
       if($description!=false):
            $out_put_description = $description->description;
           else:
            $default_values = $this->Ebaydesigns_model->get_default_value("default-listing-description");
           $out_put_description = $default_values->value;
       endif;
       /*get listing design*/
        $listing_design = $this->Ebaydesigns_model->get_listing_design($user_id,$id_ebay_design,$id_listing_design);
        $listing_design_code = $listing_design->html_code;
        /*start adding data*/
        $listing_design_code = str_replace("[LISTING_TITLE]",$out_put_title,$listing_design_code);
        $listing_design_code = str_replace("[LISTING_DESCRIPTION]",$out_put_description,$listing_design_code);
        $listing_design_code = str_replace("[MAIN_IMAGE]",$out_put_main_image,$listing_design_code);
        $listing_design_code = str_replace("[THUMBNAILS]",$out_put_thumbs_images,$listing_design_code);
        $listing_design_code = str_replace("[MOBILE_IMAGES_VIEW]",$out_put_mobile_images,$listing_design_code);
         
        header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        echo  $listing_design_code; 
       
    }    
   

}  