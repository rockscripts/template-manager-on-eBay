<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Controller extends MY_Controller
{
    public function __construct ()
    {
        parent::__construct();
        // detect AJAX, end stream when false
        if (!$this->input->is_ajax_request()) {
            exit();
        }
    }
}

/* End of file Ajax_Controller.php */
/* Location: ./application/core/Ajax_Controller.php */