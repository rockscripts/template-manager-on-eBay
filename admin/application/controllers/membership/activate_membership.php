<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activate_membership extends Membership_Controller {

    public function index() {

    }

    /**
     *
     * check: verify and activate account
     *
     * @param int $email the e-mail address that received the activation link
     * @param string $nonce the member nonce associated with the e-mail address
     *
     */

    public function check($email = NULL, $nonce = NULL) {
        $this->load->model('membership/activate_membership_model');
        if($this->activate_membership_model->activate_member(urldecode($email), $nonce)) {
            $content_data['success'] = $this->lang->line('reset_password_account_active');
        }else{
            $content_data['error'] = $this->lang->line('reset_password_link_expired');
        }

        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title($this->lang->line('resend_activation'));
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('membership/activate_membership', $content_data);
    }

}

/* End of file activate_membership.php */
/* Location: ./application/controllers/membership/activate_membership.php */