<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class List_Members_model extends CI_Model {



    public function __construct() {

        parent::__construct();
        $this->load->model('Ebaydesigns_model');
    }


public function get_member($user_name)
{
   $return=array();
   $data = array
    (
     'username' => $user_name
    );
   $query = $this->db->get_where("user",$data);
    if($query->num_rows()>0):
        $result = $query->result(); 
        $return["username"] = $user_name;
        $return["user_id"] = $result[0]->id;
        $return["role_id"] = $result[0]->role_id;
        return $return;       
    else:
        return false; 
    endif;
}
    /**

     *

     * get_members: get the members data

     *

     * @param int $limit db limit (members per page)

     * @param int $offset db offset (current page)

     * @param int $order_by db sort order

     * @param string $sort_order asc or desc

     * @param array $search_data search input

     * @return mixed

     *

     */



    public function get_members($limit = 0, $offset = 0, $order_by = "username", $sort_order = "asc", $search_data) {

        $fields = $this->db->list_fields('user');

        if (!in_array($order_by, $fields)) return array();

        if (!empty($search_data)) {

            !empty($search_data['username']) ? $data['username'] = $search_data['username'] : "";

            !empty($search_data['first_name']) ? $data['first_name'] = $search_data['first_name'] : "";

            !empty($search_data['last_name']) ? $data['last_name'] = $search_data['last_name'] : "";

            !empty($search_data['email']) ? $data['email'] = $search_data['email'] : "";

        }

        $this->db->select('user.id, user.username, user.email, user.first_name, user.last_name, user.date_registered, user.last_login, user.active, user.banned, user.login_attempts, role.name as role_name');

        $this->db->from('user');

        $this->db->join('role', 'role.id = user.role_id');

        !empty($data) ? $this->db->or_like($data) : "";

        $this->db->order_by($order_by, $sort_order);

        $this->db->limit($limit, $offset);



        $query = $this->db->get();

        

        if($query->num_rows() > 0) {

            return $query;

        }



        return false;

    }



    /**

     *

     * count_all_members: count all members in the table

     *

     *

     */

    

    public function count_all_members()

    {

        return $this->db->count_all_results('user');

    }



    /**

     *

     * update_member: update member data

     *

     * @param int $id the member id

     * @param string $username the member username

     * @param string $email the member e-mail address

     * @param string $first_name the member first name

     * @param string $last_name the member last name

     * @param bool $change_username do we want to change the username?

     * @param bool $change_email do we want to change the user e-mail?

     * @return mixed

     *

     */



    public function update_member($id, $username, $email, $first_name, $last_name, $change_username = false, $change_email = false) {

        // if there are more fields you can turn the data into an array. The reason I don't do this is because it's an extra array in controller List_members.



        $data = array(

                'id'            => $id,

                'first_name'    => $first_name,

                'last_name'     => $last_name);



        if ($change_username) {

            $data['username'] = $username;

        }

        if ($change_email) {

            $data['email'] = $email;

        }

        $this->db->where('id', $id);

        $this->db->update('user', $data);



        if($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



    /**

     *

     * delete_member: count all members in the table

     *

     * @param int $id the member id

     * @return boolean

     *

     */



    public function delete_member($id) {

        $this->db->where('id', $id);

        $this->db->delete('user');

        if($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



    /**

     *

     * get_username_by_id: return username by id

     *

     * @param int $id the member id

     * @return mixed

     *

     */



    public function get_username_by_id($id) {

        $this->db->select('username')->from('user')->where('id', $id);

        $query = $this->db->get();

        if($query->num_rows() == 1) {

            $row = $query->row();

            return $row->username;

        }

        return "";

    }



    /**

     *

     * demote_member: demote member

     *

     * @param int $id the member id

     * @return boolean

     *

     */



    public function demote_member($id) {

        $data = array('role_id' => "2");

        $this->db->where('id', $id);

        $this->db->update('user', $data);

        if($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



    /**

     *

     * promote_member: promote member

     *

     * @param int $id the member id

     * @return boolean

     *

     */



    public function promote_member($id) {

        $data = array('role_id' => "1");

        $this->db->where('id', $id);

        $this->db->update('user', $data);

        if($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



    /**

     *

     * count_all_search_members: count all members when performing search

     *

     * @param string $username the member username

     * @param string $first_name the member first name

     * @param string $last_name the member last name

     * @param string $email the member e-mail address 

     * @return mixed

     *

     */



    public function count_all_search_members($search_data) {

        $data = array();

        !empty($search_data['username']) ? $data['username'] = $search_data['username'] : "";

        !empty($search_data['first_name']) ? $data['first_name'] = $search_data['first_name'] : "";

        !empty($search_data['last_name']) ? $data['last_name'] = $search_data['last_name'] : "";

        !empty($search_data['email']) ? $data['email'] = $search_data['email'] : "";



        $this->db->select('user.id, user.username, user.email, user.first_name, user.last_name, user.date_registered, user.last_login, role.name');

        $this->db->from('user');

        $this->db->join('role', 'role.id = user.role_id');

        !empty($data) ? $this->db->or_like($data) : "";

        $this->db->order_by("user.id", "asc");

        return $this->db->count_all_results();

    }



    /**

     *

     * toggle_ban: (un)ban member

     *

     * @param int $id the member id

     * @param bool $banned ban or unban?

     * @return boolean

     *

     */



    public function toggle_ban($id, $banned) {

        $data = array('banned' => ($banned ? false : true));

        $this->db->where('id', $id);

        $this->db->update('user', $data);

        if($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



    /**

     *

     * toggle_active: (de)activate member

     *

     * @param int $id the member id

     * @param string $active activate or deactivate?

     * @return boolean

     *

     */



    public function toggle_active($id, $active) {

        $data = array('active' => ($active ? false : true));

        $this->db->where('id', $id);

        $this->db->update('user', $data);

        if($this->db->affected_rows() == 1) {

            return true;

        }

        return false;

    }



public function delete_checked($ids) 
{          
    $this->db->where_in('id', $ids)->where('username != ', ADMINISTRATOR)->delete('user');
    /*tables that needs info from previous tables*/
    $this->load->model('membership/login_model');
    $this->load->model('Listingdesign_model');
    if(is_array($ids)):
        foreach ($ids as $user_id):        
        $this->Ebaydesigns_model->backup_user_information_after_delete($user_id);
        /*get ebay design*/
        $user_id_ebay_design = $this->login_model->get_id_ebay_design($user_id);
        $user_data = $this->login_model->get_user_data_session_required($user_id,$user_id_ebay_design);
        $user_id_listing_design = $user_data->id_listing_design;
        $user_id_home_design = $user_data->id_home_design;
        $this->db->where(array('id_home_design'=>$user_id_home_design))->delete('home_design');
        $this->db->where(array('id'=> $user_id_listing_design))->delete('listign_design');
        $this->db->where(array('id_ebay_design'=> $user_id_ebay_design))->delete('ebay_design');
        /*menu and menu group*/
        $array_menu_group_ids = $this->Listingdesign_model->get_user_menu_group_ids($user_id_ebay_design, $user_id);
    if(is_array($array_menu_group_ids)):
        foreach($array_menu_group_ids as $menu_group_item):
            foreach($menu_group_item as $key=>$value):
                if($key=="id"):
                    $this->db->where_in('group_id', $value)->delete('menu');
                    $this->db->where_in('id', $value)->delete('menu_group');
                endif;
            endforeach;
        endforeach;
    endif;
    /*delete categories goup and store categories item*/
    $array_categories_group_ids = $this->Listingdesign_model->get_user_menu_group_ids($user_id_ebay_design, $user_id);
    if(is_array($array_categories_group_ids)):
        foreach($array_categories_group_ids as $menu_category_item):
            foreach($menu_category_item as $key=>$value):
                if($key=="id"):
                    
                    $this->db->where_in('group_id', $value)->delete('store_categories');
                    $this->db->where_in('id', $value)->delete('store_categories_group');
                
                endif;
            endforeach;
        endforeach;
    endif;
        /**/
        $folder = $_SERVER['DOCUMENT_ROOT']."/hosting/$user_id/";
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$user_id;
        $this->delete_directory($folder);  
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/advertisements/".$user_id;
        $this->delete_directory($folder); 
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/arrivals/".$user_id;
        $this->delete_directory($folder);  
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/banners/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/featured/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/general_images/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/home_design_advertisements/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/home_image_video_slider/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/listing_design/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/listing_image_video_slider/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/logos/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/popular_categories/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/screenshots/".$user_id;
        $this->delete_directory($folder);
        $folder = $_SERVER['DOCUMENT_ROOT']."/server/php/files/store_design/specials/".$user_id;
        $this->delete_directory($folder);
        endforeach;
    endif;
    
    /*set up tables*/
    $this->db->where_in('user_id', $ids)->delete('installation_wizard');
    $this->db->where_in('id_user', $ids)->delete('store_settings');
    $this->db->where_in('id_user', $ids)->delete('logo_design');
    $this->db->where_in('id_user', $ids)->delete('store_social_media');
    $this->db->where_in('id_user', $ids)->delete('general_images_settings');
    /*front design tables*/
    $this->db->where_in('id_user', $ids)->delete('home_design_layout');
    $this->db->where_in('id_user', $ids)->delete('home_design_parts_tagged');
    $this->db->where_in('id_user', $ids)->delete('home_design_advertising');
    $this->db->where_in('id_user', $ids)->delete('home_design_slider');
    $this->db->where_in('id_user', $ids)->delete('home_design_tabs');
    $this->db->where_in('id_user', $ids)->delete('home_design_welcome_texts');
    /*listing design tables*/
    $this->db->where_in('id_user', $ids)->delete('listing_design_layout');
    $this->db->where_in('id_user', $ids)->delete('listing_design_parts_tagged');
    $this->db->where_in('id_user', $ids)->delete('listing_design_advertising');
    $this->db->where_in('id_user', $ids)->delete('listing_design_slider');
    $this->db->where_in('id_user', $ids)->delete('listing_design_tabs');
    /*global design tables*/
    $this->db->where_in('id_user', $ids)->delete('popular_categories');
    $this->db->where_in('id_user', $ids)->delete('feature_listings');
    $this->db->where_in('id_user', $ids)->delete('store_pages');
    $this->db->where_in('id_user', $ids)->delete('specials_listings');
    $this->db->where_in('id_user', $ids)->delete('arrivals_listings');
    /*Listing tables (Rocklister)*/
    $this->db->where_in('user_id', $ids)->delete('seller_list');
    $this->db->where_in('id_user', $ids)->delete('item');
    $this->db->where_in('id_user', $ids)->delete('item_prepared');
    $this->db->where_in('id_user', $ids)->delete('item_pictures');
    $this->db->where_in('id_user', $ids)->delete('templates_installed');
    $this->db->where_in('id_user', $ids)->delete('templates_installed_modified');
    
    return $this->db->affected_rows();

}



public function ban_checked($ids) 
{
    $this->db->where_in('id', $ids)->where('username != ', ADMINISTRATOR)->update('user', array('banned' => true));
    return $this->db->affected_rows();
}

public function delete_directory($dirname) 
{
   if (is_dir($dirname))
      $dir_handle = opendir($dirname);
   if (!$dir_handle)
      return false;
   while($file = readdir($dir_handle)) {
      if ($file != "." && $file != "..") {
         if (!is_dir($dirname."/".$file))
            unlink($dirname."/".$file);
         else
            $this->delete_directory($dirname.'/'.$file);    
      }
   }
   closedir($dir_handle);
   rmdir($dirname);
   return true;
 }

    public function unban_checked($ids) {

        $this->db->where_in('id', $ids)->where('username != ', ADMINISTRATOR)->update('user', array('banned' => false));

        return $this->db->affected_rows();

    }



    public function activate_checked($ids) {

        $this->db->where_in('id', $ids)->where('username != ', ADMINISTRATOR)->update('user', array('active' => true));

        return $this->db->affected_rows();

    }



    public function deactivate_checked($ids) {

        $this->db->where_in('id', $ids)->where('username != ', ADMINISTRATOR)->update('user', array('active' => false));

        return $this->db->affected_rows();

    }



}



/* End of file list_members_model.php */

/* Location: ./application/models/adminpanel/list_members_model.php */