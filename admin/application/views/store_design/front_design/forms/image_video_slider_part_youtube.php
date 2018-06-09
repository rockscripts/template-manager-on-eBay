<br>    
<h4 class="widgettitle nomargin shadowed">Youtube&nbsp;Video</h4>

    <div class="widgetcontent bordered shadowed nopadding">
     
       <?php  
                 $attributes = array('class' => 'stdform stdform2',"id"=>"advertising_form");
                 echo form_open("configuration/save_new_configuration",$attributes);
        ?> 
        
           <p>
               <label>Youtube&nbsp;URL: </label>
                <span class="field"><input type="text" id="video_url" name="video_url" class="input-xlarge" /></span>
            </p>  

        <p class="stdformbutton">
            <div class="btn btn-primary" id="save_images_videos_slider_yt" style=";margin-left: 15px;margin-bottom: 10px"><i class="iconsweets-zip"></i>Save</div>
</p>
      
   <input type="hidden" id="id" name="id" />
      </form>
    </div><!--widgetcontent-->

<script>

    /*jslint unparam: true, regexp: true */
    /*global window, jQuery */
    
    jQuery(document).ready(function() {
        

   jQuery(".video-provider").text(vide_provider)
        'use strict';
         var domain = "<?php echo base_url();?>";
         var vide_provider = "<?php echo $provider?>";
        jQuery("#save_images_videos_slider_yt").click(function()
        {
            jQuery("#message_content").html("");
            video_url  =  jQuery("#video_url").val();
                if ( /*check_vimeo_youtube_video_url( video_url )=="vimeo" || */  check_vimeo_youtube_video_url( video_url )=="youtube")
                {
                    jQuery("#video_url").css("border","1px  solid #bbb")    ; 
                      id = jQuery("#id").val();               
                   
                            home_design_save_images_videos_slider(id,'',video_url,vide_provider);
                            jQuery("li.listing-slider-home").click() ;
                           show_successfull_message("Youtube video was saved successful");
                  
                } else {
                   show_error_message("Youtube Video URL field is invalid.") ;
                   jQuery("#video_url").css("border","1px  solid red")    ;   
                }
               
              
        });

        function validate_link1( url )
        {
            /*support null value*/
            if(url !="")
            return true;
        else
        return false;
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

