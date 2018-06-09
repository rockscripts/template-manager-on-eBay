<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropzone extends CI_Controller {

	 
	public function index()
    {
	$this->load->view('dropzone-view');
    }

    function upload()
    {
	if (!empty($_FILES))
	{

	    $tempFile = $_FILES['file']['tmp_name'];

	    $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/server/php/files/store_design/listing_design/'.$this->session->userdata( 'user_id' ).'/';

	    $targetFile = $targetPath . $_FILES['file']['name'];

	    move_uploaded_file($tempFile, $targetFile);
	}
    }

}
 