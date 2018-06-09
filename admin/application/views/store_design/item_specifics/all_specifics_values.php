<link href="<?= base_url() ?>themes/katniss/css/google_fonts.css" type="text/css" rel="stylesheet" />
<h4 class="widgettitle nomargin shadowed "><?=$specific?></h4> 
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
    <div style="width: 100px; display: block;" class="btn btn-primary button_back_specifics hide">
          <i class="  icon-backward"></i> Back
     </div>
</div>
<table class="table table-bordered items_data_table deleted_items_data_table" data="deleted_items_data_table" id="dyntable_resultados65" >
  <thead>
      <tr>
          <th class="head0 sorting">Value</th>  
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($item_specific_values)): 
      foreach($item_specific_values as $specific_values):
      
?>
        <tr>
            
            <td >
                <b> <?= $specific_values->value?></b>
            </td>
        </tr>
<?php 
endforeach;
endif;
      ?>
    </tbody>

</table>


<script>
   
    // dynamic table

    jQuery('#dyntable_resultados65').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[0,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });
    jQuery(document).on("click",".button_back_specifics",function()
    {  
          jQuery(".all-specifics-content").fadeIn();
          jQuery(".specifics-values-content").fadeOut();
          jQuery(".specifics-values-content").html("");
    });

</script>