<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activate_membership_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * activate_member
     *
     * @param string $email e-mail addres of member
     * @param string $nonce the member nonce
     * @return boolean
     *
     */

    public function activate_member($email, $nonce) {
        $data = array('active' => true);
        $where = array('email' => $email, 'nonce' => $nonce, 'unix_timestamp(NOW()) - unix_timestamp(last_login) <' => Settings_model::$db_config['activation_link_expires']);
        $this->db->where($where);
        $this->db->update('user', $data);
        if($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }
}

/* End of file activate_membership_model.php */
/* Location: ./application/models/membership/activate_membership_model.php */