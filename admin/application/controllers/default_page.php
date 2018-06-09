<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Default_page extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        redirect('membership/login');
    }
    
}

/* End of file default_page.php */
/* Location: ./application/controllers/default_page.php */