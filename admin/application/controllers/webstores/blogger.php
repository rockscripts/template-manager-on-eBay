<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogger extends CI_Controller 
{
	
    function __construct()
    {
            parent::__construct();

            // Load Zend helper
            $this->load->helper('zend');
            $this->load->library('breadcrumbs');
            $this->load->model('Webstores_model');
            $this->load->model('Ebayapi_model');  
            $this->load->helper(array('form', 'url'));
            $this->load->helper('html');
            Zend_Loader::loadClass('Zend_Gdata');
            Zend_Loader::loadClass('Zend_Gdata_Query');
            Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
            Zend_Loader::loadClass('Zend_Gdata_Feed');
    }
    public function index()
    {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Blogger";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();          
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
         if($this->session->userdata( 'email' )):
              $data["user_blogs"] = $this->get_user_blogs();
              $this->template->load('webstores/blogger/index', $data);
             else:
              $this->template->load('webstores/blogger/login', $data); 
         endif;
    }
    public function sign_in()
    {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Blogger";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();          
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        $user = $this->input->post('email');
        $password =$this->input->post('password');
        $result_signin = $this->login($user,$password);
        if($result_signin=="logged"):
            redirect('webstores/blogger/', 'location');
            else:
            $data["message"] = "$result_signin";
            $data["type"] = "error";
            $this->template->load('webstores/blogger/login', $data);
        endif;
    }
    public function login($user,$password)
    {
      try
      {
        $client = Zend_Gdata_ClientLogin::getHttpClient(
        $user, $password, 'blogger');
        $service = new Zend_Gdata($client);
        if($service):
         $this->session->set_userdata('email', $user);
         $this->session->set_userdata('password', $password);   
        endif;
        
        return "logged";
      }
      catch(Exception $e)
      {
        return $e->getMessage();   
      }
      
    }
    public function get_user_blogs()
    {
      $email = $this->session->userdata( 'email' );        
      $password = $this->session->userdata( 'password' ); 
      try
      { 
        $blogs = array();
        $client = Zend_Gdata_ClientLogin::getHttpClient(
        $email, $password, 'blogger');
        $service = new Zend_Gdata($client);
        $query = new Zend_Gdata_Query('http://www.blogger.com/feeds/default/blogs');
        $feed = $service->getFeed($query);
        $index=0;
        foreach($feed as $blog):
           $blogs[$index]["id"] = $this->fetch_id($blog->getId());
           $blogs[$index]["title"] = $blog->getTitle();
           $blogs[$index]["link"] = $blog->getLink('alternate')->getHref();
           $blogs[$index]["posts_count"] = count($this->get_blog_posts($this->fetch_id($blog->getId())));
           $index++;
        endforeach;
        return $blogs;
      }
      catch(Exception $e)
      {
        return $e->getMessage();   
      }
    }
    public function submit_listings_view()
    {
        $data = array();
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "Blogger";
        $data["widgettitle"] = "";   
        $data["role_id"] =  $this->session->userdata( 'role_id' );
        $data["passed_to_view"] = $this->breadcrumbs->get();            
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' ); 
        $active_items = $this->get_active_items(); 
        $data["active_items_data_table"] = $this->_load_active_items_data_table($active_items);
        $data["active_items"] = $active_items;
        $data["blog_id"] = $this->input->get('blog_id');
        $this->template->load('webstores/blogger/submit_listings', $data);          
    }
    public function add_blog_post()
    {
      $blog_id = $this->input->post('blog_id');  
      $itemID= $this->input->post('item_id'); 
      $json = array();     
        /*start installation*/      
        $item_object  = $this->get_item($itemID);  
        $this->add_single_post($item_object,$blog_id);
        $json["title"] = $item_object->Title;
        $json["status"] = "added";
        echo json_encode($json);       
    }
    public function add_single_post($item,$blog_id)
    {
     //see add_single_product for references   
      $id_ebay_design = $this->session->userdata('id_ebay_design');
      $id_user = $this->session->userdata( 'user_id' );   
      $this->load->database('default', TRUE);  
      $all_pictures = $this->Ebayapi_model->item_picture_get($item->ItemID); 
      $content = $this->build_post_content($all_pictures, $item);
        if(!$this->Webstores_model->get_blog_post_bridge($item->ItemID, $id_ebay_design, $id_user))
        {                   
          $post_id = $this->add_blogger_post($item->Title,$content,$blog_id);
          if($post_id>0):
             $this->Webstores_model->add_blog_post_bridge($post_id, $item->ItemID, $id_ebay_design, $id_user);
          else:
             //
          endif;
        }
        else
        {
         if(!$this->sync_ended_listing($item,$blog_id)):
           $post_id = $this->Webstores_model->get_blog_post_bridge($item->ItemID, $id_ebay_design, $id_user)->id_post;  
           $this->update_blogger_post($item->Title,$content,$blog_id,$post_id);   
         endif;
           
        }
    }
    
    public function add_blogger_post($title,$content,$blog_id)
    {
      $email = $this->session->userdata( 'email' );        
      $password = $this->session->userdata( 'password' ); 
      try
      { 
        $client = Zend_Gdata_ClientLogin::getHttpClient(
        $email, $password, 'blogger');
        $service = new Zend_Gdata($client);
        $uri = 'http://www.blogger.com/feeds/' . $blog_id . '/posts/default';
        $entry = $service->newEntry();
        $entry->title = $service->newTitle($title);
        $entry->content = $service->newContent($content);
        $entry->content->setType('text');
        $response = $service->insertEntry($entry, $uri);
        return $this->fetch_id($response->getId());
      }
      catch(Exception $e)
      {
        echo  $e->getMessage();   
      }
    }
     public function update_blogger_post($title,$content,$blog_id,$post_id)
    {
      $email = $this->session->userdata( 'email' );        
      $password = $this->session->userdata( 'password' ); 
      try
      { 
        $client = Zend_Gdata_ClientLogin::getHttpClient(
        $email, $password, 'blogger');
        $service = new Zend_Gdata($client);
        $uri = 'http://www.blogger.com/feeds/' . $blog_id . '/posts/default/'.$post_id;
        $response = $service->get($uri);
        $entry = new Zend_Gdata_App_Entry($response->getBody());
        $entry->title = $service->newTitle($title);
        $entry->content = $service->newContent($content);
        $entry->content->setType('text');
        $service->updateEntry($entry);
        return $post_id;
      }
      catch(Exception $e)
      {
        return $e->getMessage();   
      }
    }
     public function delete_blog_post($item_id,$blog_id)
    {
      $id_ebay_design = $this->session->userdata('id_ebay_design');
      $id_user = $this->session->userdata( 'user_id' );  
      $email = $this->session->userdata( 'email' );        
      $password = $this->session->userdata( 'password' ); 
      $post_id = $this->Webstores_model->get_blog_post_bridge($item_id, $id_ebay_design, $id_user)->id_post;
      try
      { 
        $client = Zend_Gdata_ClientLogin::getHttpClient(
        $email, $password, 'blogger');
        $service = new Zend_Gdata($client);
        $uri = 'http://www.blogger.com/feeds/' . $blog_id . '/posts/default/'.$post_id;
        $service->delete($uri);
        return true;
      }
      catch(Exception $e)
      {
        return $e->getMessage();   
      }
    }
    
    public function build_post_content($all_pictures, $item)
    {
     $content = "";
     if($all_pictures):
         $content = $this->build_button("Buy on eBay",$item->ViewItemURL);
         $content .= "<div class='imgae-gallery-post'></div>";
          foreach ($all_pictures as $item_picture):
           $content .= "<div class='img-listing'><img title='$item->Title' alt='$item->Title' src='{$item_picture->picture_url}' /></div>";           
          endforeach; 
          $content .= "</div>";
        endif;  
     $this->load->library('../controllers/webstores/product/');
     $product = new Product();
     $description = $product->extract_description($item->ItemID, $item->Description,"ID","rockscripts-description");
     $description .= $this->build_button("Buy on eBay",$item->ViewItemURL);
     $description .=$this->build_styles();
     $content .= $description;
     return $content;
    }
    public function build_button($text,$url)
    {
       return  $button = "<a href='$url'><div class='button-buy-on-ebay'>$text</div></a>";
    }
    public function build_styles()
    {
        $id_user = $this->session->userdata( 'user_id' );
       return  $button = '<link rel="stylesheet" href="http://hosting.etemplate.com/'.$id_user.'/assets/css/listing_custom_css_code.css">';
    }
    public function get_active_items()
    {
       $id_ebay_design     =  $this->session->userdata( 'id_ebay_design' );
       $id_user           = $this->session->userdata( 'user_id' );
       $this->load->database('default',TRUE);
       $this->load->library('../controllers/store_design/item');
       $item = new Item();
       $items = $item->get_active_items($id_user,$id_ebay_design);   
       $this->load->database('webstore', TRUE);  
       return $items;
    }
    public function get_item($item_id)
    {
       $this->load->library('../controllers/store_design/item');
       $this->load->database('default',TRUE);
       $item = new Item();
       $item_object = $item->get_item($item_id);
       $this->load->database('webstore', TRUE); 
       return $item_object;
    }
     public function _load_active_items_data_table($items)
    {       
       $data["items"] = $items;
       $items_data_table  = $this->template->ajax_load_view('ebay_items/active_items_data_table_webstore_installation', $data,true);                  
       return $items_data_table;
    }
    public function get_blog_posts($blog_id)
    {
      $email = $this->session->userdata( 'email' );        
      $password = $this->session->userdata( 'password' ); 
      try
      { 
        $posts = array();
        $client = Zend_Gdata_ClientLogin::getHttpClient(
        $email, $password, 'blogger');
        $service = new Zend_Gdata($client); 
        $query = new Zend_Gdata_Query("http://www.blogger.com/feeds/$blog_id/posts/default");
        $feed = $service->getFeed($query);
        $index=0;
        foreach($feed as $entry):
           $posts[$index]["id"] = $this->fetch_id($entry->getId());
           $posts[$index]["title"] = $entry->getTitle();
           $posts[$index]["link"] = $entry->getLink();
           $posts[$index]["content"] = $entry->getContent();
           $index++;
        endforeach;
        return $posts;
      }
      catch(Exception $e)
      {
        return $e->getMessage();   
      } 
    }
       function sync_ended_listing($item,$blog_id)
    {
               $end_time = strtotime($item->end_time) ;
               $difference = $end_time-time();
               $days =/* floor*/($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
              
               if($days<=0):
                   $this->delete_blog_post($item->ItemID,$blog_id);
                   $this->load->database('default',TRUE);
                   $this->Webstores_model->delete_blog_post_bridge($item->ItemID);
               return true;
               endif;
               return false;
    }
    public function fetch_id($item_id)
    {  
        return end(explode("-",$item_id));
    }
}