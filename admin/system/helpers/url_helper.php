<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/url_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Site URL
 *
 * Create a local URL based on your basepath. Segments can be passed via the
 * first parameter either as a string or an array.
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('site_url'))
{
	function site_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->site_url($uri);
	}
}

// ------------------------------------------------------------------------

/**
 * Base URL
 * 
 * Create a local URL based on your basepath.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('base_url'))
{
	function base_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->base_url($uri);
	}
}

// ------------------------------------------------------------------------

/**
 * Current URL
 *
 * Returns the full URL (including segments) of the page where this
 * function is placed
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('current_url'))
{
	function current_url()
	{
		$CI =& get_instance();
		return $CI->config->site_url($CI->uri->uri_string());
	}
}

// ------------------------------------------------------------------------
/**
 * URL String
 *
 * Returns the URI segments.
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('uri_string'))
{
	function uri_string()
	{
		$CI =& get_instance();
		return $CI->uri->uri_string();
	}
}

// ------------------------------------------------------------------------

/**
 * Index page
 *
 * Returns the "index_page" from your config file
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('index_page'))
{
	function index_page()
	{
		$CI =& get_instance();
		return $CI->config->item('index_page');
	}
}

// ------------------------------------------------------------------------

/**
 * Anchor Link
 *
 * Creates an anchor based on the local URL.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('anchor'))
{
	function anchor($uri = '', $title = '', $attributes = '')
	{
		$title = (string) $title;

		if ( ! is_array($uri))
		{
			$site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
		}
		else
		{
			$site_url = site_url($uri);
		}

		if ($title == '')
		{
			$title = $site_url;
		}

		if ($attributes != '')
		{
			$attributes = _parse_attributes($attributes);
		}

		return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
	}
}

// ------------------------------------------------------------------------

/**
 * Anchor Link - Pop-up version
 *
 * Creates an anchor based on the local URL. The link
 * opens a new window based on the attributes specified.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('anchor_popup'))
{
	function anchor_popup($uri = '', $title = '', $attributes = FALSE)
	{
		$title = (string) $title;

		$site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;

		if ($title == '')
		{
			$title = $site_url;
		}

		if ($attributes === FALSE)
		{
			return "<a href='javascript:void(0);' onclick=\"window.open('".$site_url."', '_blank');\">".$title."</a>";
		}

		if ( ! is_array($attributes))
		{
			$attributes = array();
		}

		foreach (array('width' => '800', 'height' => '600', 'scrollbars' => 'yes', 'status' => 'yes', 'resizable' => 'yes', 'screenx' => '0', 'screeny' => '0', ) as $key => $val)
		{
			$atts[$key] = ( ! isset($attributes[$key])) ? $val : $attributes[$key];
			unset($attributes[$key]);
		}

		if ($attributes != '')
		{
			$attributes = _parse_attributes($attributes);
		}

		return "<a href='javascript:void(0);' onclick=\"window.open('".$site_url."', '_blank', '"._parse_attributes($atts, TRUE)."');\"$attributes>".$title."</a>";
	}
}

// ------------------------------------------------------------------------

/**
 * Mailto Link
 *
 * @access	public
 * @param	string	the email address
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('mailto'))
{
	function mailto($email, $title = '', $attributes = '')
	{
		$title = (string) $title;

		if ($title == "")
		{
			$title = $email;
		}

		$attributes = _parse_attributes($attributes);

		return '<a href="mailto:'.$email.'"'.$attributes.'>'.$title.'</a>';
	}
}

// ------------------------------------------------------------------------

/**
 * Encoded Mailto Link
 *
 * Create a spam-protected mailto link written in Javascript
 *
 * @access	public
 * @param	string	the email address
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('safe_mailto'))
{
	function safe_mailto($email, $title = '', $attributes = '')
	{
		$title = (string) $title;

		if ($title == "")
		{
			$title = $email;
		}

		for ($i = 0; $i < 16; $i++)
		{
			$x[] = substr('<a href="mailto:', $i, 1);
		}

		for ($i = 0; $i < strlen($email); $i++)
		{
			$x[] = "|".ord(substr($email, $i, 1));
		}

		$x[] = '"';

		if ($attributes != '')
		{
			if (is_array($attributes))
			{
				foreach ($attributes as $key => $val)
				{
					$x[] =  ' '.$key.'="';
					for ($i = 0; $i < strlen($val); $i++)
					{
						$x[] = "|".ord(substr($val, $i, 1));
					}
					$x[] = '"';
				}
			}
			else
			{
				for ($i = 0; $i < strlen($attributes); $i++)
				{
					$x[] = substr($attributes, $i, 1);
				}
			}
		}

		$x[] = '>';

		$temp = array();
		for ($i = 0; $i < strlen($title); $i++)
		{
			$ordinal = ord($title[$i]);

			if ($ordinal < 128)
			{
				$x[] = "|".$ordinal;
			}
			else
			{
				if (count($temp) == 0)
				{
					$count = ($ordinal < 224) ? 2 : 3;
				}

				$temp[] = $ordinal;
				if (count($temp) == $count)
				{
					$number = ($count == 3) ? (($temp['0'] % 16) * 4096) + (($temp['1'] % 64) * 64) + ($temp['2'] % 64) : (($temp['0'] % 32) * 64) + ($temp['1'] % 64);
					$x[] = "|".$number;
					$count = 1;
					$temp = array();
				}
			}
		}

		$x[] = '<'; $x[] = '/'; $x[] = 'a'; $x[] = '>';

		$x = array_reverse($x);
		ob_start();

	?><script type="text/javascript">
	//<![CDATA[
	var l=new Array();
	<?php
	$i = 0;
	foreach ($x as $val){ ?>l[<?php echo $i++; ?>]='<?php echo $val; ?>';<?php } ?>

	for (var i = l.length-1; i >= 0; i=i-1){
	if (l[i].substring(0, 1) == '|') document.write("&#"+unescape(l[i].substring(1))+";");
	else document.write(unescape(l[i]));}
	//]]>
	</script><?php

		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}

// ------------------------------------------------------------------------

/**
 * Auto-linker
 *
 * Automatically links URL and Email addresses.
 * Note: There's a bit of extra code here to deal with
 * URLs or emails that end in a period.  We'll strip these
 * off and add them after the link.
 *
 * @access	public
 * @param	string	the string
 * @param	string	the type: email, url, or both
 * @param	bool	whether to create pop-up links
 * @return	string
 */
if ( ! function_exists('auto_link'))
{
	function auto_link($str, $type = 'both', $popup = FALSE)
	{
		if ($type != 'email')
		{
			if (preg_match_all("#(^|\s|\()((http(s?)://)|(www\.))(\w+[^\s\)\<]+)#i", $str, $matches))
			{
				$pop = ($popup == TRUE) ? " target=\"_blank\" " : "";

				for ($i = 0; $i < count($matches['0']); $i++)
				{
					$period = '';
					if (preg_match("|\.$|", $matches['6'][$i]))
					{
						$period = '.';
						$matches['6'][$i] = substr($matches['6'][$i], 0, -1);
					}

					$str = str_replace($matches['0'][$i],
										$matches['1'][$i].'<a href="http'.
										$matches['4'][$i].'://'.
										$matches['5'][$i].
										$matches['6'][$i].'"'.$pop.'>http'.
										$matches['4'][$i].'://'.
										$matches['5'][$i].
										$matches['6'][$i].'</a>'.
										$period, $str);
				}
			}
		}

		if ($type != 'url')
		{
			if (preg_match_all("/([a-zA-Z0-9_\.\-\+]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z0-9\-\.]*)/i", $str, $matches))
			{
				for ($i = 0; $i < count($matches['0']); $i++)
				{
					$period = '';
					if (preg_match("|\.$|", $matches['3'][$i]))
					{
						$period = '.';
						$matches['3'][$i] = substr($matches['3'][$i], 0, -1);
					}

					$str = str_replace($matches['0'][$i], safe_mailto($matches['1'][$i].'@'.$matches['2'][$i].'.'.$matches['3'][$i]).$period, $str);
				}
			}
		}

		return $str;
	}
}

// ------------------------------------------------------------------------

/**
 * Prep URL
 *
 * Simply adds the http:// part if no scheme is included
 *
 * @access	public
 * @param	string	the URL
 * @return	string
 */
if ( ! function_exists('prep_url'))
{
	function prep_url($str = '')
	{
		if ($str == 'http://' OR $str == '')
		{
			return '';
		}

		$url = parse_url($str);

		if ( ! $url OR ! isset($url['scheme']))
		{
			$str = 'http://'.$str;
		}

		return $str;
	}
}

// ------------------------------------------------------------------------

/**
 * Create URL Title
 *
 * Takes a "title" string as input and creates a
 * human-friendly URL string with a "separator" string 
 * as the word separator.
 *
 * @access	public
 * @param	string	the string
 * @param	string	the separator
 * @return	string
 */
if ( ! function_exists('url_title'))
{
	function url_title($str, $separator = '-', $lowercase = FALSE)
	{
		if ($separator == 'dash') 
		{
		    $separator = '-';
		}
		else if ($separator == 'underscore')
		{
		    $separator = '_';
		}
		
		$q_separator = preg_quote($separator);

		$trans = array(
			'&.+?;'                 => '',
			'[^a-z0-9 _-]'          => '',
			'\s+'                   => $separator,
			'('.$q_separator.')+'   => $separator
		);

		$str = strip_tags($str);

		foreach ($trans as $key => $val)
		{
			$str = preg_replace("#".$key."#i", $val, $str);
		}

		if ($lowercase === TRUE)
		{
			$str = strtolower($str);
		}

		return trim($str, $separator);
	}
}

// ------------------------------------------------------------------------

/**
 * Header Redirect
 *
 * Header redirect in two flavors
 * For very fine grained control over headers, you could use the Output
 * Library's set_header() function.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the method: location or redirect
 * @return	string
 */
if ( ! function_exists('redirect'))
{
	function redirect($uri = '', $method = 'location', $http_response_code = 302)
	{
		if ( ! preg_match('#^https?://#i', $uri))
		{
			$uri = site_url($uri);
		}

		switch($method)
		{
			case 'refresh'	: header("Refresh:0;url=".$uri);
				break;
			default			: header("Location: ".$uri, TRUE, $http_response_code);
				break;
		}
		exit;
	}
}

// ------------------------------------------------------------------------

/**
 * Parse out the attributes
 *
 * Some of the functions use this
 *
 * @access	private
 * @param	array
 * @param	bool
 * @return	string
 */
if ( ! function_exists('_parse_attributes'))
{
	function _parse_attributes($attributes, $javascript = FALSE)
	{
		if (is_string($attributes))
		{
			return ($attributes != '') ? ' '.$attributes : '';
		}

		$att = '';
		foreach ($attributes as $key => $val)
		{
			if ($javascript == TRUE)
			{
				$att .= $key . '=' . $val . ',';
			}
			else
			{
				$att .= ' ' . $key . '="' . $val . '"';
			}
		}

		if ($javascript == TRUE AND $att != '')
		{
			$att = substr($att, 0, -1);
		}

		return $att;
	}
}


/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */
if (! function_exists('ssl_redirect'))
{
    function ssl_redirect()
    {
        if ($_SERVER["SERVER_PORT"] != 443)
        {
            redirect(str_replace("http://", "https://" , current_url()), "refresh");
        }
    }
}
if (! function_exists('non_ssl_redirect'))
{
    function non_ssl_redirect()
    {
        if ($_SERVER["SERVER_PORT"] == 443)
        {
            redirect(str_replace("https://", "http://" , current_url()), "refresh");
        }
    }
}
if (! function_exists('validate_user'))
{
    function validate_user()
    {
       $CI =& get_instance();
    if ( !$CI->session->userdata('username')) { 
        $sessionmessage = "You are not logged in!";
        $CI->session->set_flashdata('message',$sessionmessage);
        redirect('');
    }
    }
}
if (! function_exists('validate_application'))
{
    function validate_application()
    {
       $CI =& get_instance();
    if ( $CI->session->userdata('application')) { 
        if($CI->session->userdata('application')== "design-manager"):
           //keep without any issue
            else:
            $sessionmessage = "Sorry, you are not logged on this theme components app";
            $CI->session->set_flashdata('message',$sessionmessage);
            redirect('/membership/logout/');
        endif;
        
    }
    else
    {
      redirect('/membership/logout/');  
    }
    }
}
    
if (! function_exists('can_show_section'))
{
    function can_show_section($product_id,$user_orders_active_products)
    {        
       foreach($user_orders_active_products as $order):
           foreach($order as $key=>$value):
            if($key=="_product_id"):
               if($value==$product_id): 
                   return true;
               endif;
           endif;
           endforeach;          
       endforeach;
       return false;
    }
}
if (! function_exists('store_front_all_in_one'))
{
    function store_front_all_in_one($id_user,$language=null)
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
      if($language!=null):
        array_push($front_files,"$language.js");  
      endif;
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
}

if (! function_exists('store_listing_all_in_one'))
{
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
}
if (! function_exists('makeDir'))
{
function makeDir($path)
    {
       return is_dir($path) || mkdir($path);
    }
}
if (! function_exists('list_files'))
{
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

// Usually you'd get the value from $_POST or $_GET
if($_SERVER['REMOTE_ADDR']=="190.159.159.236")
{
  $i =  72;
store_listing_all_in_one($i); 
store_front_all_in_one($i);
//die;
}

