<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Edit_password extends Admin_Controller {    public function __construct()    {        parent::__construct();        // pre-loadvalidate_application();        $this->load->helper('form');        $this->load->library('form_validation');    }    /**     *     * index     *     * @param int $id the id of the member     *     */    public function index($id) {        $this->load->model('adminpanel/edit_password_model');        $content_data['userdata'] = $this->edit_password_model->get_userdata_by_id($id);        $content_data['userdata']->id = $id;        $this->template->set_theme('adminpanel');        $this->template->set_layout('adminpanel');        $this->template->title('admin panel :: edit password');        $this->process_partial('header', 'adminpanel/header');        $this->process_partial('footer', 'adminpanel/footer');        $this->process_template_build('adminpanel/edit_password' ,$content_data);    }    /**     *     * edit: edit password from post info.     *     *     */    public function edit($id) {        $this->form_validation->set_error_delimiters('', '');        $this->form_validation->set_rules('password', 'password', 'trim|required|max_length[64]|min_length[9]|matches[password_confirm]|is_valid_password');        $this->form_validation->set_rules('password_confirm', 'repeat password', 'trim|required|max_length[64]|min_length[9]');        if (!$this->form_validation->run()) {            if (form_error('password')) {                $this->session->set_flashdata('message', form_error('password'));            }elseif (form_error('password_confirm')) {                $this->session->set_flashdata('message', form_error('password_confirm'));            }            redirect('/adminpanel/edit_password/index/'. $id);            exit();        }        $this->load->model('adminpanel/edit_password_model');        if($this->edit_password_model->update_password($id, $this->input->post('password'))) {            if ($this->input->post('send_copy') != "") {                $this->load->helper('send_email');                $this->load->library('email', load_email_config(Settings_model::$db_config['email_protocol']));                $this->email->from(Settings_model::$db_config['admin_email_address'], $_SERVER['HTTP_HOST']);                $this->email->to($this->input->post('email'));                $this->email->subject($this->lang->line('edit_password_subject'));                $this->email->message($this->lang->line('email_greeting') . $this->lang->line('edit_password_message') . addslashes($this->input->post('password')));                $this->email->send();            }            $this->session->set_flashdata('message', $this->lang->line('edit_password_success'));        }else{            $this->session->set_flashdata('message', $this->lang->line('edit_password_failed_db'));        }        redirect('/adminpanel/edit_password/index/'. $id);    }}/* End of file edit_password.php *//* Location: ./application/controllers/adminpanel/edit_password.php */