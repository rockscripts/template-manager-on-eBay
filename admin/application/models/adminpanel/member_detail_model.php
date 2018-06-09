<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_detail_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_member_data($id) {
        $this->db->select('u.id, u.username, u.email, u.role_id, u.first_name, u.last_name, u.last_login, u.date_registered,
        u.banned, u.active')
            ->from('user u')
            ->where('u.id', $id)
            ->limit(1);

        $q = $this->db->get();

        if ($q->num_rows() == 1) {
            return $q->row();
        }

        return false;
    }

    public function get_roles() {
        $this->db->select('id, name')->from('role');
        $q = $this->db->get();

        if ($q->num_rows() > 0) {
            return $q->result();
        }

        return false;
    }

    public function save($data) {
        $this->db->where('id', $data['id'])
                 ->update('user', $data);

        return $this->db->affected_rows();
    }

}