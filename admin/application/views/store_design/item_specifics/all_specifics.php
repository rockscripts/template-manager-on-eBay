<link href="<?= base_url() ?>themes/katniss/css/google_fonts.css" type="text/css" rel="stylesheet" />
<h4 class="widgettitle nomargin shadowed all-specifics-content"> Variations Specifics Widgets</h4> 
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
<div class="all-specifics-content">
   <table class="table table-bordered items_data_table deleted_items_data_table" data="deleted_items_data_table" id="dyntable_resultados6" >
  <thead>
      <tr>
          <th class="head0 sorting">Status</th>
           <th class="head0 sorting">Name</th>
           <th class="head0 sorting">Custom Name</th>
          <th class="head0 sorting">Action</th>   
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($item_specifics)): 
      foreach($item_specifics as $specific):
        if($specific->is_active=="true"):
            $class_active = "actived";
            else:
            $class_active = "deactived";
        endif; 
?>
        <tr class="row-<?= $specific->id_widget_items_specifics?>">
            <td>
                <div class="<?=$class_active?> specific-id-<?= $specific->id_widget_items_specifics?>" id="<?=$specific->id_widget_items_specifics?>"  specific-name="<?= $specific->name?>"></div>
            </td>
            <td >
                <b> <?= $specific->name?></b>
            </td>
            <td >
                <input class="custom_name" id_widget_items_specifics="<?= $specific->id_widget_items_specifics?>" type="text" value="<?= $specific->custom_name?>" placeholder="<?= $specific->name?>"/>
            </td>
            <td>
                       <div class="btn-group"  style="border-radius: 10px;">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Select...<span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li class="">
                                                  <a  title="Specifics List" specific-id="<?= $specific->id_widget_items_specifics?>" href="javascript:void(0);" specific-name="<?= $specific->name?>" class="specifics_view">
                                                   <i class="icon-eye"></i>&nbsp; Specifics List
                                                  </a>
                                              </li>
                                              <li class="">
                                                  <a  title="Remove Specifics"  href="javascript:void(0);" class="button-remove-specifics" specific-name="<?= $specific->name?>" specific-id="<?= $specific->id_widget_items_specifics?>">
                                                   <i class="icon-trash"></i>&nbsp; Remove
                                                  </a>
                                              </li>
                                            </ul>
               </div>
            </td>
        </tr>
<?php 
endforeach;
endif;
      ?>
    </tbody>

</table> 
</div>

<div class="specifics-values-content">
    
</div>

<script>
    jQuery(document).on("click",".actived",function()
    {
        //backup developer zone
        var specific_id = jQuery(this).attr("id");
        var specific_name = jQuery(this).attr("specific-name");
        jQuery(".alert").hide();
        
        update_status_variation_specific(specific_id,"false",function(response)
       {
           result = call_update_status_variation_specific(response);          
           jQuery(".specific-id-"+specific_id).removeClass("actived");
           jQuery(".specific-id-"+specific_id).addClass("deactived");
           show_successfull_message("<b>"+specific_name+"</b> variation widget was deactivated successfully.");
       });
    });
    jQuery(document).on("blur",".custom_name",function()
    {
        //backup developer zone
        var id_widget_items_specifics = jQuery(this).attr("id_widget_items_specifics");
        var custom_name = jQuery(this).val();
        jQuery(".alert").hide();
        
        update_custom_name(id_widget_items_specifics,custom_name,function(response)
       {
           result = call_update_custom_name(response);         
       });
    });
jQuery(document).on("click",".deactived",function()
    {
        //backup developer zone
        var specific_id = jQuery(this).attr("id");
        var specific_name = jQuery(this).attr("specific-name");
        jQuery(".alert").hide();
        
        update_status_variation_specific(specific_id,"true",function(response)
       {
           result = call_update_status_variation_specific(response);          
           jQuery(".specific-id-"+specific_id).removeClass("deactived");
           jQuery(".specific-id-"+specific_id).addClass("actived");
           show_successfull_message("<b>"+specific_name+"</b> variation widget was activated successfully.");
       });
    });
    jQuery(document).on("click",".specifics_view",function()
    {
        //backup developer zone
        var specific_name = jQuery(this).attr("specific-name");
        jQuery(".alert").hide();        
        ajax_load_item_specifications_values_view(specific_name,function(response)
        {
          result = callback_ajax_load_item_specifications_values_view(response);  
          jQuery(".all-specifics-content").fadeOut();
          jQuery(".specifics-values-content").fadeIn();
          jQuery(".specifics-values-content").html(result.view);
        });
    });
     jQuery(document).on("click",".button-remove-specifics",function()
    {
        //backup developer zone
        var specific_name = jQuery(this).attr("specific-name");
        var specific_id = jQuery(this).attr("specific-id");
        delete_specifics(specific_name,specific_id);
    });
    // dynamic table

    jQuery('#dyntable_resultados6').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>
<style>
    .actived, .deactived
{
    cursor:pointer;
}
    </style>