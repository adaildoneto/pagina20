<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>

	<!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import Google Icon Font-->
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

			 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7687393966498367",
    enable_page_level_ads: true
  });
</script>

	<?php wp_head(); ?>


</head>

<body class="blue-grey lighten-5">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '629417637481520',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<header>
		<div class="row blue darken-3">

		<nav class="nav-extended blue darken-4">
	    <div class="nav-wrapper container">
	      <a href="<?php $url = home_url(); echo esc_url( $url ); ?>" class="brand-logo"><span class="icon-galo"></span>Página 20</a>
				<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	    </div>
			<?php
						 wp_nav_menu( array(
							 	 'theme_location'    => 'menu-pagina20',
								 'menu'              => 'Menu Pagina20',
								 'menu_id' 			=> 'primary-menu',
								 'menu_class' 		=> 'left hide-on-med-and-down',
								 'container'				=> 'div',
								 'container_class'	=>'container blue darken-4',
								 'depth'             =>  2,
								 'walker'			=>	new Materialize_Walker_Nav_Menu(),
						 ));
				 ?>

	    </nav>


						<?php


						wp_nav_menu( array(
			 'theme_location'    => 'menu-pagina20',
			 'menu'              => 'Menu Pagina20',
			 'menu_id' 			=> 'mobile-menu',
			 'depth'             =>  2,
			 'container'			=> 'ul',
			 'container_class' => 'left collapsible',
			 'menu_class' 		=> 'sidenav',
			 'walker'			=>	new Materialize_Walker_Nav_Menu(),
	 ));
	 ?>

	</div>

			</header><!-- #header -->
