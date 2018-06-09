<?php
class Storedesign_model extends CI_Model 
{ 
   public function __construct()
     {
        parent::__construct();              
        $this->load->model('Ebaydesigns_model');
     }
    function get_welcome_text($id_ebay_design,$id_home_design,$user_id )
        {
            $data = array
                (
                'id_ebay_design' => $id_ebay_design,
                'id_home_design' => $id_home_design,
                'id_user' => $user_id
                );
               $query = $this->db->get_where('home_design_welcome_texts', $data);  
             if($query->num_rows()>0)
                 return $query->result();       
             else
                 return false;
        }
   public function update_welcome_text($id_home_design_welcome_text, $welcome_text)
    {
        $data = array
                (
                'text' => $welcome_text
                );
          $this->db->where('id_home_design_welcome_text', $id_home_design_welcome_text);
          $this->db->update('home_design_welcome_texts', $data);       
    }  
     public function add_welcome_text($welcome_text,$id_ebay_design, $id_home_design,$user_id)
    {
         if(!$this->exist_welcome_text($id_ebay_design, $id_home_design,$user_id)):
             $data = array
                (
                'text' => $welcome_text,
                'id_ebay_design' => $id_ebay_design,
                'id_home_design' => $id_home_design,
                'id_user' => $user_id
                );
          $this->db->insert('home_design_welcome_texts', $data); 
          else:
              $data = array
                (
                'text' => $welcome_text
                );
               $condition =  array
                (
                 'id_ebay_design' => $id_ebay_design,
                'id_home_design' => $id_home_design,
                'id_user' => $user_id
                );
               $this->db->where($condition);
               $this->db->update('home_design_welcome_texts', $data);    
         endif;
             
    }  
    public function exist_welcome_text($id_ebay_design, $id_home_design,$user_id)
    {
       $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_home_design' => $id_home_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('home_design_welcome_texts', $data);  
         if($query->num_rows()>0)   
            return true;
         else
             return array(); 
    }
      function get_images_videos_slider($id_ebay_design,$id_home_design,$user_id)
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_home_design'=> $id_home_design,
            'id_user'=>$user_id
            );
           $query = $this->db->get_where('home_design_slider', $data);  
           $this->db->order_by('id_home_design_slider', 'DESC');
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
    function get_images_videos_slider_with_id($id)
    {
        $data = array
        (
        'id_home_design_slider' => $id    
        );
        $query = $this->db->get_where('home_design_slider', $data);  
        return $query->result(); 
     }
           function add_images_videos_slider($id, $id_ebay_design,$link,$image_url,$user_id,$id_home_design,$type)
    {
    
            if($image_url=="ignore")
            {
                  $data = array
            (
            'id_ebay_design' => $id_ebay_design,
              'id_home_design' =>         $id_home_design,
                'link'=>$link,
                'id_user'=>$user_id,
                      'type'=>$type
            ); 
            }
            else
            {
                   $data = array
            (
            'id_ebay_design' => $id_ebay_design,
              'id_home_design' =>         $id_home_design,
                'link'=>$link,
             'image_url' => $image_url,
                'id_user'=>$user_id,
                                 'type'=>$type
            ); 
            }
             if ( $id )
      {
        $this->db->where('id_home_design_slider', $id );
        $this->db->update('home_design_slider', $data );
      } else {
        $this->db->insert('home_design_slider', $data);
      }
     
    }
       public function load_images_videos_slider_array($iid_home_design_slider)
    {
      $query = $this->db->get_where('home_design_slider',array('id_home_design_slider'=>$iid_home_design_slider) );
      return $query->result();
    }
    public function delete_images_videos_slider($id_home_design_slider)
    {
      $this->db->where('id_home_design_slider', $id_home_design_slider)->delete('home_design_slider');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    
     function get_home_advertising( $id_ebay_design,$id_home_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_home_design' => $id_home_design,
            'id_user' => $user_id
            );
           $query = $this->db->order_by('order', 'ASC')->get_where('home_design_advertising', $data);  
         if($query->num_rows()>0)   
            return $query->result();
         else
             return false;
    }
    public function load_home_design_advertising($id_home_design_advertising)
    {
      $query = $this->db->get_where('home_design_advertising',array('id_home_design_advertising'=>$id_home_design_advertising) );
      return $query->result();
    }
     public function save_home_design_advertising( $id , $title , $link , $image_url ,$id_ebay_design, $id_home_design,$user_id)
    {
        if($image_url=="ignore")
        {
   $data = array(
         'title'=> $title,
         'link'=> $link,
         'id_ebay_design' => $id_ebay_design,
         'id_home_design' =>$id_home_design,
         'id_user' =>$user_id
      );
        }
         else 
        {
   $data = array(
         'title'=> $title,
         'link'=> $link,
         'image_url'=> $image_url,
         'id_ebay_design' => $id_ebay_design,
         'id_home_design' =>$id_home_design,
         'id_user' =>$user_id
      );
        }         

      if ( $id )
      {
        $this->db->where('id_home_design_advertising', $id );
        $this->db->update('home_design_advertising', $data );
      } else {
        $this->db->insert('home_design_advertising', $data);
      }
        
      return TRUE ;
    }
    public function update_order_advertising( $id , $order_value)
    {          
      if ( $id )
      {
        $data = array('order'=> $order_value);
        $this->db->where('id_home_design_advertising', $id );
        $this->db->update('home_design_advertising', $data );
      }
    }
     public function load_home_advertising($id_home_design_advertising)
    {
      $query = $this->db->get_where('home_design_advertising',array('id_home_design_advertising'=>$id_home_design_advertising) );
      return $query->result();
    }
      public function delete_home_advertising($id_home_design_advertising)
    {
      $this->db->where('id_home_design_advertising', $id_home_design_advertising)->delete('home_design_advertising');
      
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    
    
     function get_all_tabs($id_ebay_design,$id_home_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_home_design' => $id_home_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('home_design_tabs', $data);  
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
     public function update_tab( $id , $title, $content,$id_ebay_design, $id_home_design,$user_id)
    {
        
      $data = array(
         'title' => $title,
         'content'=> $content,
         'id_ebay_design' => $id_ebay_design,
         'id_home_design' =>$id_home_design,
         'id_user' =>$user_id
      );

      $this->db->where('id_home_design_tab', $id);
      $this->db->update('home_design_tabs', $data ); 
      return TRUE ;
    }
     public function delete_tab($id_tab)
    {
      $this->db->where('id_home_design_tab', $id_tab)->delete('home_design_tabs');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    function load_tab($id_tab)
    {
      $query = $this->db->get_where('home_design_tabs',array('id_home_design_tab'=>$id_tab) );
      return $query->result();
    }
    public function add_tab($title, $content,$id_ebay_design, $id_home_design,$user_id)
    {
      $data = array(
         'title' => $title,
         'content'=> $content,
         'id_ebay_design' => $id_ebay_design,
         'id_home_design' =>$id_home_design,
         'id_user' =>$user_id
      );

      $this->db->insert('home_design_tabs', $data);
    }
    public function save_store_settings($id_ebay_design, $user_id, $info)
    {
        $query = $this->db->get_where('store_settings', array('id_ebay_design' => $id_ebay_design,'id_user' => $user_id) );       
      if ( $query->num_rows()>0 ):
      
         $data = array(
         'id_ebay_design' => $id_ebay_design,
         'id_user' =>$user_id
      );       
      $this->db->where($data);
      return  $this->db->update('store_settings', $info ); 
      else:
          $info["id_ebay_design"] = $id_ebay_design;
          $info["id_user"] = $user_id;
          $this->db->insert('store_settings', $info); 
      endif;
    }
        public function update_store_settings_session_id($id_ebay_design, $user_id, $session_id)
    {
      return  $this->db->query("UPDATE `store_settings` SET `session_id` = '".$session_id."' WHERE `id_user` = ".$user_id." and id_ebay_design = ".$id_ebay_design ); 
    }
        public function update_store_settings_token($id_ebay_design, $user_id, $token)
    {
      return  $this->db->query("UPDATE `store_settings` SET `token` = '".$token."' WHERE `id_user` = ".$user_id." and id_ebay_design = ".$id_ebay_design ); 
    }
        public function update_store_settings_import_mode($id_ebay_design, $user_id, $import_mode)
    {
      return  $this->db->query("UPDATE `store_settings` SET `import_mode` = '".$import_mode."' WHERE `id_user` = ".$user_id." and id_ebay_design = ".$id_ebay_design ); 
    }
        function get_store_setting($id_ebay_design,$user_id)
    {
         $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id
            );
         $query = $this->db->get_where('store_settings',$data); 
         if($query->num_rows()>0):
             $row = $query->result();
          return $row[0];                   
       else:
           return false;
       endif;
    }
    public function StoreSettingDetails($id_ebay_design,$user_id)
    {         
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('store_settings', $data);  
            if($query->num_rows()>0)
             return $query->row_array();      
         else
             return false;            
    }
    
    public function save_social_media($id_ebay_design, $user_id, $info)
    {
      $data = array(
         'id_ebay_design' => $id_ebay_design,
         'id_user' =>$user_id
      );      
     if($this->exist_store_social_media($id_ebay_design,$user_id)):
          $this->db->where($data);
      return  $this->db->update('store_social_media', $info ); 
      else:
         return   $this->db->insert('store_social_media', $info);
     endif;
     
     
    }
    public function exist_store_social_media($id_ebay_design,$user_id)
    {
       $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('store_social_media', $data);  
            if($query->num_rows()>0)
             return true;   
         else
             return false;  
    }
    public function SocialMediaDetails($id_ebay_design,$user_id)
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('store_social_media', $data);  
            if($query->num_rows()>0)
             return $query->row_array();      
         else
             return false;    
    }
    /*layout */
      function save_layout ($type,$widgets,$id_ebay_design,$id_home_design,$user_id) {

      $data = array(
         'layout_type'       => $type,
         'layout_widgets'    => serialize($widgets),
         'id_ebay_design'    => $id_ebay_design,
         'id_home_design' => $id_home_design,
         'id_user'           => $user_id
      );

      $query = $this->db->get_where('home_design_layout', array('id_ebay_design' => $id_ebay_design,'id_home_design' => $id_home_design,'id_user' => $user_id) );       
      if ( $query->num_rows()>0 )
      {
        $result = $query->result(); 
        $this->db->where('id_home_design_layout', $result[0]->id_home_design_layout );
        $this->db->update('home_design_layout', $data );
      } else {
        $this->db->insert('home_design_layout', $data);
      }
        
      return TRUE ;
    }
      function load_layout ($id_ebay_design,$id_home_design,$user_id) {

      $data = array(
        'id_ebay_design'    => $id_ebay_design,
        'id_home_design' => $id_home_design,
        'id_user'           => $user_id
      );

      $query = $this->db->get_where('home_design_layout', array('id_ebay_design' => $id_ebay_design,'id_home_design' => $id_home_design,'id_user' => $user_id) );       
      if ( $query->num_rows()>0 )
      {
        $result = $query->result(); 
        return  $result[0];
      }      
      return FALSE ;
    }
    /*layout*/
     function load_store_backups($user_id)
    {
      $query = $this->db->get_where('backup_store_front',array('id_user'=>$user_id) );
      if($query->num_rows()>0)
             return $query->result();      
         else
             return false;    
    }
     function get_store_backup($backup_id)
    {
      $query = $this->db->get_where('backup_store_front',array('id_backup_store_front'=>$backup_id) );
      if($query->num_rows()>0)
      {
          $row = $query->result();
          return $row[0];  
      }    
         else
             return false;    
    }
    function get_store_page($id_page)
    {
      $query = $this->db->get_where('store_pages',array('id_store_page'=>$id_page) );
      if($query->num_rows()>0)
      {
          $row = $query->result();
          return $row[0];  
      }    
         else
             return false;    
    }
    public function delete_store_page($id_page)
    {
     $this->db->where('id_store_page', $id_page)->delete('store_pages');   
    }
    public function get_store_pages($id_user, $id_ebay_design)
    {
        $data = array
        (
        'id_ebay_design'    => $id_ebay_design,
        'id_user'           => $id_user
        );
        $query = $this->db->get_where('store_pages',$data);       
        if ( $query->num_rows()>0 )
        {
          return $query->result(); 
        }      
        return FALSE ;
    }
    function save_store_page($id_page, $title, $page_text,$id_ebay_design, $user_id)
    {
       
        if ($id_page>0 )
      {
           $data = array
        (
        "title"=>$title,
        "text"=>$page_text,               
        );
        $this->db->where('id_store_page', $id_page );
        $this->db->update('store_pages', $data );
        return  $id_page;
      } else {
          $data = array
        (
        'id_ebay_design'    => $id_ebay_design,
        'id_user'           => $user_id,
        "title"=>$title,
        "text"=>$page_text,               
        );
        $this->db->insert('store_pages', $data);
        $query = $this->db->query('SELECT LAST_INSERT_ID()');
        $row = $query->row_array();
         return $row['LAST_INSERT_ID()'];
      }
    }
     public function get_store_page2($title, $id_ebay_design,$user_id)
    {
       $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id,
            'title'=>$title
            );
           $query = $this->db->get_where('store_pages', $data);  
            if($query->num_rows()>0):
             $row = $query->result();
            return $row[0];  
         else:
             return false;  
         endif;
    }
     public function ebay_save_store_page($page_id, $name, $url, $status, $content, $order,$id_ebay_design, $id_user)
    {
        $data = array
        (
         'ebay_page_id'=>"{$page_id}",
         'title'=>"{$name}",
         'url'=>"{$url}",
         'status'=>"{$status}",
         'text'=>"{$content}",
         'order'=>"{$order}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_user'=>"{$id_user}",
        );
         if($this->exist_store_page($page_id, $id_ebay_design,$id_user)):
             $condition = array('ebay_page_id'=>"{$page_id}",'id_ebay_design'=>"{$id_ebay_design}",'id_user'=>"{$id_user}");
             $this->db->where($condition);
             $this->db->update('store_pages', $condition ); 
             else:
             $this->db->insert('store_pages', $data); 
         endif;
         
    }
    public function exist_store_page($page_id, $id_ebay_design,$user_id)
    {
       $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id,
            'ebay_page_id'=>$page_id
            );
           $query = $this->db->get_where('store_pages', $data);  
            if($query->num_rows()>0)
             return true;   
         else
             return false;  
    }
    public function backup_developer_zone($custom_front_css_code, $custom_listing_css_code, $custom_front_js_code, $custom_listing_js_code, $custom_header_code, $custom_footer_code,$template_name,$id_ebay_design,$id_user)
    {
        $data = array
            (
            'front_style_field' => $custom_front_css_code,
            'front_script_field' => $custom_front_js_code,
            'listing_style_field'=>$custom_listing_css_code,
            'listing_script_field'=>$custom_listing_js_code,
            'header_display_field'=>$custom_header_code,
            'footer_display_field'=>$custom_footer_code,
            'template_name'=>$template_name,
            'id_ebay_design' => $id_ebay_design,
            'date_added' => $this->MySQL_NOW(),
            'id_user' => $id_user,
            ); 
        $this->db->insert('backups_developer_zone', $data); 
    }
    public function get_all_backup_developer_zone($id_user, $id_ebay_design)
    {
         $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $id_user
            );
           $query = $this->db->get_where('backups_developer_zone', $data);  
            if($query->num_rows()>0)
             return $query->result();   
         else
             return false;    
    }
     public function get_backup_developer_zone($id_backup_developer_zone)
    {
          $data = array
            (
             'id_backup_developer_zone' => $id_backup_developer_zone
            );
           $query = $this->db->get_where('backups_developer_zone', $data);  
           if($query->num_rows()>0):
             $row = $query->result();
             return $row[0];   
         else:
             return false;           
         endif;
    }
    public function delete_backup_developer_zone($id_backup_developer_zone)
     {
      $this->db->where('id_backup_developer_zone', $id_backup_developer_zone)->delete('backups_developer_zone');   
     }
     public function get_template_installed($id_template_installed)
     {
         $data = array
           (
            'id_template_installed' => $id_template_installed
            );
           $query = $this->db->get_where('templates_installed', $data);  
            if($query->num_rows()>0)
            {
              $result =  $query->result();   
            return $result[0];  
            }             
         else
             return false;    
     }
     public function get_templates_installed($id_user, $id_ebay_design)
     {
         $data = array
           (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $id_user
            );
           $query = $this->db->get_where('templates_installed', $data);  
            if($query->num_rows()>0)
             return $query->result();   
         else
             return false;    
     }
     public function  add_template_installed($template_name, $id_ebay_design, $id_user)
     {
        $exist = $this->Ebaydesigns_model->exist_template_installed($template_name,$id_ebay_design,$id_user); 
        if(!$exist):
            $data = array
            (
            'name' => "{$template_name}",
            'id_user'=>"{$id_user}",
            'id_ebay_design'=>"{$id_ebay_design}",
            'status' =>"off",
            'is_default' =>"false"
            );
            $this->db->insert('templates_installed', $data);
            return true;
            else:
                return false;
        endif;
     }
      public function update_template_installed_download_files($name, $download_files, $id_user, $id_ebay_design)
     {
         $data = array
           (
            'download_files' => $download_files
            );
           $condition = array('name'=>"{$name}",'id_ebay_design'=>"{$id_ebay_design}",'id_user'=>"{$id_user}");
        $this->db->where($condition);
        $this->db->update('templates_installed', $data ); 
     }
     public function  add_template_installed_modified($template_name,$info,$id_ebay_design, $id_user)
     {
        $this->Ebaydesigns_model->add_template_installed_modified($template_name,$info,$id_ebay_design, $id_user);
     }
     public function update_template_installed_status($id_template, $status, $id_user, $id_ebay_design)
     {
         $data = array
           (
            'status' => $status
            );
           $condition = array('id_template_installed'=>"{$id_template}",'id_ebay_design'=>"{$id_ebay_design}",'id_user'=>"{$id_user}");
        $this->db->where($condition);
        $this->db->update('templates_installed', $data ); 
     }
     public function get_templates_actived($id_user, $id_ebay_design)
     {
         $data = array
           (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $id_user,
            'status' => "on"
            );
           $query = $this->db->get_where('templates_installed', $data);  
            if($query->num_rows()>0):
             $row = $query->result();
             return $row[0];   
         else:
             return false;   
         endif;
     }
     public function delete_template_installed($name,$id_ebay_design, $id_user)
     {
      $condition = array
        (
         'id_ebay_design' => $id_ebay_design,
         'id_user' => $id_user,
         'name' => "$name"
         );
      $this->db->where($condition)->delete('templates_installed');   
     }
     
     public function get_template_modified($template_name, $id_user, $id_ebay_design)
     {
      $condition = array('name'=>"{$template_name}", 'id_user'=>"{$id_user}",'id_ebay_design'=>"{$id_ebay_design}");
      $query = $this->db->get_where('templates_installed_modified', $condition);  
            if($query->num_rows()>0):
             $row = $query->result();
             return $row[0];   
         else:
             return false;   
         endif;
     }
     public function update_template_modified($code,$template_name, $column,$id_ebay_design,$id_user)
     {
         $data = array
        (
         $column => $code
        );
        $condition = array('name'=>"{$template_name}",'id_ebay_design'=>"{$id_ebay_design}",'id_user'=>"{$id_user}");
        $this->db->where($condition);
        $this->db->update('templates_installed_modified', $data ); 
     }
     public function delete_template_installed_modified($name,$id_ebay_design, $id_user)
     {
      $condition = array
        (
         'id_ebay_design' => $id_ebay_design,
         'id_user' => $id_user,
         'name' => "$name"
         );
      $this->db->where($condition)->delete('templates_installed_modified');   
     }
     
     function MySQL_NOW(){ return date('Y-m-d H:i:s'); }
}
