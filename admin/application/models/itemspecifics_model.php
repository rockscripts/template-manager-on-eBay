<?php
class Itemspecifics_model extends CI_Model 
{
    public function import_items_specifics($data)
    {
     if(!$this->exist_item_specifics($data["name"], $data["id_ebay_design"], $data["id_user"])):
           $this->db->insert('widget_items_specifics', $data);
        else:
            //do nothing
        endif;   
    }
    
    public function import_items_specifics_values($data)
    {        
        if(!$this->exist_item_specific_value($data["name"], $data["value"], $data["id_ebay_design"], $data["id_user"])):
           $this->db->insert('widget_items_specifics_values', $data);
        else:
            //do nothing
        endif;
    }
     public function exist_item_specifics($name, $id_ebay_design, $id_user)
    {
         $query = $this->db->get_where('widget_items_specifics', array('name' => $name,'id_ebay_design' => $id_ebay_design,'id_user' => $id_user) );       
         if($query->num_rows()>0 ):
             return true;
         else:
             return false;
         endif;
    }
    public function get_item_specifics($id_ebay_design,$id_user)
    {
      $query = $this->db->get_where('widget_items_specifics', array('id_ebay_design' => $id_ebay_design,'id_user' => $id_user) );       
         if($query->num_rows()>0 ):
             return $query->result();
         else:
             return false;
         endif;  
    }
     public function get_active_item_specifics($id_ebay_design,$id_user)
    {
      $query = $this->db->order_by("name", "asc")->get_where('widget_items_specifics', array('id_ebay_design' => $id_ebay_design,'id_user' => $id_user,'is_active' => "true") );;       
         if($query->num_rows()>0 ):
             return $query->result();
         else:
             return false;
         endif;  
    }
    public function exist_item_specific_value($name, $value, $id_ebay_design, $id_user)
    {
         $query = $this->db->get_where('widget_items_specifics_values', array('name' => $name,'value' => $value,'id_ebay_design' => $id_ebay_design,'id_user' => $id_user) );       
         if($query->num_rows()>0 ):
             return true;
         else:
             return false;
         endif;
    }
    public function get_item_specific_values($specific_name, $id_ebay_design, $id_user)
    {
         $query = $this->db->order_by("value", "asc")->get_where('widget_items_specifics_values', array('name' => $specific_name,'id_ebay_design' => $id_ebay_design,'id_user' => $id_user) );       
         if($query->num_rows()>0 ):
              return $query->result();
         else:
             return false;
         endif;
    }
    public function active_variation_specific($specific_id, $status)
    {
      $this->db->where('id_widget_items_specifics', $specific_id);
      $this->db->update('widget_items_specifics', array('is_active'=>"$status") );
    }
    public function update_custom_name($specific_id,$custom_name)
    {
      $this->db->where('id_widget_items_specifics', $specific_id);
      $this->db->update('widget_items_specifics', array('custom_name'=>"$custom_name") );   
    }
    public function delete_specifics($specific_id)
    {
      $this->db->where('id_widget_items_specifics', $specific_id)->delete('widget_items_specifics');
              
    }
    public function delete_specific_values( $specific_name, $user_id, $id_ebay_design)
    {
      $this->db->where(array('name' => $specific_name,'id_ebay_design' => $id_ebay_design,'id_user' => $user_id))->delete('widget_items_specifics_values');              
    }
}