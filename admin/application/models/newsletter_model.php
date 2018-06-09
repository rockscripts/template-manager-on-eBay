<?php



class Newsletter_model extends CI_Model 
{  
    /*get newsletter design*/
      function get_templates($id_ebay_design)
      {
        $query = $this->db->get_where('newsletter_design', array('id_ebay_design' => $id_ebay_design)); 
        return $query->result();   
      }
   public function update_welcome_text($id_newsletter_design, $current_welcome_text)
    {
        $data = array
          (
          "welcome_text" => $current_welcome_text,
          );
          $this->db->where('id_newsletter_design', $id_newsletter_design);
          $this->db->update('newsletter_design', $data);       
    }  
    function get_newsletter_design($id_newsletter_design)
    {
      $query = $this->db->get_where('newsletter_design', array('id_newsletter_design' => $id_newsletter_design)); 
      return $query->result();   
    }
    function get_welcome_text($id_newsletter_design)
    {
      $query = $this->db->get_where('newsletter_design', array('id_newsletter_design' => $id_newsletter_design));
      $row = $query->row();
      return  $row->welcome_text;  
    }
     function get_main_banner($id_newsletter_design)
    {
      $query = $this->db->get_where('newsletter_component', array('id_newsletter_design' => $id_newsletter_design,"key"=>"main_banner")); 
     
      if($query->num_rows()<1)
      {
           $this->insert_banners_design($id_newsletter_design,"main_banner");
      }
           return $query->result();        
        
           
    }
    function get_main_banner_url($id_newsletter_design)
    {
      $query = $this->db->get_where('newsletter_component', array('id_newsletter_design' => $id_newsletter_design,"key"=>"main_banner")); 
     
      if($query->num_rows()<1)
      {
           $this->insert_banners_design($id_newsletter_design,"main_banner");
      }
      $row = $query->row();
      return  $row->value;      
        
           
    }
    public function delete_listing($id_featured_listing)
    {
      $this->db->where('id_neswletter_listing', $id_featured_listing)->delete('newsletter_listings');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    function get_last_listing_id_inserted($id_newsletter_design)
    {
        //$result = $this->db->query('SELECT id_neswletter_listing FROM newsletter_listings ORDER BY id_neswletter_listing DESC LIMIT 1');
        $last_id = $this->db->query('SELECT MAX(id_neswletter_listing) AS `id_neswletter_listing` FROM `newsletter_listings` where id_newsletter_design = '.$id_newsletter_design)->row()->id_neswletter_listing;
        return $last_id;
    }
    function get_old_main_banner($id_newsletter_component)
    {
      $query = $this->db->get_where('newsletter_component', array('id_newsletter_component' => $id_newsletter_component,"key"=>"main_banner")); 
       return $query->result();             
    }
    function insert_banners_design($id_newsletter_design,$key)
    {
        if($this->exist_banner($id_newsletter_design,$key) < 1):
            $data = array
            (
            'value' => "default",
            'key' => $key,
            'access' => "public",
           "id_newsletter_design" =>$id_newsletter_design
            );
       return $this->db->insert('newsletter_component', $data);
        endif;
    }
    
     public function update_main_banner($id_newsletter_component, $value)
    {
      $data = array( "value" => $value);
      $this->db->where('id_newsletter_component', $id_newsletter_component);
      $this->db->update('newsletter_component', $data);   
    }
    
    function exist_banner($id_newsletter_design,$key)
      {
         $data = array
            (
            'id_newsletter_design' => $id_newsletter_design,
            'key' => $key      
            );         
           $query = $this->db->get_where('newsletter_component', $data);  
           return $query->num_rows(); 
      }
           function get_old_banner($id_newsletter_component)
      {
            $data = array
            (
            'id_newsletter_component' => $id_newsletter_component   
            );
            $query = $this->db->get_where('newsletter_component', $data);  
            return $query->result(); 
      }
      
   function get_newsletter_listings($id_newsletter_design)
    {
        $data = array
            (
            'id_newsletter_design' => $id_newsletter_design
            );
           $query = $this->db->get_where('newsletter_listings', $data);  
           $this->db->order_by('id_neswletter_listing', 'DESC');
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
     function get_active_newsletter_listings($id_newsletter_design)
    {
        $data = array
            (
            'id_newsletter_design' => $id_newsletter_design,
            "status" => "Active"
            );
           $query = $this->db->get_where('newsletter_listings', $data);  
           $this->db->order_by('id_neswletter_listing', 'DESC');
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
         function add_newsletter_listing($id_newsletter_design,$title,$price,$image_url,$description,$link)
    {
        if($this->exist_newsletter_listing($id_newsletter_design,$title,$price,$image_url) < 1):
            $data = array
            (
            'id_newsletter_design' => $id_newsletter_design,
             'title' => $title,
             'price' => $price,
             'image_url' => $image_url,
             'description' => $description,   
             'link' => $link,   
             'status' => 'Active'   
            );
       return $this->db->insert('newsletter_listings', $data);
        endif;
    }
     
    function exist_newsletter_listing($id_newsletter_design,$title,$price,$image_url)
      {
         $data = array
            (
            'id_newsletter_design' => $id_newsletter_design,
             'title' => $title,
             'price' => $price,
            'image_url' => $image_url      
            );         
           $query = $this->db->get_where('newsletter_listings', $data);  
           return $query->num_rows(); 
      }
       public function change_listing_status_to($id_featured_listing, $new_status)
    {
      $data = array( "status" => $new_status);
      $this->db->where('id_neswletter_listing', $id_featured_listing);
      $this->db->update('newsletter_listings', $data);   
    }
      public function update_listing($id_neswletter_listing,$title,$price,$image_url)
    {
          /*not-defined value is a flag to know if is necessary update listing image url*/
          /*search in ebay_template.js*/
          if($image_url != "not-defined"):
              $data0 = array
                (
                "title" => $title,
                "price" => $price,
                "image_url" => $image_url,
                );
          $this->db->where('id_neswletter_listing', $id_neswletter_listing);
          $this->db->update('newsletter_listings', $data0);
              else:
                  $data1 = array
                (
                "title" => $title,
                "price" => $price
                );
            $this->db->where('id_neswletter_listing', $id_neswletter_listing);
            $this->db->update('newsletter_listings', $data1);
        endif;        
    }  
    function get_listing_with_id($id_neswletter_listing)
    {
        $data = array
        (
        'id_neswletter_listing' => $id_neswletter_listing    
        );
        $query = $this->db->get_where('newsletter_listings', $data);  
        return $query->result(); 
     }
   
} 