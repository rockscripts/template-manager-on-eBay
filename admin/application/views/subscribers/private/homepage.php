<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container">

    <ul class="nav nav-tabs">

        <li <?php print ($this->uri->segment('2') == "home" ? ' class="active"' : ''); ?>>

            <a href="<?php print base_url(); ?>private/home">My Designs</a>

        </li>





        <li <?php print ($this->uri->segment('2') == "profile" ? ' class="active"' : ''); ?>>

            <a href="<?php print site_url('private/'. ($this->session->userdata('is_oauth') == true ? "oauth_" : "") .'profile'); ?>" title="edit profile"><?php print $this->lang->line('my_profile'); ?></a>

        </li>




 <?php
                  if($this->session->userdata( 'role_id' ) == 1):
                  ?>
        <li>

            <a href="<?php print base_url(); ?>adminpanel/site_settings">Adminpanel</a>

        </li>


  <?php
              endif;
                  ?>

  

    </ul>

</div>


<div>

    <?php $this->load->view('generic/flash_error'); ?>

</div>



<div>

    <h2 class="h2-title">
        <?php print $welcome; ?>
    </h2>
    <div class="top-buttons">
  <a href="<?= base_url() ?>store_design/developerzone/load_template_management" class="btn btn-primary">
      <i class="icon-management" style="border-radius:10px;"></i> Template Management
    </a>  
</div>
     <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content">                    
                 </span>
  </div> 
    <div class="banner">
       <div class="list-store-hme-design">
         <div class="nice-title">Store Front Design<div class="screenshot_button">
     <div class="select-file">
            <span class="field"> 
                <span class="btn  fileinput-button cw">
                    <i class="iconsweets-camera"></i>
                   
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="files[]" >
                </span>
            </span> 
            <!-- The container for the uploaded files -->
            <div id="files" class="files"></div>
            <div id="files-preview"></div>
        </div>
</div></div>
         <?php
   // foreach($array_listing_designs as $array_listing_design):
        foreach($array_front_design as $listing_design):
          ?>
        <img src="<?=$listing_design->screenshot?>" class="ebay-designs-screenshots screenshot-front"/>
        <div class="nice-title">
                <div class="banner">
         
               <?php
                 $attributes = array('class' => 'stdform','id' => 'store_get_code_'.$listing_design->id_ebay_design);
                  echo form_open("store_design/storedesign/design_settings",$attributes);  
                   ?>     
                <input name="id_home_design" type="hidden" value="<?= $listing_design->id_home_design?>"/> 
                <input name="id_ebay_design" type="hidden" value="<?= $listing_design->id_ebay_design?>"/> 
                <div  title="Appearance"  rel="store_get_code_<?=$listing_design->id_ebay_design?>" action="view" class="appearance-button custom_button" ></div>
                </form>
         </div>
        </div>
        <?php
      //  endforeach;        
    endforeach;
    ?>
    </div>
        <script>

    /*jslint unparam: true, regexp: true */
    /*global window, jQuery */
    
    jQuery(document).ready(function() {

        'use strict';
         var domain = "<?php echo base_url();?>";
         var id_user = "<?php echo $user_id;?>";
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'http://'+window.location.hostname+'/upload.php?upload_path=serverREPLACEphpREPLACEfilesREPLACEstore_designREPLACEscreenshotsREPLACE'+id_user+'/',
       
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
            autoUpload: true,
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
                data.context = jQuery('<div/>').appendTo('#files');
                var node = jQuery('<p/>')
                        .append(jQuery('<span/>').text(file.name));
                if (!index) {
                    node
                        .append('<br>')
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
            jQuery.each(data.result.files, function (index, file) {
             update_screenshot(file.url,"front");               
             var current_src = jQuery(".screenshot-front").attr("src");
             blueimp_remove_image(current_src,"front-screenshot");
             jQuery(".screenshot-front").attr("src",file.url);
             show_successfull_message("Storefront screenshot was updated successful");   
             jQuery("#files").html("");
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

      
jQuery(".list-store-hme-design").mouseenter(function() {
    jQuery(".screenshot_button").fadeIn();
}).mouseleave(function() {
    jQuery(".screenshot_button").fadeOut();
});


    });
</script>
<style>
    #files
    {
           display:none!important; 
    }

    </style>
    <div class="list-listings-design">
        <div class="nice-title">Listing Design<div class="screenshot_button1">
     <div class="select-file">
            <span class="field"> 
                <span class="btn  fileinput-button cw">
                    <i class="iconsweets-camera"></i>
                   
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload1" type="file" name="files[]" >
                </span>
            </span> 
            <!-- The container for the uploaded files -->
            <div id="files1" class="files"></div>
            <div id="files-preview"></div>
        </div>
</div></div>
         <?php
   // foreach($array_listing_designs as $array_listing_design):
        foreach($array_listing_design as $listing_design):
          ?>
        <img src="<?=$listing_design->screenshot?>" class="ebay-designs-screenshots screenshot-listing"/>
         <div class="nice-title">
             <div class="banner">
           <?php
              //   $attributes = array('class' => 'stdform','id' => 'get_code_'.$listing_design->id_ebay_design);
                //  echo form_open("store_design/listingdesign/design_settings/?action=create_auction",$attributes);  
                   ?>
               <!--  <input name="action" type="hidden" value="create_auction"/> 
                <input name="id_listing_design" type="hidden" value="<?= $listing_design->id_listing_design?>"/> 
                <input name="id_ebay_design" type="hidden" value="<?= $listing_design->id_ebay_design?>"/> 
                <div title="Get listing template code and paste in your listing description field on eBay Inc"  rel="get_code_<?=$listing_design->id_ebay_design?>" action="view" class="get-code-button custom_button" ></div>
                
                </form>-->
               <?php
                 $attributes = array('class' => 'stdform','id' => 'appearance_'.$listing_design->id_ebay_design);
                  echo form_open("store_design/listingdesign/design_settings/?action=appearance",$attributes);  
                   ?>    
                <input name="action" type="hidden" value="appearance"/> 
                <input name="id_listing_design" type="hidden" value="<?= $listing_design->id_listing_design?>"/> 
                <input name="id_ebay_design" type="hidden" value="<?= $listing_design->id_ebay_design?>"/> 
                 <input name="id_ebay_design1" type="hidden" value="<?= $listing_design->id_ebay_design?>"/> 
                <div  title="Appearance"  rel="appearance_<?=$listing_design->id_ebay_design?>" action="view" class="appearance-button custom_button" ></div>
                </form>
         </div>
               </div> 
        <?php
        
      //  endforeach;        
    endforeach;
    ?>
    </div>
         <script>

    /*jslint unparam: true, regexp: true */
    /*global window, jQuery */
    
    jQuery(document).ready(function() {

        'use strict';
         var domain = "<?php echo base_url();?>";
         var id_user = "<?php echo $user_id;?>";
        // Change this to the location of your server-side upload handler:
        
        var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'http://'+window.location.hostname+'/upload.php?upload_path=serverREPLACEphpREPLACEfilesREPLACEstore_designREPLACEscreenshotsREPLACE'+id_user+'/',
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

        jQuery('#fileupload1').fileupload({
            url: url,
            dataType: 'json',
          /*  data:{id:"3"} ,*/
            autoUpload: true,
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
            data.context = jQuery('<div/>').appendTo('#files1');
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
             jQuery.each(data.result.files, function (index, file) {
             update_screenshot(file.url,"listing");               
             var current_src = jQuery(".screenshot-listing").attr("src");
             blueimp_remove_image(current_src,"listing-screenshot");
             jQuery(".screenshot-listing").attr("src",file.url);
             show_successfull_message("Listing screenshot was updated successful");    
             jQuery("#files").html("");
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

      
jQuery(".list-listings-design").mouseenter(function() {
    jQuery(".screenshot_button1").fadeIn();
}).mouseleave(function() {
    jQuery(".screenshot_button1").fadeOut();
});


    });
</script>
<style>
    #files1
    {
           display:none!important; 
    }

    </style>
    </div>
    
    
    

</div>