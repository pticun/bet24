<?php
/*
Login form for header

Created: February 2014
*/
?>
<form class="navbar-form pull-right" id="login" action="<?php echo SITE_URL; ?>?page=login" method="post">
	<input name="username" class="span2" type="text" placeholder="Username" id="username">
	<input name="password" class="span2" type="password" placeholder="Password" id="password">
	
	<button type="submit" name="submit" value="login" class="btn">Sign in</button>
	
	<a href="<?php echo SITE_URL; ?>?page=register" class="btn">Register</a>
</form>