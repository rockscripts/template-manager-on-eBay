<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Install extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
         validate_user();
         validate_application();
    }

    function index() {
        $data['error'] = 'install is not enabled.';
        if (Settings_model::$db_config['install_enabled'] == 1) {
            $this->load->model('membership/register_model');

            $result = $this->register_model->create_member('administrator', '1234', Settings_model::$db_config['admin_email_address'], '', '', 1, 1);

            if ($result == "installed") {
                $content_data['error'] = "The administrator account has already been added to the system.";
            }elseif ($result = true) {
                $content_data['success'] = 'administrator account successfully created.';
            }
        }

        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title('install');
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('install', $content_data);
    }

}

/* End of file install.php */
/* Location: ./application/controllers/install.php */