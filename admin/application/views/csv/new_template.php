 <?php
       $attributes = array('class' => 'stdform');
       echo form_open("home/new_tpl",$attributes);  
      ?>
<textarea name="html_code_new" class="view_code"></textarea>
 <input class="btn btn-primary" type="submit" value=" Save" name="submit">
   <?php
       echo form_close();       
       ?>