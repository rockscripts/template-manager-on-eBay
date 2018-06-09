 <table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados1459" >
  <thead>
      <tr> 
          <th class="head3 sorting" style="width:40%">Template Name</th>
          <th class="head3 sorting" style="width:40%">Date Created</th> 
          <th class="head4 sorting"  style="width:20%">Actions</th> 
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($developer_zone_backups)): 
      foreach($developer_zone_backups as $item):
?>
        <tr>
            <td class="td_image_datatable" style="width:25%;text-align: left!important;">
                <?= $item->template_name?>
            </td> 
            <td class="td_image_datatable" style="width:25%;text-align: left!important;">
                <?= $item->date_added?>
            </td>           
            <td  style="width:40%"> 
                <div backup_id="<?= $item->id_backup_developer_zone?>" title="View developer zone backup values" style="float:left;margin-left: 10px;" class="btn btn-primary  view_developer_zone_backup">
              <i class="icon-eye">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> View
              </div>
              <div backup_id="<?= $item->id_backup_developer_zone?>" title="Execute point to restore this backup" style="float:left;margin-left: 10px;" class="btn btn-primary  execute_developer_zone_backup">
              <i class="icon-execute">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Execute
              </div>
              <div backup_id="<?= $item->id_backup_developer_zone?>" title="Delete this backup" style="float:left;margin-left: 10px;" class="btn btn-primary delete_developer_zone_backup ">
              <i class="icon2-trash2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Delete
              </div>   
            </td>   
        </tr> 
<?php
 
endforeach;
endif;
      ?>
    </tbody>

</table>


<script>
jQuery(document).on("click",".execute_developer_zone_backup",function()
    {
     backup_id = jQuery(this).attr("backup_id");
      ajax_execute_backup_developer_zone(backup_id,function(response)
        {
            data = callback_ajax_execute_backup_developer_zone(response);
            jQuery(".developer_zone_backups_datatable").html(data.developer_zone_backups_data_table);    
            show_successfull_message("Backup point was restored successful.");
        });  
    });
    jQuery(document).on("click",".delete_developer_zone_backup",function()
    {  
     jQuery(".loader-image").fadeIn();
     backup_id = jQuery(this).attr("backup_id");
     ajax_delete_backup_developer_zone(backup_id,function(response)
        {
            data = callback_ajax_delete_backup_developer_zone(response);
            jQuery(".developer_zone_backups_datatable").html(data.developer_zone_backups_data_table);    
            show_successfull_message("Developer Zone backup was deleted successful");
        });
    });
      jQuery(document).on("click",".view_developer_zone_backup",function()
{
    jQuery(".loader-image").fadeIn();
     backup_id = jQuery(this).attr("backup_id");
     ajax_view_backup_developer_zone(backup_id,function(response)
        {
            data = callback_ajax_view_backup_developer_zone(response);
            jQuery(".developer_zone_backup_view").html(data.developer_zone_backup_view);    
            //show_successfull_message("Developer Zone backup was deleted successful");
            jQuery(".developer_zone_backup_view").fadeIn();
            jQuery("#accordion2").fadeOut();
            editor.refresh() ;
              jQuery(".front_styles").click();
        });
});
    // dynamic table

    jQuery('#dyntable_resultados1459').dataTable({
    "sPaginationType": "full_numbers",
    "aaSortingFixed": [[1,'asc']],
    "fnDrawCallback": function(oSettings) 
        {    /*jQuery.uniform.update();*/    }
    });

</script>