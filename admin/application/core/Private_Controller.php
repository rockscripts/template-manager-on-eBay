<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Private_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->output->set_header("HTTP/1.0 200 OK");
        $this->output->set_header("HTTP/1.1 200 OK");
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');

        $this->load->helper('cookie');
        $cookie_domain = config_item('cookie_domain'); // application/config/config.php

        // When the site is disabled, clean and destroy all cookies and sessions
        if (Settings_model::$db_config['login_enabled'] == 0 && $this->session->userdata('username') != ADMINISTRATOR) {
            $this->session->sess_destroy();
            setcookie("unique_token", null, time() - 60*60*24*3, '/', $cookie_domain, false, false);
            redirect("/membership/login");

        // When we do not find the sessions variable "logged_in" and there's a cookie: check DB for data and act accordingly
        }elseif (!$this->session->userdata('logged_in') && get_cookie('unique_token') != "") {

            $this->load->model('system/set_cookies_model');
            $cookie = get_cookie('unique_token');
            $a = substr($cookie, 0, 32);
            $b = substr($cookie, 42, 74);
            $data = $this->set_cookies_model->load_session_vars($a, $b);

            if (!empty($data)) {

                // check banned and active
                if ($data->banned != 0) {
                    $this->session->set_flashdata('error', '<p>You are banned.</p>');
                    setcookie("unique_token", null, time() - 60*60*24*3, '/', $cookie_domain, false, false);
                    redirect("/membership/login");
                }elseif($data->active != 1) {
                    $this->session->set_flashdata('error', '<p>Your acount is inactive.</p>');
                    setcookie("unique_token", null, time() - 60*60*24*3, '/', $cookie_domain, false, false);
                    redirect("/membership/login");
                }

                // renew cookie
                setcookie("unique_token", get_cookie('unique_token'), time() + Settings_model::$db_config['cookie_expires'], '/', $cookie_domain, false, false);
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('username', $data->username);
                $this->session->set_userdata('role_id', $data->role_id);
                redirect('private/'. Settings_model::$db_config['home_page']);
            }else{
                redirect("/membership/login");
            }

        }elseif (!$this->session->userdata('logged_in') && !get_cookie('unique_token')) {
            redirect("/membership/login");
        }
    }

}

/* End of file Private_Controller.php */
/* Location: ./application/core/Private_Controller.php */