<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// $path_to_zend = str_replace('/', '\\', APPPATH) . 'zend\\'; //windows
 $path_to_zend = APPPATH . '/zend/'; //linux
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . $path_to_zend);
require_once ($path_to_zend .'Zend/Loader.php');
