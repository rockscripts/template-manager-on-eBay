
<div class="top-buttons">
    <div class="btn btn-primary go_to_templates">
      <i class=" icon-backward"></i> Back to my Templates
     </div>
</div>
<div class="navigation-options">   

<div id="header">

      <div class="logo">

        <h2><?=$widgettitle?></h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div>
    <div id="main">
        <div id="of-nav">
            <ul>
             <!--   <li class="content-settings current">
                    Settings
                </li>-->
                <li class="main-banner li_available"> 
                    Main Banner
                </li>
                <li class="welcome-text li_available">
                    Welcome Text
                </li>
                <li class="listings-newsletter li_available">
                   Listings
                </li>
            </ul>
        </div>
        <div id="content" >
            
        </div>
    </div> 
    <div class="save_bar"> 

	<input type="hidden" value="<?=$id_newsletter_design?>" id="id_newsletter_design">


        <button class="button submit-button reset-button" type="submit" id="of_reset">&nbsp;Options Reset&nbsp;</button>

	</div>
    
</div>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?= base_url() ?>uploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
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
<script>
  jQuery().ready(function() 
  {
    jQuery(".li_available").first().trigger('click');
    jQuery(".go_to_templates").click(function()
    {
        window.history.back()
    })
    });
</script>

