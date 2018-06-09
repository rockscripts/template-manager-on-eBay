 <table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados145" >
  <thead>
      <tr>
          <th class="head2 sorting" style="width:20%">Reazon</th> 
          <th class="head3 sorting" style="width:50%">Date Created</th> 
          <th class="head4 sorting"  style="width:40%">Actions</th> 
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($store_front_backups)): 
      foreach($store_front_backups as $item):
?>
        <tr>
            <td style="width:20%">
                <?= $item->reazon?>
            </td> 
            <td class="td_image_datatable" style="width:50%;text-align: left!important;">
                <?= $item->date_added?>
            </td>           
            <td  style="width:40%"> 
              <div backup_id="<?= $item->id_backup_store_front?>" title="Execute store front backup" style="float:left;margin-left: 10px;" class="btn btn-primary  execute_store_backup">
              <i class="icon-execute">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Execute
              </div>
                <?php
                if($item->reazon != "First Installation"):
                ?>
              <div backup_id="<?= $item->id_backup_store_front?>" title="Delete store front backup" style="float:left;margin-left: 10px;" class="btn btn-primary delete_store_backup ">
              <i class="icon2-trash2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Delete
              </div>    
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


<script>
jQuery(document).on("click",".execute_store_backup",function()
    {
        backup_id = jQuery(this).attr("backup_id");
     execute_store_front_instalaltion(backup_id);
    });
    jQuery(document).on("click",".delete_store_backup",function()
    {
        backup_id = jQuery(this).attr("backup_id");
        delete_store_front_instalaltion(backup_id);
    });
    // dynamic table

    jQuery('#dyntable_resultados145').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>