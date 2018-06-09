<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div id="default_footer" class="default_footer_style">
<p id="footer_info">mem usage: <?php echo $this->benchmark->memory_usage();?> -
exec time: <?php echo $this->benchmark->elapsed_time();?></p>
</div>