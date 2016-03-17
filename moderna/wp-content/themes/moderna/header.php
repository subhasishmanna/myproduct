<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- css -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<!--<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" /> -->


<!-- Theme skin 
<link href="skins/default.css" rel="stylesheet" />-->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
			<?php if (ot_get_option( 'phone' ) ) {?>
			<ul class="phone">
			<li><i class="fa fa-phone">&nbsp;&nbsp;
				<?php echo ot_get_option( 'phone' );?></i></li>
			</ul>
			<?php } ?>
				<ul class="social-lnk">
						<li>
						<?php   
						$socials = ot_get_option( 'header_social', array() );
						if (ot_get_option('header_social') ) {
						
								foreach( $socials as $social ) {
									
								  echo '<a href="'.$social['icon_link'].'"><i class="fa fa-'.$social['icon_name'].'"></i></a>';
								}
							  }
   ?>
   
						<!--<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-skype"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>-->
						</li>
						</ul>
                <div class="navbar-header">
                    
						
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        
						
						<span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><span>M</span><?php echo bloginfo('name'); ?></a>
					
                </div>
				
                <div class="navbar-collapse collapse ">
				<?php wp_nav_menu(array(
					'theme_location'  => 'main_menu',
					'menu_class'      => 'nav navbar-nav',
					'fallback_cb'     => 'moderna_fall_back_menu',
				));?>
                    
					<?php   
						$loginlogouts = ot_get_option( 'loginlogout', array() );
						if($loginlogouts == 'yes'){
   ?>
					<?php
					if ( is_user_logged_in() ) {
						
						echo '<ul class="nav navbar-nav logout">';
						echo'<li>';
						echo '<a href = "'.wp_logout_url( home_url() ).'" class = logout>';
						echo 'logout';
						echo '</a>';
						echo'</li>';
						echo '</ul>';
						
						
					} else {
						echo '<ul class="nav navbar-nav logout">';
						echo'<li>';
						echo '<a href = "#" class = logout>';
						echo 'login';
						echo '</a>';
						echo'</li>';
						echo '</ul>';
						
						?> 
								
						<form name="loginform" id="loginform" action="<?php echo bloginfo('home'); ?>/wp-login.php?action=login" method="post">
	<p>
		<label for="user_login">Username
		<input name="log" ></label>
	</p>
	<p>
		<label for="user_pass">Password
		<input name="pwd" size="20" type="password" class="pswd"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" value="forever" type="checkbox"> Remember Me</label></p>
	<p class="submit">
		<input name="wp-submit" id="wp-submit" class="button " value="Log In" type="submit">
		<input name="redirect_to" value="<?php echo bloginfo('home'); ?>" type="hidden">
		<input name="cookie" value="1" type="hidden">
	</p>
	<p><a href="<?php echo bloginfo('home'); ?>/wp-login.php?action=lostpassword">Lost your password?</p></p>
</form>
						
						<?php
					}
					}
					?>
                
				
				</div>
            </div>
        </div>
	</header>