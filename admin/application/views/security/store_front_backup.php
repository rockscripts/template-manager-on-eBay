Select a point to restore. backup with reazon <b>First Installation</b> is recommended.
<div class="loader-image" style="display: none;"></div>
<table class="table table-bordered" id="dyntable_resultados">
  <thead>
      <tr>
        <th class="head0 sorting" >Reazon</th>
        <th class="head sorting" >Date created</th> 
        <th class="head sorting" >Action</th> 
      </tr>
  </thead>

    <tbody>
        
      <?php
      if(isset($store_backup_object)):
      foreach($store_backup_object as $store_backup):
    ?>
        <tr>
            <td style="width:50%; color:orange;">
                <?= $store_backup->reazon?>
            </td>  
            <td style="width:30%">
              <?= $store_backup->date_added?>
            </td>
            <td style="width:30%">
               <a href="javascript:void(0)" class="run_store_backup" backup_id ="<?= $store_backup->id_backup_store_front?>"><i class="icon-play-circle"></i>&nbsp; <b>Run</b></a>
            </td>
        </tr>
<?php
endforeach;
endif;
      ?>
    </tbody>
</table>
<br>
 <div title="Cancel" class="btn btn-primary close_dialog">
      <i class=" icon-remove-sign"></i> Cancel
 </div>
<script>
var site_domain = "<?php echo $site_domain;?>";
    // dynamic table

    jQuery('#dyntable_resultados').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });
 /*run backup with point selected*/
 jQuery(".run_store_backup").click(function(){
      jQuery(".loader-image").fadeIn(); 
   backup_id =  jQuery(this).attr("backup_id") ;
   store_front_execute_backup_point(backup_id);
   show_successfull_message("Your store was unistalled and restored from point selected. <a target='_blank' href='http://cgi6."+site_domain+"/ws/eBayISAPI.dll?StoreDisplaySettings'>See my store settings</a>");
   remove_dialog();
 });
</script>