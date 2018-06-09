<div class="top-buttons">
    <a href="<?= base_url() ?>rocklister/rocklister">
    <div class="btn btn-primary button_back" style="width: 70px;">
          <i class="  icon-backward"></i> Back
     </div>
    </a>
</div>
<div class="description-form-content">
   
    <h4 class="widgettitle nomargin shadowed">Description & Images Extractor</h4>
    <div class="widgetcontent bordered shadowed nopadding">
         <?php  
         $attributes = array('class' => 'stdform stdform2 ',"id"=>"description_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?>  
        <p>
                <label>Description selector  </label>
                  <span class="field description_search_by_value_content">
                    <input type="checkbox" name="description_search_by" id="description_search_by" value="ID">
                </span>
                <span class="field  ">                    
                    <input type="text" class="input-xlarge" name="description_search_by_value" id="description_search_by_value"/>
                </span>
               
         </p>
        <p>
                <label>Image selector</label>
                  <span class="field image_search_by_value_content">
                    <input type="checkbox" name="image_search_by" id="image_search_by" value="ID">
                </span>
                <span class="field  ">                    
                    <input type="text" class="input-xlarge" name="image_search_by_value" id="image_search_by_value"/>
                </span>
               
         </p>
        <p class="stdformbutton"> 
            <div  class="btn btn-primary  button_init_extractor" style="margin-left: 10px;margin-bottom: 10px;">
                <i class="icon-play"></i>
                Start Extraction
            </div>
        </p>
        <?php
            echo form_close();
        ?>
    </div>
</div>
<script>
    var items_collection = <?php echo json_encode($items_collection);?>;
    jQuery("input#description_search_by").switchButton({
  width: 41,
  height: 14,
  button_width: 23,
  on_label: 'ID',
  off_label: 'Class'
});
  jQuery("input#image_search_by").switchButton({
  width: 41,
  height: 14,
  button_width: 23,
  on_label: 'ID',
  off_label: 'Class'
});
jQuery(document).on("click",".button_init_extractor",function(){
    /*settings for description*/
    description_search_by = jQuery(".description_search_by_value_content").find(".on").text();
    description_selector_value = jQuery("#description_search_by_value").val();
    /*settings for iamges*/
    image_search_by = jQuery(".image_search_by_value_content").find(".on").text();
    image_selector_value = jQuery("#image_search_by_value").val();
    init_extractor_with_settings(items_collection,description_search_by,description_selector_value,image_search_by,image_selector_value);
});

</script>
