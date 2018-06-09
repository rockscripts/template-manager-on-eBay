<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Resend_activation extends Membership_Controller {



    public function __construct() {

        parent::__construct();

        $this->load->helper(array('form', 'send_email'));

        $this->load->library('form_validation');

        $this->load->library('recaptcha');

        $this->lang->load('recaptcha');

    }



    public function index() {
        

        $this->template->set_theme(Settings_model::$db_config['active_theme']);

        $this->template->set_layout('main');

        $this->template->title($this->lang->line('resend_activation'));

        $this->process_partial('header', 'membership/header');

        $this->process_partial('footer', 'membership/footer');

        $this->process_template_build('membership/resend_activation');

    }



    /**

     *

     * send_link: resend activation link

     *

     *

     */



    public function send_link() {

        // form input validation

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|is_valid_email');

        if (Settings_model::$db_config['recaptcha_enabled'] == true) {

            $this->form_validation->set_rules('recaptcha_response_field', 'captcha response field', 'required|check_captcha');

        }



        if (!$this->form_validation->run()) {

            $this->session->set_flashdata('error', validation_errors());

            redirect('/membership/resend_activation');

            exit();

        }



        $this->load->model('database_tools_model');

        $data = $this->database_tools_model->get_data_by_email($this->input->post('email'));
/*echo $data['active'];
die("*****");*/

        if (isset($data['active'])) 
        {
            if($data['active'] == 1)
            {
                $this->session->set_flashdata('error', '<p>'. $this->lang->line('account_active') .'</p>');
                redirect('/membership/resend_activation');
            }  
            elseif (!empty($data['nonce'])) 
            {
                $this->load->model('membership/resend_activation_model');    
                $this->resend_activation_model->update_last_login($data['username']);    
                $this->load->helper('send_email');   
                /*print_r(load_email_config(Settings_model::$db_config['email_protocol'])) ; die;*/
                $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));    
                $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);    
                $this->email->to($this->input->post('email'));    
                $this->email->subject($this->lang->line('resend_activation_subject'));    
                $this->email->message($this->lang->line('email_greeting') ." ". $data['username'] . $this->lang->line('resend_activation_message') . base_url() ."membership/activate_membership/check/". urlencode($this->input->post('email')) ."/". $data['nonce']);
    
                if ($this->email->send()) 
                {    
                    $this->session->set_flashdata('success', '<p>'. $this->lang->line('resend_activation_success') .'</p>');    
                }    
                else
                {
                    $this->session->set_flashdata('error', '<p>Error email conf</p>');   
                }
                redirect('/membership/resend_activation');    
            }          
        }
        else
        {
            $this->session->set_flashdata('error', '<p>'. $this->lang->line('email_not_found') .'</p>');
        }
        $this->session->set_flashdata('email', $this->input->post('email'));
        redirect('/membership/resend_activation');
    }



}



/* End of file resend_activation.php */

/* Location: ./application/controllers/membership/resend_activation.php */

