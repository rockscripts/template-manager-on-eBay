
 <div class="alert  hide">
                	<div class="close1">x</div>
                 <span id="message_content"> 
                    <?php 
                    if(isset($message))
                    { 
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>
<div class="top-buttons">
    <div class="btn btn-primary go_to_listings">
      <i class=" icon-backward"></i> Back
     </div>
</div>
 <h4 class="widgettitle nomargin shadowed">Edit listing</h4>
<div class="widgetcontent bordered shadowed nopadding">  
    <div class="inner">
 <?php  
$attributes = array('class' => 'stdform stdform2');
echo form_open("store_design/featured/add_featured_listing",$attributes);
?> 
         <p>

                               <label>Title: </label>
                                <span class="field"><input type="text" id="title" value="<?=$current_title?>" name="title" class="input-xlarge" /></span>
                            </p>

                            
<p>

                                <label>Price: </label>

                                <span class="field"><input type="text"  value="<?=$current_price?>" id="price" name="price" class="input-xlarge" /></span>

                            </p>
                            <p>

                                <label>Image: </label>

                                <span class="field">
                                   
                                </span>

                            </p>
                            <p>

                                <label>Short Description: </label>

                                <span class="field">
                                    <textarea  id="description" class="span5 listing_description_text_area" cols="80" rows="5" name="description"><?=$description?></textarea></span>

                            </p>
                            <p>

                                <label>Link: </label>

                                <span class="field"><input type="text" id="link" name="link" class="input-xlarge" value="<?=$link?>" /></span>

                            </p>
<input type="hidden" id="id_neswletter_listing" value="<?=$id_neswletter_listing?>"/>
                              </form>

<img src="<?=$current_image_url?>" id="listing_image" />
 <br>
      <div class="select-file">
        <span class="field"> 
            <span class="btn btn-success fileinput-button">
            <i class=" icon-refresh icon-white"></i>
            <span>Change image...</span>
            <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="files[]" >
        </span>
      </div>
   <!-- The container for the uploaded files -->
    <div class="space-files" id="files" class="files"></div></span>
     
                                <p class="stdformbutton">
                                <div class="btn btn-primary" id="update_listing">Save</div>                   
                            </p>

<input type="hidden" id="domain" value="<?=base_url() ?>"/>

<script>
/*jslint unparam: true, regexp: true */
/*global window, jQuery */

jQuery(function () {
    'use strict';
     var domain = "<?php echo base_url();?>";
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'http://rockscripts.org/designmanager/server/php/?upload_path=newsletterREPLACElistings',
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
           id_neswletter_listing = jQuery("#id_neswletter_listing").val();
           title = jQuery("#title").val();
           price =  jQuery("#price").val();
           domain =  jQuery("#domain").val(); 
            jQuery("#message_content").html("");
           if(title!="")
           {
               if(checkprice(price))
               {
                     jQuery(".alert").addClass("hide");
                      data_return =  update_listing(id_neswletter_listing,title,price,file.url.replace("http://"+window.location.hostname+"/designmanager/server/php","http://fileshosting."+window.location.hostname),domain);
                     show_successfull_message( "Listing was updated successfull." );
                     remove_error_field("title");
                     remove_error_field("price");
                     jQuery("#listing_image").attr("src",file.url.replace("http://"+window.location.hostname+"/designmanager/server/php","http://fileshosting."+window.location.hostname));
                     jQuery("#files").html("")
               }
               else
               {
                      show_error_message("Listing price is invalid." )
                      set_error_field("price");
                      jQuery(".alert").removeClass("hide");
               }
           }
           else
           {
           jQuery("#message_content").html(" ");
           show_error_message("Listing title is empty." );
           set_error_field("title");
            if(!checkprice(price))
            {
               show_error_message( "<br>Listing price is invalid." );
               set_error_field("price");
            }  
            else
            remove_error_field("price");
            
           jQuery(".alert").removeClass("hide");    
           }
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


 /*Edit Listing when save button clicks*/
    jQuery("#update_listing").click(function()
   {
       jQuery("#message_content").html("");
       id_neswletter_listing = jQuery("#id_neswletter_listing").val();
       title = jQuery("#title").val();
       price =  jQuery("#price").val();
       domain =  jQuery("#domain").val();   
           if(title!="")
           {
                remove_error_field("title");
               if(checkprice(price))
               {               
                    if(jQuery('#files').find('div').size() >0)
                    {
                    jQuery(".alert").addClass("hide");
                    jQuery("#files").find("button").first().trigger('click');
                    }
                    else
                    {
                     jQuery(".alert").addClass("hide");
                     image_url = "not-defined";
                    // alert("Was here!");
                 
                     data_return =  update_listing(id_neswletter_listing,title,price,image_url,domain);
                     show_successfull_message( "Listing was updated successfull." );
                     remove_error_field("title");
                     remove_error_field("price");
                     /*updateFeaturedListing(id_featured_listing,title,price,image_url,domain,"update_featured_listing");
                     window.location.href = domain+"/store_design/featured/load_featured_listing/?id="+id_featured_listing;*/
                    }
               }
               else
               {                   
                      show_error_message("Listing price is invalid." )
                      set_error_field("price");
                      jQuery(".alert").removeClass("hide");
               }
           }
           else
           {
           jQuery("#message_content").html(" ");
           show_error_message("Listing title is empty." );
           set_error_field("title");
            if(!checkprice(price))
            {
               show_error_message( "<br>Listing price is invalid." );
               set_error_field("price");
            }  
            else
            remove_error_field("price");
            
           jQuery(".alert").removeClass("hide");    
           }
      
       
   });
   /**Go back to listings*/
    jQuery(".go_to_listings").click(function()
        {
        id_newsletter_design = jQuery("#id_newsletter_design").val();
        form_load_listings= ajax_load_listings_form(id_newsletter_design);
        jQuery("#content").html(form_load_listings);
        });
     /*Close Dialog*/   
     jQuery(".close1").click(function()
        {
        close_dialog_message();
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