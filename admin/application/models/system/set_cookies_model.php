<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_cookies_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * load_session_vars: load the session variables from the DB
     *
     * @param string $nonce use the member nonce to load session vars
     * @return mixed
     *
     */

    public function load_session_vars($nonce, $cookie_part) {
        $this->db->select('username, role_id, active, banned, last_login, cookie_part');
        $this->db->from('user');
        $this->db->where('nonce', $nonce);
        $this->db->where('cookie_part', $cookie_part);
        $this->db->limit(1);

        $query = $this->db->get();

        print $this->db->last_query();

        if($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }
}

/* End of file set_cookies_model.php */
///* Location: ./application/models/system/set_cookies_model.php */