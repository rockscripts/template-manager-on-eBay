<?php 
if(isset($message))
{
 ?>
 <div class="alert <?php echo $type?>">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                    <?= $message?>
                </div>
 <?php  
}
?>
 <table class="table table-bordered" id="dyntable_resultados">
  <thead>
      <tr>
          <th class="head0 sorting">Name</th>
            <th class="head0 sorting"  style="width:40%">Value</th>
          <th class="head0 sorting" style="width: 40px!important;">Action</th> 
      </tr>
 </thead>
    <tbody>
      <?php
      foreach($array_configuration_data as $configuration_row):
?>
        <tr>
            <td style="width:40%; color:blue;">
                <b><?= $configuration_row->name?></b>
            </td>  
             <td  style="width:40%">
                <b><?= $configuration_row->value?></b>
            </td>
            <td style="width:30%">
                <table>
                    <tr>
                        <td>
                             <?php
       $attributes = array('class' => 'stdform','id' => 'edit_form_'.$configuration_row->id_configuration);
       echo form_open("configuration/edit_configuration",$attributes);  
      ?>     
                <input name="current_name" type="hidden" value="<?= $configuration_row->name?>"/> 
                <input name="current_value" type="hidden" value="<?= $configuration_row->value?>"/> 
                <input name="current_key"   type="hidden" value="<?= $configuration_row->key?>"/> 
                <input name="id_configuration"type="hidden" value="<?= $configuration_row->id_configuration?>"/> 
               <div class="btn btn-primary  custom_button" rel="edit_form_<?=$configuration_row->id_configuration?>" action="view"><i class="   icon-eye-open"></i>&nbsp;Edit</div>
                <?php
       echo form_close();       
       ?>
                        </td>
                         <td>
                             <?php
       $attributes = array('class' => 'stdform','id' => 'delete_form_'.$configuration_row->id_configuration);
       echo form_open("configuration/delete_configuration",$attributes);  
      ?>    <input name="current_name" type="hidden" value="<?= $configuration_row->name?>"/> 
                             <input name="id_configuration"type="hidden" value="<?= $configuration_row->id_configuration?>"/> 
               <div class="btn btn-primary red-button custom_button" rel="delete_form_<?=$configuration_row->id_configuration?>" action="delete"><i class=" icon-remove-sign"></i>&nbsp;Delete</div>
                <?php
       echo form_close();       
       ?>
                        </td>
                    </tr>
                </table>
               
            </td>
        
        </tr>
<?php
 
endforeach;
      ?>
    </tbody>

</table>


<script>

    // dynamic table

    jQuery('#dyntable_resultados').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>