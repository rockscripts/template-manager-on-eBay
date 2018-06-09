<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//https://etemplate.com/store_design/installation/fetch_token?step=2

class Login extends Membership_Controller 
{
    public function __construct()
    {
        parent::__construct();
        // pre-load
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('recaptcha');
        $this->lang->load('recaptcha');
        $this->load->library('../controllers/PhpAss');
        $this->load->model('Ebaydesigns_model');
        $this->load->model('Configuration_model');
        $this->load->model('Storedesign_model');
    }

    function index() 
    {
        $this->template->set_theme(Settings_model::$db_config['active_theme']);
        $this->template->set_layout('main');
        $this->template->title('login');
        $this->process_partial('header', 'membership/header');
        $this->process_partial('footer', 'membership/footer');
        $this->process_template_build('membership/login');
    }
    /**
     * validate: validate login after input fields have met requirements
     */

    public function validate() {

        if (Settings_model::$db_config['disable_all'] == 1 && $this->input->post('username') != ADMINISTRATOR) {

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('site_disabled') .'</p>');

            redirect('/membership/login');

            exit();

        }



        // form input validation

        $this->form_validation->set_error_delimiters('<p>', '</p>');

        $this->form_validation->set_rules('username', 'username', 'trim|required');

        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->session->userdata('login_attempts') > 5) {

            if (Settings_model::$db_config['recaptcha_enabled'] == true) {

                $this->form_validation->set_rules('recaptcha_response_field', 'captcha response field', 'required|check_captcha');

            }

        }



        if (!$this->form_validation->run()) {
//echo validation_errors();die();   
            $this->session->set_flashdata('error', validation_errors());

            redirect('/membership/login');

            exit();

        }
        $this->load->model('membership/login_model');

        $data = $this->login_model->validate_login($this->input->post('username'), $this->input->post('password'));       

        if ($data == "banned") 
        { // check banned

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('access_denied') .'</p>');
            redirect('/membership/login');

        }elseif (is_array($data)) 
            {

            if ($data['active'] == 0) 
            { // check active

                $this->session->set_flashdata('error', '<p>'. $this->lang->line('activate_account') .'</p>');
                redirect('/membership/login');
                exit();
            }
            else
            {
                $this->load->helper('cookie');
                if ($this->input->post('remember_me') && !get_cookie('unique_token') && Settings_model::$db_config['remember_me_enabled'] == true) 
                {
                    setcookie("unique_token", $data['nonce'] . substr(uniqid(mt_rand(), true), -10) . $data['cookie_part'], time() + Settings_model::$db_config['cookie_expires'], '/', $_SERVER['SERVER_NAME'], false, false);
                }

                // set session data

                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('username', $data['username']);
                $this->session->set_userdata('user_id', $data['id']); 
                $this->session->set_userdata('role_id', $data['role_id']); // used to grant access to the adminpanel section
                $this->session->set_userdata('application', "design-manager"); 
                // reset login attempts to 0

                $this->login_model->reset_login_attempts($data['username']);

                $this->session->unset_userdata('login_attempts');
                unset($_SESSION["pages_to_import"]);
                unset($_SESSION["current_page_to_import"]);
                /*check if have store installed*/
                $is_installed =  $this->login_model->check_if_store_is_installed($data['id']);
                if(!$is_installed):
                    if($this->login_model->check_if_design_was_added_before($data['id'])):
                        $user_id_ebay_design = $this->login_model->get_id_ebay_design($data['id'] );
                        $this->session->set_userdata('id_ebay_design', $user_id_ebay_design);
                        redirect('/store_design/installation/install');
                        else:
                               //Ebaydesigns_model
                  $user_id_home_design = $this->Ebaydesigns_model->duplicate_default_home_design();
                  $user_id_listing_design = $this->Ebaydesigns_model->duplicate_default_listing_design();
                  $id_logo_prepared = $this->Ebaydesigns_model->prepare_logo($data['id'] , $user_id_home_design);
                  /*update default urls*/
                  $client_hosting_base_path = $this->Configuration_model->get_configuration_value('client-hosting'); 
                  $client_hosting_ajax_files = $this->Configuration_model->get_configuration_value('ajax-client-design-files');
                  $this->login_model->update_home_design_hosting_client_urls($user_id_home_design, $client_hosting_base_path.$data['id'],$client_hosting_ajax_files.$data['id']."/");
                  $this->login_model->update_listing_design_hosting_client_urls($user_id_listing_design, $client_hosting_base_path.$data['id'],$client_hosting_ajax_files.$data['id']."/");
                  
                  $user_id_ebay_design = $this->Ebaydesigns_model->add_ebay_design($user_id_home_design, $user_id_listing_design, $id_logo_prepared,$data['id']);
                  $this->Ebaydesigns_model->update_prepared_logo($id_logo_prepared, $user_id_ebay_design);
                  $this->session->set_userdata('id_ebay_design', $user_id_ebay_design);
                  $this->session->set_userdata('id_listing_design', $user_id_listing_design);
                  $this->session->set_userdata('id_home_design', $user_id_home_design);
                  $store_settings = $this->Storedesign_model->StoreSettingDetails($user_id_ebay_design, $data['id']);      
                  $this->session->set_userdata('currency', $store_settings['currency']);
                  redirect('/store_design/installation/install?prepare_files=true');
                    endif;              
                  else:
                      $user_id_ebay_design = $this->login_model->get_id_ebay_design($data['id'] );
                      $user_data = $this->login_model->get_user_data_session_required($data['id'] ,$user_id_ebay_design);
                      $user_id_listing_design = $user_data->id_listing_design;
                      $user_id_home_design = $user_data->id_home_design;
                      $this->session->set_userdata('id_ebay_design', $user_id_ebay_design);
                      $this->session->set_userdata('id_listing_design', $user_id_listing_design);
                      $this->session->set_userdata('id_home_design', $user_id_home_design);
                      $store_settings = $this->Storedesign_model->StoreSettingDetails($user_id_ebay_design, $data['id']);      
                      $this->session->set_userdata('currency', $store_settings['currency']);
                endif;
                redirect('private/'. Settings_model::$db_config['home_page']);
            }

        }
        else
        {
            redirect('membership/login?user_found=false');
        }

    }





}



/* End of file login.php */

/* Location: ./application/controllers/membership/login.php */