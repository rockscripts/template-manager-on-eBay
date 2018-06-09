<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oauth_new_provider_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function save_provider($data) {
        $this->db->insert('oauth_providers', $data);
        return $this->db->affected_rows();
    }

}