<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_password_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * get_userdata_by_id: select the row for this member id
     *
     * @param int $id the member id
     * @return mixed
     *
     */

    public function get_userdata_by_id($id) {
        $this->db->select('username, email');
        $this->db->from('user');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1) {
            $row = $query->row();
            return $row;
        }
        return array();
    }

    /**
     *
     * update_password: update member password
     *
     * @param int $id the member id
     * @param string $password the new password
     * @return boolean
     *
     */

    public function update_password($id, $password) {
        $this->load->helper('password');
        $nonce = md5(uniqid(mt_rand(), true));
        $data = array(
            'password' => hash_password($password, $nonce),
            'nonce' => $nonce
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);

        if($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }
}

/* End of file edit_password_model.php */
/* Location: ./application/models/adminpanel/edit_password_model.php */