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

	<?php wp_head(); ?>


</head>

<body class="blue-grey lighten-5">


	<header>
		<div class="row">

		<nav class="nav-extended blue darken-3">
	    <div class="nav-wrapper container">
	      <a href="<?php $url = home_url(); echo esc_url( $url ); ?>" class="brand-logo"><span class="icon-galo"></span>Página 20</a>
	      <!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="sass.html">Sass</a></li>
	        <li><a href="badges.html">Components</a></li>
	        <li><a href="collapsible.html">JavaScript</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	        <li><a href="sass.html">Sass</a></li>
	        <li><a href="badges.html">Components</a></li>
	        <li><a href="collapsible.html">JavaScript</a></li>
	      </ul> -->
	    </div>
			<?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => 'div', 'container_class' => 'container','menu_class' => 'side-nav')); ?>
	    </nav>
		<div class="container" style="display:none;">
	  <div id="" class="col s12">Test 1</div>
	  <div id="" class="col s12">Test 2</div>
	  <div id="" class="col s12">Test 3</div>
	  <div id="" class="col s12">Test 4</div>
	</div>


	</div>

			</header><!-- #header -->
