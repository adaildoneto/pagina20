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
		<div class="row blue darken-3">

		<nav class="nav-extended blue darken-4">
	    <div class="nav-wrapper container">
	      <a href="<?php $url = home_url(); echo esc_url( $url ); ?>" class="brand-logo"><span class="icon-galo"></span>Página 20</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse hide-on-large-only left"><i class="material-icons">menu</i></a>
	    </div>
			<?php wp_nav_menu(array('theme_location' => 'menu-pagina20','menu' => 'Menu Pagina20', 'container' => 'div', 'container_class' => 'container blue darken-4 hide-on-med-and-down','menu_class' => 'left')); ?>
	    </nav>
			<ul id="mobile-demo" class="left side-nav collapsible" data-collapsible="accordion" style="border:none;">
					<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
									<li class="bold"><a href="#" class="waves-effect waves-teal">Notícias</a></li>
									<li class="bold"><a href="#" class="waves-effect waves-teal">Política</a></li>
									<li class="bold"><a href="#" class="waves-effect waves-teal">Esporte</a></li>
									<li class="bold"><a href="#" class="waves-effect waves-teal">Segurança</a></li>
									<li class="bold"><a href="#" class="waves-effect waves-teal">Cultura</a></li>
									<li class="bold"><a href="#" class="waves-effect waves-teal">Contato</a></li>
								</ul>
							</li>
						</ul>
	</div>

			</header><!-- #header -->
