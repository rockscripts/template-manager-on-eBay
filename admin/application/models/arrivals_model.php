<?php
class Arrivals_model extends CI_Model 
{ 
     function get_arrival_listing($id_ebay_design,$user_id)
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user'=>$user_id
            );
        $this->db->order_by('id_arrival_listing', 'DESC');
           $query = $this->db->get_where('arrivals_listings', $data);  
           
         if($query->num_rows()>0)
             return $query->result();       
         else
             return false;
    }
    function get_arrival_listing_with_id($id_featured_listing)
    {
        $data = array
        (
        'id_arrival_listing' => $id_featured_listing    
        );
        $query = $this->db->get_where('arrivals_listings', $data);  
        return $query->result(); 
     }
     
     function add_arrival_listing($id, $id_ebay_design,$title,$price,$link,$image_url,$user_id)
    {
        if($this->exist_arrival_listing($id_ebay_design,$title,$price,$image_url) < 1):
            if($image_url=="ignore")
            {
                  $data = array
            (
            'id_ebay_design' => $id_ebay_design,
             'title' => $title,
             'price' => $price,
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
            'image_url' => $image_url,
                'link'=>$link,
                'id_user'=>$user_id,
                'status' => 'Active'   
            ); 
            }
             if ( $id )
      {
        $this->db->where('id_arrival_listing', $id );
        $this->db->update('arrivals_listings', $data );
      } else {
        $this->db->insert('arrivals_listings', $data);
      }
       return TRUE ;
       else:
           return false;
        endif;
    }
         public function delete_arrival_listing($id_featured_listing)
    {
      $this->db->where('id_arrival_listing', $id_featured_listing)->delete('arrivals_listings');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    
    function exist_arrival_listing($id_ebay_design,$title,$price,$image_url)
      {
         $data = array
            (
            'id_ebay_design' => $id_ebay_design,
             'title' => $title,
             'price' => $price,
            'image_url' => $image_url      
            );
         
           $query = $this->db->get_where('arrivals_listings', $data);  
           return $query->num_rows(); 
      }
      
      public function update_featured_listing($id_featured_listing,$title,$price,$link,$image_url)
    {
          /*not-defined value is a flag to know if is necessary update listing image url*/
          /*search in ebay_template.js*/
          if($image_url != "not-defined"):
              $data0 = array
                (
                "id_featured_listing" => $id_featured_listing,
                "title" => $title,
                "price" => $price,
               "link" => $link,
                "image_url" => $image_url,
                );
          $this->db->where('id_featured_listing', $id_featured_listing);
          $this->db->update('feature_listings', $data0);
              else:
                  $data1 = array
                (
                "id_featured_listing" => $id_featured_listing,
                "title" => $title,
                       "link" => $link,
                "price" => $price
                      
                );
            $this->db->where('id_featured_listing', $id_featured_listing);
            $this->db->update('feature_listings', $data1);
        endif;        
    }  
    
      public function change_status_to($id_featured_listing, $new_status)
    {
      $data = array( "status" => $new_status);
      $this->db->where('id_featured_listing', $id_featured_listing);
      $this->db->update('feature_listings', $data);   
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