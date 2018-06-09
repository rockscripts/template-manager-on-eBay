<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oauth_register extends Membership_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($this->session->flashdata('provider') == "") {
            redirect('membership/login');
        }
    }

    public function index() {
        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title('Social logon');
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('membership/oauth_register');
        $this->session->set_flashdata('provider', $this->session->flashdata('provider')); // keep page alive
        $this->session->set_flashdata('oauth_uid', $this->session->flashdata('oauth_uid'));
        $this->session->set_flashdata('is_oauth', true);
    }

    /**
     *
     * register: add new user after successful ouath registration.
     *
     */

    public function register() {
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[16]|min_length[6]|is_valid_username|is_existing_unique_field[user.username]');

        if ($this->session->flashdata('provider') == "twitter" || $this->session->flashdata('provider') == "linkedin") {
            $this->form_validation->set_rules('email', 'e-mail', 'trim|required|max_length[255]|is_valid_email');
        }

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', validation_errors());
            $this->session->set_flashdata('provider', $this->session->flashdata('provider')); // keep page alive
            $this->session->set_flashdata('oauth_uid', $this->session->flashdata('oauth_uid'));
            $this->session->set_flashdata('is_oauth', true);
            redirect('membership/oauth_register');
            exit();
        }

        $email = $this->session->flashdata('email') != "" ? $this->session->flashdata('email') : ($this->input->post('email') != "" ? $this->input->post('email') : "");

        $this->load->model('membership/oauth_model'); // update email only and make active
        if ($this->oauth_model->update_social_userdata($this->input->post('username'), $this->session->flashdata('oauth_uid'), $email)) {
            // set session data
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $this->input->post('username'));
            $this->session->set_userdata('role_id', 2);
            $this->session->set_userdata('is_oauth', true);
            $this->session->set_flashdata('success', $this->lang->line('logged_in_with') . $this->session->flashdata('provider'));
        }else{
            $this->session->set_flashdata('error', 'login failed - database');
        }
        redirect('private/'. Settings_model::$db_config['home_page']);
    }

}