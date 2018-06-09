<?php
class Discounts_model extends CI_Model 
{ 
     function get_special_listing($id_ebay_design,$user_id)
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user'=>$user_id
            );
           $query = $this->db->get_where('specials_listings', $data);  
           $this->db->order_by('id_special_listing', 'DESC');
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
    function get_special_listing_with_id($id_featured_listing)
    {
        $data = array
        (
        'id_special_listing' => $id_featured_listing    
        );
        $query = $this->db->get_where('specials_listings', $data);  
        return $query->result(); 
     }
     
     function add_special_listing($id, $id_ebay_design,$title,$price,$sale_price,$link,$image_url,$user_id)
    {
        if($this->exist_special_listing($id_ebay_design,$title,$price,$image_url) < 1):
            if($image_url=="ignore")
            {
                  $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'title' => $title,
            'price' => $price,
            'sale_price' => "{$sale_price}",
            'link'=>$link,
            'id_user'=>$user_id,
            'status' => 'Active'   
            ); 
            }
            else
            {
                     $data = array
            (
            'id_ebay_design' => $id_ebay_design,
             'title' => $title,
             'price' => $price,
                         'sale_price' => "{$sale_price}",
            'image_url' => $image_url,
                'link'=>$link,
                'id_user'=>$user_id,
                'status' => 'Active'   
            ); 
            }
             if ( $id )
      {
        $this->db->where('id_special_listing', $id );
        $this->db->update('specials_listings', $data );
      } else {
        $this->db->insert('specials_listings', $data);
      }
       return TRUE ;
       else:
           return false;
        endif;
    }
         public function delete_special_listing($id_featured_listing)
    {
      $this->db->where('id_special_listing', $id_featured_listing)->delete('specials_listings');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    
    function exist_special_listing($id_ebay_design,$title,$price,$image_url)
      {
         $data = array
            (
            'id_ebay_design' => $id_ebay_design,
             'title' => $title,
             'price' => $price,
            'image_url' => $image_url      
            );
         
           $query = $this->db->get_where('specials_listings', $data);  
           return $query->num_rows(); 
      }
      
      public function update_special_listing($id_featured_listing,$title,$price,$sale_price,$link,$image_url)
    {
          /*not-defined value is a flag to know if is necessary update listing image url*/
          /*search in ebay_template.js*/
          if($image_url != "not-defined"):
              $data0 = array
                (
                "id_special_listing" => $id_featured_listing,
                "title" => $title,
                "price" => $price,
               'sale_price' => "{$sale_price}",
               "link" => $link,
                "image_url" => $image_url,
                );
          $this->db->where('id_special_listing', $id_featured_listing);
          $this->db->update('specials_listings', $data0);
              else:
                  $data1 = array
                (
                "id_special_listing" => $id_featured_listing,
                "title" => $title,
                       "link" => $link,
                "price" => $price,
                      'sale_price' => "{$sale_price}",
                      
                );
            $this->db->where('id_special_listing', $id_featured_listing);
            $this->db->update('specials_listings', $data1);
        endif;        
    }  
    
      public function change_status_to($id_featured_listing, $new_status)
    {
      $data = array( "status" => $new_status);
      $this->db->where('id_special_listing', $id_featured_listing);
      $this->db->update('specials_listings', $data);   
    }
    

    
    /*
      function get_logo($id_user,$id_design)
      {
            $data = array
            (
            'id_user' => $id_user,
            'id_design' => $id_design
            );
           $query = $this->db->get_where('logo_design', $data);  
         if($query->num_rows()>0)
         {
            $array = $query->result();  
           /*  foreach ($array as $row)
            {
                return $row->logo_url;
            }*/
         /*    return $array;
         }
         else
             return false;
      }
    
	 

	 public function get_banners_user($id_user)
      {
            $data = array
            (
            'id_user' => $id_user
          
            );
           $query = $this->db->get_where('banners_design', $data);  
         if($query->num_rows()>0)
         {
            $array = $query->result();  
           /*  foreach ($array as $row)
            {
                return $row->logo_url;
            }*/
          /*   return $array;
         }
         else
             return false;
      }

    /*
    function insert_configuration($configuration_name,$configuration_value,$configuration_key)
    {
        if($this->exist_configuration($configuration_key) < 1):
            $data = array(
            'name' => $configuration_name,
            'key' => $configuration_key,
            'value' => $configuration_value,            
        );
      return $this->db->insert('system_configuration', $data);
        endif;
    }
     function get_configuration_data()
      {
        $query = $this->db->get('system_configuration'); 
        return $query->result(); 
      } 
     function exist_configuration($key)
      {
           $query = $this->db->get_where('system_configuration', array('key' => $key));  
           return $query->num_rows(); 
      }
   public function update_name($id, $name)
    {
      $data = array( "name" => $name);
      $this->db->where('id_configuration', $id);
      $this->db->update('system_configuration', $data);   
    }
    public function update_key($id, $key)
    {
      $data = array( "key" => $key);
      $this->db->where('id_configuration', $id);
      $this->db->update('system_configuration', $data);  
    }
    public function update_value($id, $value)
    {
      $data = array( "value" => $value);
      $this->db->where('id_configuration', $id);
      $this->db->update('system_configuration', $data);   
    }
    public function delete_configuration($id)
    {
      $this->db->where('id_configuration', $id)->delete('system_configuration');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    public function get_configuration_value($key)
    {
        $query = $this->db->get_where('system_configuration', array('key' => $key));  
        $array = $query->result();  
        foreach ($array as $row)
        {
            return $row->value;
        }
    }*/
}