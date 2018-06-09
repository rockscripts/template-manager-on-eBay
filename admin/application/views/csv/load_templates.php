<?php
if(isset($download_file)):
?>
 <a href="<?=$download_file ?>" class="center"><div class="btn btn-primary green-button " ><i class="  icon-download-alt"></i>&nbsp;Download CSV File Generated</div></a>
<br>
<br>
<?php
endif;
?>


<table>
    <tr>
        <td>
            <a class="btn btn-primary" href="<?= base_url() ?>"><i class=" icon-backward"></i>&nbsp;Back</a> &nbsp; &nbsp; &nbsp;
        </td>
        <td>
            <?php
       $attributes = array('class' => 'stdform','id' => 'clean_all_templates_generated');
       echo form_open("home/clean_all_templates_generated",$attributes);  
      ?>
<div class="btn btn-primary orange-button custom_button" rel="clean_all_templates_generated" action="delete"><i class="  icon-remove-circle"></i>&nbsp;Clean All</div>
<input type="hidden" name="id_listing_design" value="<?=$id_listing_design?>"/>
 <?php
       echo form_close();       
 ?>
        </td>
    </tr>
</table>

<br>
<table class="table table-bordered" id="dyntable_resultados">


	<thead>

                        <tr>

            <th class="head0 sorting">Listing Title</th>

        <th class="head0 sorting" style="width: 50px!important;">Action</div></th>

	</tr>

    </thead>

    <tbody>
      <?php
      foreach($array_templates_generated as $template_generated):
?>
        <tr>
            <td style="width:70%">
                <?= $template_generated->listing_title?>
            </td>
            <td style="width:30%">
                <table>
                    <td>
                         <?php
       $attributes = array('class' => 'stdform','id' => 'view_code_form_'.$template_generated->id_design_generated);
       echo form_open("home/view_code",$attributes);  
      ?>
                <input name="template_generated_id" type="hidden" value="<?= $template_generated->id_design_generated?>"/> 
                <div class="btn btn-primary  custom_button" rel="view_code_form_<?=$template_generated->id_design_generated?>" action="view"><i class="   icon-eye-open"></i>&nbsp;View Code</div>
                <?php
                echo form_close();       
                ?>
                    </td>
                    <td>
                        
                 <?php
                 //Delete Item
       $attributes = array('class' => 'stdform','id' => 'delete_item_form');
       echo form_open("home/delete_item",$attributes);  
      ?>
                 <input name="id_listing_design" type="hidden" value="<?= $template_generated->id_listing_design?>"/> 
                <input name="template_generated_id" type="hidden" value="<?= $template_generated->id_design_generated?>"/> 
                <div class="btn btn-primary red-button  custom_button" rel="delete_item_form" action="delete"><i class="  icon-remove-sign"></i>&nbsp;Delete</div>
                <?php
       echo form_close();       
       ?>
                    </td>
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