<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login_model extends CI_Model {



    public function __construct() 
            {

        parent::__construct();

    }

    

    /**

     *

     * validate_login: check login data against database information

     *

     * @param string $username the username to be validated

     * @param string $password the password to be validated

     * @return mixed

     *

     */



    public function validate_login($username, $password) {


        $this->load->helper('password');



        $this->db->select('id, username, password, date_registered, nonce, role_id, active, banned, login_attempts');

        $this->db->from('user');

        $this->db->where('username', $username);

        $this->db->limit(1);



        $query = $this->db->get();



        if($query->num_rows() == 1) {

           $row = $query->row();



           // check for password match based on password_helper.php

           if ($row->banned == 1) {

               return "banned";

           }elseif (hash_password($password, $row->nonce) == $row->password) {

               $array['username'] = $row->username;

               $array['date_registered'] = $row->date_registered;

               $array['role_id'] = $row->role_id;

               $array['active'] = $row->active;

               $array['nonce'] = $row->nonce;

               $array['id'] = $row->id;

               // update last login on successful login

               $array['cookie_part'] = $this->_update_last_login($username);

               return $array;

           }else{

               // login attempts +1 because login failed

               $this->_increase_login_attempts($username);

               return ($row->login_attempts + 1);

           }

        }



        return false;

    }



    /**

     *

     * _update_last_login: update the last time the member logged in

     *

     * @param string $username the username to be validated

     * @return boolean

     *

     */



    private function _update_last_login($username) {

        $cookie_part = md5(uniqid(mt_rand(), true));

        $this->db->set('last_login', 'NOW()', FALSE);

        $this->db->where('username', $username);

        $this->db->update('user', array('cookie_part' => $cookie_part));



        if ($this->db->affected_rows() == 1) {

            return $cookie_part;

        }

        return false;

    }



    /**

     *

     * _increase_login_attempts: add +1 to login attempts for member

     *

     * @param string $username the username to be validated

     * @return boolean

     *

     */



    private function _increase_login_attempts($username) {

        $this->db->set('login_attempts', 'login_attempts + 1', FALSE);

        $this->db->where('username', $username);

        $this->db->update('user');



        if ($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



    /**

     *

     * reset_login_attempts: bring login attempts back to 0

     *

     * @param string $username the username to be validated

     * @return boolean

     *

     */



    public function reset_login_attempts($username) {

        $this->db->where('username', $username);

        $this->db->update('user', array('login_attempts' => 0));

    }
 public function exist_user($username) {
        $db = $this->load->database('default', TRUE); 
        $this->db->where('username', $username);
        $query = $this->db->get('user');
         if($query->num_rows()>0)
          return true;     
       else
           return false;
    }
     public function check_if_store_is_installed($user_id) {
        $db = $this->load->database('default', TRUE); 
        $condition = array('id_user'=>$user_id, 'is_installed'=>'true');
        $this->db->where($condition);
        $query = $this->db->get('store_settings');
         if($query->num_rows()>0)
          return true;     
       else
           return false;
    }
     public function check_if_design_was_added_before($user_id) {
        $db = $this->load->database('default', TRUE); 
        $condition = array('id_user'=>$user_id);
        $this->db->where($condition);
        $query = $this->db->get('ebay_design');
         if($query->num_rows()>0)
          return true;     
       else
           return false;
    }
     public function get_id_ebay_design($user_id) {
        $db = $this->load->database('default', TRUE); 
        $condition = array('id_user'=>$user_id);
        $this->db->where($condition);
        $query = $this->db->get('ebay_design');
         if($query->num_rows()>0):
              foreach ($query->result() as $ebay_design):
             return $ebay_design->id_ebay_design;
              endforeach;             
       else:
           return false;
         endif;
    }
         public function get_user_data_session_required($user_id,$id_ebay_design) 
                {
        $db = $this->load->database('default', TRUE); 
        $condition = array('id_user'=>$user_id,'id_ebay_design'=>$id_ebay_design);
        $this->db->where($condition);
        $query = $this->db->get('ebay_design'); 
         if($query->num_rows()>0):
            $result = $query->result();       
            return $result[0] ;       
       else: 
           return false;
         endif;
    }
     public function update_home_design_hosting_client_urls($id_home_design,$hosting_client_URL,$client_hosting_ajax_files) 
     {
        $db = $this->load->database('default', TRUE); 
        $condition = array('id_home_design'=>$id_home_design);
        $this->db->where($condition);
        $query = $this->db->get('home_design');
         if($query->num_rows()>0):
              foreach ($query->result() as $home_design):
              $header_code = $home_design->header_code;
              $header_code = str_replace("[HOSTING_URL]",$hosting_client_URL,$header_code);
              $header_code = str_replace("[HOSTING_AJAX_DESIGN_FILES]",$client_hosting_ajax_files,$header_code);
              $condition = array('id_home_design'=>$id_home_design);
              $data = array('header_code'=>$header_code);
              $this->db->where($condition);
              $this->db->update('home_design', $data ); 
              endforeach;             
       else:
           return false;
         endif;
    }
     public function update_listing_design_hosting_client_urls($id_listing_design,$hosting_client_URL,$client_hosting_ajax_files) 
     {
        $db = $this->load->database('default', TRUE); 
        $condition = array('id'=>$id_listing_design);
        $this->db->where($condition);
        $query = $this->db->get('listign_design');
         if($query->num_rows()>0):
              foreach ($query->result() as $home_design):
              $header_code = $home_design->html_code;
              $header_code = str_replace("[HOSTING_URL]",$hosting_client_URL,$header_code);
              $header_code = str_replace("[HOSTING_AJAX_DESIGN_FILES]",$client_hosting_ajax_files,$header_code);              
              $condition = array('id'=>$id_listing_design);
              $data = array('html_code'=>$header_code);
              $this->db->where($condition);
              $this->db->update('listign_design', $data ); 
              endforeach;             
       else:
           return false;
         endif;
    }
/*Functions to connect with wordpress database*/
    public function get_customer_by_username($wp_username)
    {
      $array_return = array();
      $rockscripts_db = $this->load->database('rockscripts', TRUE); 
      $query = $rockscripts_db->query("select * from wp_users where user_login='$wp_username'");
      if($query->num_rows()>0)
           foreach ($query->result() as $user):
          $array_return["user_id"] = $user->ID;
          $array_return["user_pass"] = $user->user_pass;
          $array_return["user_email"] = $user->user_email;
          $array_return["first_name"] = $user->user_login;
          $array_return["last_name"] = $user->user_login;
          return $array_return;
      endforeach;          
       else
           return false;
                 
    }
    public function get_customer_orders($wp_userID)
    {
        $rockscripts_db = $this->load->database('rockscripts', TRUE); 
        $query = $rockscripts_db->query("SELECT ID FROM wp_posts
			WHERE post_type = 'shop_order'
			AND ID IN (
				SELECT post_id FROM wp_postmeta
				WHERE meta_key = '_customer_user'
				AND meta_value = '$wp_userID'
			)
			AND ID NOT IN ( 
				SELECT post_id FROM wp_postmeta
				WHERE post_parent <> 0
			)");
        if($query->num_rows()>0)
           return $query->result(); 
       else
           return false;
    }
public function get_active_orders_subscriptions()
{
    $rockscripts_db = $this->load->database('rockscripts', TRUE); 
    $query = $rockscripts_db->query("SELECT meta.*,
       items.*,
       r.renewal_order_count,
       (CASE
            WHEN (r.renewal_order_count > 0) THEN l.last_payment_date
            ELSE o.order_date
        END) AS last_payment_date
FROM `wp_woocommerce_order_itemmeta` AS meta
LEFT JOIN `wp_woocommerce_order_items` AS items USING (order_item_id)
LEFT JOIN
  (SELECT a.order_item_id
   FROM `wp_woocommerce_order_itemmeta` AS a
   LEFT JOIN
     (SELECT `wp_woocommerce_order_itemmeta`.order_item_id
      FROM `wp_woocommerce_order_itemmeta`
      WHERE `wp_woocommerce_order_itemmeta`.meta_key = '_subscription_status'
        AND `wp_woocommerce_order_itemmeta`.meta_value = 'active') AS s USING (order_item_id)
   WHERE 1=1
     AND a.order_item_id = s.order_item_id
     AND a.meta_key = '_subscription_start_date'
   ORDER BY CASE
                WHEN CAST(a.meta_value AS DATETIME) IS NULL THEN 1
                ELSE 0
            END,
            CAST(a.meta_value AS DATETIME) DESC LIMIT 0,
                                                      10) AS a3 USING (order_item_id)
LEFT JOIN
  (SELECT `wp_posts`.post_parent,
          COUNT(`wp_posts`.ID) AS renewal_order_count
   FROM `wp_posts`
   WHERE `wp_posts`.post_parent != 0
     AND `wp_posts`.post_type = 'shop_order'
   GROUP BY `wp_posts`.post_parent) AS r ON r.post_parent = items.order_id
LEFT JOIN
  (SELECT o.ID,
          o.post_date_gmt AS order_date
   FROM `wp_posts` AS o
   WHERE o.post_type = 'shop_order'
     AND o.post_parent = 0) AS o ON o.ID = items.order_id
LEFT JOIN
  (SELECT p.ID,
          p.post_parent,
          MAX(p.post_date_gmt) AS last_payment_date
   FROM `wp_posts` AS p
   WHERE p.post_type = 'shop_order'
     AND p.post_parent != 0
   GROUP BY p.post_parent) AS l ON l.post_parent = items.order_id
WHERE meta.meta_key REGEXP '_subscription_(.*)|_product_id|_variation_id'
  AND meta.order_item_id = a3.order_item_id
");
    $array_active_order_collection = array();
    $i = 0;
      if($query->num_rows()>0):
           foreach ($query->result() as $order):
            if($order->meta_key == "_subscription_status"):
                if($order->meta_value == "active"):
                 $array_active_order_collection[$i]["order_id"] = $order->order_id ;
                 $array_active_order_collection[$i]["order_item_name"] = $order->order_item_name ;
                 $i++;
            endif;
            endif;
        endforeach;
        return $array_active_order_collection;
       else:
           return false;
       endif;
}
public function validate_user_products_for_sections_access($user_active_orders)
{
    if(is_array($user_active_orders)):
        foreach($user_active_orders as $order_id):
        $array_orders_items = $this->get_order_item_id($order_id);
        $user_orders_active_products = $this->get_user_orders_active_products($array_orders_items);
        return $user_orders_active_products;
        endforeach;    
        else:
            return false;
    endif; 
}
public function get_order_item_id($order_id)
{
    $query = "select * from wp_woocommerce_order_items where order_id=$order_id";
    $rockscripts_db = $this->load->database('rockscripts', TRUE); 
    $result = $rockscripts_db->query($query);
    $array_orders_items = array();
    $i = 0;
      if($result->num_rows()>0):
           foreach ($result->result() as $order_item):
                 $array_orders_items[$i]["order_item_id"] = $order_item->order_item_id ;
                 $array_orders_items[$i]["order_item_name"] = $order_item->order_item_name ;
                 $i++;           
        endforeach;
        return $array_orders_items;
       else:
           return false;
       endif;
}
public function get_user_orders_active_products($array_orders_items)
{
    $rockscripts_db = $this->load->database('rockscripts', TRUE); 
    $user_orders_active_products = array();
    if(is_array($array_orders_items)):
        for($i=0;$i<sizeof($array_orders_items);$i++):
         $index=0;
         $order_item_id = $array_orders_items[$i]["order_item_id"] ;
         $order_item_name = $array_orders_items[$i]["order_item_name"];
         $query = "select * from wp_woocommerce_order_itemmeta where order_item_id=$order_item_id";
         $result = $rockscripts_db->query($query);
         if($result->num_rows()>0):     
          
               foreach ($result->result() as $itemmeta):
             if($itemmeta->meta_key=="_product_id"):
                  $user_orders_active_products[$index]["_product_id"] = $itemmeta->meta_value;
             endif;
               if($itemmeta->meta_key=="_variation_id"):
                 $user_orders_active_products[$index]["_variation_id"] = $itemmeta->meta_value;
             endif;                             
               endforeach;                   
         endif;
         $index++;
        endfor;
        return $user_orders_active_products;
        else:        
        return false;      
    endif;
}
}



/* End of file login_model.php */

/* Location: ./application/models/membership/login_model.php */