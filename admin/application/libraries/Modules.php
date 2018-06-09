<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#
#	CodeIgniter Template Engine
#
#	@author		Phu Qui Le <lephuqui@gmail.com>
#	@package	Template class
#	@version	1.0
#	@since		08/25/2012
#	@files		Template.php, Modules.php
#
#	INSTALLATION
#
#	1. Copy Template.php and Modules.php into application/libraries
#	2. Autoload it in application/config/autoload.php
#
#	*****************************************************************
#	*	$autoload['libraries'] = array('template', 'modules');		*
#	*****************************************************************

class Modules 
{
	
	function __construct() {
		$this->CI =& get_instance();
	}
	
	function __call($method, $args)	{
		#
		#	include file which has the same name as the method.
		#
		require_once(APPPATH.'controllers/modules/'.$method.EXT);	
		#
		#	execute method and get data.
		#
		$mod_data = $method($args);
		#
		#	load a view.
		#
		return $this->CI->load->view('modules/'.$method, $mod_data, TRUE);
    }
}

#	End of file Modules.php
#	Location: /application/libraries/Modules.php
?>