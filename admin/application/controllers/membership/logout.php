<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->session->sess_destroy();
        setcookie("unique_token", null, time() - 60*60*24*3, '/', config_item('cookie_domain'), false, false);
        redirect('/membership/login');
    }
}

/* End of file logout.php */
/* Location: ./application/controllers/membership/logout.php */