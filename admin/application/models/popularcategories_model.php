<?php
class Popularcategories_model extends CI_Model 
{ 
  

    function get_popular_categories ($id_ebay_design,$user_id )
    {
        $data = array
            (
            'id_ebay_design' => $id_ebay_design,
            'id_user' => $user_id
            );
           $query = $this->db->get_where('popular_categories', $data);  
         if($query->num_rows()>0)   
            return $query->result();
         else
             return array();
    }
    public function save_popular_categories( $id , $title , $link , $image_url ,$id_ebay_design,$user_id)
    {
if($image_url=="ignore")
{
   $data = array(
         'name'=> $title,
         'link'=> $link,
         'id_ebay_design' => $id_ebay_design,
         'id_user' =>$user_id
      );  
}
else
{
       $data = array(
         'name'=> $title,
         'link'=> $link,
         'image_url'=> $image_url,
         'id_ebay_design' => $id_ebay_design,
         'id_user' =>$user_id
      );
}
     

      if ( $id )
      {
        $this->db->where('id_popular_category', $id );
        $this->db->update('popular_categories', $data );
      } else {
        $this->db->insert('popular_categories', $data);
      }
        
      return TRUE ;
    }
        public function get_popular_category($id_popular_category)
    {
      $query = $this->db->get_where('popular_categories',array('id_popular_category'=>$id_popular_category) );
      return $query->result();
    }
 public function delete_popular_category($id_popular_category)
    {
      $this->db->where('id_popular_category', $id_popular_category)->delete('popular_categories');
      
      return ($this->db->affected_rows() > 0) ? TRUE : FALSE;  
    }
}