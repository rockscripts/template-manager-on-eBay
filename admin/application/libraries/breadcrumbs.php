<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Breadcrumbs Library
 * @author	Przemysław Bobak
 * @time 01:16 18 October 2011
 *
 *	Usage:
 *
 *		in Controller
 *
 *			// This can be autoloaded //
 *			$this->load->library('breadcrumbs');
 *
 *			// Assigning specific titles & links to specific parts of the path //
 *			// as an array //
 *			$this->breadcrumbs->page = array('link'=> base_url().'community' ,'title' => 'Community' );
 *			$this->breadcrumbs->method = array('link'=> base_url().'community/people' ,'title' => 'People' );
 *
 *			// Variable passed into the view
 *			$passed_to_view = $this->breadcrumbs->get();
 *
 *		in View
 *
 *			<div class="path"><?php echo $breadcrumbs ?></div>
 *
 */

 class Breadcrumbs {
 
	var $home = '';
	
	var $page = '';
	
	var $method = '';
	
	var $item = '';
	
	var $action = '';
	
	var $show_links = TRUE;
	
	var $separator = '';
 
	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->config->load('breadcrumbs');
		
		/*
			Config INIT
		*/
	//	$this->home = $this->CI->config->item('bc_home');
		$this->show_links = $this->CI->config->item('bc_show_links');
		$this->separator = $this->CI->config->item('bc_separator');
		
	}
	
	/*
	 * Creates an array to work with from the object variables
	 */
	function get_array(){
	
		$array = array();
		
		if($this->home<>''){ $array[] = $this->home; }
		
		if($this->page<>''){ $array[] = $this->page; }
		
		if($this->method<>''){ $array[] = $this->method; }
		
		if($this->item<>''){ $array[] = $this->item; }
		
		if($this->action<>''){ $array[] = $this->action; }
		
		return $array;
	
	}
	
	/*
	 * Welds together all the variables adding link if set to TRUE and separator
	 */
	public function get(){
		// set empty variables for the breadcrumbs thread
		$breddy = '';
		$i = 1;
		// convert variables into an array
		$bb = $this->get_array();
		
		foreach($bb as $row){
		
			if($this->show_links==TRUE){
				$link = '<a href="'.$row['link'].'">'.$row['title'].'</a>';
				if($i == 1){
					$breddy .= $link;
				}else{
					$breddy .= ' '.$this->separator.' '.$link;
				}
			}else{
				if($i == 1){
					$breddy .= $row['title'];
				}else{
					$breddy .= ' '.$this->separator.' '.$row['title'];
				}
			}
			$i++;
		}
		
		return $breddy;
	
	}
 
 
 }
 
/* End of file breadcrumbs.php */
/* Location: ./application/libraries/breadcrumbs.php */