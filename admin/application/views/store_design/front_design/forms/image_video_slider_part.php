<br>    
<div class="alert2  alert-info">
              <i class="icon-info-sign"></i>Recommended image sizes: 942 x 358 pixels
  </div>
<h4 class="widgettitle nomargin shadowed">Save Image / Video Slider</h4>

    <div class="widgetcontent bordered shadowed nopadding">
        <input type="hidden" id="id" name="id" />
                   
        <?php  
                 $attributes = array('class' => 'stdform stdform2',"id"=>"advertising_form");
                 echo form_open("configuration/save_new_configuration",$attributes);
        ?> 
        
            <p>
                <label>Link: </label>
                <span class="field"><input type="text" id="link" name="link" class="input-xlarge" /></span>
            </p>
            <p>
                <label>Image: </label>
                <span class="field"></span>
            </p>
                                  
        </form>
                        

        <div class="select-file">
            <span class="field"> 
                <span class="btn btn-success fileinput-button">
                   <i class="iconsweets-camera"></i>
        <span>Browse</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="files[]" >
                </span>
            </span> 
            <!-- The container for the uploaded files -->
            <div id="files" class="files"></div>
            <div id="files-preview"></div>
        </div>

        <p class="stdformbutton">
            <div class="btn btn-primary" id="save_home_design_images_videos_slider" style="margin-left: 15px;"><i class="iconsweets-zip"></i>Save</div>
        </p>

    </div><!--widgetcontent-->

<script>

    /*jslint unparam: true, regexp: true */
    /*global window, jQuery */
    
    jQuery(document).ready(function() {

        'use strict';
         var domain = "<?php echo base_url();?>";
         var id_user = "<?php echo $id_user;?>";
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ? 
        '//jquery-file-upload.appspot.com/' : 'http://rockscripts.org/designmanager/server/php/?upload_path=store_designREPLACEhome_image_video_slider/'+id_user+'/',
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
            maxNumberOfFiles:2,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png|bmp)$/i,
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
            if(data.files>1)
            {
             show_error_message("Please, select only one image to upload");  
             jQuery("#files").html("");
             return;
            }
            jQuery.each(data.files, function (index, file) {
                 validate_images(file.name,function(response)
                {
                    var result = call_validate_images(response);
                    if(result.is_image=="false")
                    {
                      show_error_message("File added isen't an image.");
                      jQuery("#files").html("");
                      return;
                    }
                });
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
               
               var id    = jQuery("#id").val();
               var link   =  jQuery("#link").val();  
               save_home_design_images_videos_slider(id,link,file.url.replace("http://"+window.location.hostname+"/designmanager/server/php","http://fileshosting."+window.location.hostname),"");               
               var current_src = jQuery("#files-preview").find("img").attr("src");
               blueimp_remove_image(current_src,"front-slider");
               jQuery("li.listing-slider-home").click() ;               
               show_successfull_message("Image was saved successful");
            
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

        jQuery("#save_home_design_images_videos_slider").click(function()
        {
            jQuery("#message_content").html("");
            var link  =  jQuery("#link").val();
              
                if ( validate_link( link ) )
                {
                    jQuery("#link").css("border","1px  solid #bbb")    ; 
                      var id = jQuery("#id").val();
                    if(jQuery('#files').find('div').size() >0) {
                        jQuery(".alert").addClass("hide");
                        jQuery("#files").find("button").first().trigger('click');
                    }
                    else {
                          if(id > 0)
                            {
                            save_home_design_images_videos_slider(id,link,'ignore',"");
                            jQuery("li.listing-slider-home").click() ;
                            show_successfull_message("Image was saved successful");
                    }
                    else
                        show_error_message("Please select image.") ;
                    }
                } else {
                   show_error_message("Link is invalid.") ;
                   jQuery("#link").css("border","1px  solid red")    ;   
                }
               
              
        });

        function validate_link( url )
        {
            /*support null value*/
            if(url =="")
            return true;
        
            var urlregex = new RegExp(/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/);
            return urlregex.test(url);
        }

    });
</script>

<style>
  
    .select-file {
        margin-bottom: 10px;
        margin-left: 238px;
        margin-top: -22px;
    }
        #files button
        {
             display: none;
        }
        #save_featured
        {
            margin-left: 12px
        }
</style>

