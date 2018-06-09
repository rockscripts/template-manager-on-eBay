<div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                   
                 </span>
  </div> 
<div class="left">
    <img src="<?= base_url() ?>themes/katniss/img/unistall.png">
</div>
<div class="left">
     After you select a feature to uninstall and confirm, this system do a backup for unistalled feature.
     <br>
     <a href="javascript:void(0)" id="unistall_1"><i class=" icon-remove-circle"></i>&nbsp; <b>Unistall Store Front Design</b></a><br>
     <a href="javascript:void(0)" id="unistall_2"><i class=" icon-remove-circle" ></i>&nbsp; <b>Unistall Listing Templates by selection</b></a><br>
     <a href="javascript:void(0)" id="unistall_3"><i class=" icon-remove-circle"></i>&nbsp; <b>Unistall Full Listing Templates</b></a><br>
     <a href="javascript:void(0)" id="unistall_4"><i class=" icon-remove-circle"></i>&nbsp; <b>Full Unistall</b></a><br>
</div>
<script>
    jQuery("#unistall_1").click(function()
    {
       form_authorization = load_authorization_form();  
       show_dialog_popup("Authorization request",form_authorization);
       jQuery("#unistall_feature").val("unistall_1");
       jQuery("#password").focus();
       //  jQuery(".loader-image").fadeIn();
       // uninstall_store_front();
    });
</script>
<script>
   jQuery(document).on("click",".submit_authorization",function()
   {
       jQuery(".alert").fadeOut();
       password = jQuery("#password_unistalled").val();
       if(password == "")
       {
        show_error_message("password field is empty invalid.");   
        jQuery("#popup_message .alert").html(jQuery(".widgetcontent .alert").html());
        jQuery("#popup_message .alert").fadeIn();
       }       
       else
       {
          
         authorized =  check_authorization(password);
         if(authorized=="true")
         {
            unistall_feature =    jQuery("#unistall_feature").val();
            if(unistall_feature=="unistall_1")
            {
                 jQuery(".loader-image").fadeIn();
                /*start uninstalling store front*/
                store_front_backup_list = list_store_front_backups();
                show_dialog_popup("Restoration point",store_front_backup_list);
                jQuery("#popup_container").css("max-width","470px");
                jQuery("#popup_container").css("min-width","470px");
                 jQuery(".loader-image").fadeOut();
            }
         }
         else
         {
             show_error_message("password typed was invalid.");
              jQuery("#popup_message .alert").html(jQuery(".widgetcontent .alert").html());
        jQuery("#popup_message .alert").fadeIn();
         }
          
       }
       
   });
    jQuery(document).on("click",".close_dialog",remove_dialog);
  </script>
<input type="hidden" value="" id="unistall_feature"/>
<input type="hidden" value="" id="password_unistalled"/>