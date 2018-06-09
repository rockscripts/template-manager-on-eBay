<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?= $page_title ?></title>
<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="<?= base_url() ?>themes/katniss/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url() ?>themes/katniss/prettify/prettify.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url() ?>uploader/css/jquery.fileupload-ui.css">
<link href="<?= base_url() ?>themes/katniss/css/alex.css" type="text/css" rel="stylesheet" />
<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet" />
<link href="<?= base_url() ?>themes/katniss/css/jquery.switchButton.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/prettify/prettify.js"></script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery-1.8.3.min.js">/*jquery-1.8.3.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery-ui-1.9.2.min.js">/*jquery-ui-1.9.2.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/bootstrap.min.js">/*bootstrap.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.uniform.min.js">/*jquery.uniform.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.smartWizard.min.js">/*jquery.smartWizard.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/custom.js">/*custom.js*/</script>
<script type="text/javascript" src="<?=base_url()?>themes/katniss/js/jquery.dataTables.min.js">/*jquery.dataTables.min.js*/</script>                
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/forms.js">/*forms.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.form.js">/*jquery.form.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/slider.js">/*slider.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.qtip-1.0.0-rc3.min.js">/*jquery.qtip-1.0.0-rc3.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/ebay_template.js">/*ebay_template.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/rocklister.js">/*rocklister.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/webstores.js">/*rocklister.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/blocksit.min.js">/*blocksit.min.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/newsletter.js">/*newsletter.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/listing_design.js">/*listing_design.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/front_design.js">/*front_design.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.jgrowl.js">/*jquery.jgrowl.js*/</script>

<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.alerts.js">/*jquery.alerts.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/jquery.switchButton.js">/*jquery.switchButton.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/blueimp_images_updater.js">/*blueimp_images_updater.js*/</script>
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/js/load-image.min.js">/*blueimp_images_updater.js*/</script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?= base_url() ?>uploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->

<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?= base_url() ?>uploader/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?= base_url() ?>uploader/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?= base_url() ?>uploader/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?= base_url() ?>uploader/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?= base_url() ?>uploader/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?= base_url() ?>uploader/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?= base_url() ?>uploader/js/jquery.fileupload-validate.js"></script> 
<script src="<?= base_url() ?>uploader/js/jquery.switchButton.js"></script>

<!-- Tabs -->
<link rel="stylesheet" href="<?= base_url() ?>themes/katniss/tabs/css/tabs.css" type="text/css" />
<script type="text/javascript" src="<?= base_url() ?>themes/katniss/tabs/js/tabs.js"></script>



<!-- Le styles -->





<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

<!--[if lt IE 9]>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->



<!-- Le Google fonts -->

</head>

<body>
 <?php flush(); ?>   
<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	<h1>
                    <a href="<?= base_url() ?>">
                        <div id="logo">

				<a title="rockscripts.com find your scripts with us!" href="<?= base_url() ?>">
				<img id="logo-image"src="<?= base_url() ?>themes/katniss/img/logo.gif" alt="" />   
                              
			                   </a>
        
        			
		</div>
                    </a>
                </h1>
        </div><!--logopanel-->
        
        <div class="datewidget">
        <?php
      echo '<script type="text/javascript">
var d = new Date();
var tz = d.toString().split(" (")[0];
document.write(tz)
</script>';
        ?>
        </div>
    
    
        
        
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Navigation</li> 
                 <li><a href="<?= base_url() ?>private/profile"><span class=" icono-profile"></span>Profile</a></li>  
                 <li><a href="<?= base_url() ?>store_design/storesettings/design_settigns "><span class="icoo-store-settings"></span>Theme Options</a></li>
                 <li><a href="<?= base_url() ?>store_design/storedesign/"><span class="icoo-store-design"></span>My Store Design</a></li>
                 <li><a href="<?= base_url() ?>store_design/listingdesign/"><span class="icono-listing-template"></span>My Listing Design</a></li>
              <!--   <li class="dropdown animate7 fadeInUp"><a href="<?= base_url() ?>store_design/listingdesign/"><span class="icono-listing-design "></span>My Listing Design</a>
                   <ul style="border-bottom: 9px solid;">
                         <li><a href="<?= base_url() ?>store_design/listingdesign/"><span class="icono-listing-template"></span>My Listing Templates</a></li>
                        
                          <li><a href="<?= base_url() ?>csv"><span class=" icono-convert"></span>Listing Designto CSV Data  </a></li> 
                   </ul>
                  </li>-->
                  <li><a href="<?= base_url() ?>rocklister/rocklister/"><span class="icon-rock-lister"></span>Rock Lister (Actions & Options)</a></li>
                   <li><a href="javascript:void(0);" class="store-pages-main-menu-item"><span class=" icono-store-pages"></span>Store Pages</a></li>
                   <li><a href="javascript:void(0);" class="popular-categories-main-menu-item"><span class=" icono-popular-categories "></span>Popular Categories</a></li>
                   <li><a href="javascript:void(0);" class="featured-main-menu-item"><span class=" featured-icon"></span>Featured Listings</a></li>                  
                   <li><a href="javascript:void(0);" class="special-main-menu-item"><span class=" icono-on-sale"></span>Special Discounts</a></li>
                   <li><a  href="javascript:void(0);" class="new-arrivals-main-menu-item"><span class="icon-new-arrival1"></span>New Arrivals</a></li>
                  <!--<li><a href="<?= base_url() ?>store_design/featured/load_featured_listing"><span class="icono-deals"></span>Deals</a></li>  -->                
                  <li><a  href="javascript:void(0);" class="social-main-menu-item"><span class=" icono-connect"></span>Social media</a></li>
                  <!--<li><a  href="<?= base_url() ?>webstores/webstore" class="webstore-menu-item "  ><span class="icono-webstore"></span>Webstore</a></li>-->
                  <li><a href="<?= base_url() ?>store_design/backups/"><span class=" icono-backupct"></span>Backups & Restore Points</a></li>
                  <li><a href="<?= base_url() ?>store_design/developerzone/"><span class="icono-develop"></span>Developer Zone</a></li>
                 <li><a href="<?= base_url() ?>store_design/developerzone/suggested_templates"><span class="layoutt-icon"></span>Suggested Templates</a></li>
                  <li><a href="<?= base_url() ?>store_design/language/"><span class="icono-language"></span>Languages & Translator</a></li>
                  <?php
                  if($this->session->userdata( 'role_id' ) == 1):
                  ?>
                 <li class="dropdown animate7 fadeInUp"><a href="<?= base_url() ?>marketing/"><span class=" iconsweets-postcard "></span>Newsletter Design</a>
                   <ul style="display: none;">
                         <li><a href="<?= base_url() ?>marketing/newsletter/?id_ebay_design=2"><span class=" iconsweets-ppt"></span>Generate Newsletter Template</a></li>                       
                   </ul>
                  </li>
                   
                  <li class="dropdown animate7 fadeInUp"><a href="<?= base_url() ?>configuration"><span class="icon-wrench "></span>Software Configuration</a>
                   <ul style="display: none;">
                         <li><a href="<?= base_url() ?>configuration/"><span class="icon-eye-open"></span>Configurations</a></li>
                         <li><a href="<?= base_url() ?>configuration/add_configuration"><span class=" icon-plus-sign"></span>Add Configuration</a></li>
                   </ul>
                  </li>
                  <?php
              endif;
                  ?>
            </ul>
        </div><!--leftmenu-->  
        
    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<img width="77px" height="100%" src="<?= base_url() ?>themes/katniss/img/ebay_application.png" style="height: 43px;width:auto;float: right; background: none repeat scroll 0% 0% white;">
<a class="showmenu" id="showmenu" href="#" style="float:left"></a>
<img id="logo-image" class="logo_small" style="float: left; height: auto; margin-top: -10px; width: 158px; margin-left: 10px; display: none;" alt="" src="<?= base_url() ?>themes/katniss/img/logo.gif">
            <div class="headerright">
            	<!--<div class="dropdown notification">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="http://themepixels.com/page.html" > 
                    	<span class=" iconsweets-cog"></span>
                    </a>
                     <!-- <ul class="dropdown-menu">                       
                       <!--  <li><a href="<?= base_url() ?>private/home"><span class="icon-wrench"></span>Store preferences</a></li> -->
                      
                      <!--  <li><a href="<?= base_url() ?>store_design/unistall"><span class="icon-fire"></span>Uninstall</a></li>
                        
                    </ul>-->
              <!--  </div>dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Hi, <?php echo $username;
                         ?>! <b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">
                        <li class="button_list_edit_profile"><a href="<?= base_url() ?>private/profile"><span class="icon-edit"></span> Edit Profile</a></li>
                         <li class="button_list_my_designs"><a href="<?= base_url() ?>private/home"><span class=" icon-my-designs"></span> My Designs</a></li>
                         <li class="button_list_my_designs"><a target="_blank" href="http://etemplate.com/helpdesk/"><span class=" icon-support"></span> Support Center</a></li>
                         <li class="button_list_my_designs"><a target="_blank" href="http://etemplate.com/helpdesk/open.php"><span class=" icon-issue"></span> Report Issue</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url() ?>membership/logout/"><span class="icon-off"></span> Exit</a></li> 
                    </ul>
                </div><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<ul class="skins">
                <li>&nbsp;</li>
                <li class="fixed selected"><a href="#" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="#" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<div class="breadcrumb">
            <?php echo $passed_to_view?>
            </div>
            
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1><?= $page_title ?></h1>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            	
                <div class="widgetcontent">
                	<!-- START OF DEFAULT WIZARD -->
                     <?= $contents ?>
                    <!-- END OF DEFAULT WIZARD -->
                </div><!--widgetcontent-->	
                
                
             
             
                
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft">  <div style="float:left;">
        </div></div>
    	<div class="footerright">&copy; All Right Reserved <? echo date("Y")?></div>
    </div><!--footer-->

    
</div><!--mainwrapper-->
<input type="hidden" value="<?= base_url() ?>" id="base_url"/>
<div id="popup_overlay" style="position: absolute; z-index: 99998; top: 0px; left: 0px; width: 100%; height: 200%; background: none repeat scroll 0% 0% rgb(255, 255, 255); opacity: 0.01;" ></div>

<div class="listing_design_view">
    <div class="header-frame">
        <img id="logo-image" alt="" src="<?= base_url() ?>/themes/katniss/img/logo.gif">
       <div class="slogan-text">doing your life easy</div>
       <div title="Close preview window" class="btn btn-primary close-listing-code close_button close_rocklister_listing_design_view">
                     Close&nbsp;&nbsp;&nbsp;<i class=" icon-close"></i>          
               </div>
    </div>
    <div class="listing-design-codes">
        
    </div>
</div>
<div id="popup_container" style="overflow-y:auto!important;max-height: 70%!important;position: fixed; z-index: 99999; padding: 0px; margin: 0px; min-width: 316px; max-width: 316px; top: 20px; left: 33%;" class="ui-draggable">
    <h1 id="popup_title" style="cursor: move;"></h1>
    <div id="popup_content" class="prompt">
           <div class="progress progress-striped active" style="display:none;margin: 5px;">
    <div style="width: 0%; margin-top: -13px;" class="bar"></div>
    </div> 
        <div id="popup_message">
             
        </div>
   <div id="popup_panel">       
   </div>
    </div>
</div>         
<div id="dialog-confirm" title="Empty the recycle bin?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="dialog_message"></span></p>
</div>
<script>
jQuery(document).on("click",".close_rocklister_listing_design_view", function()
{
    close_rocklister_listing_design_view();
});
</script>
<input type="hidden" value="none" id="global_location"/>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48248509-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
