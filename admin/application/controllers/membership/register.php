<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends Membership_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('recaptcha');
        $this->lang->load('recaptcha');
        $this->load->model('membership/register_model');
    }

    public function index() {
        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title($this->lang->line('create_account'));
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('membership/register');
    }

    /**
     *
     * add_member: insert a new member into the database after all input fields have met the requirements
     *
     *
     */
    public function add_member() {
        // check whether creating member is allowed
        if(Settings_model::$db_config['registration_enabled'] == 0) {
            $this->session->set_flashdata('error', $this->lang->line('registration_disabled'));
            redirect('/membership/register');
        }

        // form input validation
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        $this->form_validation->set_rules('first_name', 'first name', 'trim|required|max_length[40]|min_length[2]');
        $this->form_validation->set_rules('last_name', 'last name', 'trim|required|max_length[60]|min_length[2]');
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|max_length[255]|is_valid_email|is_existing_unique_field[user.email]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[16]|min_length[6]|is_valid_username|is_existing_unique_field[user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|max_length[64]|min_length[9]|matches[password_confirm]|is_valid_password');
        $this->form_validation->set_rules('password_confirm', 'repeat password', 'trim|required|max_length[64]|min_length[9]');
        if (Settings_model::$db_config['recaptcha_enabled'] == true) {
            $this->form_validation->set_rules('recaptcha_response_field', 'captcha response field', 'required|check_captcha');
        }

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', validation_errors());
            $data['post'] = $_POST;
            $this->session->set_flashdata($data['post']);
            redirect('/membership/register');
            exit();
        }
        /*
         * if you want individual errors listed in stead of all of them at once, use the code below in stead
        if (!$this->form_validation->run()) {
            if (form_error('first_name')) {
                $this->session->set_flashdata('error', form_error('first_name'));
            }elseif (form_error('last_name')) {
                $this->session->set_flashdata('error', form_error('last_name'));
            }elseif (form_error('email')) {
                $this->session->set_flashdata('error', form_error('email'));
            }elseif (form_error('username')) {
                $this->session->set_flashdata('error', form_error('username'));
            }elseif (form_error('password')) {
                $this->session->set_flashdata('error', form_error('password'));
            }elseif (form_error('password_confirm')) {
                $this->session->set_flashdata('error', form_error('password_confirm'));
            }elseif(form_error('recaptcha_response_field')) {
                $this->session->set_flashdata('error', form_error('recaptcha_response_field'));
            }

            $data['post'] = $_POST;
            $this->session->set_flashdata($data['post']);
            redirect('/membership/register');
            exit();
        }*/

        if($nonce = $this->register_model->create_member($this->input->post('username'), $this->input->post('password'), $this->input->post('email'), $this->input->post('first_name'), $this->input->post('last_name'))) {
            $this->load->helper('send_email');
            $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));
            $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);
            $this->email->to($this->input->post('email'));
            $this->email->subject($this->lang->line('membership_subject'));
            $this->email->message($this->lang->line('email_greeting') . " ". $this->input->post('username') . $this->lang->line('membership_message'). base_url() ."membership/activate_membership/check/". urlencode($this->input->post('email')) ."/". $nonce);          
            $this->session->set_flashdata('success', '<p>'. $this->lang->line('membership_success') .'</p>');
            $this->email->send();
            redirect('/membership/register');
        }else{
            $this->session->set_flashdata('error', '<p>'. $this->lang->line('membership_failed_db') .'</p>');
            redirect('/membership/register');
        }
    }
    
}

/* End of file register.php */
/* Location: ./application/controllers/membership/register.php */