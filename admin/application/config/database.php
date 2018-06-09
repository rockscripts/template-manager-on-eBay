<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';  
$db['default']['username'] = 'root';
$db['default']['password'] = '';  
$db['default']['database'] = 'template_manager';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = APPPATH .'cache';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

/*use wordpress database*/
$db['rockscripts']['hostname'] = 'localhost';  
$db['rockscripts']['username'] = 'root';
$db['rockscripts']['password'] = '';  
$db['rockscripts']['database'] = 'rocksc5_store';
$db['rockscripts']['dbdriver'] = 'mysql';
$db['rockscripts']['dbprefix'] = '';
$db['rockscripts']['pconnect'] = TRUE;
$db['rockscripts']['db_debug'] = TRUE;
$db['rockscripts']['cache_on'] = FALSE;
$db['rockscripts']['cachedir'] = APPPATH .'cache';
$db['rockscripts']['char_set'] = 'utf8';
$db['rockscripts']['dbcollat'] = 'utf8_general_ci';
$db['rockscripts']['swap_pre'] = '';
$db['rockscripts']['autoinit'] = TRUE;
$db['rockscripts']['stricton'] = FALSE;

/*use magento database*/
$db['webstore']['hostname'] = 'localhost';  
$db['webstore']['username'] = 'rocksc5_dm';
$db['webstore']['password'] = 'Rock!423';  
$db['webstore']['database'] = 'rocksc5_webstores';
$db['webstore']['dbdriver'] = 'mysql';
$db['webstore']['dbprefix'] = '';
$db['webstore']['pconnect'] = TRUE;
$db['webstore']['db_debug'] = TRUE;
$db['webstore']['cache_on'] = FALSE;
$db['webstore']['cachedir'] = APPPATH .'cache';
$db['webstore']['char_set'] = 'utf8';
$db['webstore']['dbcollat'] = 'utf8_general_ci';
$db['webstore']['swap_pre'] = '';
$db['webstore']['autoinit'] = TRUE;
$db['webstore']['stricton'] = FALSE;
/* End of file database.php */
/* Location: ./application/config/database.php */