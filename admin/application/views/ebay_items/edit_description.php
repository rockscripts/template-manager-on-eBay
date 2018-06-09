<div class="top-buttons">
    <div class="btn btn-primary button_back back-to-rocklister" style="width: 70px;">
          <i class="  icon-backward"></i> Back
     </div>
    
</div>
<div class="alert2  alert-info" style="display: none">
              <i class="icon-info-sign"></i>This item has not Rockscripts template installed.
  </div>
        <h4 class="widgettitle nomargin shadowed"><?=$item_title?></h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2',"id"=>"edit_description");
echo form_open("",$attributes);
?>   
            
                   
 
                            <p>

                              
                     
                                      <?php 
            		$config_mini = array();   
            		$config_mini['toolbar'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','FontSize','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','NumberedList','BulletedList' ,'-', 'Link', 'Unlink', 'Anchor',"Image"));
            		$config_mini['filebrowserBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php";
            		$config_mini['filebrowserImageBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php?type=images";
            		$config_mini['filebrowserUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=files";
            		$config_mini['filebrowserImageUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=images";
                        if($description)
            		echo $this->ckeditor->editor("edit_description_overview", html_entity_decode(htmlspecialchars($description, ENT_QUOTES)) , $config_mini);
                        else
                            echo $this->ckeditor->editor("edit_description_overview", html_entity_decode('') , $config_mini);
            	?>
                              

                            </p>    
                            
                            <p class="stdformbutton">

                                <div style="margin-bottom: 10px;    margin-left: 10px;    margin-top: -19px;" class="btn btn-primary save_item_description " item_id="<?=$item_id?>" action="edit">
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                        </form>

                    </div><!--widgetcontent-->
                    <script>
                              jQuery(".save_item_description").click(function()
                                {
                                    item_id             = jQuery(this).attr("item_id");
                                    CKEDITOR.instances.edit_description_overview.updateElement();
                                    edit_description_overview             = jQuery("#edit_description_overview").val();
                                    action = "prepared";
                                    save_item_description(item_id,edit_description_overview,action);   
                                    jQuery(".alert").css("display","none");   
                                    var host = "http://"+window.location.hostname+"/designmanager";
                                     show_successfull_message('<i class="icon-check"></i> Changes were sent to prepared items<br> * Find item in prepared items tab with ID: <b>'+item_id+'</b><br><i class="icon-info-sign"></i><a href="'+host+'/rocklister/rocklister?prepared=true'+'" target="_blank" >Go to prepared items</a>, find item and submit revision on eBay Inc ') ;
                                    set_current(this);
                                });
                    </script>
<script>
   jQuery(".back-to-rocklister").on("click",function()
    {
        refresh_rocklister_page();
       /*  jQuery(".alert").hide();
         jQuery(".edit-description-section").fadeOut();     
         jQuery(".edit-description-section").html("");
         jQuery(".rocklister-section").fadeIn();  */
    });
     jQuery(".go-prepared-items").on("click",function()
    {
       remove_dialog_send_to_prepared_listings(reload);
    });
</script>