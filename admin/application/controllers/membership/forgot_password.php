<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_password extends Membership_Controller {

    public function __construct()
    {
        parent::__construct();
        // pre-load
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('recaptcha');
        $this->lang->load('recaptcha');
    }

    public function index() {
        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title($this->lang->line('forgot_password_title'));
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('membership/forgot_password');
    }

    /**
     *
     * send_password: send the reset member password link
     *
     *
     */

    public function send_password() {
        // form input validation
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|is_valid_email');
        if (Settings_model::$db_config['recaptcha_enabled'] == true) {
            $this->form_validation->set_rules('recaptcha_response_field', 'captcha response field', 'required|check_captcha');
        }

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('membership/forgot_password');
            exit();
        }

        $this->load->model('database_tools_model');
        $data = $this->database_tools_model->get_data_by_email($this->input->post('email'));

        if (isset($data['active']) && $data['active'] != 1) {
            $this->session->set_flashdata('error', '<p>'. $this->lang->line('is_account_active') .'<p>');
            redirect('membership/forgot_password');
        }elseif (!empty($data['nonce'])) {

            $token = hash_hmac('ripemd160', md5($data['nonce'] . uniqid(mt_rand(), true)), SITE_KEY);
            $this->load->model('membership/forgot_password_model');

            $this->forgot_password_model->delete_tokens_by_email($this->input->post('email'));

            if ($this->forgot_password_model->insert_recover_password_data($data['id'], $token, $this->input->post('email'))) {
                $this->load->helper('send_email');
                $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));
                $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);
                $this->email->to($this->input->post('email'));
                $this->email->subject($this->lang->line('forgot_password_subject'));
                $this->email->message($this->lang->line('email_greeting') ." ". $data['username'] . $this->lang->line('forgot_password_message') ."\r\n\r\n". base_url() ."membership/reset_password/reset/". urlencode($this->input->post('email')) ."/". $token);
                $this->email->send();
                $this->session->set_flashdata('success', '<p>'. $this->lang->line('forgot_password_success') .'</p>');
            }else{
                $this->session->set_flashdata('error', '<p>'. $this->lang->line('forgot_password_failed_db') .'</p>');
            }

            redirect('membership/forgot_password');
        }else{
            $this->session->set_flashdata('error', '<p>'. $this->lang->line('email_not_found') .'</p>');
        }

        $this->session->set_flashdata('email', $this->input->post('email'));
        redirect('membership/forgot_password');
    }
    
}

/* End of file forgot_password.php */
/* Location: ./application/controllers/membership/forgot_password.php */