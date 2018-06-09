<?php



/**

 * GController

 * This is the base class for all controllers

 * Every controller will extend this class

 */

class GController {



    protected $db;



    /**

     * Constructor. Initialize database connection

     */

    public function __construct() {

        include _DOC_ROOT . 'includes/db.php';

        $this->db = new DB;

        $this->db->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    }



    /**

     * Includes the view file and display the data

     *

     * @param string $view_file

     * @param array $data

     */

    protected function view($view_file, $data = '') {

        if (is_array($data)) {

            extract($data);

        }

        $file = _DOC_ROOT . 'templates/' . $view_file . '.php';

        if (file_exists($file)) {

            include $file;

        } else {

            die("Cannot include $view_file");

        }

    }



    /**

     * Check for user login

     * if user & password are set in config, show login form

     */

    protected function check_user() {

        if (ADMIN_USER == '' && ADMIN_PASS == '') {

            return;

        }

        if (empty($_SESSION['admin'])) {

            redirect('user');

        }

    }



    /**

     * Get menu from database, and generate html nested list

     *

     * @param int $group_id

     * @param string $attr

     * @return string

     */

    protected function easymenu($group_id, $attr = '') {

        include_once _DOC_ROOT . 'includes/tree.php';
        print_r($group_id );
        die('**********' );
        $tree = new Tree;
        if(is_array($group_id))
        {
          $group_id = $group_id['group_id'];
        }
       

        $sql = sprintf(

            'SELECT * FROM %s WHERE group_id = %s ORDER BY %s, %s',

            MENU_TABLE,

            $group_id,

            MENU_PARENT,

            MENU_POSITION

        );
       
        $menu = $this->db->GetAll($sql);

        foreach ($menu as $row) {

            $label = '<a href="'.$row[MENU_URL].'">';

            $label .= $row[MENU_TITLE];

            $label .= '</a>';



            $li_attr = '';

            if ($row[MENU_CLASS]) {

                $li_attr = ' class="'.$row[MENU_CLASS].'"';

            }

            $tree->add_row($row[MENU_ID], $row[MENU_PARENT], $li_attr, $label);

        }

        $menu = $tree->generate_list($attr);

        return $menu;

    }
  

}