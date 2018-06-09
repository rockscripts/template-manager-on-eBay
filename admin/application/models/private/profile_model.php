<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * get_profile: get the member pages
     *
     * @return mixed
     *
     */

    public function get_profile() {
        $this->db->select('id, first_name, last_name, email');
        $this->db->from('user');
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }

    /**
     *
     * set_profile: update pages
     *
     * @param string $first_name
     * @param string $last_name
     * @param string $email
     * @return boolean
     *
     */

    public function set_profile($first_name, $last_name, $email = "") {
        $data = array(
               'first_name' => $first_name,
               'last_name' => $last_name,
            );
        if (!empty($email)) {
            $data['email'] = $email;
        }

        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('user', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }

    /**
     *
     * set_password: update member password
     *
     * @param string $password
     * @return boolean
     *
     */

    public function set_password($password) {
        $this->load->helper('password');
        $new_nonce = md5(uniqid(mt_rand(), true));
        $data = array(
               'password' => hash_password($password, $new_nonce),
               'nonce' => $new_nonce
            );

        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('user', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }

    /**
     *
     * get_oauth_profile: get the profile for oauth users
     *
     * @return mixed
     *
     */

    public function get_oauth_profile() {
        $this->db->select('u.id, u.first_name, u.last_name, u.email, u.oauth_profile_url, op.name as provider_name');
        $this->db->from('user u');
        $this->db->join('oauth_providers op', 'op.id = u.oauth_provider_id');
        $this->db->where('u.username', $this->session->userdata('username'));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1) {
            return $query->row();

        }
        return false;
    }

}

/* End of file profile_model.php */
/* Location: ./application/models/private/profile_model.php */