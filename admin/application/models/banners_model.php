<?php
class Banners_model extends CI_Model 
{ 
     function insert_banners_design($id_user,$id_design,$banner_url)
    {
        if($this->exist_logo($id_user,$id_design) < 1):
            $data = array
            (
            'id_user' => $id_user,
            'id_design' => $id_design,
           "banner_url" =>$banner_url
            );
       return $this->db->insert('banners_design', $data);
        endif;
    }
     public function update_logo($id_banner, $banner_url)
    {
      $data = array( "banner_url" => $banner_url);
      $this->db->where('id_banner', $id_banner);
      $this->db->update('banners_design', $data);   
    }
    function exist_logo($id_user,$id_design)
      {
         $data = array
            (
            'id_user' => $id_user,
            'id_design' => $id_design      
            );
         
           $query = $this->db->get_where('banners_design', $data);  
           return $query->num_rows(); 
      }
        function get_old_logo($id_banner)
      {
            $data = array
            (
            'id_banner' => $id_banner    
            );
            $query = $this->db->get_where('banners_design', $data);  
            return $query->result(); 
      }
        
      function get_logo($id_user,$id_design)
      {
            $data = array
            (
            'id_user' => $id_user,
            'id_design' => $id_design
            );
           $query = $this->db->get_where('banners_design', $data);  
         if($query->num_rows()>0)
         {
            $array = $query->result();  
           /*  foreach ($array as $row)
            {
                return $row->banner_url;
            }*/
             return $array;
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
                return $row->banner_url;
            }*/
             return $array;
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