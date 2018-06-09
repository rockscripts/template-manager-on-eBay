<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Site_settings extends Admin_Controller {



    public function __construct()

    {

        parent::__construct();
validate_application();
        $this->load->helper('form');

        $this->load->library('form_validation');

    }
    public function index() 
    {
       $content_data["username"] = $this->session->userdata( 'username' );
       $content_data["user_id"] = $this->session->userdata( 'user_id' );
       $content_data["page_title"] = "Design Manager";
       $content_data["widgettitle"] = "";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $content_data["passed_to_view"] = $this->breadcrumbs->get(); 
        $content_data['private_pages'] = $this->_load_private_pages();  
       /* $this->template->set_theme('adminpanel');
        $this->template->set_layout('adminpanel');
        $this->template->title('admin panel :: site settings');
        $this->process_partial('header', 'adminpanel/header');
        $this->process_partial('footer', 'adminpanel/footer');   */
        $this->template->load('adminpanel/site_settings', $content_data);
    }
    private function _load_private_pages() {

        if ($handle = opendir(APPPATH. 'controllers/private')) {

            $pages = array();

            while (false !== ($file = readdir($handle))) {

                $last_four = substr($file, -4);

                $newfile = str_replace(".php", "", $file);

                if ($last_four == ".php") {

                    $pages[$newfile] = $newfile;

                }

            }



            closedir($handle);

            return $pages;

        }



        return false;

    }



    /**

     *

     * update_settings: update settings from adminpanel

     *

     *

     */



    public function update_settings() {

        $this->form_validation->set_error_delimiters('<p>', '</p>');

        $this->form_validation->set_rules('site_title', 'Site title', 'trim|required');

        $this->form_validation->set_rules('members_per_page', 'members per page', 'trim|required|numeric');

        $this->form_validation->set_rules('admin_email', 'admin e-mail', 'trim|required|max_length[255]|is_valid_email');

        $this->form_validation->set_rules('home_page', 'home page', 'trim|required');

        $this->form_validation->set_rules('active_theme', 'active theme', 'trim|required');

        $this->form_validation->set_rules('login_attempts', 'login attempts', 'trim|required|numeric');

        $this->form_validation->set_rules('recaptcha_theme', 'recaptcha theme', 'trim|required');

        $this->form_validation->set_rules('sendmail_path', 'sendmail path', 'trim');

        $this->form_validation->set_rules('smtp_host', 'smtp host', 'trim');

        $this->form_validation->set_rules('smtp_port', 'smtp port', 'trim');

        $this->form_validation->set_rules('smtp_user', 'smtp user', 'trim');

        $this->form_validation->set_rules('smtp_pass', 'smtp pass', 'trim');



        if (!$this->form_validation->run()) {

            $this->session->set_flashdata('error', validation_errors());

            redirect('/adminpanel/site_settings');

            exit();

        }



        $active_theme = FALSE;

        if (file_exists(APPPATH .'themes/'. $this->input->post('active_theme') .'/views/layouts/main.php')) {

            $active_theme = TRUE;

        }else{

            $this->session->set_flashdata('error', '<p>'. sprintf($this->lang->line('main_not_found'), $this->input->post('active_theme')) .'</p>');

            redirect('/adminpanel/site_settings');

            exit();

        }



        $home_page = FALSE;

        if (file_exists(APPPATH .'controllers/private/'. $this->input->post('home_page') .'.php')) {

            $home_page = TRUE;

        }else{

            $this->session->set_flashdata('error', '<p>'. sprintf($this->lang->line('controller_not_found'), $this->input->post('home_page')) .'</p>');

            redirect('/adminpanel/site_settings');

            exit();

        }



        // delete cache before prepping and inserting data

        $this->cache->delete('settings');



        $data = array(

            'login_enabled' => ($this->input->post('login_enabled') == "" ? 1 : 0),

            'register_enabled' => ($this->input->post('register_enabled') == "" ? 1 : 0),

            'install_enabled' => ($this->input->post('install_enabled') == "" ? 0 : 1),

            'members_per_page' => ($this->input->post('members_per_page') > 0 ? $this->input->post('members_per_page') : 10),

            'admin_email' => $this->input->post('admin_email'),

            'home_page' => ($home_page == TRUE ? $this->input->post('home_page') : Settings_model::$db_config['home_page']),

            'active_theme' => ($active_theme == TRUE ? $this->input->post('active_theme') : Settings_model::$db_config['active_theme']),

            'login_attempts' => $this->input->post('login_attempts'),

            'recaptcha_theme' => $this->input->post('recaptcha_theme'),

            'email_protocol' => $this->input->post('email_protocol'),

            'sendmail_path' => $this->input->post('sendmail_path'),

            'smtp_host' => $this->input->post('smtp_host'),

            'smtp_port' => $this->input->post('smtp_port'),

            'smtp_user' =>""/* $this->encrypt->encode($this->input->post('smtp_user'))*/,

            'smtp_pass' =>"" /*$this->encrypt->encode($this->input->post('smtp_pass'))*/,

            'site_title' => $this->input->post('site_title'),

            'cookie_expires' => $this->input->post('cookie_exp'),

            'password_link_expires' => $this->input->post('password_exp'),

            'activation_link_expires' => $this->input->post('activation_exp'),

            'disable_all' => ($this->input->post('disable_all') == "" ? 0 : 1),

            'site_disabled_text' => $this->input->post('site_disabled_text'),

            'remember_me_enabled' => ($this->input->post('remember_me_enabled') != "" ? true : false),

            'recaptcha_enabled' => ($this->input->post('recaptcha_enabled') != "" ? true : false)

        );



        $this->load->model('adminpanel/site_settings_model');

        if ($this->site_settings_model->save_settings($data)) {

            $this->session->set_flashdata('success', '<p>'. $this->lang->line('settings_update') .'</p>');

        }



        redirect('/adminpanel/site_settings');

    }



    public function clear_sessions() {

        $this->load->model('adminpanel/site_settings_model');

        if ($this->site_settings_model->clear_sessions()) {

            $this->session->set_flashdata('sessions_message', '<p>'. $this->lang->line('sessions_cleared') .'</p>');

        }else{

            $this->session->set_flashdata('sessions_message', '<p>'. $this->lang->line('sessions_not_cleared') .'</p>');

        }



        redirect('/adminpanel/site_settings#clear_sessions');

    }



}



/* End of file site_settings.php */

/* Location: ./application/controllers/adminpanel/site_settings.php */