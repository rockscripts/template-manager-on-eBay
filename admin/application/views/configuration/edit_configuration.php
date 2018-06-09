<?php 
if(isset($message))
{
 ?>
<div class="alert alert-info <?php echo $type?>">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                    <?= $message?>
                </div>
 <?php  
}
?>
  
        <h4 class="widgettitle nomargin shadowed">Edit Configuration</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2');
echo form_open("configuration/update_configuration",$attributes);
?> 
                            <p>

                               <label>Name: </label>

                                <span class="field"><input type="text" id="configuration_name" name="configuration_name" value="<?php echo $configuration_name?>" class="input-xlarge" /></span>

                            </p>

                            
<p>

                                <label>Key: </label>

                                <span class="field"><input type="text" id="configuration_key" name="configuration_key" value="<?php echo $configuration_key?>"  class="input-xlarge" /></span>

                            </p>
                            <p>

                                <label>Value: </label>

                                <span class="field"><input type="text" id="configuration_value" name="configuration_value" class="input-xlarge" value="<?php echo $configuration_value?>"  /></span>

                            </p>
                            

                            


                            <p class="stdformbutton">

                                <button class="btn btn-primary">Update</button>

                            </p>
                <input name="current_name" type="hidden" value="<?= $configuration_name?>"/> 
                <input name="current_value" type="hidden" value="<?= $configuration_value?>"/> 
                <input name="current_key"   type="hidden" value="<?= $configuration_key?>"/>
                <input name="id_configuration"type="hidden" value="<?= $id_configuration?>"/> 
                        </form>

                    </div><!--widgetcontent-->