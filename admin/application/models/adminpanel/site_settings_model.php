<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_settings_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * save_settings: save the new settings to the DB
     *
     * @param int $order_by order by this data column
     * @return boolean
     *
     */

    public function save_settings($data) {
        $this->db->update('settings', $data);
        if($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }

    public function clear_sessions() {
        $this->db->where('session_id != ', $this->session->userdata('session_id'));
        $this->db->delete('sessions');
        if($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }
}

/* End of file site_settings_model.php */
/* Location: ./application/models/adminpanel/site_settings_model.php */