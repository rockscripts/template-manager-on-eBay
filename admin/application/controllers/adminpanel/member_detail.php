<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_detail extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        // pre-load
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('adminpanel/member_detail_model');
    }

    public function _remap($method, $params = array()) {
$content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"] = $this->session->userdata( 'user_id' );  
       $content_data["page_title"] = "Members";
       $content_data["widgettitle"] = "";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $content_data["passed_to_view"] = $this->breadcrumbs->get(); 
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }

        if ( ! $this->form_validation->is_natural_no_zero($this->uri->segment(3))) {
            $this->session->set_flashdata('error', '<p>Illegal request.</p>');
            redirect('adminpanel/list_members');
        }

        $content_data['member'] = $this->member_detail_model->get_member_data($this->uri->segment(3));
        $content_data['roles'] = $this->member_detail_model->get_roles();

        if (! $content_data['member']) {
            $this->session->set_flashdata('error', 'Nothing found.');
            redirect('adminpanel/list_members');
        }
        $this->template->load('adminpanel/member_detail', $content_data); 
    }

    /**
     *
     * save: store data about member
     *
     */

    public function save() {
        $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"] = $this->session->userdata( 'user_id' );  
       $content_data["page_title"] = "Members";
       $content_data["widgettitle"] = "";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $content_data["passed_to_view"] = $this->breadcrumbs->get(); 
        // form input validation
        if ($this->input->post('id') != strval(intval($this->input->post('id')))) {
            redirect('private/oauth_profile');
        }
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[16]|min_length[6]|is_valid_username|is_existing_unique_field_by_id[user.username.'. $this->input->post('id') .']');
        $this->form_validation->set_rules('email', 'email', 'trim|required|max_length[255]|is_valid_email|is_existing_unique_field_by_id[user.email.'. $this->input->post('id') .']');
        $this->form_validation->set_rules('first_name', 'first name', 'trim|required|max_length[40]|min_length[2]');
        $this->form_validation->set_rules('last_name', 'last name', 'trim|required|max_length[60]|min_length[2]');
        $this->form_validation->set_rules('role', 'role', 'trim|required|is_natural');
        $this->form_validation->set_rules('banned', 'banned', 'trim|required|is_natural');
        $this->form_validation->set_rules('active', 'active', 'trim|required|is_natural');
        $this->form_validation->set_rules('new_password', 'new password', 'trim|max_length[64]|min_length[9]|is_valid_password');

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/adminpanel/member_detail/'. $this->input->post('id'));
            exit();
        }

        $this->load->helper('password');

        $nonce = md5(uniqid(mt_rand(), true));

        $data = array(
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'role_id' => $this->input->post('role'),
            'banned' => ($this->input->post('banned') == true ? true : false),
            'active' => ($this->input->post('active') == true ? true : false),
            'password' => hash_password($this->input->post('new_password'),  $nonce),
            'nonce' => $nonce
        );

        if ($this->member_detail_model->save($data)) {
            $this->session->set_flashdata('success', sprintf($this->lang->line('member_updated'), $this->input->post('username'), $this->input->post('id')));
        }

        // send email if checked
        if ($this->input->post('send_copy') != "") {
            $this->load->helper('send_email');
            $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));
            $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);
            $this->email->to($this->input->post('email'));
            $this->email->subject($this->lang->line('membership_edited_subject'));
            $this->email->message($this->lang->line('membership_edited'));
            $this->email->send();
        }

        redirect('/adminpanel/member_detail/'. $this->input->post('id'));
    }

}