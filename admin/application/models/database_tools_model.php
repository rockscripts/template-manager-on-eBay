<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
     *
     * Database_tools_model: contains generic functions, used in several controllers
     *
     */

class Database_tools_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * get_data_by_email: get member data by e-mail address
     *
     * @param string $email the e-mail address to be verified with
     * @return mixed
     *
     */

    public function get_data_by_email($email) {

        $this->db->select('id, username, nonce, active');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1) {
            $row = $query->row();
            return array('id' => $row->id, 'username' => $row->username, 'nonce' => $row->nonce, 'active' => $row->active);
        }
        return "";
    }

}

/* End of file database_tools_model.php */
/* Location: ./application/models/database_tools_model.php */