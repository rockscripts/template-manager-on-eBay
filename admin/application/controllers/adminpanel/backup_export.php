<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Backup_export extends Admin_Controller {



    public function __construct()

    {

        parent::__construct();

        // pre-load
validate_application();
        $this->load->helper('form');

        $this->load->library('form_validation');

    }



    public function index() 
    {
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
       /* $this->template->set_theme('adminpanel');

        $this->template->set_layout('adminpanel');

        $this->template->title('admin panel :: '. $this->lang->line('backup_and_export'));

        $this->process_partial('header', 'adminpanel/header');

        $this->process_partial('footer', 'adminpanel/footer');

        $this->process_template_build('adminpanel/backup_export');*/
        $this->template->load('adminpanel/backup_export', $content_data); 

    }



    /**

     *

     * export_members: generate list of members as temp text file

     *

     *

     */



    public function export_members() {

        // select data

        $this->load->model('adminpanel/backup_export_model');

        $data = $this->backup_export_model->get_members();

        

        // does not work with sendmail !!!

        $this->load->library('email');

        // load the file helper and write the file to your server

        $this->load->helper('file');

        $this->load->library('zip');



        $file_date = date('Y-m-d');

        $filename = "members-". $file_date .".txt";

        $foldername = "tmp/memberlist/";

        $this->zip->add_data($filename, addslashes($data));

        $this->zip->archive(APPPATH . $foldername . $filename .'.zip');



        $this->email->to(Settings_model::$db_config['admin_email_address']);

        $this->email->from(Settings_model::$db_config['admin_email_address']);

        $this->email->subject($this->lang->line('export_e-mail_text_title'));

        $this->email->message($this->lang->line('export_e-mail_text'));

        $this->email->attach(APPPATH . $foldername . $filename .".zip");



        if ($this->email->send())

        {

            $this->session->set_flashdata('success', '<p>'. $this->lang->line('members_export_success') .'</p>');

        }else{

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('members_export_failed') .'</p>');

        }

        delete_files(APPPATH . $foldername);

        $this->email->clear();



        redirect("/adminpanel/backup_export");

    }



    /**

     *

     * export_database: save data output for the whole database to temp text file

     *

     *

     */



    public function export_database() {

        $this->load->helper('file');

        $this->load->library('zip');

        $this->load->dbutil();



        $file_date = date('Y-m-d_h-i-s');

        //$filename = "database_backup-". $file_date .".txt";



        $prefs = array(

                'format'      => 'txt',             // gzip, zip, txt

                'filename'    => "database_backup-". $file_date .".sql",    // File name - NEEDED ONLY WITH ZIP FILES

                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file

                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file

                'newline'     => "\n"               // Newline character used in backup file

              );



        $backup =& $this->dbutil->backup($prefs);



        

        $foldername = "tmp/db_backup/";

        $this->zip->add_data($prefs['filename'], $backup);

        $this->zip->archive(APPPATH . $foldername . $prefs['filename'] .".zip");



        // does not work with sendmail !!!

        $this->load->library('email');



        $this->email->to(Settings_model::$db_config['admin_email_address']);

        $this->email->from(Settings_model::$db_config['admin_email_address']);

        $this->email->subject($this->lang->line('export_e-mail_text_title'));

        $this->email->message($this->lang->line('export_e-mail_text'));

        $this->email->attach(APPPATH . $foldername . $prefs['filename'] .".zip");



        if ($this->email->send())

        {

            $this->session->set_flashdata('success', '<p>'. $this->lang->line('database_export_success') .'</p>');

        }else{

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('database_export_failed') .'</p>');

        }

        unlink(APPPATH . $foldername . $prefs['filename'] .".zip");

        $this->email->clear();



        redirect("/adminpanel/backup_export");

    }



}



/* End of file backup_export.php */

/* Location: ./application/controllers/adminpanel/backup_export.php */