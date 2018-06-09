<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class List_members extends Admin_Controller {



    public function __construct()

    {

        parent::__construct();

        // pre-load
validate_application();
        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->load->model('adminpanel/list_members_model');
        $this->load->model('membership/login_model');
$this->load->model('Storedesign_model');
    }



    /**

     *

     * index: main function with search and pagination built into it

     *

     * @param int|string $order_by order by this data column

     * @param string $sort_order asc or desc

     * @param string $search search type, used in index to determine what to display

     * @param int $offset the offset to be used for selecting data

     */



    public function index($order_by = "username", $sort_order = "asc", $search = "all", $offset = 0) {

        if (!is_numeric($offset)) {

            redirect('/adminpanel/list_members');

        }

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

        // validation

        $this->load->library('pagination');

        if ($search == "post") {

            $this->session->unset_userdata(array('s_username' => '', 's_first_name' => '', 's_last_name' => '', 's_email' => ''));

            $this->form_validation->set_error_delimiters('', '');

            $this->form_validation->set_rules('username', 'username', 'trim|max_length[16]');

            $this->form_validation->set_rules('first_name', 'first name', 'trim|max_length[40]');

            $this->form_validation->set_rules('last_name', 'last name', 'trim|max_length[60]');

            $this->form_validation->set_rules('email', 'email', 'trim|max_length[255]');



            if (empty($_POST['username']) && empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['email'])) {

                $this->session->set_flashdata('error', '<p>'. $this->lang->line('enter_search_data') .'</p>');

                redirect('/adminpanel/list_members/');

                exit();

            }elseif (!$this->form_validation->run()) {

                $this->session->set_flashdata('error', validation_errors());

                redirect('/adminpanel/site_settings');

                exit();

            }



            $search_session = array(

                's_username'  => $this->input->post('username'),

                's_first_name'     => $this->input->post('first_name'),

                's_last_name' => $this->input->post('last_name'),

                's_email' => $this->input->post('email')

            );

            $this->session->set_userdata($search_session);



            $base_url = site_url('adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/session');

            $search_data = array('username' => $this->input->post('username'), 'first_name' => $this->input->post('first_name'), 'last_name' => $this->input->post('last_name'), 'email' => $this->input->post('email'));

            $content_data['total_rows'] = $config['total_rows'] = $this->list_members_model->count_all_search_members($search_data);

            $content_data['search'] = "session";



        }elseif($search == "session") {

            // search result is found in session: paginate accordingly (keep only the search results in the list)

            $base_url = site_url('adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/session');

            $search_data = array('username' => $this->session->userdata('s_username'), 'first_name' => $this->session->userdata('s_first_name'), 'last_name' => $this->session->userdata('s_last_name'), 'email' => $this->session->userdata('s_email'));

            $content_data['total_rows'] = $config['total_rows'] = $this->list_members_model->count_all_search_members($search_data);

            $content_data['search'] = "session";



        }else{

            // regular listing, no search done or found in session

            $unset_search_session = array('s_username' => '', 's_first_name' => '', 's_last_name' => '', 's_email' => '');

            $this->session->unset_userdata($unset_search_session);

            $content_data['total_rows'] = $config['total_rows'] = $this->list_members_model->count_all_members();

            $base_url = site_url('adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/all');

            $search_data = array();

            $content_data['search'] = "all";

        }



        // set content data

        $per_page = Settings_model::$db_config['members_per_page'];

        $data = $this->list_members_model->get_members($per_page, $offset, $order_by, $sort_order, $search_data);



        if (!empty($data)) {

            $content_data['members'] = $data;

        }



        $content_data['offset'] = $offset;

        $content_data['order_by'] = $order_by;

        $content_data['sort_order'] = $sort_order;



        // set pagination config data

        $config['uri_segment'] = '7';

        $config['base_url'] = $base_url;

        $config['per_page'] = Settings_model::$db_config['members_per_page'];

        $config['prev_tag_open'] = ''; // removes &nbsp; at beginning of pagination output

        $config['full_tag_open'] = '<div class="pagination"><ul>';

        $config['full_tag_close'] = '</ul></div>';

        $config['num_tag_open'] = $config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = '<li>';

        $config['num_tag_close'] = $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="javascript:"><strong>';

        $config['cur_tag_close'] = '</strong></a></li>';

        $this->pagination->initialize($config);



        // set layout data

       /* $this->template->set_theme('adminpanel');

        $this->template->set_layout('adminpanel');

        $this->template->title('admin panel :: list members');

        $this->process_partial('header', 'adminpanel/header');

        $this->process_partial('footer', 'adminpanel/footer');

        $this->process_template_build('adminpanel/list_members', $content_data);*/
$this->template->load('adminpanel/list_members', $content_data);   
    }

public function sign_in()
{
  $user_name = $this->input->get('username');
  $member = $this->list_members_model->get_member($user_name);
  if(is_array($member)):
        $this->session->set_userdata('logged_in', true);
        $this->session->set_userdata('username', $user_name);
        $this->session->set_userdata('user_id', $member["user_id"]); 
        $this->session->set_userdata('role_id', $member["role_id"]); // used to grant access to the adminpanel section
        $this->session->set_userdata('application', "design-manager");  
        $user_id_ebay_design = $this->login_model->get_id_ebay_design($member["user_id"] );
                      $user_data = $this->login_model->get_user_data_session_required($member["user_id"],$user_id_ebay_design);
                      $user_id_listing_design = $user_data->id_listing_design;
                      $user_id_home_design = $user_data->id_home_design;
                      $this->session->set_userdata('id_ebay_design', $user_id_ebay_design);
                      $this->session->set_userdata('id_listing_design', $user_id_listing_design);
                      $this->session->set_userdata('id_home_design', $user_id_home_design);
                      $store_settings = $this->Storedesign_model->StoreSettingDetails($user_id_ebay_design, $member["user_id"]);      
                      $this->session->set_userdata('currency', $store_settings['currency']);
      redirect('/');
  endif;
  
 
}

    /**

     *

     * demote_member: demote member from adminpanel

     *

     * @param int $id the id of the member to be deleted

     * @param string $username the username of the member involved

     * @param int $offset the offset to be used for selecting data

     * @param int $order_by order by this data column

     * @param string $sort_order asc or desc

     * @param string $search search type, used in index to determine what to display

     *

     */



    public function demote_member($id, $username, $offset, $order_by, $sort_order, $search) {

        if ($this->list_members_model->get_username_by_id($id) == ADMINISTRATOR) {

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('admin_nodemote') .'</p>');

            redirect('/adminpanel/list_members/index');

            return;

        }elseif ($this->list_members_model->demote_member($id)) {

            $this->session->set_flashdata('success', '<p>'. sprintf($this->lang->line('member_demoted'), $username, $id) .'</p>');

        }

       redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    /**

     *

     * promote_member: promote member from adminpanel

     *

     * @param int $id the id of the member to be deleted

     * @param string $username the username of the member involved

     * @param int $offset the offset to be used for selecting data

     * @param int $order_by order by this data column

     * @param string $sort_order asc or desc

     * @param string $search search type, used in index to determine what to display

     *

     */



    public function promote_member($id, $username, $offset, $order_by, $sort_order, $search) {

        if ($this->list_members_model->get_username_by_id($id) == ADMINISTRATOR) {

            $this->session->set_flashdata('error', $this->lang->line('admin_nodemote') .'</p>');

            redirect('/adminpanel/list_members/index');

            return;

        }elseif ($this->list_members_model->promote_member($id)) {

            $this->session->set_flashdata('success', '<p>'. sprintf($this->lang->line('member_promoted'), $username, $id) .'</p>');

        }

        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    /**

     *

     * toggle_ban: (un)ban member from adminpanel

     *

     * @param int $id the id of the member to be deleted

     * @param string $username the username of the member involved

     * @param int $offset the offset to be used for selecting data

     * @param int $order_by order by this data column

     * @param string $sort_order asc or desc

     * @param string $search search type, used in index to determine what to display

     * @param bool $banned ban or unban?

     *

     */



    public function toggle_ban($id, $username, $offset, $order_by, $sort_order, $search, $banned) {

        if ($this->list_members_model->get_username_by_id($id) == ADMINISTRATOR) {

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('admin_noban') .'</p>');

            redirect('/adminpanel/list_members/index');

            return;

        }elseif ($this->list_members_model->toggle_ban($id, $banned)) {

            $banned ? $banned = $this->lang->line('unbanned') : $banned = $this->lang->line('banned');

            $this->session->set_flashdata('success', '<p>'. sprintf($this->lang->line('toggle_ban'), $username) . $banned .'</p>');

        }

        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    /**

     *

     * toggle_active: (de)activate member from adminpanel

     *

     * @param int $id the id of the member to be deleted

     * @param string $username the username of the member involved

     * @param int $offset the offset to be used for selecting data

     * @param int $order_by order by this data column

     * @param string $sort_order asc or desc

     * @param string $search search type, used in index to determine what to display

     * @param bool $active or deactivate?

     *

     */



    public function toggle_active($id, $username, $offset, $order_by, $sort_order, $search, $active) {

        if ($this->list_members_model->get_username_by_id($id) == ADMINISTRATOR) {

            $this->session->set_flashdata('error', '<p>'. $this->lang->line('admin_noactivate') .'</p>');

            redirect('/adminpanel/list_members/index');

            return;

        }elseif ($this->list_members_model->toggle_active($id, $active)) {

            $active ? $active = $this->lang->line('deactivated') : $active = $this->lang->line('activated');

            $this->session->set_flashdata('success', '<p>'. sprintf($this->lang->line('toggle_active'), $username) . $active .'</p>');

        }

        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    public function mass_action($offset, $order_by, $sort_order, $search) {

        if (!isset($_POST['mass']) || empty($_POST['mass'])) {

            $this->session->set_flashdata('error', '<p>Nothing selected.</p>');

            redirect('adminpanel/list_members');

        }



        foreach ($_POST['mass'] as $value) {

            $value = trim($value);

            if( ! $this->form_validation->is_natural_no_zero($value)) {

                $this->session->set_flashdata('error', '<p>Illegal input detected.</p>');

                redirect('adminpanel/list_members');

            }

        }


        if ($_POST['mass_action'] == 'delete') {

            $this->_delete($offset, $order_by, $sort_order, $search);

        }elseif ($_POST['mass_action'] == 'ban') {

            $this->_ban($offset, $order_by, $sort_order, $search);

        }elseif ($_POST['mass_action'] == 'unban') {

            $this->_unban($offset, $order_by, $sort_order, $search);

        }elseif ($_POST['mass_action'] == 'activate') {

            $this->_activate($offset, $order_by, $sort_order, $search);

        }elseif ($_POST['mass_action'] == 'deactivate') {

            $this->_deactivate($offset, $order_by, $sort_order, $search);

        }

    }



    private function _delete($offset, $order_by, $sort_order, $search) {

        if (!$this->list_members_model->delete_checked($_POST['mass'])) {

            $this->session->set_flashdata('error', '<p>Nobody was deleted.</p>');

        }else{

            $this->session->set_flashdata('success', '<p>Deleted '. count($_POST['mass']) .' members.</p>');

        }



        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    private function _ban($offset, $order_by, $sort_order, $search) {

        if (!$this->list_members_model->ban_checked($_POST['mass'])) {

            $this->session->set_flashdata('error', '<p>Nobody was banned.</p>');

        }else{

            $this->session->set_flashdata('success', '<p>Banned '. count($_POST['mass']) .' members.</p>');

        }



        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    private function _unban($offset, $order_by, $sort_order, $search) {

        if (!$this->list_members_model->unban_checked($_POST['mass'])) {

            $this->session->set_flashdata('error', '<p>Nobody was unbanned.</p>');

        }else{

            $this->session->set_flashdata('success', '<p>Unbanned '. count($_POST['mass']) .' members.</p>');

        }



        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    private function _activate($offset, $order_by, $sort_order, $search) {

        if (!$this->list_members_model->activate_checked($_POST['mass'])) {

            $this->session->set_flashdata('error', '<p>Nobody was activated.</p>');

        }else{

            $this->session->set_flashdata('success', '<p>Activated '. count($_POST['mass']) .' members.</p>');

        }



        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }



    private function _deactivate($offset, $order_by, $sort_order, $search) {

        if (!$this->list_members_model->deactivate_checked($_POST['mass'])) {

            $this->session->set_flashdata('error', '<p>Nobody was deactivated.</p>');

        }else{

            $this->session->set_flashdata('success', '<p>Deactivated '. count($_POST['mass']) .' members.</p>');

        }



        redirect('/adminpanel/list_members/index/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $offset);

    }

}



/* End of file list_members.php */

/* Location: ./application/controllers/adminpanel/list_members.php */