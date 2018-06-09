<div class="loader-image"></div>
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"  class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div> 
<div class="top-buttons">
  <a href="<?= base_url() ?>store_design/developerzone/install_template" class="btn btn-primary">
      <i class="icon-addpage"></i> Add Template
    </a> 
</div>

<table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados1" >
  <thead>
      <tr>
          <th class="head0 sorting">Status</th>
            <th class="head1 sorting" style="width:40%">Name</th>  
          <th>
              Action
          </th>
      </tr>
 </thead>
    <tbody>
        
      <?php
      if(is_array($templates_installed)): 
      foreach($templates_installed as $item):
        
?>
        <tr id="row-template-<?=$item->id_template_installed?>">
             
            <td>
                <?php 
                if($item->status=="off"):
                    ?>
                <div class="deactived item-id-<?=$item->id_template_installed?>" item_id="<?=$item->id_template_installed?>" template_name="<?=$item->name?>"></div>
                <?php
                    else:
                    ?>
                <div class="actived item-id-<?=$item->id_template_installed?>" item_id="<?=$item->id_template_installed?>" template_name="<?=$item->name?>"></div>
                <?php
                endif;
                        
                ?>
            </td> 
            <td>
               <?= $item->name?> 
            </td>
            <td>
                <?php
                  if($item->name!="default"):
                ?>
                    <div class="btn-group"  style="border-radius: 10px;">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Select...<span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li class="">
                                                  <a  title="Download Template Files" item_id="<?=$item->id_template_installed?>" template_name="<?=$item->name?>" href="javascript:void(0);" class="button-download-template">
                                                      <i class="icon-download"></i>&nbsp;Download template
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a  title="Download Template Files" item_id="<?=$item->id_template_installed?>" template_name="<?=$item->name?>" href="javascript:void(0);" class="button-download-full-template">
                                                      <i class="icon-download"></i>&nbsp;Full Download 
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a  title="Delete Template Files"  href="javascript:void(0);" class="button-delete-template"  item_id="<?=$item->id_template_installed?>" template_name="<?=$item->name?>">
                                                    <i class="icon-delete"></i>&nbsp;Delete
                                                  </a>
                                              </li>
                                            </ul>
               </div>
                <?php
                else:
                ?>
                ...
                <?php
                 endif;
                ?>
            </td>
        </tr>
<?php

endforeach;
endif;
      ?>
        
    </tbody>

</table>
<input type="hidden" id="id_template"/>
<input type="hidden" id="template_name"/>

<script>
jQuery(document).on("click",".deactived",function()
    {
        //backup developer zone
        ajax_backup_developer_zone();
        item_id = jQuery(this).attr("item_id");
        template_name = jQuery(this).attr("template_name");
        jQuery(".alert").hide();
        active_template(item_id,template_name,function(response)
       {
           result = call_active_template(response);
           jQuery(".item-id-"+item_id).removeClass("deactived");
           jQuery(".item-id-"+item_id).addClass("actived");
           jQuery(".item-id-"+result.id_old_template_active).removeClass("actived");
           jQuery(".item-id-"+result.id_old_template_active).addClass("deactived");
           show_successfull_message("<b>"+template_name+"</b> template was actived successful.");
       });
    });
    jQuery(document).on("click",".button-download-template",function()
    {
        item_id = jQuery(this).attr("item_id");
        template_name = jQuery(this).attr("template_name");
        jQuery(".alert").hide();
        download_template(item_id,template_name,function(response)
       {
           result = call_download_template(response);
           OpenInNewTab(result.download_url);
       });
    });
    jQuery(document).on("click",".button-download-full-template",function()
    {
        item_id = jQuery(this).attr("item_id");
        template_name = jQuery(this).attr("template_name");
        jQuery(".alert").hide();
        download_template(item_id,template_name,function(response)
       {
           result = call_download_template(response);
           OpenInNewTab(result.download_full_url);
       });
    });
     jQuery(document).on("click",".button-delete-template",function()
    {
        item_id = jQuery(this).attr("item_id");
        template_name = jQuery(this).attr("template_name");
        form_authorization = load_authorization_form();  
        show_dialog_popup("Authorization request",form_authorization);
        jQuery("#id_template").val(item_id);
        jQuery("#template_name").val(template_name);
    });       
    // dynamic table

    jQuery('#dyntable_resultados1').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>
<script>
   jQuery(document).on("click",".submit_authorization",function()
   {
       jQuery(".alert").fadeOut();
       password = jQuery("#password").val();
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
             item_id = jQuery("#id_template").val();
             template_name = jQuery("#template_name").val();
             download_template(item_id,template_name,function(response)
                {
                    result = call_download_template(response);
                    var download_url = result.download_url;
                    delete_template(item_id,template_name,function(response)
                    {
                        result = call_delete_template(response);
                        jQuery("#row-template-"+item_id).remove();
                        remove_dialog_simple();
                        show_successfull_message("<b>"+template_name+"</b> template was deleted successful.<br> <a href='"+download_url+"' target='_blank'>Download template</a>");
                    }); 
                });
                        
         }
         else
         {
             show_error_message("password typed was invalid.");
             jQuery("#popup_message .alert").html(jQuery(".widgetcontent .alert").html());
             jQuery("#popup_message .alert").fadeIn();
         }
          
       }
       
   });
    jQuery(document).on("click",".close_dialog",remove_dialog_simple);
  </script>