<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Default_Page extends Admin_Controller

{
public

function __construct()
{
parent::__construct();
validate_application();
redirect('adminpanel/list_members');
}
} /* End of file default_page.php */ /* Location: ./application/controllers/adminpanel/default_page.php */