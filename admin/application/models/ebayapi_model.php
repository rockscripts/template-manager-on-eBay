<?php
class Ebayapi_model extends CI_Model 
{ 
    
    function get_global_sites()
    {       
         $query = $this->db->order_by('ebay_siteid', 'asc')->get('ebayglobal'); 
         if($query->num_rows()>0):
          return $query->result();                   
       else:
           return false;
       endif;
    }
    function get_global_site($site_id)
    {
        $data = array("ebay_siteid"=>$site_id);
         $query = $this->db->get_where('ebayglobal',$data); 
         if($query->num_rows()>0):
             $row = $query->result();
          return $row[0];                   
       else:
           return false;
       endif;
    }
    public function insert_new_istallation($id_user, $information)
    {
        if($this->exist_installation_with_out_successful_installation($id_user))
        {
            $this->delete_installation($id_user); 
        }
        if(!$this->exist_installation($id_user))
        $this->db->insert('installation_wizard', $information); 
        else
        $this->update_installation($id_user, $information);                   
    }
    
    public function update_installation($id_user, $information)
    {
        if($this->exist_installation($id_user)){           
            $this->db->where('user_id', $id_user);
             $this->db->update('installation_wizard', $information); 
        } 
    }
    public function delete_installation($id_user)
    {
        $condition = array("user_id"=>$id_user,"installed"=>"false");
        $this->db->where($condition);
        $this->db->delete('installation_wizard');      
        ;
    }
     public function exist_installation_with_out_successful_installation($id_user)
    {
        $data = array
                (
                'user_id' => $id_user,
                'installed' => "false"
                );
               $query = $this->db->get_where('installation_wizard', $data);  
             if($query->num_rows()>0)
                 return true;
             else
                 return false;
    }
    public function exist_installation($id_user)
    {
        $data = array
                (
                'user_id' => $id_user
                );
               $query = $this->db->get_where('installation_wizard', $data);  
             if($query->num_rows()>0)
                 return true;
             else
                 return false;
    }
    
    function get_installation_wizard($user_id)
    {
        $data = array("user_id"=>$user_id);
        $query = $this->db->get_where('installation_wizard',$data); 
         if($query->num_rows()>0):
             $row = $query->result();
          return $row[0];                   
       else:
           return false;
       endif;
    }
   public function backup_store_front($store_backup)
   {       
        $this->db->insert('backup_store_front', $store_backup); 
   }
   /***********SELLSER LIST****************/
   public function get_seller_list($user_id,$id_ebay_design)
   {
      $data = array("user_id"=>$user_id,"id_ebay_design"=>$id_ebay_design);
        $query = $this->db->get_where('seller_list',$data); 
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
   }
   public function get_seller_list_unimported($user_id,$id_ebay_design)
   {
      $data = array("user_id"=>$user_id,"id_ebay_design"=>$id_ebay_design,"status"=>"false");
        $query = $this->db->get_where('seller_list',$data); 
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
   }
   public function import_seller_list($data)
   {
       if(!$this->seller_item_exist($data["item_id"])):
          $this->db->insert('seller_list', $data); 
       return true;
       else:
           if($this->seller_item_was_deleted($data["item_id"])):
               /*ignore*/
               return false;
               else:
                   $this->seller_item_update($data["item_id"], $data);
                   return true;
           endif;
        endif;
       
   }
     public function seller_item_update($item_id, $data)
   {
        $this->db->where('item_id', $item_id);
        $this->db->update('seller_list', $data); 
   }
     public function update_import_status($item_id, $status)
   {
        $this->db->where('item_id', $item_id);
        $this->db->update('seller_list', array("status"=>$status)); 
   }
   
   public function reset_sold_items($id_user, $id_ebay_design)
   {
       $data = array("is_sold"=> "false");
       $condition= array
                (
                'user_id' => $id_user,
                'id_ebay_design' => $id_ebay_design
                );
        $this->db->where($condition);
        $this->db->update('seller_list', $data); 
   }
    public function classified_sold_items($item_id)
    {
        $data = array("is_sold"=> "true");
        $this->db->where('item_id', $item_id);
        $this->db->update('seller_list', $data); 
    }
    public function reset_unsold_items($id_user, $id_ebay_design)
   {
       $data = array("is_unsold"=> "false");
       $condition= array
                (
                'user_id' => $id_user,
                'id_ebay_design' => $id_ebay_design
                );
        $this->db->where($condition);
        $this->db->update('seller_list', $data); 
   }
    public function classified_unsold_items($item_id)
    {
        $data = array("is_unsold"=> "true");
        $this->db->where('item_id', $item_id);
        $this->db->update('seller_list', $data); 
    }
    public function classified_deleted_items($item_id)
    {
        $data = array("is_deleted_permanently"=> "true");
        $this->db->where('item_id', $item_id);
        $this->db->update('seller_list', $data); 
    }
   /***********EBAY ITEM****************/
    public function item_get($item_id)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('seller_list');
      $this->db->join('item', 'seller_list.item_id = item.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
       $data = array
            (
             "item.ItemID"=>$item_id
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             $result = $query->result();       
            return $result[0];                           
       else:
           return false;
       endif;  
     }
   public function get_all_items($id_user,$id_ebay_design)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('seller_list');
      $this->db->join('item', 'seller_list.item_id = item.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
      $data = array
            (
             'seller_list.user_id' => $id_user,
             'seller_list.id_ebay_design' => $id_ebay_design,
            );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
     }
     public function get_active_items($id_user,$id_ebay_design)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('item use index (ItemID)');
      $this->db->join('seller_list', 'seller_list.item_id = item.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
       $data = array
            (
             'is_deleted_permanently' => "false",
             'ListingStatus' => "Active",
             'seller_list.user_id' => $id_user,
             'seller_list.id_ebay_design' => $id_ebay_design,
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
     }
     public function get_sold_items($id_user,$id_ebay_design)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('seller_list');
      $this->db->join('item', 'seller_list.item_id = item.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
       $data = array
            (
             'is_deleted_permanently' => "false",
             'is_sold' => "true",
             'seller_list.id_ebay_design' => $id_user,
             'seller_list.id_ebay_design' => $id_ebay_design,
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
     }
     public function get_unsold_items($id_user,$id_ebay_design)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('seller_list');
      $this->db->join('item', 'seller_list.item_id = item.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
       $data = array
            (
             'is_deleted_permanently' => "false",
             'is_unsold' => "true",
             'seller_list.id_ebay_design' => $id_user,
             'seller_list.id_ebay_design' => $id_ebay_design,
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
     }
     public function get_deleted_items($id_user,$id_ebay_design)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('seller_list  use index (item_id)');
      $this->db->join('item', 'seller_list.item_id = item.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
       $data = array
            (
             'is_deleted_permanently' => "true",
             'seller_list.id_ebay_design' => $id_user,
             'seller_list.id_ebay_design' => $id_ebay_design,
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
     }
     public function get_prepared_items($id_user,$id_ebay_design)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('item_prepared');
      $this->db->join('seller_list', 'seller_list.item_id = item_prepared.ItemID');
      $this->db->join('item_pictures', 'seller_list.item_id = item_pictures.item_id');
       $data = array
            (
             'seller_list.id_ebay_design' => $id_user,
             'seller_list.id_ebay_design' => $id_ebay_design,
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             return $query->result();                            
       else:
           return false;
       endif;  
     }
    public function import_item($data)
   {
       if(!$this->item_exist($data["ItemID"])):
          $this->db->insert('item', $data); 
       return true;
       else:
           if($this->seller_item_was_deleted($data["ItemID"])):
              // $this->item_delete($data["item_id"]);
               return false;
               else:
                   /*run update*/
                   $this->item_update($data["ItemID"], $data);
                   return "updated"; 
           endif;
        endif;       
   }
      public function item_exist($item_id)
    {
        $data = array
                (
                'ItemID' => $item_id
                );
               $query = $this->db->get_where('item', $data);  
             if($query->num_rows()>0)
                 return true;
             else
                 return false;
    }
   public function item_update($item_id, $data)
   {
        $this->db->where('ItemID', $item_id);
        $this->db->update('item', $data); 
   }
   public function item_delete($item_id)
   {
        $condition = array("ItemID"=>$item_id);
        $this->db->where($condition);
        $this->db->delete('item'); 
   }
   public function item_picture_import($id_user,$item_id, $item_picture_url)
   {
       $data= array("item_id"=>$item_id,"picture_url"=>$item_picture_url,"id_user"=>$id_user);
            if(!$this->item_picture_exist($item_id,$item_picture_url )):            
                $this->db->insert('item_pictures', $data); 
             return true;
            endif;
           if($this->seller_item_was_deleted($item_id)):
               $this->item_picture_delete($item_id);
               return false;
               else:
                   /*ignore, update query have not sense, it supose it exist!*/
                   return true;
     
        endif;   
   }
      public function item_picture_import_from_extract($item_id, $item_picture_url)
   {
       $data= array("item_id"=>$item_id,"picture_url"=>$item_picture_url,"from_ebay"=>"false");
            if(!$this->item_picture_exist($item_id,$item_picture_url )):            
                $this->db->insert('item_pictures', $data); 
             return true;
            endif;
           if($this->seller_item_was_deleted($item_id)):
               $this->item_picture_delete($item_id);
               return false;
               else:
                   /*ignore, update query have not sense, it supose it exist!*/
                   return true;
     
        endif;   
   }
   public function item_picture_exist($item_id,$item_picture_url )
   {
      $data = array
                (
                'item_id' => $item_id,
                 'picture_url' => $item_picture_url
                );
               $query = $this->db->get_where('item_pictures', $data);  
             if($query->num_rows()>0)
                 return true;
             else
                 return false; 
   }
   public function item_picture_delete($item_id)
   {
       $condition = array("item_id"=>$item_id,"from_ebay"=>"true");
        $this->db->where($condition);
        $this->db->delete('item_pictures'); 
   }
   public function item_picture_update($item_id, $data)
   {
        $this->db->where('item_id', $item_id);
        $this->db->update('item_pictures', $data); 
   }
   public function item_picture_get($item_id)
   {
         $data = array
                (
                'item_id' => $item_id
                );
               $query = $this->db->get_where('item_pictures', $data);  
             if($query->num_rows()>0)
                  return $query->result(); 
             else
                 return false; 
   }
    public function send_item_to_prepared_items($itemID)
    {
        if(!$this->item_prepared_exist($itemID)):
            $this->db->query("INSERT INTO item_prepared SELECT * FROM item WHERE item.ItemID = ".$itemID);      
        endif;
        
    }
    public function update_item_prepared_description($itemID,$description)
    {
        $data = array("Description"=>$description);
        $this->db->where('ItemID', $itemID);
        $this->db->update('item_prepared', $data); 
    }
     
    public function item_prepared_exist($item_id)
    {
        $data = array
                (
                'ItemID' => $item_id
                );
               $query = $this->db->get_where('item_prepared', $data);  
             if($query->num_rows()>0)
                 return true;
             else
                 return false;
    }
    /*prepared items*/
    public function item_delete_prepared_item($item_id)
   {
        $condition = array("ItemID"=>$item_id);
        $this->db->where($condition);
        $this->db->delete('item_prepared'); 
   }
     public function item_prepared_get($item_id)
     {
      $this->db->select('DISTINCT *',false);
      $this->db->group_by("seller_list.item_id");
      $this->db->from('seller_list');
      $this->db->join('item_prepared', 'seller_list.item_id = item_prepared.ItemID');
       $data = array
            (
             "item_prepared.ItemID"=>$item_id
         );
      $this->db->where($data);  
      $query = $this->db->get();
      //echo $this->db->last_query(); die("****");
         if($query->num_rows()>0):
             $result = $query->result();       
            return $result[0] ;                           
       else:
           return false;
       endif;  
     }
     
   /******************************IMPORT SELLER LIST*********************************/
   public function seller_item_delete($item_id)
   {
        $condition = array("item_id"=>$item_id);
        $this->db->where($condition);
        $this->db->delete('seller_list'); 
   }
   public function seller_item_exist($item_id)
    {
       $this->circumvent_MYSQL_GO_EWAY();
        $data = array
                (
                'item_id' => $item_id
                );
               $query = $this->db->get_where('seller_list', $data);  
             if($query->num_rows()>0)
                 return true;
             else
                 return false;
    }
    function circumvent_MYSQL_GO_EWAY()
    {
              $this->load->database();
              $this->db->reconnect();
    }
    public function seller_item_was_deleted($item_id)
    {
        $data = array
                (
                'item_id' => $item_id,
                'is_deleted_permanently' => "true"
                );
               $query = $this->db->get_where('seller_list', $data);  
                if($query->num_rows()>0)
                    return true;
                else
                    return false;
    }
    public function item_update_status($item_id, $status)
    {
        $data = array("ListingStatus"=>$status);
        $this->db->where('ItemID', $item_id);
        $this->db->update('item', $data);
    }
    Public function get_total_items($user_id, $id_ebay_design)
    {
      $data = array
     (
      'user_id' => $user_id,
      'id_ebay_design' => $id_ebay_design
     );  
     $query = $this->db->get_where('seller_list', $data); 
     return $query->num_rows();
    }
    Public function reset_sync($user_id)
    {                     
       $condition = array
        (
         'id_user' => $user_id
        );
       $this->db->where($condition);
       $this->db->delete('item_pictures'); 
       $this->db->where($condition);
       $this->db->delete('item_prepared');
       $this->db->where($condition);
       $this->db->delete('item');
       $condition = array
        (
         'user_id' => $user_id
        );
       $this->db->where($condition);
       $this->db->delete('seller_list');
       
    }
    //*****************ORDERS*************************/
    //Analisis
    public function get_orders()
    {
     $query = $this->db->order_by('QuantityPurchased', 'DESC')->get('orders'); 
         if($query->num_rows()>0):
          return $query->result();                   
       else:
           return false;
       endif;   
    }
    public function import_order($data)
   {
       $order = $this->order_item_exist($data["Title"]);
       if(!$order):
          $this->db->insert('orders', $data); 
       return true;
       else:
           
           //update quantity purchased
        $new = $data["QuantityPurchased"];
        $data["QuantityPurchased"] = $order->QuantityPurchased + $data["QuantityPurchased"];
        echo $data["Title"]."<br>-----------<br>";
        echo "new: ".$new." --- old: ".$order->QuantityPurchased." --- total: ".$data["QuantityPurchased"];
        echo "<br><br>";
        $data1 = array("QuantityPurchased"=>$data["QuantityPurchased"]);
        $this->db->where('Title', $data["Title"]);
        $this->db->update('orders', $data1);
        return true;
        endif;       
   }
    public function order_item_exist($title)
    {
        $data = array
                (
                'Title' => $title
                );
               $query = $this->db->get_where('orders', $data);  
             if($query->num_rows()>0)
                 return $query->row();
             else
                 return false;
    }
}