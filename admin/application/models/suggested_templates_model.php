<?php
class Suggested_templates_model extends CI_Model 
{ 
  public function get_suggested_templates()
   {
      $this->db->select('*');
      $this->db->from('suggested_template_categories');
      $this->db->join('suggested_templates', 'suggested_template_categories.id_suggested_template_category = suggested_templates.id_suggested_template_category');
      $query = $this->db->get();
      if($query->num_rows()>0)
                 return $query->result();       
             else
                 return false;
   }
   public function get_suggested_templates_categories()
   {
      
      $query = $this->db->get("suggested_template_categories");
      if($query->num_rows()>0)
                 return $query->result();       
             else
                 return false;
   }
   public function get_suggested_template($suggested_template)
    {
      $query = $this->db->get_where('suggested_templates',array('id_suggested_template'=>$suggested_template) );
      return $query->result();
    }
    public function get_suggested_template_details($suggested_template)
    {
        $query = $this->db->get_where('suggested_templates',array('id_suggested_template'=>$suggested_template) );
        if($query->num_rows()>0) {
            $result = $query->result();       
            return $result[0] ;
         }
         else
             return false;
    }

    public function get_suggested_templates_by_category($category_id)
    {
      $query = $this->db->get_where('suggested_templates',array('id_suggested_template_category'=>$category_id) );
      return $query->result();
    }
  public function save_suggested_templates($information)
    {
          $data = array
           (
           'name' => $information["name"],
           'url_image' => $information["url_image"],
           'link' => $information["link"]
           );
      if($information["id_suggested_template"]==0 or $information["id_suggested_template"] ==""):
          $this->db->insert('suggested_templates', $data); 
          else:             
            $condition =  array
             (
              'id_suggested_template' => $information["id_suggested_template"],
             );
          if($information["url_image"] == "ignore"):
            $data = array
           (
           'name' => $information["name"],
           'link' => $information["link"]
           );  
          endif;
          
            $this->db->where($condition);
            $this->db->update('suggested_templates', $data);    
         endif;             
    }
    
     public function delete_suggested_template($id_suggested_template)
    {
      $this->db->where('id_suggested_template', $id_suggested_template)->delete('suggested_templates');
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
    
   
}