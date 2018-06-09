<div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>
<div class="loader-image1"></div>
<p>
<div class="left">
    <img src="<?= base_url() ?>themes/katniss/img/button_ok.png">
</div>
<div class="left">
     Congratulations! you have completed installation wizard
     <br>
<i class="icon-ok"></i>&nbsp; <b>eBay Authorization was done</b><br>
<i class="icon-ok"></i>&nbsp; <b>Account Information was confirmed</b><br>
<i class="icon-ok"></i>&nbsp; <b>Default store front design was installed </b><br>
</div>
</p>
<div style="clear:both">
    <br>
    <br>
    <h3>What's Next?</h3>
    <i class="icon-circle-arrow-right"></i>&nbsp; <b><a href="<?= base_url() ?>rocklister/rocklister/">Install listing template (Options & Actions)</a></b><br>
    <i class="icon-wrench"></i>&nbsp; <b><a href="<?= base_url() ?>store_design/storesettings/design_settigns">Theme Options</a></b><br>    
    <i class="icon-fire"></i>&nbsp; <b><a href="<?= base_url() ?>store_design/storedesign/">Manage Store front</a></b><br>        
    <i class="icon-info-sign"></i>&nbsp; <b><a href="http://docs.rockscripts.org/" target="_blank">Read documentation</a></b><br>    
     
</div>
<?php
if(isset($id_suggested_template_selected)):
?>
<script>
    jQuery(".loader-image1").fadeIn();
    var id_suggested_template_selected = "<?php echo $id_suggested_template_selected?>";
    load_suggested_template_zip_file_name(id_suggested_template_selected,function(response)
    {
     var zip_file_name =  call_load_suggested_template_zip_file_name(response);
     send_suggested_template_to_installation(zip_file_name,function(response1)
        {
          call_send_suggested_template_to_installation(response1);
           init_install_template(zip_file_name,function(response2)
            {
              call_back_init_install_template(response2);
              var href_activation = "http://"+window.location.hostname+"/designmanager/store_design/developerzone/load_template_management";
              show_successfull_message("Suggested template was installed successful<br><a href='"+href_activation+"'>Active Template</a>");
              jQuery(".loader-image1").fadeOut();
            });
        });    
    });
</script>
<?php
endif;
?>