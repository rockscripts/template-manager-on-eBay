<?php
class Ebaydesigns_model extends CI_Model 
{ 
    function validate_app($user_id, $id_ebay_design)
    {
       $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id
            );
         $query = $this->db->get_where('store_settings',$data); 
         if($query->num_rows()>0):
            return true;               
       else:
           return false;
       endif;
      
    }
    public function get_ebay_designs()
    {
      $query = $this->db->get('ebay_design'); 
         if($query->num_rows()>0):
          return $query->result();    
       else:
           return false;
       endif;  
    }
    public function get_user_details($id_user)
    {
      $query = $this->db->get_where('user',array("id"=>$id_user)); 
         if($query->num_rows()>0):
          $result = $query->result(); 
           return $result[0] ;  
       else:
           return false;
       endif;  
    }
    function get_listing_designs($user_id)
    {
        $this->db->select('*');
        $this->db->from('ebay_design');
        $this->db->join('listign_design', 'ebay_design.id_listing_design  = listign_design.id', 'left');
        $this->db->where('ebay_design.id_user',$user_id); 
        $query = $this->db->get();
           if($query->num_rows()>0)
            return $query->result();         
         else
             return false;
    }
     function get_ebay_home_designs($user_id)
    {
         
        $this->db->select('*');
        $this->db->from('ebay_design');
        $this->db->join('home_design', 'ebay_design.id_home_design  = home_design.id_home_design', 'left');
        $this->db->where('ebay_design.id_user',$user_id); 
        $query = $this->db->get();
           if($query->num_rows()>0)
            return $query->result();         
         else
             return false;
    }
      function get_ebay_home_designs_header_display($user_id)
    {
         
        $this->db->select('*');
        $this->db->from('ebay_design');
        $this->db->join('home_design', 'ebay_design.id_home_design  = home_design.id_home_design', 'left');
        $this->db->where('ebay_design.id_user',$user_id); 
        $query = $this->db->get();
           if($query->num_rows()>0):
            $result =  $query->result();   
           foreach($result as $object)           
               return $object->header_code;           
         else:
             return false;
         endif;
    }
     function get_listing_design($user_id,$id_ebay_design,$id_listing_design)
    {
         $data = array(
         'ebay_design.id_ebay_design' => $id_ebay_design,
         'ebay_design.id_listing_design' =>$id_listing_design,
         'ebay_design.id_user' =>$user_id
      );
        $this->db->select('*');
        $this->db->from('ebay_design');
        $this->db->join('listign_design', 'ebay_design.id_listing_design  = listign_design.id', 'left');
        $this->db->where($data); 
        $query = $this->db->get();
       // echo $this->db->last_query();;
           if($query->num_rows()>0):
            $result = $query->result(); 
           return $result[0] ;
         else:
             return false;
         endif;
    }
    
    function get_default_value($access_key)
    {
         $data = array
          (
          'access_key' => $access_key
          );
         $query = $this->db->get_where('template_default_values', $data); 
         if($query->num_rows()>0):
          $result = $query->result();       
            return $result[0] ;      
       else:
           return false;
       endif;
    }
    public function get_default_home_template()
    {
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('home_design', $data); 
         if($query->num_rows()>0):
          $result = $query->result();       
            return $result[0] ;      
       else:
           return false;
       endif;
    }
    public function duplicate_default_home_design()
    {
        $default_home_template = $this->get_default_home_template();
        if($default_home_template != false):
            $data = array(
         'header_code' => "{$default_home_template->header_code}",
         'screenshot'=>"{$default_home_template->screenshot}",
         'is_default' =>"false"
      );
      $this->db->insert('home_design', $data); 
      $query = $this->db->query('SELECT LAST_INSERT_ID()');
      $row = $query->row_array();
      return $row['LAST_INSERT_ID()'];
        endif;
    }
    public function get_default_listing_template()
    {
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('listign_design', $data); 
         if($query->num_rows()>0):
          $result = $query->result();       
            return $result[0] ;      
       else:
           return false;
       endif;
    }
    public function duplicate_default_listing_design()
    {
        $default_listing_template = $this->get_default_listing_template();
        if($default_listing_template != false):
            $data = array(
         'html_code' => "{$default_listing_template->html_code}",
         'screenshot'=>"{$default_listing_template->screenshot}",
         'is_default' =>"false"
      );
      $this->db->insert('listign_design', $data); 
      $query = $this->db->query('SELECT LAST_INSERT_ID()');
      $row = $query->row_array();
      return $row['LAST_INSERT_ID()'];
        endif;
    }
     public function update_screenshot($id, $url,$table_name,$field_name)
    {
         $this->db->where($field_name, $id);
          $this->db->update($table_name, array("screenshot"=>$url) ); 
    }
    public function get_default_logo()
    {
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('logo_design', $data); 
         if($query->num_rows()>0):
          $result = $query->result();       
            return $result[0] ;      
       else:
           return false;
       endif;
    }
    public function prepare_logo($user_id , $user_id_home_design)
    {
        $default_logo = $this->get_default_logo();
        if($default_logo != false):
            $data = array(
         'logo_url' => "{$default_logo->logo_url}",
         'is_default' =>"false",
         'id_user' =>"$user_id",
         'id_home_design' =>"$user_id_home_design",
         'id_ebay_design' =>"-1"
      );
      $this->db->insert('logo_design', $data); 
      $query = $this->db->query('SELECT LAST_INSERT_ID()');
      $row = $query->row_array();
      return $row['LAST_INSERT_ID()'];
        endif;
    }
    public function get_logo($id_logo)
    {
         $data = array
          (
          'id_logo' => "$id_logo"
          );
         $query = $this->db->get_where('logo_design', $data); 
         if($query->num_rows()>0):
          $result = $query->result();       
            return $result[0] ;      
       else:
           return false;
       endif;
    }
    public function update_prepared_logo($id_logo,$id_ebay_design)
    {
         $this->db->where('id_logo', $id_logo);
          $this->db->update('logo_design', array('id_ebay_design'=>$id_ebay_design) ); 
    }
    public function add_ebay_design($id_home_design, $id_listing_design, $id_logo,$id_user)
    {
         $data = array(
         'id_logo' => "{$id_logo}",
         'id_listing_design' =>"$id_listing_design",
         'id_user' =>"$id_user",
         'id_home_design' =>"$id_home_design"
      );
      $this->db->insert('ebay_design', $data); 
      $query = $this->db->query('SELECT LAST_INSERT_ID()');
      $row = $query->row_array();
      return $row['LAST_INSERT_ID()'];
    }
      public function get_default_menu_group()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('menu_group', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_menu_group($id_ebay_design, $id_user)
    {
        $default_listing_code_parts = $this->get_default_menu_group();
        if($default_listing_code_parts != false):
            foreach ($default_listing_code_parts as $part):
            $data = array(
         'title' => "{$part->title}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_menu_group($part->title,$id_ebay_design,$id_user)):
             $this->db->insert('menu_group', $data);
         endif;       
            endforeach;            
        endif;
    }
    public function exist_menu_group($title,$id_ebay_design,$id_user)
    {  $data = array(
         'title' => "{$title}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'is_default' =>"false"
      );
         $query = $this->db->get_where('menu_group', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
    public function get_default_category_group()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('store_categories_group', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_category_group($id_ebay_design, $id_user)
    {
        $default_listing_code_parts = $this->get_default_category_group();
        if($default_listing_code_parts != false):
            foreach ($default_listing_code_parts as $part):
            $data = array(
         'title' => "{$part->title}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_store_category_group($id_ebay_design,$id_user)):
             $this->db->insert('store_categories_group', $data); 
         endif;      
            endforeach;            
        endif;
    }
     public function exist_store_category_group($id_ebay_design,$id_user)
    {
        $data = array(
        'id_ebay_design'=>"{$id_ebay_design}",
        'id_user'=>"{$id_user}",
        'is_default' =>"false"
      );
         $query = $this->db->get_where('store_categories_group', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
    /*duplicate layout*/
     public function get_default_home_layout()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('home_design_layout', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_home_layout($id_ebay_design, $id_user, $id_home_design)
    {
        $default_layout = $this->get_default_home_layout();
        if($default_layout != false):
            foreach ($default_layout as $part):
            $data = array(
         'layout_type' => "{$part->layout_type}",
         'layout_widgets' => "{$part->layout_widgets}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_home_design'=>"{$id_home_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_home_layout($id_ebay_design,$id_home_design,$id_user)):
             $this->db->insert('home_design_layout', $data); 
         endif;      
            endforeach;            
        endif;
    }
     public function exist_home_layout($id_ebay_design,$id_home_design,$id_user)
    {
        $data = array(
        'id_ebay_design'=>"{$id_ebay_design}",
        'id_user'=>"{$id_user}",
        'id_home_design'=>"{$id_home_design}",
        'is_default' =>"false"
      );
         $query = $this->db->get_where('home_design_layout', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
    /*duplicate layout*/
     public function get_default_listing_layout()
    {      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('listing_design_layout', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_listing_layout($id_ebay_design, $id_user, $id_listing_design)
    {
        $default_layout = $this->get_default_listing_layout();
        if($default_layout != false):
            foreach ($default_layout as $part):
            $data = array(
         'layout_type' => "{$part->layout_type}",
         'layout_widgets' => "{$part->layout_widgets}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_listing_design'=>"{$id_listing_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_listing_layout($id_ebay_design,$id_listing_design,$id_user)):
            $this->db->insert('listing_design_layout', $data);  
         endif;      
            endforeach;            
        endif;
    }
     public function exist_listing_layout($id_ebay_design,$id_listing_design,$id_user)
    {
        $data = array(
        'id_ebay_design'=>"{$id_ebay_design}",
        'id_user'=>"{$id_user}",
        'id_listing_design'=>"{$id_listing_design}",
        'is_default' =>"false"
      );
         $query = $this->db->get_where('listing_design_layout', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
    /*duplicate listing code parts*/
    public function get_default_listing_code_parts()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('listing_design_parts_tagged', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_listing_code_parts($id_ebay_design, $id_listing_design, $id_user)
    {
        $default_listing_code_parts = $this->get_default_listing_code_parts();
        if($default_listing_code_parts != false):
            foreach ($default_listing_code_parts as $part):
            $data = array(
         'html_code_tagged' => "{$part->html_code_tagged}",
         'element_key'=>"{$part->element_key}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_listing_design'=>"{$id_listing_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_listing_code_part($id_ebay_design,$id_listing_design,$id_user,$part->element_key)):
            $this->db->insert('listing_design_parts_tagged', $data);  
         endif;
      
            endforeach;
            
        endif;
    }
    public function exist_listing_code_part($id_ebay_design,$id_listing_design,$id_user,$element_key)
    {
        $data = array(
         'element_key'=>"$element_key",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_listing_design'=>"{$id_listing_design}",
         'is_default' =>"false"
      );
         $query = $this->db->get_where('listing_design_parts_tagged', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
     public function get_default_home_code_parts()
    {      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('home_design_parts_tagged', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_home_code_parts($id_ebay_design, $id_home_design, $id_user)
    {
        $default_listing_code_parts = $this->get_default_listing_code_parts();
        if($default_listing_code_parts != false):
            foreach ($default_listing_code_parts as $part):
            $data = array(
         'html_code_tagged' => "{$part->html_code_tagged}",
         'element_key'=>"{$part->element_key}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_home_design'=>"{$id_home_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_home_code_part($id_ebay_design,$id_home_design,$id_user,$part->element_key)):
             $this->db->insert('home_design_parts_tagged', $data); 
         endif;      
            endforeach;            
        endif;
    }
    public function exist_home_code_part($id_ebay_design,$id_home_design,$id_user,$element_key)
    {
        $data = array(
         'element_key'=>"$element_key",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_home_design'=>"{$id_home_design}",
         'is_default' =>"false"
      );
         $query = $this->db->get_where('home_design_parts_tagged', $data); 
         if($query->num_rows()>0):
         return true;               
       else: 
           return false;
       endif;   
    }
    public function exist_template_installed($name,$id_ebay_design,$id_user)
    {  $data = array(
         'name' => "{$name}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_user'=>"{$id_user}",
         'is_default' =>"false"
      );
         $query = $this->db->get_where('templates_installed', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
    public function get_default_template_installed()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('templates_installed', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_template_installed($id_ebay_design, $id_user)
    {
        $default_template_installed = $this->get_default_template_installed();
        if($default_template_installed != false):
            foreach ($default_template_installed as $template_installed):
            $data = array
            (
            'name' => "{$template_installed->name}",
            'id_user'=>"{$id_user}",
            'id_ebay_design'=>"{$id_ebay_design}",
            'status' =>"on",
            'is_default' =>"false"
            );
         if(!$this->exist_template_installed($template_installed->name, $id_ebay_design,$id_user)):
             $this->db->insert('templates_installed', $data); 
         endif;      
            endforeach;            
        endif;
    }
    public function exist_template_installed_modified($name,$id_ebay_design,$id_user)
    {  $data = array(
         'name' => "{$name}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_user'=>"{$id_user}",
         'is_default' =>"false"
      );
         $query = $this->db->get_where('templates_installed_modified', $data); 
         if($query->num_rows()>0):
         return true;               
       else:
           return false;
       endif;   
    }
    public function get_default_template_installed_modified()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('templates_installed_modified', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_templates_installed_modified($id_ebay_design, $id_user)
    {
        $default_template_installed_modified = $this->get_default_template_installed_modified();
        if($default_template_installed_modified != false):
            foreach ($default_template_installed_modified as $template_installed_modified):
            $data = array(
         'name' => "{$template_installed_modified->name}",
        'custom_header' => "{$template_installed_modified->custom_header}",
        'custom_footer' => "{$template_installed_modified->custom_footer}",
        'front_style' => "{$template_installed_modified->front_style}",
        'listing_style' => "{$template_installed_modified->listing_style}",
        'front_script' => "{$template_installed_modified->front_script}",
        'listing_script' => "{$template_installed_modified->listing_script}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_template_installed_modified($template_installed_modified->name, $id_ebay_design,$id_user)):
             $this->db->insert('templates_installed_modified', $data); 
         endif;      
            endforeach;            
        endif;
    }
    /**/
    public function get_default_rows_translated()
    {
      
         $data = array
          (
          'is_default' => "true"
          );
         $query = $this->db->get_where('languages_translator', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;    
    }
    public function duplicate_default_rows_translated($id_ebay_design, $id_user)
    {
        $default_rows_translated = $this->get_default_rows_translated();
        if($default_rows_translated != false):
            foreach ($default_rows_translated as $default_row_translated):
            $data = array(
         'constant' => "{$default_row_translated->constant}",
        'english' => "{$default_row_translated->english}",
        'spanish' => "{$default_row_translated->spanish}",
        'french' => "{$default_row_translated->french}",
        'german' => "{$default_row_translated->german}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_template_installed_modified($default_row_translated->constant, $id_ebay_design,$id_user)):
             $this->db->insert('languages_translator', $data); 
         endif;      
            endforeach;            
        endif;
    }
    public function exist_row($constant, $id_user, $id_ebay_design)
    {
       $query = $this->db->get_where('languages_translator', array('constant' => $constant,'id_user' => $id_user,'id_ebay_design' => $id_ebay_design));  
       if( $query->num_rows()>0)  
           return true;
       else 
           return false;
    }
    
    /**/
    public function add_template_installed_modified($template_name,$info,$id_ebay_design, $id_user)
    {
            $data = array(
         'name' => "$template_name",
        'custom_header' => "{$info['custom_header']}",
        'custom_footer' => "{$info['custom_footer']}",
        'front_style' => "{$info['front_style']}",
        'listing_style' => "{$info['listing_style']}",
        'front_script' => "{$info['front_script']}",
        'listing_script' => "{$info['listing_script']}",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'is_default' =>"false"
      );
         if(!$this->exist_template_installed_modified($template_name, $id_ebay_design,$id_user)):
             $this->db->insert('templates_installed_modified', $data); 
         endif;      
         
    }
    public function add_listing_backup($item_id, $item_name, $item_description,$date_processed,$group_id)
    {
        $data = array
        (
         'item_id'=>"$item_id",
         'title'=>"$item_name",
         'description'=>"{$item_description}",
         'date_processed'=>"{$date_processed}",
         'listing_backup_group_id'=>"{$group_id}",
        );
         $this->db->insert('listing_backup', $data); 
    }
      public function add_listing_backup_group($reazon, $date_added, $id_ebay_design,$id_user)
    {
        $data = array
        (
         'reazon'=>"{$reazon}",
         'date_added'=>"{$date_added}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_user'=>"{$id_user}",
        );
         $this->db->insert('listing_backup_group', $data); 
         $query = $this->db->query('SELECT LAST_INSERT_ID()');
      $row = $query->row_array();
      return $row['LAST_INSERT_ID()'];
    }
    public function get_store_front_backup($id_user, $id_ebay_design)
    {
       $data = array
          (
          'id_user' =>$id_user,
           'id_ebay_design' =>$id_ebay_design
          );
         $query = $this->db->get_where('backup_store_front', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;   
    }
    public function get_store_front_single_backup($backup_id)
    {
       $data = array
          (
          'id_backup_store_front' =>$backup_id
          );
         $query = $this->db->get_where('backup_store_front', $data); 
         if($query->num_rows()>0):
          $result = $query->result();       
            return $result[0] ;                     
       else:
           return false;
       endif;   
    }
     public function get_listing_groups_backup($id_user, $id_ebay_design)
    {
        $data = array
          (
          'id_user' =>$id_user,
           'id_ebay_design' =>$id_ebay_design
          );
         $query = $this->db->get_where('listing_backup_group', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif; 
    }
    public function get_listing_backup($group_id)
    {
       $data = array
          (
          'listing_backup_group_id' =>$group_id
          );
         $query = $this->db->get_where('listing_backup', $data); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;  
    }
        public function get_single_listing_backup($item_id, $group_id)
    {
       $data = array
          (
          'listing_backup_group_id' =>$group_id,
           'item_id' =>$item_id
          );
         $query = $this->db->get_where('listing_backup', $data); 
         if($query->num_rows()>0):
            $result = $query->result();       
            return $result[0] ;                          
       else:
            return false;
       endif;  
    }
    public function backup_delete($backup_id)
    {
        $this->db->where('id_backup_store_front', $backup_id)->delete('backup_store_front');
    }
      public function backup_listing_delete($backup_id)
    {
        $this->db->where('id_backup', $backup_id)->delete('listing_backup');
    }
    public function backup_group_delete($backup_group_id)
    {
        $this->db->where('listing_backup_group_id', $backup_group_id)->delete('listing_backup_group');
        $this->db->where('listing_backup_group_id', $backup_group_id)->delete('listing_backup');
    }
   public function get_general_setting($id_user, $id_home_design, $id_ebay_design, $type)
   {
         $data = array(
         'type'=>"$type",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_home_design'=>"{$id_home_design}",
         'is_default' =>"false"
      );
          $query = $this->db->get_where('general_images_settings', $data); 
         if($query->num_rows()>0):
            $result = $query->result();       
            return $result[0] ;                          
       else:
            return false;
       endif;  
   }
   public function save_general_setting($id_user, $id_home_design, $id_ebay_design, $type,$url)
   {
          if(!$this->exist_general_setting($id_ebay_design, $id_home_design,$id_user,$type)):
              $data = array(
                   'url'=>"$url",
                    'type'=>"$type",
                    'id_user'=>"{$id_user}",
                    'id_ebay_design'=>"{$id_ebay_design}",
                    'id_home_design'=>"{$id_home_design}",
                    'is_default' =>"false"
            );
          $this->db->insert('general_images_settings', $data); 
          else:
               $data = array(
                   'url'=>"$url"
            );
               $condition =  array
                (
                 'type'=>"$type",
                    'id_user'=>"{$id_user}",
                    'id_ebay_design'=>"{$id_ebay_design}",
                    'id_home_design'=>"{$id_home_design}",
                );
               $this->db->where($condition);
               $this->db->update('general_images_settings', $data);    
         endif;
   }
   function exist_general_setting($id_ebay_design, $id_home_design,$id_user,$type)
   {
       $data = array(
                    'type'=>"$type",
                    'id_user'=>"{$id_user}",
                    'id_ebay_design'=>"{$id_ebay_design}",
                    'id_home_design'=>"{$id_home_design}",
                    'is_default' =>"false"
            );
           $query = $this->db->get_where('general_images_settings', $data);  
         if($query->num_rows()>0)   
            return true;
         else
             return false; 
   }
 
   public function save_theme_option($id_user, $id_home_design, $id_ebay_design,$key, $value )
   {
          if(!$this->exist_theme_option($id_user, $id_home_design, $id_ebay_design, $key)):
              $data = array(
                   'key'=>"$key",
                    'value'=>"$value",
                    'id_user'=>"{$id_user}",
                    'id_ebay_design'=>"{$id_ebay_design}",
                    'id_home_design'=>"{$id_home_design}"
            );
          $this->db->insert('theme_options', $data); 
          else:
               $data = array(
                   'value'=>"$value"
            );
               $condition =  array
                (
                    'key'=>"$key",
                    'id_user'=>"{$id_user}",
                    'id_ebay_design'=>"{$id_ebay_design}",
                    'id_home_design'=>"{$id_home_design}",
                );
               $this->db->where($condition);
               $this->db->update('theme_options', $data);    
         endif;
   }
   function exist_theme_option($id_user, $id_home_design, $id_ebay_design, $key)
   {
       $data = array(
                    'key'=>"$key",
                    'id_user'=>"{$id_user}",
                    'id_ebay_design'=>"{$id_ebay_design}",
                    'id_home_design'=>"{$id_home_design}"
            );
           $query = $this->db->get_where('theme_options', $data);  
         if($query->num_rows()>0)   
            return true;
         else
             return false; 
   }
   public function get_theme_option($id_user, $id_home_design, $id_ebay_design, $key)
   {
         $data = array(
         'key'=>"$key",
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_home_design'=>"{$id_home_design}"
      );
          $query = $this->db->get_where('theme_options', $data); 
         if($query->num_rows()>0):
            $result = $query->result();       
            return $result[0];                          
       else:
            return false;
       endif;  
   }
     public function get_theme_options($id_user, $id_home_design, $id_ebay_design)
   {
         $data = array(
         'id_user'=>"{$id_user}",
         'id_ebay_design'=>"{$id_ebay_design}",
         'id_home_design'=>"{$id_home_design}"
      );
          $query = $this->db->get_where('theme_options', $data); 
         if($query->num_rows()>0):
            return $query->result();                                          
       else:
            return false;
       endif;  
   }
   public function backup_user_information_after_delete($id_user)
   {              
       /*$this->db->query("insert into backup_store_settings_deleted select * from store_settings where id_user = ".$id_user);
       $this->db->query("insert into backup_user_deleted select * from user where id = ".$id_user);*/
   }
  public function get_google_fonts()
    {
         $query = $this->db->get('google_fonts'); 
         if($query->num_rows()>0):
          return $query->result();                      
       else:
           return false;
       endif;  
    } 
     public function get_google_font($font_id)
    {
         $data = array(
         'id_google_font'=>$font_id
         );
         $query = $this->db->get_where('google_fonts',$data); 
         if($query->num_rows()>0):
            $result = $query->result();       
            return $result[0];                     
       else:
           return false;
       endif;  
    } 
    public function get_active_font($user_id,$id_ebay_design)
    {
       $data = array(
         'id_user'=>$user_id,
         'id_ebay_design'=>$id_ebay_design
         );
        $this->db->select('*');
        $this->db->from('google_fonts_actived');
        $this->db->join('google_fonts', 'google_fonts_actived.id_google_font = google_fonts.id_google_font');
        $this->db->where($data); 
        $query = $this->db->get();
         if($query->num_rows()>0):
            $result = $query->result();       
            return $result[0];                     
       else:
           return false;
       endif;   
    }
    public function add_actived_google_font($font_id,$user_id,$id_ebay_design)
    {      
     $active_font = $this->get_active_font($user_id,$id_ebay_design);
     if(!$active_font):
         $data = array(
         'id_google_font'=>$font_id,
         'id_user'=>$user_id,
         'id_ebay_design'=>$id_ebay_design
         );
         $this->db->insert('google_fonts_actived', $data); 
         $query = $this->db->query('SELECT LAST_INSERT_ID()');
         $row = $query->row_array();
         return $row['LAST_INSERT_ID()'];
         else:
         $condition = array('id_google_font_actived'=>$active_font->id_google_font_actived); 
         $data = array('id_google_font'=>$font_id); 
         $this->db->where($condition);
         $this->db->update('google_fonts_actived', $data);   
         return "updated";
     endif;
     
    }
}