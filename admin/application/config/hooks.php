<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */

$hook['post_controller'] = array(     // 'post_controller' indicated execution of hooks after controller is finished
    'class' => 'Db_log',             // Name of Class
    'function' => 'logQueries',     // Name of function to be executed in from Class
    'filename' => 'db_log.php',    // Name of the Hook file
    'filepath' => 'hooks'         // Name of folder where Hook file is stored
);