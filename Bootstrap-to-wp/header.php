
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo bloginfo('template_directory'); ?>/images/favicon.ico">
	<title><?php echo wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?>  </title>
 
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
	<!-- Login Form-->
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
    <form class="loginform" name="loginform" id="loginform" action="<?php echo bloginfo('home'); ?>/wp-login.php?action=login" method="post">
		<p>
			<label for="user_login">Username
			<input type="text" name="log" ></label>
		</p>
		<p>
			<label for="user_pass">Password
			<input name="pwd" size="20" type="password" class="pswd"></label>
		</p>
			<p class="forgetmenot"><label for="rememberme"><input name="rememberme" value="forever" type="checkbox"> Remember Me</label></p>
		<p class="submit">
			<input name="wp-submit" id="wp-submit" class="button btn btn-primary " value="Log In" type="submit">
			<input name="redirect_to" value="<?php echo bloginfo('home'); ?>" type="hidden">
			<input name="cookie" value="1" type="hidden">
		</p>
		<p><a href="<?php echo bloginfo('home'); ?>/wp-login.php?action=lostpassword">Lost your password?</p></p>
</form>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
	<!-- Login Form End-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		<?php

				$defaults = array(
					'menu'            => 'header_menu',
					'container'            => false,
					'menu_class'      => 'nav navbar-nav',
					
					
				);

				wp_nav_menu( $defaults );

?>
<script type="text/javascript">
	jQuery(document).ready(function($){
		
		
		$("<span class='caret'></span>").appendTo("li.menu-item-has-children a");
		$( ".sub-menu li a span" ).remove();
	});
		
	</script>	
		<?php if ( !is_user_logged_in() ):?> 
          <form class="navbar-form navbar-right">
         <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#myModal">
		 Sign in
		 </button>
          </form>
		 <?php else: ?>
		 <form class="navbar-form navbar-right">
			 <button id="logout"type="button" class="btn btn-danger"  >
				 <a href="<?php echo wp_logout_url( get_permalink() ); ?>">
				 Logout
				 </a>
			 </button>
          </form>
		 <?php endif; ?>
        </div>
      </div>
    </nav>
