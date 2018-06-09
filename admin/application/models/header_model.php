<?php
class Header_model extends CI_Model 
{ 
     function insert_logo_design($id_user,$id_ebay_design,$id_home_design,$logo_url)
    {
        if($this->exist_logo($id_user,$id_ebay_design,$id_home_design) < 1):
            $data = array
            (
            'id_user' => $id_user,
            'id_ebay_design' => $id_ebay_design,
            'id_home_design' => $id_home_design,
           "logo_url" =>$logo_url
            );
       return $this->db->insert('logo_design', $data);
        endif;
    }
     public function update_logo($id_logo, $logo_url)
    {
      $data = array( "logo_url" => $logo_url);
      $this->db->where('id_logo', $id_logo);
      $this->db->update('logo_design', $data);   
    }
    function exist_logo($id_user,$id_ebay_design,$id_home_design)
      {
        $data = array
            (
            'id_user' => $id_user,
            'id_ebay_design' => $id_ebay_design,
            'id_home_design' => $id_home_design,
            );
         
           $query = $this->db->get_where('logo_design', $data);  
           return $query->num_rows(); 
      }
        function get_old_logo($id_logo)
      {
            $data = array
            (
            'id_logo' => $id_logo    
            );
            $query = $this->db->get_where('logo_design', $data);  
            return $query->result(); 
      }
        
      function get_logo($id_user,$id_ebay_design,$id_home_design)
      {
            $data = array
            (
            'id_user' => $id_user,
            'id_ebay_design' =>$id_ebay_design,
            'id_home_design' =>$id_home_design    
            );
           $query = $this->db->get_where('logo_design', $data);  
         if($query->num_rows()>0)
         {
            $array = $query->result();  
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
                return $row->logo_url;
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