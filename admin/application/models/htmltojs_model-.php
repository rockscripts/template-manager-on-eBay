<?php
class HTMLtojs_model extends CI_Model 
{ 
  
    function get_code_tagged_part($design, $element_key,$id_ebay_design,$id_design,$user_id)
        {
        if($design == "front"):
            $data = array
                (
                'id_ebay_design' => $id_ebay_design,
                'id_home_design' => $id_design,
                'id_user' => $user_id,
                'element_key' => $element_key
                );
      
               $query = $this->db->from("home_design_parts_tagged")->where($data)->get();  
            
              if($query->num_rows()>0) :
                 
            $result = $query->result();       
            $object =  $result[0] ;
            return $object->html_code_tagged;
         else:
                 return false;
             endif;
            else:
            $data = array
                (
                'id_ebay_design' => $id_ebay_design,
                'id_listing_design' => $id_design,
                'id_user' => $user_id,
                'element_key' => $element_key
                );
               $query = $this->db->get_where('listing_design_parts_tagged', $data);  
             if($query->num_rows()>0):
                 foreach($query->result() as $object)
                 return $object->html_code_tagged;       
             else:
                 return false;
             endif;
        endif;           
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
        $data = array
                (
                'text' => $welcome_text,
                'id_ebay_design' => $id_ebay_design,
                'id_home_design' => $id_home_design,
                'id_user' => $user_id
                );
          $this->db->insert('home_design_welcome_texts', $data);      
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
       ///    $this->db->order_by('id_home_design_slider', 'DESC');
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
           $query = $this->db->get_where('home_design_advertising', $data);  
         if($query->num_rows()>0)   
            return $query->result();
         else
             return array();
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
}
