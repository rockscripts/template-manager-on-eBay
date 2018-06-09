<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Admin Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo _BASE_URL_ASSETS; ?>templates/css/login.css">
</head>
<body>
<h1>Admin Login</h1>
<div id="login">
	<form method="post" action="<?php echo site_url('user.login'); ?>">
		<p>
			<label>Username</label>
			<input type="text" name="user">
		</p>
		<p>
			<label>Password</label>
			<input type="password" name="pass">
		</p>
		<p>
			<button type="submit" name="login">Login</button>
		</p>
		<?php if (isset($_GET['error'])) : ?>
		<div class="error">Wrong username / password</div>
		<?php endif; ?>
	</form>
</div>
</body>
</html>