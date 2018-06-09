<?php



include 'base.php';



class Menu extends GController {



	/**

	 * Constructor. Check if 
     *  is logged in.

	 */

	public function __construct() {

		parent::__construct();

		$this->check_user();

	}



	/**

	 * Show menu manager

	 */

	public function index() {

		$group_id = 1;

		if (isset($_GET['group_id'])) {

			$group_id = (int)$_GET['group_id'];

		}

		$menu = $this->get_menu($group_id);

		$data['menu_ul'] = '<ul id="easymm"></ul>';

		if ($menu) {



			include _DOC_ROOT . 'includes/tree.php';

			$tree = new Tree;



			foreach ($menu as $row) {

				$tree->add_row(

					$row[MENU_ID],

					$row[MENU_PARENT],

					' id="menu-'.$row[MENU_ID].'" class="sortable"',

					$this->get_label($row)

				);

			}



			$data['menu_ul'] = $tree->generate_list('id="easymm"');

		}
		$data['group_id'] = $group_id;

		$data['group_title'] = $this->get_menu_group_title($group_id);

		$data['menu_groups'] = $this->get_menu_groups();

		$this->view('menu', $data);

	}



	/**

	 * Add menu action

	 * For use with ajax

	 * Return json data

	 */

	public function add() {

		if (isset($_POST['title'])) {

			$data[MENU_TITLE] = trim($_POST['title']);

			if (!empty($data[MENU_TITLE])) {

				$data[MENU_URL] = $_POST['url'];

				$data[MENU_CLASS] = $_POST['class'];

				$data[MENU_GROUP] = $_POST['group_id'];

				$data[MENU_POSITION] = $this->get_last_position($_POST['group_id']) + 1;

				if ($this->db->insert(MENU_TABLE, $data)) {

					$data[MENU_ID] = $this->db->Insert_ID();

					$response['status'] = 1;

					$li_id = 'menu-'.$data[MENU_ID];

					$response['li'] = '<li id="'.$li_id.'" class="sortable">'.$this->get_label($data).'</li>';

					$response['li_id'] = $li_id;
                    
				} else {

					$response['status'] = 2;

					$response['msg'] = 'Add menu error.';

				}

			} else {

				$response['status'] = 3;

			}
                    $menu_group_title = $this->get_menu_group_title($_POST['group_id']);
                    $menu_group_title = strtolower ($menu_group_title);
                    $menu_group_title = str_replace(" ","_",$menu_group_title);
                    $html_code =  $this->easymenu($_POST['group_id'],"class='vertical blue'");
                    $this->write_in_js_file(_EASYMENU_USER, $menu_group_title.'.js',$html_code); 
                      if($menu_group_title == "footer_menu")
                    {
                      $this->save_menu_var_in_js_file($_POST['group_id'],$menu_group_title.'_var.js', _EASYMENU_USER);  
                    }
			header('Content-type: application/json');

			echo json_encode($response);

		}

	}



	/**

	 * Show edit menu form

	 */

	public function edit() {

		if (isset($_GET['id'])) {

			$id = (int)$_GET['id'];

			$data['row'] = $this->get_row($id);

			$this->view('menu_edit', $data);

		}

	}



	/**

	 * Save menu

	 * Action for edit menu

	 * return json data

	 */

	public function save() {

		if (isset($_POST['title'])) {

			$data[MENU_TITLE] = trim($_POST['title']);

			if (!empty($data[MENU_TITLE])) {

				$data[MENU_ID] = $_POST['menu_id'];

				$data[MENU_URL] = $_POST['url'];

				$data[MENU_CLASS] = $_POST['class'];

				if ($this->db->update(MENU_TABLE, $data, MENU_ID . ' = ' . $data[MENU_ID])) {

					$response['status'] = 1;

					$d['title'] = $data[MENU_TITLE];

					$d['url'] = $data[MENU_URL];

					$d['klass'] = $data[MENU_CLASS]; //klass instead of class because of an error in js

					$response['menu'] = $d;
                    

				} else {

					$response['status'] = 2;

					$response['msg'] = 'Edit menu error.';

				}

			} else {

				$response['status'] = 3;

			}
            
                    $menu_group_id = $this->get_menu_group_id($_POST['menu_id']);  
                    $categories_parsed = $this->easymenu($menu_group_id,"class='vertical blue'");
                   /* echo $categories_parsed;
                    die("****");*/
                    $this->write_in_js_file(_EASYMENU_USER, 'dynamic_categories.js',$categories_parsed); 
                  
			header('Content-type: application/json');

			echo json_encode($response);

		}

	}



	/**

	 * Delete menu action

	 * Also delete all submenus under current menu

	 * return json data

	 */

	public function delete() {

		if (isset($_POST['id'])) {

			$id = (int)$_POST['id'];


			$this->get_descendants($id);

			if (!empty($this->ids)) {

				$ids = implode(', ', $this->ids);

				$id = "$id, $ids";

			}


                                                      $menu_group_id = $this->get_menu_group_id($_POST['id']); 
			$sql = sprintf('DELETE FROM %s WHERE %s IN (%s)', MENU_TABLE, MENU_ID, $_POST['id']);

			$delete = $this->db->Execute($sql);

			if ($delete) {

				$response['success'] = true;
                          
                    $categories_parsed = $this->easymenu($menu_group_id,"class='vertical blue'");
                    $this->write_in_js_file(_EASYMENU_USER, 'listing_categories.js',$categories_parsed); 

			} else {

				$response['success'] = false;

			}
                
			header('Content-type: application/json');

			echo json_encode($response);

		}

	}



	/**

	 * Save menu position

	 */

	public function save_position() {
           
		if (isset($_POST['easymm'])) {

			$easymm = $_POST['easymm'];

			$this->update_position(0, $easymm);

		}

	}



	/**

	 * Recursive function for save menu position

	 */

	private function update_position($parent, $children) {

		$i = 1;
              /*  echo "<pre>";
print_r($children);*/
		foreach ($children as $k => $v) {
//echo $children[$k]['id'];;
			$id = $children[$k]['id'];

			$data[MENU_PARENT] = $parent;

			$data[MENU_POSITION] = $i;

			$this->db->update(MENU_TABLE, $data, MENU_ID . ' = ' . $id);

			if (isset($children[$k]['children'][0])) {

				$this->update_position($id, $children[$k]['children']);

			}

			$i++;

		}
                    $menu_group_id = $this->get_menu_group_id($id);  
                    $categories_parsed = $this->easymenu($menu_group_id,"class='vertical blue'");
                    $this->write_in_js_file(_EASYMENU_USER, 'listing_categories.js',$categories_parsed); 
                  
	}



	/**

	 * Get items from menu table

	 *

	 * @param int $group_id

	 * @return array

	 */

	private function get_menu($group_id) {

		$sql = sprintf(

			'SELECT * FROM %s WHERE %s = %s ORDER BY %s, %s',

			MENU_TABLE,

			MENU_GROUP,

			$group_id,

			MENU_PARENT,

			MENU_POSITION

		);

		return $this->db->GetAll($sql);

	}



	/**

	 * Get one item from menu table

	 *

	 * @param unknown_type $id

	 * @return unknown

	 */

	private function get_row($id) {

		$sql = sprintf(

			'SELECT * FROM %s WHERE %s = %s',

			MENU_TABLE,

			MENU_ID,

			$id

		);

		return $this->db->GetRow($sql);

	}



	/**

	 * Recursive method

	 * Get all descendant ids from current id

	 * save to $this->ids

	 *

	 * @param int $id

	 */

	private function get_descendants($id) {

		$sql = sprintf(

			'SELECT %s FROM %s WHERE %s = %s',

			MENU_ID,

			MENU_TABLE,

			MENU_PARENT,

			$id

		);

		$data = $this->db->GetCol($sql);



		if (!empty($data)) {

			foreach ($data as $v) {

				$this->ids[] = $v;

				$this->get_descendants($v);

			}

		}

	}



	/**

	 * Get the highest position number

	 *

	 * @param int $group_id

	 * @return string

	 */

	private function get_last_position($group_id) {

		$sql = sprintf(

			'SELECT MAX(%s) FROM %s WHERE %s = %s',

			MENU_POSITION,

			MENU_TABLE,

			MENU_GROUP,

			$group_id

		);

		return $this->db->GetOne($sql);

	}



	/**

	 * Get all items in menu group table

	 *

	 * @return array

	 */

	private function get_menu_groups() {

		$sql = sprintf(

			'SELECT %s, %s FROM %s WHERE %s = %s' ,

			MENUGROUP_ID,

			MENUGROUP_TITLE,

			MENUGROUP_TABLE,

			MENUGROUP_USER,

			_EASYMENU_USER

		);

		return $this->db->GetAssoc($sql);

	}



	/**

	 * Get menu group title

	 *

	 * @param int $group_id

	 * @return string

	 */

	public function get_menu_group_title($group_id) {

		$sql = sprintf(

			'SELECT %s FROM %s WHERE %s = %s',

			MENUGROUP_TITLE,

			MENUGROUP_TABLE,

			MENUGROUP_ID,

			$group_id

		);

		return $this->db->GetOne($sql)['title'];

	}
	public function get_menu_group_id($menu_item_id) {

$sql = sprintf(

			'SELECT %s FROM %s WHERE %s = %s',

			MENU_GROUP,

			MENU_TABLE,

			MENU_ID,

			$menu_item_id

		);
		return $this->db->GetOne($sql);

	}


	/**

	 * Get label for list item in menu manager

	 * this is the content inside each <li>

	 *

	 * @param array $row

	 * @return string

	 */

	private function get_label($row) {

		$label =

			'<div class="ns-row">' .

				'<div class="ns-title">'.$row[MENU_TITLE].'</div>' .

				'<div class="ns-url">'.$row[MENU_URL].'</div>' .

				'<div class="ns-class">'.$row[MENU_CLASS].'</div>' .

				'<div class="ns-actions">' .

					'<a href="#" class="edit-menu" title="Edit Menu">' .

						'<img src="'._BASE_URL_ASSETS.'templates/images/edit.png" alt="Edit">' .

					'</a>' .

					'<a href="#" class="delete-menu">' .

						'<img src="'._BASE_URL_ASSETS.'templates/images/cross.png" alt="Delete">' .

					'</a>' .

					'<input type="hidden" name="menu_id" value="'.$row[MENU_ID].'">' .

				'</div>' .

			'</div>';

		return $label;

	}
    private function get_language($id_user) {

		$sql = "select language from store_settings where id_user = ".$id_user ;
                $language = $this->db->GetRow($sql);
                return $language["language"];

	}
      public function write_in_js_file($id_user, $file_name,$out_put)
     {
           $result_html = "";
             if($out_put == "")
       {
           $result_html =  '\'<ul class="vertical blue"><li><a href="javascript:void();">Store has not categories</a></li></ul>\'';      
       }  
        $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
       $out_put = str_replace(array("\r\n", "\r"), "\n", $out_put);
       $out_put = str_replace("'", "\'", $out_put);
       $lines = explode("\n", $out_put);
       $new_lines = array();
    
       $lngth = sizeof($lines);
       foreach ($lines as $i => $line) 
       { 
           if(!empty($line)):
            //   echo $i;
           if($lngth == ($i+1)):
               $result_html  .= "'".trim($line)."';"."\n"; 
               else:
               $result_html  .= "'".trim($line)."'+"."\n"; 
           endif;   
        endif;
                    
       }
       $result_html = "var  dynamic_categories = ".$result_html;
       fwrite($js_file,$result_html);
       fclose($js_file);
       $language = $this->get_language($id_user);
       $this->store_front_all_in_one($id_user,$language);
       $this->store_listing_all_in_one($id_user,$language);
     }
 public function save_menu_var_in_js_file($group_id,$file_name, $id_user)
    {
       $out_put = 'var footer_menu_links= "';
       $menu    = $this->get_menu($group_id);
			foreach ($menu as $row):
              $out_put .= "<a href='".$row[MENU_URL]."'>";
              $out_put .= $row[MENU_TITLE];
              $out_put .= '</a>';
            endforeach;
            $out_put .= '"';
       $this->write_in_js_file_without_document_write($id_user,$file_name,$out_put);     
    }
function write_in_js_file_without_document_write($id_user, $file_name,$out_put)
 {
   $js_file = fopen( $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/".$file_name,"w");
   fwrite($js_file,$out_put);
   fclose($js_file);
   
          $this->store_front_all_in_one($id_user);
          $this->store_listing_all_in_one($id_user);
 }
 
 
 

    function store_front_all_in_one($id_user, $language=null)
    { 
      $front_files = array();
      $path_dinamyc = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/";
      $path_dinamyc_languages = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/languages/";
      $path_static = str_replace('admin','clients',$_SERVER['DOCUMENT_ROOT']."/".$id_user."/assets/js/");
      $all_dynamic_code = "";
      /*dinamyc pushed*/
      array_push($front_files,"vars_settings.js");
      array_push($front_files,"header_display.js");
      array_push($front_files,"logo.js");
      array_push($front_files,"main_menu.js");
      array_push($front_files,"header_background.js");
      array_push($front_files,"listing_categories.js");
      array_push($front_files,"front_theme_options.js");      
      array_push($front_files,"front_layout_type.js");
      array_push($front_files,"front_left_widgets.js");
      array_push($front_files,"front_center_widgets.js");
      array_push($front_files,"front_right_widgets.js");
      array_push($front_files,"store_pages.js");
      array_push($front_files,"specifics_widgets.js");
      array_push($front_files,"welcome_text.js");
      array_push($front_files,"social_media.js");
      array_push($front_files,"front_slider.js");
      array_push($front_files,"front_tabs_titles.js");
      array_push($front_files,"front_tabs_content.js");
      array_push($front_files,"front_advertisings.js");
      array_push($front_files,"popular_categories.js");
      array_push($front_files,"featured_listing.js");//                                   
      array_push($front_files,"special_listing.js");
      array_push($front_files,"arrivals_listing.js");
      array_push($front_files,"footer_display.js");
      array_push($front_files,"footer_menu.js");
      array_push($front_files,"social_media_buttons_parts.js");
      /*statics pushed*/
      array_push($front_files,"static_scripts.js");
      array_push($front_files,"ebay.js");
      array_push($front_files,"front_custom_js_code.js");
      
      $all_dynamic_js_files = list_files($path_dinamyc);
      $all_static_js_files = list_files($path_static);
      
      
      //do for dynamic widgets
      if($language!=null):
        if (!file_exists($path_dinamyc_languages."$language.js")):
            if(!is_dir($path_dinamyc_languages)) 
            mkdir($path_dinamyc_languages, 0777, true);
            $fp = fopen($path_dinamyc_languages."$language.js", 'w');
            fwrite($fp, '');
            fclose($fp);
        endif;
        $js_code = file_get_contents($path_dinamyc_languages."$language.js");
        $all_dynamic_code .= $js_code."\n\n"; 
      endif;
      foreach($front_files as $file_name):
      if (in_array($file_name, $all_dynamic_js_files)) 
       {
          $js_code = file_get_contents($path_dinamyc.$file_name);
          $all_dynamic_code .= $js_code."\n\n";
       }            
      endforeach;
      
      //do for dynamic widgets
      foreach($front_files as $file_name):
      if (in_array($file_name, $all_dynamic_js_files)) 
       {
          $js_code = file_get_contents($path_dinamyc.$file_name);
          $all_dynamic_code .= $js_code."\n\n";
       }            
      endforeach;
      //do for static widgets
      foreach($front_files as $file_name):
      if (in_array($file_name,$all_static_js_files )) 
       {
          $js_code = file_get_contents($path_static.$file_name);
          $all_dynamic_code .= $js_code."\n\n";
       }            
      endforeach;
      
      $js_file = fopen( $path_dinamyc."dynamic_scripts.js","w");
      fwrite($js_file,$all_dynamic_code);
      fclose($js_file);
    }



    function store_listing_all_in_one($id_user, $language=null)
    { 
      $front_files = array();
	  $path_dinamyc = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/";
      $path_dinamyc_languages = $_SERVER['DOCUMENT_ROOT']."/server/ajax_design/".$id_user."/languages/";
      $path_static = str_replace('admin','clients',$_SERVER['DOCUMENT_ROOT']."/".$id_user."/assets/js/");
      $all_dynamic_code = "";
      /*dinamyc pushed*/
      array_push($front_files,"vars_settings.js");
      array_push($front_files,"header_display.js");
      array_push($front_files,"logo.js");
      array_push($front_files,"main_menu.js");
      array_push($front_files,"header_background.js");
      array_push($front_files,"front_theme_options.js");
      array_push($front_files,"listing_categories.js");      
      array_push($front_files,"layout_type.js");
      array_push($front_files,"left_widgets.js");
      array_push($front_files,"center_widgets.js");
      array_push($front_files,"right_widgets.js");
      array_push($front_files,"specifics_widgets.js");
      array_push($front_files,"welcome_text.js");
      array_push($front_files,"social_media.js");
      array_push($front_files,"listing_slider.js");
      array_push($front_files,"listing_tabs_titles.js");
      array_push($front_files,"listing_tabs_content.js");
      array_push($front_files,"listing_advertisings.js");
      array_push($front_files,"popular_categories.js");
      array_push($front_files,"featured_listing.js");//                                   
      array_push($front_files,"special_listing.js");
      array_push($front_files,"arrivals_listing.js");
      array_push($front_files,"footer_display.js");
      array_push($front_files,"footer_menu.js");
      array_push($front_files,"social_media_buttons_parts.js");
      /*statics pushed*/
      array_push($front_files,"mobile_image_view.js");
      array_push($front_files,"static_scripts.js");
      array_push($front_files,"listing_controller.js");
      array_push($front_files,"listing_custom_js_code.js");
      
      $all_dynamic_js_files = list_files($path_dinamyc);
      $all_static_js_files = list_files($path_static);
      //do for dynamic widgets
      if($language!=null):
        if (!file_exists($path_dinamyc_languages."$language.js")):
            if(!is_dir($path_dinamyc_languages)) 
            mkdir($path_dinamyc_languages, 0777, true);
            $fp = fopen($path_dinamyc_languages."$language.js", 'w');
            fwrite($fp, '');
            fclose($fp);
        endif;
        $js_code = file_get_contents($path_dinamyc_languages."$language.js");
        $all_dynamic_code .= $js_code."\n\n"; 
      endif;
      foreach($front_files as $file_name):
      if (in_array($file_name, $all_dynamic_js_files)) 
       {
          $js_code = file_get_contents($path_dinamyc.$file_name);
          $all_dynamic_code .= $js_code."\n\n";
       }            
      endforeach;
      
      //do for dynamic widgets
      foreach($front_files as $file_name):
      if (in_array($file_name, $all_dynamic_js_files)) 
       {
          $js_code = file_get_contents($path_dinamyc.$file_name);
          $all_dynamic_code .= $js_code."\n\n";
       }            
      endforeach;
      //do for static widgets
      foreach($front_files as $file_name):
      if (in_array($file_name,$all_static_js_files )) 
       {
          $js_code = file_get_contents($path_static.$file_name);
          $all_dynamic_code .= $js_code."\n\n";
       }            
      endforeach;
      
      $js_file = fopen( $path_dinamyc."dynamic_scripts_listings.js","w");
      fwrite($js_file,$all_dynamic_code);
      fclose($js_file);
    }

function makeDir($path)
    {
       return is_dir($path) || mkdir($path);
    }


 function list_files($path)
    {   
    $files = array();
    $h=opendir($path);
    $dirarray = explode('/',$path);
    $dirarray = array_reverse($dirarray);
    $key=$dirarray[1];
    while (false !== ($file = readdir($h)))
    {
    #get files from top directory   
    if(is_file($path.$file))
    {
      array_push($files,$file);
    }
    #get files from child folders
    if(is_dir($path.$file) && $file != '.' && $file !='..')
    {
    $npath = $path.$file.'/';
    list_files($npath);
    }
    }
    return $files;
    }
}



/* End of menu.php */