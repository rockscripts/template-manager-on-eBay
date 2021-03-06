
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>

 <h4 class="widgettitle nomargin shadowed">Manage logo Design</h4>
<div class="widgetcontent bordered shadowed nopadding">  
    <div class="inner">
<?php
if($logo_url)
{
    ?>
<img src="<?=$logo_url?>" id="logo_design" />
<input type="hidden" id="current_id_logo" value="<?=$id_logo?>"/>
<?php

}
else
{
  ?>
<img src="<?=base_url()?>/themes/katniss/img/no_logo.png"  id="logo_design"/>
<?php  
}
?>
 <br>
 <span class="btn btn-success fileinput-button">
        <i class="icon-plus icon-white"></i>
        <span>Select file...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
 <br>
   <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    </div>
</div><!--widgetcontent-->
     
  
    <!--<a href="<?= base_url() ?>"  class="btn btn-primary">
   <i style="background-color: white;border-radius: 5px"class="iconsweets-refresh3"></i>  Refres
 </a>-->
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
/*jslint unparam: true, regexp: true */
/*global window, jQuery */

jQuery(function () {
    'use strict';
     var domain = "<?php echo base_url();?>";
     var logo_url = "<?php echo $logo_url;?>";
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'http://etemplate.com/server/php/?upload_path=store_design',
        uploadButton = jQuery('<button/>')
            .addClass('btn')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var jQuerythis = jQuery(this),
                    data = jQuerythis.data();
                jQuerythis
                    .off('click')
                    .text('Abort')
                    .on('click', function () 
                   {
                        jQuerythis.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    jQuerythis.remove();
                });
            });
    jQuery('#fileupload').fileupload({
        url: url,
        dataType: 'json',
      /*  data:{id:"3"} ,*/
        autoUpload: false,
      /*  acceptFileTypes: /(\.|\/)(gif|jpe?g|png|csv)jQuery/i,*/
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = jQuery('<div/>').appendTo('#files');
        jQuery.each(data.files, function (index, file) {
            var node = jQuery('<p/>')
                    .append(jQuery('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = jQuery(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append(file.error);
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        jQuery('#progress .bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        jQuery.each(data.result.files, function (index, file) {
            /*var link = jQuery('<a>')
                .attr('target', '_blank')
                .prop('href', file.url.replace("http://"+window.location.hostname+"/server/php","http://fileshosting."+window.location.hostname));
            jQuery(data.context.children()[index])
                .wrap(link);*/
            /*Update Logo*/
            /*CHANGE_TEST*/
            if(logo_url=="false")
            updateLogoURL(1,1,file.url.replace("http://"+window.location.hostname+"/server/php","http://fileshosting."+window.location.hostname),domain,"new_logo","");
            else
            {
              current_id_logo = jQuery("#current_id_logo").val();
              updateLogoURL(1,1,file.url.replace("http://"+window.location.hostname+"/server/php","http://fileshosting."+window.location.hostname),domain,"update_logo",current_id_logo);
            }
            jQuery("#logo_design").attr("src",file.url.replace("http://"+window.location.hostname+"/server/php","http://fileshosting."+window.location.hostname));
            jQuery(".alert").slideDown();
            jQuery(".alert").addClass("alert-success");
            jQuery("#message_content").html("Logo was updated.");
            
            jQuery("#files div").remove();
        });
    }).on('fileuploadfail', function (e, data) {
        jQuery.each(data.result.files, function (index, file) {
            var error = jQuery('<span/>').text(file.error);
            jQuery(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !jQuery.support.fileInput)
        .parent().addClass(jQuery.support.fileInput ? undefined : 'disabled');
});
</script>
