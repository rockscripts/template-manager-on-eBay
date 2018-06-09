<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backup_export_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * get_userdata_by_id: select the row for this member id
     *
     * @param int $id the member id
     * @return mixed
     *
     */

    public function get_members() {
        $this->db->select('user.id, user.username, user.email, user.first_name, user.last_name, user.date_registered,
        user.last_login, user.active, user.banned, role.name as role_name');
        $this->db->from('user');
        $this->db->join('role', 'role.id = user.role_id');

        $query = $this->db->get();

        $members = "Username|E-mail address|First name|Last name|Registration date|Last login|Active?|Banned?|Role\r\n";

        if ($query->num_rows() > 0) {
            foreach($query->result() as $row) {
                $members .= $row->username ."|". $row->email ."|". $row->first_name ."|".$row->last_name ."|". $row->date_registered .
                "|". $row->last_login ."|". $row->active ."|". $row->banned ."|". $row->role_name ."\r\n";
            }
        }else{
            $members = "no results";
        }

        return $members;
    }


}

/* End of file backup_export_model.php */
/* Location: ./application/models/adminpanel/backup_export_model.php */