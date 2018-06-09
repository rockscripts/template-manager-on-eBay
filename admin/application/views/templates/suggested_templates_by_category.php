 <div ><br>Rockscripts presents to you some suggested templates for your store or listings on eBay Inc.
                                        <br>
                                        <div style="clear:both;margin-top: 10px;">
                                            <div class="suggested-templates-categories">
                                               <?php
                                               if(isset($suggested_templates_categories)):
                                                  foreach($suggested_templates_categories as $suggested_templates_category):
                                                   ?>
                                                <div class="listing-advertising-box featured-box">
                                                    
                                                <div class="listing-images-for-boxes">
                                                    <img id="img-12" src="<?=$suggested_templates_category->c_image?>">
                                                </div>

                                                <div class="more clr">
                                                        <div class="box-controls" style="height:auto;">
                                                            <div class="featured-price">
                                                                <?=$suggested_templates_category->c_name?>
                                                            </div> 
                                                            <div class="browse-button" cat-id="<?=$suggested_templates_category->id_suggested_template_category?>">Browse</div>
                                                        </div>
                                                </div>
                                            </div>
                                                  <?php
                                                  endforeach;
                                               endif;
                                               ?>
                                            </div>
                                            <div class="suggested-templates">
                                               
                                                <div class="suggested-templates-loader">
                                                    
                                                </div>
                                            </div>
                                       
                           
                                        </div>                                                                
                                    </div>  
<script>
jQuery(document).on("click",".browse-button",function()
                {
                 category_id = jQuery(this).attr("cat-id");
                 load_suggested_templates_by_categories_http(category_id,function(response)
                    {
                      suggested_templates_view = call_load_suggested_templates_by_categories(response);
                      jQuery(".suggested-templates-loader").html(suggested_templates_view.html);
                      jQuery(".suggested-templates-categories").css("display","none");
                    jQuery(".suggested-templates").fadeIn();
                    });
                });
                  jQuery(document).on("click",".template-selector",function()
                {
                    jQuery(".featured-box").removeClass("suggested_template_selected");
                    jQuery(this).parent(".featured-box").addClass("suggested_template_selected");
                    suggested_template_id = jQuery(this).attr("template-id");
                    jQuery(".loader-image1").fadeIn();
    var id_suggested_template_selected = suggested_template_id;
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
              show_successfull_message("Suggested template was installed successful<br><a href='"+href_activation+"'>Active Template</a> | <a href='"+response2.download_template_file+"'>Download template files</a>");
              jQuery(".loader-image1").fadeOut();
            });
        });    
    });
                });
	
</script>
<style>
    .stdform label {
    float: left;
    padding: 5px 20px 0 0;
    text-align: left;
    width: 200px;
}
.actionBar
{
    display: none;
}
.browse-button
{
     background: none repeat scroll 0 0 #008000;
    border-radius: 3px;
    color: #FFFFFF;
    cursor: pointer;
    margin: 3px auto;
    text-align: center;
    width: 51px;
}
.suggested-templates
{
    display:none;
}
.suggested_template_selected
{
    border-color: green!important;
}
    </style>
    