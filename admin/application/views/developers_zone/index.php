
<link rel="stylesheet" href="<?= base_url() ?>codemirror/lib/codemirror.css">
<link rel="stylesheet" href="<?= base_url() ?>codemirror/theme/elegant.css">
<script src="<?= base_url() ?>codemirror/lib/codemirror.js"></script>
<script src="<?= base_url() ?>codemirror/mode/javascript/javascript.js"></script>
<script src="<?= base_url() ?>codemirror/mode/css/css.js"></script>
<script src="<?= base_url() ?>codemirror/keymap/extra.js"></script>
<script src="<?= base_url() ?>codemirror/addon/selection/active-line.js"></script>
<script src="<?= base_url() ?>codemirror/addon/edit/matchbrackets.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>elfinder/css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>elfinder/css/theme.css">

		<!-- elFinder JS (REQUIRED) -->
		<script type="text/javascript" src="<?= base_url() ?>elfinder/js/elfinder.min.js"></script>

		<!-- elFinder translation (OPTIONAL) -->
		<script type="text/javascript" src="<?= base_url() ?>elfinder/js/i18n/elfinder.ru.js"></script>
<!-- jQuery and jQuery UI (REQUIRED) -->
		
<div class="alert" style="display:none;">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                        <div id="message_content"></div>
                </div>
<div class="loader-image" style="display: none;"></div>
    

 <div style="height: 36px;" class="top-buttons"> 
       <div class="btn btn-primary back_to_developer_zone " style="float:left">
      <i class=" icon-backward"></i> Back
     </div>
    <div style="float:left; border-radius: 10px;" class="btn-group action-with-selected-button">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Menu
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a title="Manage CSS Images"  href="javascript:void(0)" class="manage_css_images">
                    <i class="icon-camera1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Manage CSS Images
                </a>
            </li>
            <li>
                <a title="Backup Developer Zone"  href="javascript:void(0)" class="backup_developer_zone">
                    <i class="icon-dz-backup">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Backup Developer Zone
                </a>
            </li>
            <li>
                <a title="Restore Developer Zone"  href="<?= base_url() ?>store_design/backups?show_dz=true" class="restore_developer_zone">
                    <i class="icon-dz-restore">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Restore Developer Zone
                </a>
            </li>
            <li>
                <a title="Install template"  href="<?= base_url() ?>store_design/developerzone/install_template" class="install_template">
                    <i class="icon-addpage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Add Template
                </a>
            </li>
            <li>
                <a title="Template management"  href="<?= base_url() ?>store_design/developerzone/load_template_management" class="install_template">
                    <i class="icon-management">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Template Management
                </a>
            </li>
        </ul>
    </div>
   
</div>
<div class="file-manager">
    <div id="elfinder"></div>
</div>
<div class="tabs-content-custom-code">
    

<ul class="nav nav-tabs items-status" style="margin-top:10px;">
    <li class="active"><a href="javascript:void(0);" data="active_items_data_table" id="tab_active_items_data_table">Styles</a></li>
    <li><a href="javascript:void(0);" data="all_items_data_table">Scripts</a></li>      
    <?php
    if($header_display_code):
    ?>
    <li><a href="javascript:void(0);" data="header_display" class="header_display_tab">Header Display</a></li>    
     <?php
   endif;
    ?>
    <?php
    if($footer_display_code):
    ?>
    <li><a href="javascript:void(0);" data="footer_display" class="footer_display_tab">Footer Display</a></li>    
     <?php
   endif;
    ?>
</ul>
<div id="all_items_data_table" class="itemdatatable">
    <div id="accordion22" class="accordion2">
    <h3  class="front_styles"><a href="#">Store Front Scripts</a></h3>
    <div>
        <textarea id="front_custom_js_code" name="code"><?=$front_custom_js_code?></textarea>
        <div class="btn btn-primary save_front_custom_js_code " style="float:left;margin-left: 10px;" title="Save Store Front Scripts" style=" padding-right: 7px;padding-left: 4px;display: block;width: 52px;">
           <i class="icon-save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Save
          </div>
    </div>
    <h3 class="listing_scripts"><a href="#">Listing Scripts</a></h3>
    <div>
      
        <textarea id="listing_custom_js_code" name="code"><?=$listing_custom_js_code?></textarea>
   <div class="btn btn-primary save_listing_custom_js_code " style="float:left;margin-left: 10px;" title="Save listing Scripts" style=" padding-right: 7px;padding-left: 4px;display: block;width: 52px;">
           <i class="icon-save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Save
          </div>              
    </div>
    </div>
</div>
<div id="active_items_data_table" class="itemdatatable">
    <div id="accordion2" class="accordion2">
    <h3 class="front_styles"><a href="#">Store Front Styles</a></h3>
 
    <div>
         
        <textarea id="front_custom_css_code" name="front_custom_css_code"><?=$front_custom_css_code?></textarea>
        <div >
    <div class="btn btn-primary save_front_custom_css_code " style="float:left;margin-left: 10px;" title="Save Store Front Styles" style=" padding-right: 7px;padding-left: 4px;display: block;width: 52px;">
           <i class="icon-save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Save
          </div>
          
</div>
    </div>
    <h3 class="listing_styles"><a href="#">Listing Styles</a></h3>
    <div>
   <textarea id="listing_custom_css_code" name="listing_custom_css_code"><?=$listing_custom_css_code?></textarea>    
     <div class="btn btn-primary save_listing_custom_css_code " style="float:left;margin-left: 10px;" title="Save Listing Styles" style=" padding-right: 7px;padding-left: 4px;display: block;width: 52px;">
           <i class="icon-save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Save
          </div>
  
    </div>
    </div>
</div>
    <div id="header_display" class="itemdatatable">
    <div style="width:100%;">
        <textarea id="header_display_code" name="code"><?=$header_display_code?></textarea>
        <div class="btn btn-primary save_header_display " style="float:left;margin-left: 10px;margin-top: 10px;" title="Save header display" style=" padding-right: 7px;padding-left: 4px;display: block;width: 52px;">
           <i class="icon-save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Save
          </div>
    </div>
</div>
     <div id="footer_display" class="itemdatatable">
    <div style="width:100%;">
        <textarea id="footer_display_code" name="code"><?=$footer_display_code?></textarea>
        <div class="btn btn-primary save_footer_display " style="float:left;margin-left: 10px;margin-top: 10px;" title="Save footer display" style=" padding-right: 7px;padding-left: 4px;display: block;width: 52px;">
           <i class="icon-save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Save
          </div>
    </div>
</div>
</div>
<script>
  
    /*Init nice code view*/
    var editor = CodeMirror.fromTextArea(document.getElementById("front_custom_css_code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    mode:"text/css"
    });
    var editor1 = CodeMirror.fromTextArea(document.getElementById("listing_custom_css_code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    mode:"text/css"
    });
    editor1.setOption("theme", "elegant");
    var editor2 = CodeMirror.fromTextArea(document.getElementById("front_custom_js_code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true
    });
    var editor4 = CodeMirror.fromTextArea(document.getElementById("header_display_code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    mode:"text/css"
    });
     var editor5 = CodeMirror.fromTextArea(document.getElementById("footer_display_code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    mode:"text/css"
    });
    editor2.setOption("theme", "elegant");
    var editor3 = CodeMirror.fromTextArea(document.getElementById("listing_custom_js_code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true
    });
    editor3.setOption("theme", "elegant");
   jQuery().ready(function() 
{
  jQuery(document).on("click",".listing_styles",function()
    {   
     editor1.refresh() ;
    });
      jQuery(document).on("click",".front_styles",function()
    {   
     editor.refresh() ;
    });
      jQuery(document).on("click",".listing_scripts",function()
    {   
     editor3.refresh() ;
    });
      jQuery(document).on("click",".front_scripts",function()
    {   
     editor2.refresh() ;
    });
    jQuery(document).on("click",".header_display_tab",function()
    {   
     editor4.refresh() ;
    });
      jQuery(document).on("click",".footer_display_tab",function()
    {   
     editor5.refresh() ;
    });
});   /*Tabs control*/
    jQuery(document).on("click",".items-status li",function()
    {
      jQuery(".itemdatatable").css("display","none");
      show_class =  jQuery(this).find("a").attr("data");
      jQuery("#"+show_class).fadeIn();
      jQuery(".items-status li").removeClass("active");
      jQuery(this).addClass("active");
      if(show_class=="all_items_data_table")
      editor2.refresh() ;
        if(show_class=="header_display")
           editor4.refresh() ;
       if(show_class=="footer_display")
           editor5.refresh() ;
         });
         
    
    jQuery("#active_items_data_table").fadeIn();
    /*Tabs control*/
    jQuery('#accordion2').accordion();
    jQuery('#accordion22').accordion();
    editor.refresh() ;
 
    
    /*Events for save*/
    
     jQuery(document).on("click",".save_header_display",function()
{
    jQuery(".loader-image").fadeIn();   
    editor4.save();
    code = jQuery("#header_display_code").val();
    save_development_code(code,"header_display");
});
     jQuery(document).on("click",".save_footer_display",function()
{
    jQuery(".loader-image").fadeIn();   
    editor5.save();
    code = jQuery("#footer_display_code").val();
    save_development_code(code,"footer_display");
});
 jQuery(document).on("click",".save_front_custom_css_code",function()
{
    jQuery(".loader-image").fadeIn();   
    editor.save();
    code = jQuery("#front_custom_css_code").val();
    save_development_code(code,"front_custom_css_code");
});
 jQuery(document).on("click",".save_listing_custom_css_code  ",function()
{
    jQuery(".loader-image").fadeIn();   
    editor1.save();
    code = jQuery("#listing_custom_css_code").val();
    save_development_code(code,"listing_custom_css_code");
});
 jQuery(document).on("click",".save_front_custom_js_code",function()
{
    jQuery(".loader-image").fadeIn();   
    editor2.save();
    code = jQuery("#front_custom_js_code").val();
    save_development_code(code,"front_custom_js_code");
});
 jQuery(document).on("click",".save_listing_custom_js_code",function()
{
    jQuery(".loader-image").fadeIn();   
    editor3.save();
    code = jQuery("#listing_custom_js_code").val();
    save_development_code(code,"listing_custom_js_code");
});
 jQuery(document).on("click",".save_header_display",function()
{
    jQuery(".loader-image").fadeIn();   
    editor4.save();
    code = jQuery("#listing_custom_js_code").val();
    save_development_code(code,"listing_custom_js_code");
});
jQuery(document).on("click",".manage_css_images",function()
{
   jQuery(".tabs-content-custom-code").fadeOut();
    jQuery(".file-manager").fadeIn();
    jQuery(this).css("display","none");    
    jQuery(".action-with-selected-button").css("display","none");
    jQuery(".back_to_developer_zone").css("display","inline");
});
jQuery(document).on("click",".back_to_developer_zone",function()
{
   jQuery(".tabs-content-custom-code").fadeIn();
    jQuery(".file-manager").fadeOut();
    jQuery(this).css("display","none");
    jQuery(".action-with-selected-button").css("display","inline");
    jQuery(".manage_css_images").fadeIn();
});
 jQuery(document).ready(function() 
  {
       jQuery(".showmenu").click();
        jQuery(".showmenu").trigger("click");
        jQuery(".showmenu").click();
       jQuery(".showmenu").fadeOut();
        jQuery(".logo_small").fadeIn();
         var id_user = "<?php echo $user_id;?>";
        init_file_manager(id_user);
  });
</script>
<style>
    .ui-accordion-content
    {
        margin: 0px!important;
        width: auto!important;
        height: auto!important;
        padding:  0px!important;
    }
</style>

