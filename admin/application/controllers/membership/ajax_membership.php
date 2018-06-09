<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_membership extends MY_Controller {

    private $_CI;

    public function __construct() {
        parent::__construct();
        $this->_CI = & get_instance();
        $this->_CI->load->library('form_validation');
    }

    /**
     *
     * ajax_is_valid_email: get helper code to verify e-mail address through AJAX (jQuery blur functions)
     *
     * @param int $email the member e-mail address entered
     * @return boolean
     *
     */

    public function ajax_is_valid_email($email) {
        $email = rawurldecode($email);
        $this->load->library('form_validation');
        print ($this->_CI->form_validation->is_valid_email($email) ? "true" : "null");
    }

    /**
     *
     * ajax_is_existing_unique_field: AJAX method to check for uniqueness in a database
     *
     * @param string $field_value the field value to be checked
     * @param string $table the database table to be used
     * @param string $column_name the database column name to be used
     * @return boolean
     *
     */
    public function ajax_is_existing_unique_field($field_value, $table, $column_name) {
        $field_value = strtolower(rawurldecode($field_value));
        $info = $table . "." . $column_name;
        print ($this->_CI->form_validation->is_existing_unique_field($field_value, $info) ? "true" : "null");
    }

}

/* End of file ajax_membership.php */
/* Location: ./application/controllers/membership/ajax_membership.php */