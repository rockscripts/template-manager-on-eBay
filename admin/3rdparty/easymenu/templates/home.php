<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Menu</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="<?php echo _BASE_URL_ASSETS; ?>templates/css/home.css">

<!--[if lte IE 8]>
<script type="text/javascript" src="<?php echo _BASE_URL_ASSETS; ?>templates/js/html5.js"></script>
<![endif]-->

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/jquery.1.4.1.min.js"></script>
<script>
$(function() {
	$('.vertical li:has(ul)').addClass('parent');
	$('.horizontal li:has(ul)').addClass('parent');
});
</script>

</head>
<body>
<section>
<header>
	<h1>Easy Menu Manager</h1><h2>Public Demonstration</h2>
	<h2 id="link"><a href="<?php echo site_url('menu'); ?>">View Admin</a></h2>
</header>

<article>

<h3>Example 1</h3>
Showing menu from group ID = 1
<pre>
echo $this->easymenu(1);
</pre>
<h4>Output:</h4>
<?php echo $menu; ?>

<h3>Example 2</h3>
Showing menu from group ID = 1 with class = horizontal
<pre>
echo $this->easymenu(1, 'class="horizontal white"');
echo $this->easymenu(1, 'class="horizontal black"');
echo $this->easymenu(1, 'class="horizontal red"');
echo $this->easymenu(1, 'class="horizontal green"');
echo $this->easymenu(1, 'class="horizontal blue"');
</pre>
<h4>Output:</h4>
<?php echo $horizontal1; ?>
<div class="clear"></div>
<?php echo $horizontal2; ?>
<div class="clear"></div>
<?php echo $horizontal3; ?>
<div class="clear"></div>
<?php echo $horizontal4; ?>
<div class="clear"></div>
<?php echo $horizontal5; ?>
<div class="clear"></div>

<h3>Example 3</h3>
Showing menu from group ID = 2 with class = vertical
<pre>
echo $this->easymenu(2, 'class="vertical white"');
echo $this->easymenu(2, 'class="vertical black"');
echo $this->easymenu(2, 'class="vertical red"');
echo $this->easymenu(2, 'class="vertical green"');
echo $this->easymenu(2, 'class="vertical blue"');
</pre>
<h4>Output:</h4>
<?php echo $vertical1; ?>
<?php echo $vertical2; ?>
<?php echo $vertical3; ?>
<?php echo $vertical4; ?>
<?php echo $vertical5; ?>

</article>

<footer>
Easy Menu Manager
</footer>
</section>
</body>
</html>