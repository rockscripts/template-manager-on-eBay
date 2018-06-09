<?php
class Listingdesign_model extends CI_Model 
{ 
  
  function get_listing_design($listing_id)
  {
      $data = array
          (
          'id' => $listing_id
          );
         $query = $this->db->get_where('listign_design', $data); 
         if($query->num_rows()>0)
          return $query->result();         
       else
           return false;
  }
    

    public  function list_all_listings_designs($ebay_designs)
    {
        $array_listing_designs = array();
        if(is_array($ebay_designs)):
       foreach ($ebay_designs as $ebay_design):
          $listing_design_data =  $this->get_listing_design($ebay_design->id_listing_design);     
          array_push($array_listing_designs,$listing_design_data);  
       endforeach; 
       return $array_listing_designs;
       else:
           return false;
        endif;
    }

    public function add_listing_image($image_url, $file_name,$id_ebay_design, $id_listing_design,$user_id)
    {
      $data = array(
         'image_url' => $image_url,
         'image_name'=>$file_name,
         'id_ebay_design' => $id_ebay_design,
         'id_listing_design' =>$id_listing_design,
         'id_user' =>$user_id
      );

      $this->db->insert('listing_design_pictures', $data); 
    }

    function get_all_listing_pictures($id_ebay_design,$id_listing_design,$user_id )
        {
            $data = array
                (
                'id_ebay_design' => $id_ebay_design,
                'id_listing_design' => $id_listing_design,
                'id_user' => $user_id
                );
               $query = $this->db->get_where('listing_design_pictures', $data);  
             if($query->num_rows()>0)
                 return $query->result();       
             else
                 return false;
        }
    
    public function delete_listing_picture($id_listing_design_picture)
    {
      $this->db->where('id_listing_design_picture', $id_listing_design_picture)->delete('listing_design_pictures');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }

    public function change_status_listing_picture($id_listing_design_picture)
    {
      
      $query = $this->db->get_where('listing_design_pictures',array('is_main_image'=>1));
      if ( $query->num_rows()>0  )
      {
        foreach ($query->result() as $row)
        {
          $this->db->where('id_listing_design_picture', $row->id_listing_design_picture);
          $this->db->update('listing_design_pictures', array('is_main_image'=>0) ); 
        }
      }
        
      $this->db->where('id_listing_design_picture', $id_listing_design_picture);
      $this->db->update('listing_design_pictures', array('is_main_image'=>1) ); 
      return TRUE ;
    }

    public function add_tab($title, $content,$id_ebay_design, $id_listing_design,$user_id)
    {
      $data = array(
         'title' => $title,
         'content'=> $content,
         'id_ebay_design' => $id_ebay_design,
         'id_listing_design' =>$id_listing_design,
         'id_user' =>$user_id
      );

      $this->db->insert('listing_design_tabs', $data);
    }

    public function update_tab( $id , $title, $content,$id_ebay_design, $id_listing_design,$user_id)
    {
        
      $data = array(
         'title' => $title,
         'content'=> $content,
         'id_ebay_design' => $id_ebay_design,
         'id_listing_design' =>$id_listing_design,
         'id_user' =>$user_id
      );

      $this->db->where('id_listing_design_tab', $id);
      $this->db->update('listing_design_tabs', $data ); 
      return TRUE ;
    }

    public function delete_tab($id_tab)
    {
      $this->db->where('id_listing_design_tab', $id_tab)->delete('listing_design_tabs');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }

    function get_all_tabs($id_ebay_design,$id_listing_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_listing_design' => $id_listing_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('listing_design_tabs', $data);  
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }

    function load_tab($id_tab)
    {
      $query = $this->db->get_where('listing_design_tabs',array('id_listing_design_tab'=>$id_tab) );
      return $query->result();
    }

    function get_listing_description( $id_ebay_design,$id_listing_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_listing_design' => $id_listing_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('listing_design_description', $data);  
         if($query->num_rows()>0) {
            $result = $query->result();       
            return $result[0] ;
         }
         else
             return false;
    }

    public function update_listing_description( $description,$id_ebay_design, $id_listing_design,$user_id)
    {

      $data = array(
         'description'=> $description,
         'id_ebay_design' => $id_ebay_design,
         'id_listing_design' =>$id_listing_design,
         'id_user' =>$user_id
      );

      if ( $result = $this->get_listing_description( $id_ebay_design,$id_listing_design,$user_id ) )
      {
        $this->db->where('id_listing_design_description', $result->id_listing_design_description );
        $this->db->update('listing_design_description', $data );
      } else {
        $this->db->insert('listing_design_description', $data);
      }
        
      return TRUE ;
    }
public function update_listing_title( $title,$id_ebay_design, $id_listing_design,$user_id)
    {

      $data = array(
         'title'=> $title,
         'id_ebay_design' => $id_ebay_design,
         'id_listing_design' =>$id_listing_design,
         'id_user' =>$user_id
      );

      if ( $result = $this->get_listing_title( $id_ebay_design,$id_listing_design,$user_id ) )
      {
        $this->db->where('id_listing_design_title', $result->id_listing_design_title );
        $this->db->update('listing_design_title', $data );
      } else {
        $this->db->insert('listing_design_title', $data);
      }
        
      return TRUE ;
    }
    
     function get_listing_title( $id_ebay_design,$id_listing_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_listing_design' => $id_listing_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('listing_design_title', $data);  
         if($query->num_rows()>0) {
            $result = $query->result();       
            return $result[0] ;
         }
         else
             return false;
    }
    
    function get_listing_advertising( $id_ebay_design,$id_listing_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_listing_design' => $id_listing_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('listing_design_advertising', $data);  
         if($query->num_rows()>0)   
            return $query->result();
         else
             return false;
    }

    public function save_listing_advertising( $id , $title , $link , $image_url ,$id_ebay_design, $id_listing_design,$user_id)
    {
        if($image_url=="ignore")
        {
   $data = array(
         'title'=> $title,
         'link'=> $link,
         'id_ebay_design' => $id_ebay_design,
         'id_listing_design' =>$id_listing_design,
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
         'id_listing_design' =>$id_listing_design,
         'id_user' =>$user_id
      );
        }
           

      if ( $id )
      {
        $this->db->where('id_listing_design_advertising', $id );
        $this->db->update('listing_design_advertising', $data );
      } else {
        $this->db->insert('listing_design_advertising', $data);
      }
        
      return TRUE ;
    }

    public function delete_listing_advertising($id_listing_design_advertising)
    {
      $this->db->where('id_listing_design_advertising', $id_listing_design_advertising)->delete('listing_design_advertising');
      
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }

    public function load_listing_advertising($id_listing_design_advertising)
    {
      $query = $this->db->get_where('listing_design_advertising',array('id_listing_design_advertising'=>$id_listing_design_advertising) );
      return $query->result();
    }
    public function update_order_advertising( $id , $order_value)
    {          
      if ( $id )
      {
        $data = array('order'=> $order_value);
        $this->db->where('id_listing_design_advertising', $id );
        $this->db->update('listing_design_advertising', $data );
      }
    }
 public function load_featured_listing($id_featured_listing)
    {
      $query = $this->db->get_where('feature_listings',array('id_featured_listing'=>$id_featured_listing) );
      return $query->result();
    }
    
        function get_images_videos_slider($id_ebay_design,$id_listing_design,$user_id)
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_listing_design'=> $id_listing_design,
            'id_user'=>$user_id
            );
      //  print_r($data);
           $query = $this->db->get_where('listing_design_slider', $data);  
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
    function get_images_videos_slider_with_id($id)
    {
        $data = array
        (
        'id_listing_design_slider' => $id    
        );
        $query = $this->db->get_where('listing_design_slider', $data);  
        return $query->result(); 
     }
      function add_images_videos_slider($id, $id_ebay_design,$link,$image_url,$user_id,$id_listing_design,$type)
    {
    
            if($image_url=="ignore")
            {
                  $data = array
            (
            'id_ebay_design' => $id_ebay_design,
              'id_listing_design' =>         $id_listing_design,
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
              'id_listing_design' =>         $id_listing_design,
                'link'=>$link,
             'image_url' => $image_url,
                'id_user'=>$user_id,
                                 'type'=>$type
            ); 
            }
             if ( $id )
      {
        $this->db->where('id_listing_design_slider', $id );
        $this->db->update('listing_design_slider', $data );
      } else {
        $this->db->insert('listing_design_slider', $data);
      }
     
    }
    public function load_images_videos_slider_array($iid_listing_design_slider)
    {
      $query = $this->db->get_where('listing_design_slider',array('id_listing_design_slider'=>$iid_listing_design_slider) );
      return $query->result();
    }
     public function delete_images_videos_slider($id_listing_design_slider)
    {
      $this->db->where('id_listing_design_slider', $id_listing_design_slider)->delete('listing_design_slider');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    
   function save_layout ($type,$widgets,$id_ebay_design,$id_listing_design,$user_id) {

      $data = array(
         'layout_type'       => $type,
         'layout_widgets'    => serialize($widgets),
         'id_ebay_design'    => $id_ebay_design,
         'id_listing_design' => $id_listing_design,
         'id_user'           => $user_id
      );

      $query = $this->db->get_where('listing_design_layout', array('id_ebay_design' => $id_ebay_design,'id_listing_design' => $id_listing_design,'id_user' => $user_id) );       
      if ( $query->num_rows()>0 )
      {
        $result = $query->result(); 
        $this->db->where('id_listing_design_layout', $result[0]->id_listing_design_layout );
        $this->db->update('listing_design_layout', $data );
      } else {
        $this->db->insert('listing_design_layout', $data);
      }
        
      return TRUE ;
    }
    
    function load_layout ($id_ebay_design,$id_listing_design,$user_id) {

      $data = array(
        'id_ebay_design'    => $id_ebay_design,
        'id_listing_design' => $id_listing_design,
        'id_user'           => $user_id
      );

      $query = $this->db->get_where('listing_design_layout', array('id_ebay_design' => $id_ebay_design,'id_listing_design' => $id_listing_design,'id_user' => $user_id) );       
      if ( $query->num_rows()>0 )
      {
        $result = $query->result(); 
        return  $result[0];
      }      
      return FALSE ;
    }
    
    /*Functions For categories*/
 public function get_current_categories($group_id,$order_by=false )
   {
       $data = array
           (
           'group_id' => $group_id
           );
       if(!$order_by)
          $query = $this->db->get_where('store_categories', $data);  
      else 
          $query = $this->db->order_by('parent_id', 'ASC')->get_where('store_categories', $data);; 
        if($query->num_rows()>0)
          return $query->result();                   
        else
            return false;
   }
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
    public function add_dynamic_category($id, $parent_id, $title, $url,$position,$group_id)
    {
        if(!$this->exist_category($id, $group_id)):
      $data = array(
         'id_cat' => $id,
         'parent_id'=>$parent_id,
         'title' => $title,
         'url' =>$url,
          'class' =>"",
          'position' =>$position,
         'group_id' =>$group_id
      );
      $this->db->insert('store_categories', $data); 
      else:
          $data = array
       (
         'title'=> $title,
         'url' => $url
        );
      $condition=array("group_id"=>$group_id,"id_cat"=>$id);
        $this->db->where($condition );
        $this->db->update('store_categories', $data );
  endif;
    }
    public function exist_category($id_cat, $group_id)
    {
         $data = array
                  (
                  'id_cat' => $id_cat,
                  'group_id' => $group_id
                  );
                 $query = $this->db->get_where('store_categories', $data);  
               if($query->num_rows()>0):
                   return true;
               else:
                   return false;
               endif;
    }
    public function delete_category($id)
    {
      $this->db->where('id', $id)->delete('store_categories');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    function get_dynamic_categories_group_id($id_ebay_design,$user_id)
    {
        $data = array
                  (
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id
                  );
                 $query = $this->db->get_where('store_categories_group', $data);  
               if($query->num_rows()>0):
                   $result =  $query->result_array();       
                  return $result[0] ;
               else:
                   return false;
               endif;
    }
     function get_dynamic_categories_group_ids($id_ebay_design,$user_id)
    {
        $data = array
                  (
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id
                  );
                 $query = $this->db->get_where('store_categories_group', $data);  
               if($query->num_rows()>0):
                   $result =  $query->result();       
                  return $result ;
               else:
                   return false;
               endif;
    }
   public function update_category($id, $title, $url)
    {
      $data = array
       (
         'title'=> $title,
         'url' => $url
        );
        $this->db->where('id', $id );
        $this->db->update('store_categories', $data );
    }   
        public function get_user_categories_group_id($id_ebay_design, $user_id)
    {
         $data = array
                  (
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  'title' => "Dynamic Categories"
                  );
                 $query = $this->db->get_where('store_categories_group', $data);  
               if($query->num_rows()>0):
                   $result =  $query->result_array();       
                  return $result[0] ;
               else:
                   return false;
               endif;
    }    
    public function get_user_menu_group_id($id_ebay_design, $user_id)
    {
         $data = array
                  (
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id,
                  'title' => "Main Menu"
                  );
                 $query = $this->db->get_where('menu_group', $data);  
               if($query->num_rows()>0):
                   $result =  $query->result_array();       
                  return $result[0] ;
               else:
                   return false;
               endif;
    }
     public function get_user_menu_group_ids($id_ebay_design, $user_id)
    {
         $data = array
                  (
                  'id_ebay_design' => $id_ebay_design,
                  'id_user' => $user_id
                  );
                 $query = $this->db->get_where('menu_group', $data);  
               if($query->num_rows()>0):
                   $result =  $query->result_array();       
                  return $result ;
               else:
                   return false;
               endif;
    }
}