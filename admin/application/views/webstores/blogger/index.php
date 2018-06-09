<div class="alert alert-success  hide">
    <button type="button" class="close" data-dismiss="alert">x</button>
 <span id="message_content" class="message_content"> 
    <?php 
    if(isset($message))
    {
       echo  $message ;
    }
    ?>
 </span>
</div>  
<?php
 if(sizeof($user_blogs)==0):
?>
 <div class="alert2  alert-info">
  <i class="icon-info-sign"></i>&nbsp;Please create a blog <a target="_blank" href="https://www.blogger.com/home">GO</a>
 </div>
<?php
 endif;
?>

<div class="webstores-index">
 <div class="top-buttons">
     <a target="_blank" class="btn btn-primary" href="https://www.blogger.com/home">New blog</a>
</div> 
     <table class="table table-bordered items_data_table deleted_items_data_table" data="deleted_items_data_table" id="dyntable_resultados6" >
  <thead>
      <tr>
          <th>
              Title
          </th> 
          <th>
              Posts count
          </th> 
          <th>Action</th>
      </tr>
 </thead>
    <tbody>
    <?php
    if(sizeof($user_blogs)>0):
      for($i=0;$i<sizeof($user_blogs);$i++):
          ?>
        <tr>                    
    <td><?=$user_blogs[$i]["title"]?></td>
    <td><?=$user_blogs[$i]["posts_count"]?></td>
    <td> 
    <div style="border-radius: 10px;" class="btn-group action-with-selected-button">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">select...
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a title="View blog" target="_blank"  href="<?=$user_blogs[$i]["link"]?>" class="">
                    View blog
                </a>
            </li>
            <li>
                <a title="Add entry" target="_blank"  href="https://www.blogger.com/blogger.g?blogID=<?=$user_blogs[$i]["id"]?>#editor/src=dashboard" class="synchronize_listings">
                     Add entry
                </a>
            </li> 
            <li>
                <a title="Submit listings"  href="<?= base_url() ?>webstores/blogger/submit_listings_view?blog_id=<?=$user_blogs[$i]["id"]?>" class="synchronize_listings">
                     Submit listings
                </a>
            </li>
        </ul>
    </div>
    </td>
    </tr>
        <?php
      endfor;  
    endif;
    
    ?>
    </tbody>

</table>
<img src="<?= base_url() ?>themes/katniss/img/powered_by_google.gif">

<script>

    // dynamic table

    jQuery('#dyntable_resultados6').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>
</div>
<script>
jQuery(document).ready(function() 
{
 
});
</script>
<?php 
    if(isset($message))
    {
     ?>
<script>
jQuery(document).ready(function() 
{
 jQuery(".alert").removeClass("hide");
});
</script>
<?php
    }
    ?>