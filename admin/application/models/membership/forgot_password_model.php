<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_password_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * insert_recover_password_data: add a new token row for password reset functionality
     *
     * @param int $user_id the member id
     * @param string $token the unique token used in the e-mail link
     * @param string $email the member e-mail address
     * @return boolean
     *
     */

    public function insert_recover_password_data($user_id, $token, $email) {
        $data = array(
           'user_id' => $user_id,
           'token' => $token,
           'email' => $email
        );

        $this->db->set('date_added', 'NOW()', FALSE);
        $this->db->insert('recover_password', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }

    /**
     *
     * delete_tokens_by_email: remove all tokens for a member
     *
     * @param string $email remove all tokens with this e-mail address associated
     * @return boolean
     *
     */

    public function delete_tokens_by_email($email) {
        $this->db->delete('recover_password', array('email' => $email));
        if($this->db->affected_rows() == 1) {
            return true;
        }
        return false;
    }


}

/* End of file forgot_password_model.php */
/* Location: ./application/models/membership/forgot_password_model.php */