<div class="top-buttons">
    <a href="<?= base_url() ?>rocklister/rocklister">
    <div class="btn btn-primary button_back" style="width: 70px;">
          <i class="  icon-backward"></i> Back
     </div>
    </a>
</div>
<div class="description-form-content">
   
    <h4 class="widgettitle nomargin shadowed">Find & Replace</h4>
    <div class="widgetcontent bordered shadowed nopadding">
         <?php  
         $attributes = array('class' => 'stdform stdform2 ',"id"=>"description_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?>  
        <p>
                <label>Find what  </label>
                <span class="field  ">                    
                    <textarea name="find_what" id="find_what"></textarea>
                </span>
               
         </p>
        <p>
                <label>Replace with</label>
                <span class="field  ">                    
                    <textarea name="replace_with" id="replace_with"></textarea>
                </span>
               
         </p>
        <p class="stdformbutton"> 
            <div  class="btn btn-primary  button_init_find_replace" style="margin-left: 10px;margin-bottom: 10px;">
                <i class="icon-play"></i>
                Continue
            </div>
        </p>
        <?php
            echo form_close();
        ?>
    </div>
</div>
<script>
    var items_collection = <?php echo json_encode($items_collection);?>;
   
jQuery(document).on("click",".button_init_find_replace",function(){
    /*settings for description*/
    /*settings for iamges*/
    find_what = jQuery("#find_what").val();
    replace_with = jQuery("#replace_with").val();
    init_find_replace_with_settings(items_collection,find_what,replace_with);
});

</script>
