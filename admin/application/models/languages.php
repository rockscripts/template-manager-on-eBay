<?php



class Languages extends CI_Model 

{  
    public function get_rows($id_user, $id_ebay_design)
    {
        $data = array
                (
                'id_ebay_design' => $id_ebay_design,
                'id_user' => $id_user
                );
               $query = $this->db->get_where('languages_translator', $data);  
             if($query->num_rows()>0)
                 return $query->result();       
             else
                 return false;
    }
    public function get_row($id_language_translator)
    {
        $data = array
                (
                'id_language_translator' => $id_language_translator
                );
               $query = $this->db->get_where('languages_translator', $data);  
             if($query->num_rows()>0)
                 return $query->row_array();       
             else
                 return false;
    }
    public function add_row($data, $id_user, $id_ebay_design)
    {
        $data["id_user"] = $id_user;
        $data["id_ebay_design"] = $id_ebay_design;
        if(!$this->exist_row($data['constant'], $id_user, $id_ebay_design)):
          return $this->db->insert('languages_translator', $data); 
        endif;
    }
    public function update_row($data, $id_user, $id_ebay_design)
    {
        $data["id_user"] = $id_user;
        $data["id_ebay_design"] = $id_ebay_design;
        if($this->exist_row($data['constant'], $id_user, $id_ebay_design)):
            $this->db->where(array("id_user"=>$id_user, "id_ebay_design"=>$id_ebay_design,"id_language_translator"=>$data["id_language_translator"])); 
            return $this->db->update('languages_translator', $data); 
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
    public function delete_row($id_row)
    {
         $this->db->where('id_language_translator', $id_row)->delete('languages_translator');
         return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function update_main_language($main_language, $id_user, $id_ebay_design)
    {
        $this->db->where(array("id_user"=>$id_user, "id_ebay_design"=>$id_ebay_design)); 
        return $this->db->update('store_settings', array("language"=>$main_language));  
    }
    
    
} 