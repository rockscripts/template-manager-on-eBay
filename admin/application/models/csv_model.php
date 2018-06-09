<?php



class Csv_model extends CI_Model 

{  
      function get_template($id)

      {

        $query = $this->db->get_where('listign_design', array('id' => $id)); 

        return $query->result();   

      }
      function insert_listing($id_listing_design, $final_template,$title)

      {
     if($this->exist_listing($title)==0): 
         $data = array(
            'id_listing_design' => $id_listing_design,
            'html_code' => $final_template,
            'listing_title' => $title,
            
        );
      return $this->db->insert('templates_generated', $data);  
     endif;
       

      }
      function exist_listing($tilte)
      {
           $query = $this->db->get_where('templates_generated', array('listing_title' => $tilte));  

        return $query->num_rows(); 
      }
function get_templates_generated($id)

      {

        $query = $this->db->get_where('templates_generated', array('id_listing_design' => $id)); 

        return $query->result();   

      }
  function get_template_generated($id)

      {

        $query = $this->db->get_where('templates_generated', array('id_design_generated' => $id)); 

        return $query->result();   

      }
       function new_tpl($code)
      {
        $data = array(
            'html_code' => $code
        );
        return $this->db->insert('listign_design', $data);
      }
      function delete_all_listings_generated($id)
      {
          $this->db->where('id_listing_design', $id)->delete('templates_generated');

        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
      }
        function delete_listing_generated($id)
      {
          $this->db->where('id_design_generated', $id)->delete('templates_generated');

        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
      }
       function check_if_exist_description_value($column_name,$field_name_configuration)
      {
           $query = $this->db->get_where('csv_importing', array( $column_name => "$field_name_configuration"));  
           return $query->num_rows();           
      }
      function set_template_to_description_field($id, $field_name, $final_template)
      {
          //echo "listing id = ".$id." |||| column name;".$field_name;
          $data = array( $field_name => $final_template);
          $this->db->where('id', $id);
          $this->db->update('csv_importing', $data); 
      }
      function get_header_titles_csv()
      {
        /*Get row with id 1.... When csv file import into database it generates an auto id = 1*/
        $query = $this->db->query("select * from csv_importing where id = 1 ");
        return $query->result_array();   
      }
      function get_csv_data_from_dynamiic_table()
      {
        $query = $this->db->query("select * from csv_importing where id>1");
        return $query->result_array();  
      }
    
} 