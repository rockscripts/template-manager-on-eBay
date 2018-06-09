<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oauth_providers_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_providers() {
        $this->db->select('id, name, key, secret, enabled')->from('oauth_providers');
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            return $q->result();
        }

        return false;
    }

    public function save_provider($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('oauth_providers', $data);
        return $this->db->affected_rows();
    }

    public function delete_provider($id) {
        $this->db->where('id', $id)->delete('oauth_providers');
        return $this->db->affected_rows();
    }

}