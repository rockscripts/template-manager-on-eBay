<?php
if (!isset($_SESSION)) {
    @session_start();
}

class Uploader {

	private $config;
	private $table = DB_TABLE;
	private $upload_dir;

	//Constructor function
	public function __construct()
	{	
		//Connect to database
		$db = @mysql_connect(DB_HOST , DB_USER , DB_PASS) or die("<h1>Error establishing a database connection</h1>");
		@mysql_select_db(DB_NAME , $db) or die("<h1>Error establishing a database connection</h1>");

		$this->upload_dir = UPLOAD_DIR;
	}

	//Save cropped thumbnail
	public function crop_thumbnail($data) {
		extract($data); 
		$path = dirname(__FILE__).'/'.$this->upload_dir;
		$this->crop($path.'thumbnail/'.$image, $path.$image, $w, $h, $x1, $y1, 1);

		return $this->get_full_url().'/'.$this->upload_dir.'thumbnail/'.$image.'?'.time();
	}
	public function crop($new_image, $image, $width, $height, $start_width, $start_height, $scale)
	{
		list($imagewidth, $imageheight, $imageType) = getimagesize($image);
		$imageType = image_type_to_mime_type($imageType);
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth, $newImageHeight);
		switch($imageType) {
			case "image/gif":
				$source=imagecreatefromgif($image); 
				break;
		    case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				$source=imagecreatefromjpeg($image); 
				break;
		    case "image/png":
			case "image/x-png":
				$source=imagecreatefrompng($image); 
				break;
	  	}
		imagecopyresampled($newImage, $source, 0, 0, $start_width, $start_height, $newImageWidth, $newImageHeight, $width, $height);
		switch($imageType) {
			case "image/gif":
		  		imagegif($newImage, $new_image); 
				break;
	      	case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
		  		imagejpeg($newImage, $new_image,90); 
				break;
			case "image/png":
			case "image/x-png":
				imagepng($newImage, $new_image);  
				break;
	    }
		chmod($new_image, 0777);
		return $new_image;
	}

	//Save image title & description
	public function save_info($data)
	{
		extract($data);
		if (!is_numeric($id))
			return FALSE;

		$title = mysql_real_escape_string($this->xss_clean($title));
		$description = mysql_real_escape_string($this->xss_clean($description));

		//MYSQL
		$query = "UPDATE $this->table SET title = '$title', description = '$description' WHERE id = $id LIMIT 1";
		if (@mysql_query($query)) 
			return TRUE;
		else return FALSE;
	}

	//Arange files
	public function sort($order)
	{
		parse_str($order, $order);
		foreach ($order['sort'] as $key => $id) {
			@mysql_query("UPDATE $this->table SET display_order = $key WHERE id = $id LIMIT 1");
		}
	}

	public function upload_limit($object_id) {
		$rows = 0;
		//MYSQL
		$result = @mysql_query("SELECT id FROM $this->table WHERE object_id = $object_id");
		if (@mysql_num_rows($result))
			$rows = mysql_num_rows($result);
		
		if ($rows <= UPLOAD_LIMIT-1)
			return FALSE;
		else 
			return TRUE;
	}

	//Get images form database
	public function load($object_id, $user_id = NULL, $full = FALSE, $type = 'all', $type_id = 1)
	{
		if (!is_numeric($object_id))
			return FALSE;

		$files = array();
		
		//MYSQL
		$user = ($user_id) ? "AND user_id = $user_id" : '';
		$type_id = ($type_id) ? "AND type_id = $type_id" : '';
		$type = ($type!='all') ? ($type=='images') ? "AND image = 1" : 'AND image = 0' : '';
		$result = @mysql_query("SELECT * FROM $this->table WHERE object_id = $object_id $user $type $type_id ORDER BY display_order ASC");
		if (@mysql_num_rows($result)) {
			while ($v = mysql_fetch_array($result)) {

				if ($full) {
					$files[] = array(
						'id'            => $v['id'],
						'object_id'     => $v['object_id'],
						'user_id'       => $v['user_id'],
						'type_id'       => $v['type_id'],
						'file'          => $v['file'],
						'title'         => $v['title'],
						'description'   => $v['description'],
						'date'          => $v['date'],
						'display_order' => $v['display_order'],
						'image'         => $v['image'],
						'filetype'      => $v['filetype'],
					);
				}
				else
				{	
					$upload_dir = $this->upload_dir;

					if (!empty($v['image'])) {
						$data = @getimagesize(dirname(__FILE__).'/'.$upload_dir.$v['file']);
					}
				
					$files[] = array(
						'id'           => $v['id'],
						'name'         => $v['file'],
						'title'        => $v['title'],
						'description'  => $v['description'],
						'thumbnailUrl' => $this->get_full_url().'/'.$upload_dir.'thumbnail/'.$v['file'],
						'url'          => $this->get_full_url().'/'.$upload_dir.$v['file'],
						'width'        => (!empty($data[0])) ? $data[0] : 0,
						'height'       => (!empty($data[1])) ? $data[1] : 0,
						'image'        => (!empty($v['image'])) ? true : false,
						'filetype'     => $v['filetype'],
						'object_id'    => $object_id
					);
				}
			}
		}

		return $files;
	}

	//Insert files to database
	public function process_uploaded_files($files, $object_id, $user_id = 0, $type_id = 1)
	{
		$result = array();
		$upload_dir = $this->upload_dir;
		$images = array('jpg', 'jpeg', 'png', 'gif');

		foreach ($files as $key => $file) {
			if (!empty($file->error))
				continue;

			$ext = $this->get_file_ext($file->name);
			
			if (in_array($ext, $images)) {
            	$size = @getimagesize($upload_dir.$file->name);
            	$is_image = true;
            }
            
            $title = preg_replace("/[^0-9a-zA-Z ]/", '', preg_replace('"\.('.$ext.')$"', '', $file->name));
            
            $fields = array(
				'object_id' => $object_id,
				'file'      => $file->name,
				'title'     => $title,
				'user_id'   => $user_id,
				'type_id'   => $type_id,
				'image'     => (!empty($is_image)) ? 1 : 0,
				'filetype'  => $ext
			);

            //MYSQL
			$query = "INSERT INTO  $this->table (" . implode(',', array_keys($fields)) . ")";
			
			foreach ($fields as $key => $field) 
				$values[] = '"' . mysql_real_escape_string($field) .'"';

			$values  = implode(',', $values);
		    $query .= " VALUES ($values)";
			
		    if (@mysql_query($query)) {
		    	$result[] = array(
					'id'           =>  mysql_insert_id(), // Insert ID !!
					'name'         => $file->name,
					'title'        => isset($file->title) ? $file->title : $title,
					'description'  => '',
					'object_id'    => $object_id,
					'user_id'      => $user_id,
					'type_id'      => $type_id,
					'width'        => @$size[0],
					'height'       => @$size[1],
					'image'        => (!empty($is_image)) ? 1 : 0,
					'filetype'     => $ext,
					'url'          => $this->get_full_url().'/'.$upload_dir.$file->name,
					'thumbnailUrl' => $this->get_full_url().'/'.$upload_dir.'thumbnail/'.$file->name.'?'.time()
				);
			}
        }
        return $result;
	}

	public function delete($file, $image = false)
	{
		echo $file.$image;
		if (!empty($image)) {
			@unlink(dirname(__FILE__).'/'.$this->upload_dir.$file);
			@unlink(dirname(__FILE__).'/'.$this->upload_dir.'thumbnail/'.$file);
		} else {
			@unlink(dirname(__FILE__).'/'.$this->upload_dir.$file);
		}

		$file = $this->xss_clean($file);
		//MYSQL
		return @mysql_query("DELETE FROM $this->table WHERE file = '$file' LIMIT 1");
	}

	//Delete all files from db & folder
	public function delete_all($object_id)
	{
		if (!is_numeric($object_id))
			return FALSE;

		$files = $this->load($object_id, NULL, TRUE);
		if ($files) {
			foreach ($files as $file) {
				if (empty($file['image'])) {
					@unlink(dirname(__FILE__).'/'.$this->upload_dir.$file['file']);
				} else {
					@unlink(dirname(__FILE__).'/'.$this->upload_dir.$file['file']);
					@unlink(dirname(__FILE__).'/'.$this->upload_dir.'thumbnail/'.$file['file']);
				}
			}
		}
		//MYSQL
		return @mysql_query("DELETE FROM $this->table WHERE object_id = '$object_id'");
	}

	public function get_file_ext($file) {
		$ext = strtolower($file[strlen($file)-4].$file[strlen($file)-3].$file[strlen($file)-2].$file[strlen($file)-1]);
		if ($ext[0] == '.') $ext = substr($ext, 1, 3);
		return $ext;
	}

	//Return full url
	public function get_full_url() {
        $https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0;
        return
            ($https ? 'https://' : 'http://').
            (!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
            (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
            ($https && $_SERVER['SERVER_PORT'] === 443 ||
            $_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
            substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }

	//XSS Clean
	public function xss_clean($val) {
		return htmlspecialchars(trim($val), ENT_QUOTES);
	}
}

$Uploader = new Uploader();

function add_uploader($id, $user_id = null, $type_id=1) {
	$object_id = $id;
	$user_id = $user_id;
	$type_id = $type_id;
	require_once(dirname(__FILE__).'/template.php');
}

function process_uploaded_files($files) {
	global $Uploader;
	$user_id = @$_GET['user_id'];
	$object_id = @$_GET['object_id'];
	$type_id = @$_GET['type_id'];
	return $Uploader->process_uploaded_files($files, $object_id, $user_id, $type_id);
}

function load_files($object_id, $type = 'all') {
	global $Uploader;
	return $Uploader->load($object_id, NULL, true, $type);
}

function show_files($object_id, $user_id = null, $type_id = 1, $files_type = 'all') {
	global $Uploader;

	if ($files_type == 'images' or $files_type == 'all') 
	{
		$files = $Uploader->load($object_id, $user_id, true, 'images', $type_id);
		if (!empty($files) and is_array($files)) {
			foreach ($files as $key => $file) 
				echo '<a href="files/'.$file['file'].'" data-lightbox="gallery-'.$file['object_id'].'" title="'.$file['title'].' - '.$file['description'].'"><img src="files/thumbnail/'.$file['file'].'" width="80" height="80"></a>';
			
		}
	} 
	if ($files_type == 'files' or $files_type == 'all')
	{
		$files = $Uploader->load($object_id, $user_id, true, 'files', $type_id);
		if (!empty($files) and is_array($files)) {
			echo '<ul class="attachements-list">';
			
			foreach ($files as $key => $file)
				echo '<li>
					<a href="files/'.$file['file'].'" title="'.$file['title'].'">
						<span class="filetype '.$file['filetype'].'"></span>
						<strong>'.$file['title'].'</strong>
					</a>
					'.$file['description'].'
				</li>';
				//echo '<li>
				//	<a href="files/'.$file['file'].'" title="'.$file['title'].' - '.$file['description'].'"><span class="filetype '.$file['filetype'].'"></span></a>
				//</li>';
			
			echo '</ul>';
		}
	}
}