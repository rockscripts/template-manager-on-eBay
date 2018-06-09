<?php
class Configuration_model extends CI_Model 
{  
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
    }
}