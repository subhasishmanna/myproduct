<form name="loginform" id="loginform" action="<?php echo bloginfo('home'); ?>/wp-login.php?action=login" method="post">
	<p>
		<label for="user_login">Username<br>
		<input name="log" id="user_login" class="input" value="" size="20" type="text"></label>
	</p>
	<p>
		<label for="user_pass">Password<br>
		<input name="pwd" id="user_pass" class="input" value="" size="20" type="password"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" id="rememberme" value="forever" type="checkbox"> Remember Me</label></p>
	<p class="submit">
		<input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" type="submit">
		<input name="redirect_to" value="http://localhost/moderna/wp-admin/" type="hidden">
		<input name="testcookie" value="1" type="hidden">
	</p>
</form>