 <table class="table table-bordered items_data_table sold_items_data_table" id="dyntable_resultados2" >
  <thead>
      <tr>
            <th class="head1 sorting">Title</th>
          <th class="head2 sorting" >Price</th> 
          <th class="head4 sorting" >Quantity Purchased</th>    
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($orders)): 
      foreach($orders as $item):
?>
        <tr>
            <td><?=$item->Title?></td>
            <td><?=$item->Price?></td>
            <td><?=$item->QuantityPurchased?></td>
        </tr>
<?php
 
endforeach;
endif;
      ?>
    </tbody>

</table>


<script>

    // dynamic table

    jQuery('#dyntable_resultados2').dataTable({

    "sPaginationType": "full_numbers",


    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>