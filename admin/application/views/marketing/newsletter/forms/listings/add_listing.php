
 <div class="alert  hide">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                 </span>
  </div>


  
        <h4 class="widgettitle nomargin shadowed">Add Listing</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2');
echo form_open("store_design/featured/add_featured_listing",$attributes);
?> 
                            <p>

                               <label>Title: </label>

                                <span class="field"><input type="text" id="title" name="title" class="input-xlarge" /></span>

                            </p>

                            
<p>

                                <label>Price: </label>

                                <span class="field"><input type="text" id="price" name="price" class="input-xlarge" /></span>

                            </p>
                            <p>

                                <label>Short Description: </label>

                                <span class="field">
                                    <textarea  id="description" class="span5 listing_description_text_area" cols="80" rows="5" name="description"></textarea></span>

                            </p>
                            <p>

                                <label>Link: </label>

                                <span class="field"><input type="text" id="link" name="link" class="input-xlarge" /></span>

                            </p>
                            <p>

                                <label>Image: </label>
                                <span class="field">                                   
                                </span>

                            </p>
                              </form>
                        

                              <div class="select-file">
                                <span class="field"> 
                                    <span class="btn btn-success fileinput-button">
                                    <i class="icon-plus icon-white"></i>
                                    <span>Select file...</span>
                                    <!-- The file input field used as target for the file upload widget -->
                                    <input id="fileupload" type="file" name="files[]" >
                                </span>
                              </div>
   <!-- The container for the uploaded files -->
    <div class="space-files" id="files" class="files"></div></span>

                                           


                            <p class="stdformbutton">

                                <div class="btn btn-primary" id="save_listing">Save</div>

                              

                            </p>

                      

                    </div><!--widgetcontent-->



     

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
           title = jQuery("#title").val();
           price =  jQuery("#price").val();
           short_description =  jQuery("#description").val(); 
           link =  jQuery("#link").val(); 
            jQuery("#message_content").html("");
           if(title!="")
           {
                remove_error_field("title");
               if(checkprice(price))
               {
                     remove_error_field("price");
                   if(short_description !="")
                   {
                         remove_error_field("description");
                         if(link !="")
                   {
                     remove_error_field("link");
                     jQuery(".alert").addClass("hide");
                     id_newsletter_design = jQuery('#id_newsletter_design').val(); 
                     save_listing(id_newsletter_design,title,price,file.url.replace("http://"+window.location.hostname+"/designmanager/server/php","http://fileshosting."+window.location.hostname),short_description, link);     
                     var message ="";  
                     var last_id_inserted = "";
                     form_load_listings = ajax_add_listings__form(message);
                     jQuery("#content").html(form_load_listings);
                     show_successfull_message("Listing Was Added successfull" );
                     last_id_inserted =  get_last_listing_id_inserted(id_newsletter_design);
                     /*Load button  view Item*/
                     open_button_view_last_listing_inserted(last_id_inserted,title,price,file.url.replace("http://"+window.location.hostname+"/designmanager/server/php","http://fileshosting."+window.location.hostname),short_description, link);
                   }
                   else
                   {
                      jQuery("#message_content").append( "Listing link is empty." )  ;
                      jQuery("#link").css("border","1px  solid red");
                      jQuery(".alert").removeClass("hide");
                   }
                   }
                     else
                   {
                      jQuery("#message_content").append( "Short description is empty." )  ;
                      jQuery("#description").css("border","1px  solid red");
                      jQuery(".alert").removeClass("hide");
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
            
           jQuery(".alert").removeClass("hide");    
           }
      
       
   });
     jQuery(".close1").click(function()
        {
        close_dialog_message();
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


 jQuery("#save_listing").click(function()
   {
        jQuery("#message_content").html("");
       title = jQuery("#title").val();
       price =  jQuery("#price").val();
       short_description =  jQuery("#description").val(); 
       link =  jQuery("#link").val(); 
           if(title!="")
           {
                remove_error_field("title");
               if(checkprice(price))
               {
                     remove_error_field("price");
                   if(short_description !="")
                   {
                         remove_error_field("description");
                         if(link !="")
                   {
                       remove_error_field("description");
                        if(jQuery('#files').find('div').size() >0)
                    {
                           jQuery(".alert").addClass("hide");
                           jQuery("#files").find("button").first().trigger('click');
                    }
                else
                {
                    jQuery(".alert").removeClass("hide");
                     jQuery("#message_content").append( "Please select listing image." )  ;
                }
                   }else
                   {
                      jQuery("#message_content").append( "Listing link is empty." )  ;
                      jQuery("#link").css("border","1px  solid red");
                      jQuery(".alert").removeClass("hide");
                   }
                   }
                     else
                   {
                      jQuery("#message_content").append( "Short description is empty." )  ;
                      jQuery("#description").css("border","1px  solid red");
                      jQuery(".alert").removeClass("hide");
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
           jQuery(".alert").removeClass("hide");    
           }
      
     
   });
    jQuery(".view-item").live('click',function() 
   {
        id_newsletter_listing  = jQuery(this).attr("listing_id");      
        title  = jQuery(this).attr("title");      
        price  = jQuery(this).attr("price");      
        image_url  = jQuery(this).attr("image_url");   
        description  = jQuery(this).attr("description");   
        link  = jQuery(this).attr("link");   
         var domain = "<?php echo base_url();?>";
         data_return = edit_listing_form(id_newsletter_listing,title,price,image_url,domain,description,link );
         jQuery("#content").html(data_return.html);
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
    #save_listing
    {
        margin-left: 12px
    }

</style>