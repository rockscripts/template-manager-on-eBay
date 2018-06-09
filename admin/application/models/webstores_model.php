<?php
class Webstores_model extends CI_Model 
{ 
    public $webstore_db; 
    public function __construct()
     {
        parent::__construct();     
        $this->webstore_db = $this->load->database('webstore', TRUE);
     }
     
     public  function add_web_site($code, $name, $sort_order, $default_group_id, $is_default)
     {
       $data = array
            (
            'code' => $code,
            'name' => $name,
            'sort_order' => $sort_order,
            "default_group_id" =>$default_group_id,
            "is_default" =>$is_default
            );
        $this->webstore_db->insert('core_website', $data);
       $query = $this->db->query('SELECT LAST_INSERT_ID()');
       $row = $query->row_array();
       return $row['LAST_INSERT_ID()'];
     }
      public  function add_store_group($website_id, $name, $root_category_id, $default_store_id)
     {
       $data = array
            (
            'website_id' => $website_id,
            'name' => $name,
            'root_category_id' => $root_category_id,
            "default_store_id" =>$default_store_id,
            );
       $this->webstore_db->insert('core_store_group', $data);
       $query = $this->db->query('SELECT LAST_INSERT_ID()');
       $row = $query->row_array();
       return $row['LAST_INSERT_ID()'];
     }
     
      public  function add_store_view($code, $website_id, $group_id, $name, $sort_order, $is_active)
     {
       $data = array
            (
            'code' => $code,
            'website_id' => $website_id,
            'group_id' => $group_id,
            "name" =>$name,
            "sort_order" =>$sort_order,
            "is_active" =>$is_active,
            );
       $this->webstore_db->insert('core_store', $data);
       $query = $this->db->query('SELECT LAST_INSERT_ID()');
       $row = $query->row_array();
       return $row['LAST_INSERT_ID()'];
     }
     function update_website_default_group_id($website_id,$group_id)
     {
         $data = array
                (
                'default_group_id' => $group_id
                );
          $this->db->where('website_id', $website_id);
          $this->db->update('core_website', $data); 
     }
     function update_store_group_default_store_id($group_id,$store_id)
     {
         $data = array
                (
                'default_store_id' => $store_id
                );
          $this->db->where('group_id', $group_id);
          $this->db->update('core_store_group', $data); 
     }
     public function add_webstore_information($store_root_category_id, $website_id, $store_group_id, $store_id, $id_ebay_design, $user_id)
     {
         $data = array
                  (
                  'id_category_root' => $store_root_category_id,
                  'id_website' => $website_id,
                  'id_store_group' => $store_group_id,
                  'id_store_view' => $store_id,           
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
        if(!$this->exist_webstore_information($store_root_category_id, $id_ebay_design, $user_id)):       
      $this->db->insert('webstore_information', $data); 
      else:
        $condition = array
                  (
                  'id_category_root' => $store_root_category_id,
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
        $this->db->where($condition );
        $this->db->update('webstore_information', $data );
      endif; 
     }
      public function exist_webstore_information($store_root_category_id, $id_ebay_design, $user_id)
    {
         $data = array
                  (
                  'id_category_root' => $store_root_category_id,
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
                 $query = $this->db->get_where('webstore_information', $data);  
               if($query->num_rows()>0):
                   return true;
               else:
                   return false;
               endif;
    }
    public function get_webstore_information($id_ebay_design, $user_id)
    {
        $this->load->database('default',TRUE);
      $data = array
                  (
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
                 $query = $this->db->get_where('webstore_information', $data);  
               if($query->num_rows()>0):
                   $result = $query->result(); 
                   $this->load->database('webstore', TRUE);
                   return $result[0];
               else:
                   $this->load->database('webstore', TRUE);
                   return false;
               endif;  
    }
    public function get_webstore_category_bridge($id_dm_category,$user_id)
    {
      $this->load->database('default',TRUE);
      $data = array
                  (
                  'id_dm_category' => $id_dm_category,
                  'id_user' => $user_id,
                  );
                 $query = $this->db->get_where('webstore_categories_bridge', $data);  
               if($query->num_rows()>0):
                   $result = $query->result(); 
               $this->load->database('webstore', TRUE);
                   return $result[0];
               else:
                   $this->load->database('webstore', TRUE);
                   return false;
               endif;  
    }
    public function add_webstore_category_bridge($id_dm_category, $id_mg_category, $id_ebay_design, $user_id)
     {
        $this->load->database('default',TRUE);
         $data = array
                  (
                  'id_dm_category' => $id_dm_category,
                  'id_mg_category' => $id_mg_category,          
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
        if(!$this->exist_webstore_category_bridge($id_dm_category, $id_mg_category, $id_ebay_design, $user_id)): 
             $this->load->database('default',TRUE);
        $this->db->insert('webstore_categories_bridge', $data); 
        endif;
        $this->load->database('webstore', TRUE);
     }
    public function exist_webstore_category_bridge($id_dm_category, $id_mg_category, $id_ebay_design, $user_id)
    {
         $this->load->database('default',TRUE);
         $data = array
                  (
                  'id_dm_category' => $id_dm_category,
                  'id_mg_category' => $id_mg_category,
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
                 $query = $this->db->get_where('webstore_categories_bridge', $data);  
               if($query->num_rows()>0):
                   $this->load->database('webstore', TRUE);
                   return true;
               else:
                   $this->load->database('webstore', TRUE);
                   return false;
               endif;
    }
    /*duplicated from listing model*/
    public function get_category($id)
   {
       $data = array
           (
           'id_cat' => $id
           );
          $query = $this->db->get_where('store_categories', $data);  
        if($query->num_rows()>0):
            $result = $query->result();    
            return $result[0];
            else:
            return false;
        endif;                  
   }
   /*******************PRODUC*******************/
    public function add_product_bridge($id_mg_product, $item_id, $id_ebay_design, $user_id)
    {
         $this->load->database('default',TRUE);
         $data = array
                  (
                  'id_mg_product' => $id_mg_product,
                  'item_id' => $item_id,          
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  );
        if(!$this->exist_webstore_product_bridge($id_mg_product, $item_id, $id_ebay_design, $user_id)): 
             $this->load->database('default',TRUE);
        $this->db->insert('webstore_product_bridge', $data); 
        endif;
        $this->load->database('webstore', TRUE);  
    }
    public function exist_webstore_product_bridge($id_mg_product, $item_id, $id_ebay_design, $user_id)
    {
        $this->load->database('default',TRUE);
        $data = array
                 (
                 'id_mg_product' => $id_mg_product,
                 'item_id' => $item_id,
                 'id_ebay_design' => $id_ebay_design,
                 'id_user' => $user_id,
                 );
                $query = $this->db->get_where('webstore_product_bridge', $data);  
              if($query->num_rows()>0):
                  $this->load->database('webstore', TRUE);
                  return true;
              else:
                  $this->load->database('webstore', TRUE);
                  return false;
              endif;
    }
    public function get_webstore_product_bridge($item_id, $id_ebay_design, $user_id)
    {
        $this->load->database('default',TRUE);
        $data = array
                 (
                 'item_id' => $item_id,
                 'id_ebay_design' => $id_ebay_design,
                 'id_user' => $user_id,
                 );
                $query = $this->db->get_where('webstore_product_bridge', $data);  
              if($query->num_rows()>0):
                  $this->load->database('webstore', TRUE);
                  return true;
              else:
                  $this->load->database('webstore', TRUE);
                  return false;
              endif; 
    }
    public function delete_webstore_product_bridge($item_id)
    {
       $this->db->where('item_id', $item_id)->delete('webstore_product_bridge');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;    
    }
    public function update_mg_listing_url($ws_product_id,$ViewItemURL)
    {
      $this->load->database('webstore', TRUE);
      $data = array
                (
                'listing_url' => $ViewItemURL
                );
          $this->db->where('entity_id', $ws_product_id);
          $this->db->update('catalog_product_entity', $data); 
    }
    
    
     public function get_blog_post_bridge($item_id, $id_ebay_design, $id_user)
     {
       $this->load->database('default',TRUE);
       $data = array
        (
        'item_id' => $item_id,
        'id_user' => $id_user,
        'id_ebay_design' => $id_ebay_design,
        );
       $query = $this->db->get_where('blog_post_bridge', $data);  
        if($query->num_rows()>0):
         $result = $query->result(); 
         $this->load->database('webstore', TRUE);
         return $result[0];
        else:
            $this->load->database('webstore', TRUE);
            return false;
        endif;  
     }
     public function add_blog_post_bridge($post_id, $item_id, $id_ebay_design, $id_user)
    {
         $this->load->database('default',TRUE);
         $data = array
                  (                  
                  'item_id' => $item_id,  
                  'id_post' => $post_id,
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $id_user,
                  );
        if(!$this->exist_blog_post_bridge($item_id)): 
             $this->load->database('default',TRUE);
        $this->db->insert('blog_post_bridge', $data); 
        endif;
        $this->load->database('webstore', TRUE);  
    }
    public function exist_blog_post_bridge($item_id)
    {
        $this->load->database('default',TRUE);
        $data = array
                 (
                 'item_id' => $item_id
                 );
                $query = $this->db->get_where('blog_post_bridge', $data);  
              if($query->num_rows()>0):
                  return true;
              else:
                  return false;
              endif;
    }
    public function delete_blog_post_bridge($item_id)
    {
       $this->db->where('item_id', $item_id)->delete('blog_post_bridge');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;    
    }
}