<?php 
if(isset($message))
{
 ?>
 <div class="alert alert-info">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                    <?= $message?>
                </div>
 <?php  
}
?>
  
        <h4 class="widgettitle nomargin shadowed">Add Configuration</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2');
echo form_open("configuration/save_new_configuration",$attributes);
?> 
                            <p>

                               <label>Name: </label>

                                <span class="field"><input type="text" id="configuration_name" name="configuration_name" class="input-xlarge" /></span>

                            </p>

                            
<p>

                                <label>Key: </label>

                                <span class="field"><input type="text" id="configuration_key" name="configuration_key" class="input-xlarge" /></span>

                            </p>
                            <p>

                                <label>Value: </label>

                                <span class="field"><input type="text" id="configuration_value" name="configuration_value" class="input-xlarge" /></span>

                            </p>
                            

                            


                            <p class="stdformbutton">

                                <button class="btn btn-primary">Save</button>

                                <button type="reset" class="btn">Reset</button>

                            </p>

                        </form>

                    </div><!--widgetcontent-->