<div class="loader-image"></div>
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"  class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>    
<h4 class="widgettitle nomargin shadowed">Template Installation</h4>

    <div class="widgetcontent bordered shadowed nopadding">
        <input type="hidden" id="id" name="id" />
                   
        <?php  
                 $attributes = array('class' => 'stdform stdform2',"id"=>"advertising_form");
                 echo form_open("configuration/save_new_configuration",$attributes);
        ?> 
        
            <p>
                <label>Template Name: <small>Automatic added after select.zip file for template.</small></label>
                <span class="field"><input type="text" id="template_name" name="template_name" class="input-xlarge" disabled /></span>
            </p>
            <p>
                <label>Zip File: </label>
                <span class="field"></span>
            </p>
                                  
        </form>
                        

        <div class="select-file">
            <span class="field"> 
                <span class="btn btn-success fileinput-button">
                  <i class="iconsweets-zip"></i>
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
        <div class="btn btn-primary" id="start_installation" style="margin-left: 15px;"><i class="icon-play"></i>&nbsp;Install</div>
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
        '//jquery-file-upload.appspot.com/' : 'http://rockscripts.org/designmanager/server/php/?upload_path=templates_installation/'+id_user+'/zip/',
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
            acceptFileTypes: /(\.|\/)(zip)$/i,
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
                var node = jQuery('<p/>').append(jQuery('<span/>').text(file.name));
                var filename=file.name;
                var extension = filename.split('.').pop();
                if(extension=="zip")
                {
                    jQuery("#template_name").val(file.name.slice(0, -4));
                 exist_zip_file(file.name,function(response)
                    {
                     var response1 = call_back_exist_zip_file(response);
                     if(response1.exist=="true")
                     {
                         show_error_message("Template files already exist with this name <b>("+file.name+")</b>");
                         jQuery("#files").html("");
                         jQuery(".loader-image").fadeOut();;
                     }
                     else
                     {
                       jQuery("#files .btn").click();  
                     }
                    });
                      }
                      else
                      {
                         show_error_message("File added is not a zip. Please try again.");
                         jQuery("#files").html("");   
                      }
                 
                if (!index) {
                    node.append('<br>')
                        .append(uploadButton.clone(true).data(data));
                }
                node.appendTo(data.context);
            });
            jQuery('#files-preview').html('');
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
            jQuery.each(data.result.files, function (index, file) 
            {   jQuery(".loader-image").fadeIn();            
              //file.url
              validate_template_file_to_install(file.name,function(response)
              {
               response = call_back_validate_template_file_to_install(response);
               if(response.show_errors)
               { 
                   var errors_message = "";
                   var folders_msn = "";
                   if(jQuery.isArray(response.errors_folders))
                   {
                      folders_msn = "<b>Folders Required</b><br>";
                       errors_message = errors_message.concat(folders_msn);
                       /*show errors folders*/
                       jQuery.each( response.errors_folders, function( key, value ) 
                       {
                           errors_message = errors_message.concat(value+"<br>");
                       });
                   }
                   if(jQuery.isArray(response.errors_files))
                   {
                       folders_msn = "<b>Files Required</b><br>";
                        errors_message = errors_message.concat(folders_msn);
                       /*show errors files*/
                       jQuery.each( response.errors_files, function( key, value ) 
                       {
                        errors_message = errors_message.concat(value+"<br>");
                       }); 
                   }
                   show_error_message(errors_message);
                   jQuery("#files").html("");
               }
               else
               {
               //backup developer zone
                    ajax_backup_developer_zone();
                   /*start installation*/
                   init_install_template(file.name,function(response)
                    {
                      response = call_back_init_install_template(response);
                      var href_activation = "http://"+window.location.hostname+"/designmanager/store_design/developerzone/load_template_management";
                      show_successfull_message("Template was installed successful<br><a href='"+href_activation+"'>Active Template</a>");
                      jQuery("#files").html("");
                      jQuery("#template_name").val("");
                    });
               }
              });
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

        jQuery("#start_installation").click(function()
        { jQuery(".loader-image").fadeIn(); 
            jQuery("#message_content").html("");
            template_name = jQuery("#template_name").val();
            /*add code to process template*/    
            if(jQuery('#files').find('div').size() >0) 
            {
                jQuery(".alert").css("display","none");
                jQuery("#files").find("button").first().trigger('click');
                /*validate*/
            }
            else
            {
             show_error_message("Please select a zip file.") ;
             jQuery(".loader-image").fadeOut(); 
            }
               
                    
        });

         function validate_link( url )
        {
            if(url != "")
            {
                var urlregex = new RegExp(/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/);
            return urlregex.test(url);
            }
            else
            return true;
        
            
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

