<div class="alert  hide">
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

<div class="webstire-install-step-1">
    <h4 class="widgettitle nomargin shadowed"><b>STEP 2:</b> Install categories</h4>
    <div class="widgetcontent bordered shadowed nopadding">
        <div class="inner">
         <?php
          if(isset($categories_tree)):
              if(sizeof($categories_tree)>0):
                 //s echo "<pre>";
                  for($i=0;$i<sizeof($categories_tree);$i++):
                      $category_level_1 = $categories_tree[$i];
                      ?>
                       <div class="row-categories">
                           <?php
                           if(isset($category_level_1["children"])):
                               $class="icon-plus";
                           else:
                               $class="icon-chevron-right";
                           endif;
                           ?>
                           <div class="<?=$class?> icono-categories-tree"></div>&nbsp;<div class="category-title"><?=$category_level_1["title"]?></div>
                           
                           <?php
                           if(isset($category_level_1["children"])):
                               $children_level_2 = $category_level_1["children"];
                               for($i_lv2=0;$i_lv2<sizeof($children_level_2);$i_lv2++):
                                ?>
                           <div class="row-categories row-category-level-2">
                               <?php
                                if(isset($children_level_2[$i_lv2]["children"])):
                                    $class="icon-plus";
                                else:
                                    $class="icon-chevron-right";
                                endif;
                                ?>
                                <div class="<?=$class?> icono-categories-tree"></div>&nbsp;<div class="category-title"><?=$children_level_2[$i_lv2]["title"]?></div>
                                 <?php
                                    if(isset($children_level_2[$i_lv2]["children"])):
                                        $children_level_3 = $children_level_2[$i_lv2]["children"];
                                        for($i_lv3=0;$i_lv3<sizeof($children_level_3);$i_lv3++):
                                        ?>
                                           <div class="row-categories row-category-level-3">                                                   
                                               <div class="icon-chevron-right icono-categories-tree"></div>&nbsp;<div class="category-title"><?=$children_level_3[$i_lv3]["title"]?></div>
                                           </div>
                                       <?php 
                                       endfor;
                                    endif;
                                    ?>
                                    </div>
                               <?php
                            endfor;
                             endif;
                           ?>
                       </div>
                      <?php
                  endfor;
                  ?>
             <a href="<?=base_url()?>/webstores/webstore/install_categories" class="btn btn-primary install_webstoreandcategories " style="margin: 0 0 10px 10px;">
    <i class="icon-circle-arrow-right"></i>
     Install
   </a> 
            <?php
            else:
            ?>
              <div class="alert2  alert-info">
                  <i class="icon-info-sign"></i>&nbsp;There are not categories in your store. Please follow this <a href="http://docs.etemplate.com/section/dynamic-categories-three-levels-supported/">link</a> and learn how you can synchronize your categories with this application. 
              </div>   
            <?php
              endif;
          endif;
         ?>
        </div>
    </div>
  
</div>
