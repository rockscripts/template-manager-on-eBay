<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class External_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     * process_partial: load the default view when no view exists in the current theme's views folder
     *
     * send_username: send the username to the member e-mail
     * @param $name string the name of the partial
     * @param $path the path to the correct view file
     *
     */

    public function process_partial($name, $path) {
        if (file_exists(APPPATH .'views/themes/'. Settings_model::$db_config['active_theme'] .'/'. $path .'.php')) {
            $this->template->set_partial($name, 'themes/'. Settings_model::$db_config['active_theme'] .'/'. $path);
        }else{
            $this->template->set_partial($name, 'themes/bootstrap/'. $path);
        }
    }

    public function process_template_build($path, $data = null) {
        if (file_exists(APPPATH .'views/themes/'. Settings_model::$db_config['active_theme'] .'/'. $path .'.php')) {
            $this->template->build('themes/'. Settings_model::$db_config['active_theme'] .'/'. $path, $data);
        }else{
            $this->template->build('themes/bootstrap/'. $path, $data);
        }
    }

}
/* End of file External_Controller.php */
/* Location: ./application/core/External_Controller.php */