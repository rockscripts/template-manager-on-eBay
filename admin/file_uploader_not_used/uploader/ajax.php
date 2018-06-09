<?php

require_once(dirname(__FILE__).'/config.php');   //Config
require_once(dirname(__FILE__).'/Uploader.php'); //Main php file

if (empty($_REQUEST['action'])) {
	$_GET['action'] = 'upload';
	$webcam = true;
}

//post actions
if (isset($_POST['action'])) {
	
	switch ($_POST['action']) {
		case 'save-snapshot':
			if ($Uploader->upload_limit($_POST['object_id'])) {
				echo json_encode(array('limit'=>true));
				die();
			}

			$images[0] = new stdClass();
			$images[0]->name = $_POST['image'];
			$images[0]->title = '';
			$files = $Uploader->process_uploaded_files($images, $_POST['object_id'], $_POST['user_id']);
			echo json_encode(array('files' => $files));
		break;
		case 'save-info':
			$Uploader->save_info( $_POST );
		break;
		case 'crop-thumbnail':
			echo json_encode(array('image'=>$Uploader->crop_thumbnail($_POST)));
		break;
		case 'sort':
			$Uploader->sort( $_POST['order'] );
		break;
		case 'delete':
			$Uploader->delete( $_POST['file'], $_POST['image'] );
		break;
		case 'delete-all':
			$Uploader->delete_all( $_POST['object_id'] );
		break;
	}
}

//get actions
if (isset($_GET['action'])) {
	
	switch ($_GET['action']) {
		case 'check-limit':
			if ($Uploader->upload_limit($_GET['object_id']))
				echo 'limit';
		break;
		case 'load':
			$files = $Uploader->load($_GET['object_id'], null, false);
			echo json_encode(array('files' => $files));
		break;

		case 'upload':
			if (empty($webcam) && $Uploader->upload_limit($_GET['object_id']))
				die('limit');
			
			error_reporting(E_ALL | E_STRICT);
			require_once(dirname(__FILE__).'/UploadHandler.php');
			
			$options = array(
				'upload_dir' => UPLOAD_DIR,
				//'param_name' => 'files1',
				'image_versions' => array(
					'' => array(
						'max_width'  => IMG_MAX_WIDTH,
                    	'max_height' => IMG_MAX_HEIGHT,
                  	),
                  	'thumbnail' => array(
                  	    'crop'       => true,
                  		'max_width'  => THUMBNAIL_WIDTH,
                  		'max_height' => THUMBNAIL_HEIGHT
	                )
                ),
				'accept_file_types' => '/\.('.ACCEPT_FILE_TYPES.')$/i',
			);
			$upload_handler = new UploadHandler($options);
		break;
	}
}