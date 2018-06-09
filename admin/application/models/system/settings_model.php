<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model {

    public static $db_config = array();

    public function __construct() {
        parent::__construct();
        
        $this->_load_settings();
    }

    /**
     *
     * _load_settings: load the settings from database
     *
     *
     */

    protected function _load_settings() {
        $this->load->library('cache');
        $data = array()/*$this->cache->get('settings')*/;
        if (empty($data)) {
            $this->db->select('login_enabled, register_enabled, install_enabled, members_per_page, admin_email, home_page, active_theme,
            login_attempts, recaptcha_theme, email_protocol, sendmail_path, smtp_host, smtp_port, smtp_user, smtp_pass, site_title, cookie_expires,
            password_link_expires, activation_link_expires, disable_all, site_disabled_text, remember_me_enabled, recaptcha_enabled');
            $this->db->from('settings');
            $this->db->limit(1);
            $query = $this->db->get();

            if($query->num_rows() == 1) {
                $row = $query->row();
                self::$db_config['login_enabled'] = $row->login_enabled;
                self::$db_config['registration_enabled'] = $row->register_enabled;
                self::$db_config['install_enabled'] = $row->install_enabled;
                self::$db_config['members_per_page'] = $row->members_per_page;
                self::$db_config['admin_email_address'] = $row->admin_email;
                self::$db_config['home_page'] = $row->home_page;
                self::$db_config['active_theme'] = $row->active_theme;
                self::$db_config['login_attempts'] = $row->login_attempts;
                self::$db_config['email_protocol'] = $row->email_protocol;
                self::$db_config['sendmail_path'] = $row->sendmail_path;
                self::$db_config['smtp_host'] = $row->smtp_host;
                self::$db_config['smtp_port'] = $row->smtp_port;
                self::$db_config['smtp_user'] = $row->smtp_user;
                self::$db_config['smtp_pass'] = $row->smtp_pass;
                self::$db_config['site_title'] = $row->site_title;
                self::$db_config['recaptcha_theme'] = $row->recaptcha_theme;
                self::$db_config['cookie_expires'] = $row->cookie_expires;
                self::$db_config['password_link_expires'] = $row->password_link_expires;
                self::$db_config['activation_link_expires'] = $row->activation_link_expires;
                self::$db_config['disable_all'] = $row->disable_all;
                self::$db_config['site_disabled_text'] = $row->site_disabled_text;
                self::$db_config['remember_me_enabled'] = $row->remember_me_enabled;
                self::$db_config['recaptcha_enabled'] = $row->recaptcha_enabled;

                $this->cache->write(self::$db_config, 'settings');
            }
        }else{
            self::$db_config['login_enabled'] = $data['login_enabled'];
            self::$db_config['registration_enabled'] = $data['registration_enabled'];
            self::$db_config['install_enabled'] = $data['install_enabled'];
            self::$db_config['members_per_page'] = $data['members_per_page'];
            self::$db_config['admin_email_address'] = $data['admin_email_address'];
            self::$db_config['home_page'] = $data['home_page'];
            self::$db_config['active_theme'] = $data['active_theme'];
            self::$db_config['login_attempts'] = $data['login_attempts'];
            self::$db_config['email_protocol'] = $data['email_protocol'];
            self::$db_config['sendmail_path'] = $data['sendmail_path'];
            self::$db_config['smtp_host'] = $data['smtp_host'];
            self::$db_config['smtp_port'] = $data['smtp_port'];
            self::$db_config['smtp_user'] = $data['smtp_user'];
            self::$db_config['smtp_pass'] = $data['smtp_pass'];
            self::$db_config['site_title'] = $data['site_title'];
            self::$db_config['recaptcha_theme'] = $data['recaptcha_theme'];
            self::$db_config['cookie_expires'] = $data['cookie_expires'];
            self::$db_config['password_link_expires'] = $data['password_link_expires'];
            self::$db_config['activation_link_expires'] = $data['activation_link_expires'];
            self::$db_config['disable_all'] = $data['disable_all'];
            self::$db_config['site_disabled_text'] = $data['site_disabled_text'];
            self::$db_config['remember_me_enabled'] = $data['remember_me_enabled'];
            self::$db_config['recaptcha_enabled'] = $data['recaptcha_enabled'];
        }
    }
    
}

/* End of file settings_model.php */
/* Location: ./application/models/system/settings_model.php */