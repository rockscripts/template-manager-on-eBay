<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Suggested_templates extends Admin_Controller {



    public function __construct()

    {

        parent::__construct();

        $this->load->helper('form');
        validate_application(); 
        $this->load->library('form_validation');

    }
   public function index()
   {
       
   }
   public function get_suggested_templates()
   {
     return $this->Suggested_templates_model->get_suggested_templates(); 
   }

}



/* End of file add_member.php */

/* Location: ./application/controllers/adminpanel/add_member.php */