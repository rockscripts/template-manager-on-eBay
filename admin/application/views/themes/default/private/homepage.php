<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<h1>Homepage</h1>
<div>
<h3><?php print $welcome; ?></h3>
<p><?php print $explanation; ?></p>
<h3>Features:</h3>
<ul class="bullet_list">
    <?php foreach ($features_list as $feature):?>
    <li><?php print $feature; ?></li>
    <?php endforeach; ?>
</ul>
<p><?php print (isset($param1) ? $param1 : ""); ?></p>
<p><?php print (isset($param2) ? $param2 : ""); ?></p>
<p><?php print (isset($param3) ? $param3 : ""); ?></p>
</div>
