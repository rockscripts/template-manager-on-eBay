 <table class="table table-bordered" id="dyntable_resultados">
  <thead>
      <tr>
            <th class="head0 sorting">Constant</th>          
            <th class="head1 sorting th-flag-actived-EN">English</th>
            <th class="head2 sorting th-flag-actived-SP">Spanish</th>
            <th class="head3 sorting th-flag-actived-FR">French</th>
            <th class="head4 sorting th-flag-actived-GR">German</th>
            <th class="head5 sorting ">Actions</th>
      </tr>
      
 </thead>
    <tbody>
      <?php
      if($fields_translated):
      foreach($fields_translated as $field):
?>
        <tr>
            <td style=" color:blue;">
                <b><?= $field->constant?></b>
            </td>              
             <td>
                <textarea class="text-area-field" readonly><?= $field->english?></textarea>
            </td>
             <td>
                <textarea class="text-area-field" readonly><?= $field->spanish?></textarea>
            </td>
            <td>
                <textarea class="text-area-field" readonly><?= $field->french?></textarea>
            </td>
            <td>
                <textarea class="text-area-field" readonly><?= $field->german?></textarea>
            </td>
          
            
           <td>
                 <div class="btn-group"  style="border-radius: 10px;">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Select...<span class="caret"></span></button>
              <ul class="dropdown-menu drop-list-member-options">
            <li>
               <a href="javascript:void(0);" class="edit_row_translator" row-id="<?=$field->id_language_translator?>" title="Edit this row"><i class="icon-edit-custom">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Edit</a>
            </li>
             <li>
                <a href="javascript:void(0);" class="delete_row_translator" row-id="<?=$field->id_language_translator?>" title="Remove this row"><i class="icon-remove">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Remove</a>
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
<script>
    jQuery('#dyntable_resultados').dataTable({

"sPaginationType": "full_numbers"
    });
</script>
