<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="center">
<?php
print "<div id=\"error\">". $message ."</div>\r\n";
?>
<p class="login_link"><a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a></p>
</div>