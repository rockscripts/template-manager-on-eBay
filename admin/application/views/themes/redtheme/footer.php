<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div id="default_footer">
<p>mem usage: <?php echo $this->benchmark->memory_usage();?></p>
<p>exec time: <?php echo $this->benchmark->elapsed_time();?></p>
</div>