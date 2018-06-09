<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_password extends Membership_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('password');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title($this->lang->line('reset_password_title'));
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('membership/reset_password');
    }

    /**
     *
     * reset: reset the password and send it to the member
     *
     * @param int $email the e-mail address that received the activation link
     * @param string $token the unique token that verifies this transaction
     *
     */

    public function reset($email, $token) {

        $new_password = $this->_random_letter().
                        $this->_random_symbol().
                        $this->_random_symbol().
                        $this->_random_letter().
                        $this->_random_number().
                        $this->_random_symbol().
                        $this->_random_letter().
                        $this->_random_letter().
                        $this->_random_number();
        $new_password = str_shuffle($new_password);

        $this->load->model('membership/reset_password_model');
        $data = $this->reset_password_model->verify_token(urldecode($email), $token);

        if (!empty($data['date_added'])) {
            $time_diff = strtotime("now") - strtotime($data['date_added']);
        }
        
        if (isset($time_diff) && $time_diff > Settings_model::$db_config['password_link_expires']) { // 12 hours password expired
            // link has expired
            $this->session->set_flashdata('error', '<p>'. $this->lang->line('reset_password_link_expired') .'</p>');
            // remove token
            $this->reset_password_model->delete_token_data($token);
            redirect("/membership/reset_password");
            exit();
        }elseif (isset($data['token']) && $data['token'] == $token) {
            
            $this->reset_password_model->delete_token_data($token);

            if ($this->reset_password_model->update_password_and_nonce(urldecode($email), $new_password)) {

                $this->load->helper('send_email');
                $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));

                $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);
                $this->email->to(urldecode($email));
                $this->email->subject($this->lang->line('reset_password_subject'));
                $this->email->message($this->lang->line('email_greeting') ." ". $data['username'] . $this->lang->line('reset_password_message'). addslashes($new_password));

                $this->email->send();
                $this->session->set_flashdata('success', '<p>'. $this->lang->line('reset_password_success') .'</p>');
            }else{
                $this->session->set_flashdata('error', '<p>'. $this->lang->line('reset_password_failed_db') .'</p>');
            }
        }else{
            $this->session->set_flashdata('error', '<p>'. $this->lang->line('reset_password_failed_token') .'</p>');
        }
        redirect("/membership/reset_password");
    }

    /**
     *
     * _random_symbol: take one random symbol
     *
     *
     */

    private function _random_symbol() {
        $symbol_arr = array("!", "$", ".", "[", "]", "|", "(", ")", "?", "*", "+", "{", "}", "@", "#");
        $i = rand(0, 14);
        return $symbol_arr[$i];
    }

    /**
     *
     * _random_letter: take one random letter
     *
     *
     */

    private function _random_letter() {
        $letter_arr = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
        $i = rand(0, 25);
        return $letter_arr[$i];
    }

    /**
     *
     * _random_number: taken one random number
     *
     *
     */

    private function _random_number() {
        $number_arr = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $i = rand(0, 9);
        return $number_arr[$i];
    }
}

/* End of file reset_password.php */
/* Location: ./application/controllers/membership/reset_password.php */