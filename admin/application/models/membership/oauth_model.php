<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oauth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function save_data($provider_name, $token, $user) {

        $user_token  = $token->access_token;
        $user_secret = isset($token->secret) ? $token->secret : "";

        $name          = array_key_exists('name',$user) ? $user['name'] : null;
        $location      = array_key_exists('location',$user) ? $user['location'] : null;
        $description   = array_key_exists('description',$user) ? $user['description'] : null;
        $profile_image = array_key_exists('image',$user) ? $user['image'] : null;
        $user_email    = array_key_exists('email',$user) ? $user['email'] : null;

        $userobj       = array(
            'email'             => $user_email,
            'oauth_uid'         => $user['uid'],
            'oauth_name'        => $name,
            'oauth_location'    => $location,
            'oauth_token'       => $user_token,
            'oauth_secret'      => $user_secret,
            'oauth_summary'     => $description,
            'oauth_profile_url' => $profile_image,
            'active'            => true
        );

        // check if user exists
        $where = array();
        if ($provider_name == "twitter" || $provider_name == "linkedin") {
            $where = array('u.oauth_uid' => $user['uid'], 'oauth_token' => $user_token);
        }else{
            $where = array('u.email' => $user_email);
        }

        $this->db->select('u.id, u.username, u.role_id, u.banned, u.oauth_token, op.id as provider_id')
            ->from('user u')
            ->join('oauth_providers op', 'op.id = u.oauth_provider_id', 'left')
            ->where($where);

        $q = $this->db->get();

        $this->db->select('id')->from('oauth_providers')->where('name', $provider_name);
        $q2 = $this->db->get();

        $userobj['oauth_provider_id'] = $q2->row()->id;

        if ($q->num_rows() == 1) {
            $row = $q->row();

            // if banned
            if ($row->banned) {
                return "banned";
            }

            // user found => update
            unset($userobj['email']); // don't need this or it will update all the time - first email registered with is always used.

            $this->db->set('last_login', 'now()', false);
            $this->db->where('id', $row->id);
            $this->db->update('user', $userobj);

            // set session data
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('role_id', $row->role_id);
            $this->session->set_userdata('is_oauth', true);
            return "update";

        }else{
            // not found => insert
            $this->db->set('date_registered', 'now()', false);
            $this->db->set('last_login', 'now()', false);
            $this->db->insert('user', $userobj);

            $this->db->query($q);

            if ($this->db->affected_rows()) {
                return array(
                    'username'   => $userobj['username'],
                    'email'      => $userobj['email'],
                    'oauth_uid'  => $userobj['oauth_uid']
                );
            }
        }

        return false;
    }

    public function update_social_userdata($username, $oauth_uid, $email = "") {
        $update_array = array(
            'username' => $username
        );
        if (!empty($email)) {
            $update_array['email'] = $email;
        }

        $this->db->where('oauth_uid', $oauth_uid);
        $this->db->update('user', $update_array);
        return $this->db->affected_rows();
    }

}

/* End of file activate_membership_model.php */
/* Location: ./application/models/membership/activate_membership_model.php */