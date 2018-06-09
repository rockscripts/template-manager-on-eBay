    <h4 class="widgettitle nomargin shadowed">Save Popular Category</h4>

    <div class="widgetcontent bordered shadowed nopadding">
        <input type="hidden" id="id" name="id" />
                   
        <?php  
                 $attributes = array('class' => 'stdform stdform2',"id"=>"advertising_form");
                 echo form_open("configuration/save_new_configuration",$attributes);
        ?> 
        
            <p>
                <label>Name: </label>
                <span class="field"><input type="text" id="name" name="name" class="input-xlarge" /></span>
            </p>
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
            <div class="btn btn-primary" id="save_popular_category" style="margin-left: 15px;"><i class="iconsweets-zip"></i>Save</div>
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
                    '//jquery-file-upload.appspot.com/' : 'http://rockscripts.org/designmanager/server/php/?upload_path=store_designREPLACEpopular_categoriesREPLACE'+id_user+'/',
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
            if(data.files>1)
            {
             show_error_message("Please, select only one image to upload");  
             jQuery("#files").html("");
             return;
            }
            data.context = jQuery('<div/>').appendTo('#files');
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
                 jQuery(".loader-image").fadeIn();
              var title =""; 
               var id    = jQuery("#id").val();
               var title = jQuery("#name").val();
               var link   =  jQuery("#link").val();

                save_popular_categories(id,title,link,file.url.replace("http://"+window.location.hostname+"/designmanager/server/php","http://fileshosting."+window.location.hostname));                
                jQuery("#save_popular_category").fadeOut();
                jQuery(".select-file").find(".fileinput-button").fadeOut();
                show_successfull_message("Popular category was saved successful");                                
                var current_src = jQuery("#files-preview").find("img").attr("src");
                blueimp_remove_image(current_src,"popular-category");
                jQuery(".loader-image").fadeOut();
                jQuery("#files-preview").remove();
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

        jQuery("#save_popular_category").click(function()
        {
           var  title = "";
            jQuery("#message_content").html("");
            var title = jQuery("#name").val();
            var link  =  jQuery("#link").val();
            
          if(title != "")
            {   
                if (  validate_link( link ) )
                {
                    var id = jQuery("#id").val();
                    if(jQuery('#files').find('div').size() >0) {
                        jQuery(".alert").addClass("hide");
                        jQuery("#files").find("button").first().trigger('click');
                        remove_error_field("name");
                       remove_error_field("link");
                       jQuery("input").attr("disabled","disabled");
                    }
                    else {
                         if(id > 0)
                    {                        
                         jQuery(".loader-image").fadeIn();
                         save_popular_categories(id,title,link,'ignore');     
                         show_successfull_message("Popular Category Saved"); 
                         remove_error_field("name");
                         remove_error_field("link");
                    }
                    else
                    {   show_error_message("Please select category image.") ;}
                     
                    }
                } else {
                   show_error_message("Category link is invalid.") ;
                   jQuery("#link").css("border","1px  solid red")    ;   
                }
            } else {
                show_error_message("Category name is empty.") ;
                jQuery("#name").css("border","1px  solid red")    ;  
           }    
        });

       

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

