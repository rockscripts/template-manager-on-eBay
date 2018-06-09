 <div class="alert alert-info">
                	<div class="close1">x</div>
                 <span id="message_content"> 
                     <b>Note:</b> Please, be sure that you have set option for your newsletter design before you generate it.
                 </span>
  </div> 

<table class="table table-bordered" id="dyntable_resultados">


	<thead>
                        <tr>
                               <th class="head0 sorting">Newsletter Design Name</th>
                               <th class="head0 sorting" style="width: 50px!important;">Action</th> 
	        </tr>

    </thead>
    <tbody>
      <?php
      foreach($newsletter_designs as $newsletter_design):
?>
        <?php
 
       ?>
        <tr>
            <td style="width:70%; color:red;">
                <?= $newsletter_design->subject?>
            </td>  
            <td style="width:30%">
                <?php
       $attributes = array('class' => 'stdform','id'=>"design_options_".$newsletter_design->id_newsletter_design);
       echo form_open("marketing/newsletter/design_options",$attributes);  
      ?>
                <input name="id_ebay_design"type="hidden" value="<?=$id_ebay_design?>"/> 
                <input name="id_newsletter_design"type="hidden" value="<?=$newsletter_design->id_newsletter_design ?>"/> 
                <div action="view" rel="design_options_<?=$newsletter_design->id_newsletter_design?>" class="btn btn-primary  custom_button left"><i class="icon-wrench"></i>&nbsp;Options</div>
                <?php
       echo form_close();       
       ?>
              <?php
       $attributes = array('class' => 'stdform','id'=>"generate_design_".$newsletter_design->id_newsletter_design);
       echo form_open("marketing/newsletter/generate_template",$attributes);  
      ?>
                <input name="id_ebay_design"type="hidden" value="<?=$id_ebay_design?>"/> 
                <input name="id_newsletter_design"type="hidden" value="<?=$newsletter_design->id_newsletter_design ?>"/> 
                <div action="view" rel="generate_design_<?=$newsletter_design->id_newsletter_design?>" class="btn btn-primary  custom_button left"><i class="iconsweets-postcard"></i>&nbsp;Generate Template</div>
                <?php
       echo form_close();       
       ?>  
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