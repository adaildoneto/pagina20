<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>


<!--- //slider e colunistas -->

<?php include (TEMPLATEPATH.'/slider.php') ?>


<!-- Posts -->

<div class="row" style="display:block;">

	<div id="content" tabindex="-1" role="main" class="container">
		<div id="grid">
			<?php if ( dynamic_sidebar('publicidade300x300') ) : else : endif; ?>
			<?php
			$args = array (
			  'pagination'             => true,
			  'paged'                  => $paged,
				'cat'										 => array ('-4,-8,-9,-169,-82,-6'),
			  'posts_per_page'         => '14',
			  'ignore_sticky_posts'    => true,

			);
			// The Query
			$query = new WP_Query( $args );

			// The Loop
			while ( $query->have_posts() ) {

		      $query->the_post();

				 if  ( in_category( '23' ) ) {  // Destaque Retangular


						get_template_part( 'content', 'home2' );

				}


				else if (  in_category( '2240' ) ) {  // Destaque GRande


						 get_template_part( 'content', 'home3' );

					 }

				else if (  in_category( '22' ) ) {  // destaque foto

		 						 get_template_part( 'content', 'home4' );


			 } else {

					get_template_part( 'content', 'home' );
				}

		    wp_reset_postdata();

}
			?>
</div>
</div><!-- #content -->

</div>
<div class="row blue-grey darken-2 semmargem">
	<div class="row blue-grey darken-4">
		<div class="container">
			<h3 class="white-text semmargem" style="padding-top:10px;"><i class="material-icons">video_library</i> Videos</h3>
		</div> </div>
	<div class="container" style="margin-bottom:100px">
				<?php include (TEMPLATEPATH.'/maisnoticias6.php') ?>

	  </div>
</div>

<div class="row blue-grey lighten-3 semmargem" style="padding-top:10px;">
	<div class="row">
		<div class="container">
			<h5 class="white-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Colunas</h5>
		<hr class="blue-gray lighten-1"></hr></div>
<?php wp_nav_menu(array('theme_location' => 'menu-colunas','menu' => 'Menu Pagina20', 'container' => 'div', 'container_class' => 'container nav-wrapper','menu_class' => 'left')); ?>
	</div>
	<div class="container">
<?php include (TEMPLATEPATH.'/maisnoticias2.php') ?>
</div>
</div>

<div class="row  semmargem" style="padding-top:10px;">
	<div class="row">
		<div class="container">
			<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Política</h5>
		<hr class="blue-gray lighten-1"></hr></div> </div>
	<div class="container">
<?php include (TEMPLATEPATH.'/maisnoticias5.php') ?>
</div>
</div>

<div class="row  semmargem" style="padding-top:10px;">
	<div class="container">
		<div class="col s12 m4 l4">
			<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Polícia</h5>
		<hr class="blue-gray lighten-1"></hr>
<?php include (TEMPLATEPATH.'/maisnoticias-policia.php') ?>
</div>

<div class="col s12 m4 l4">
	<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Cidade</h5>
<hr class="blue-gray lighten-1"></hr>
<?php include (TEMPLATEPATH.'/maisnoticias-cidade.php') ?>
</div>

<div class="col s12 m4 l4">
	<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Geral</h5>
<hr class="blue-gray lighten-1"></hr>
<?php include (TEMPLATEPATH.'/maisnoticias-geral.php') ?>
</div>
	</div>
</div>

<div class="row  semmargem" style="padding-top:10px;">
	<div class="row">
		<div class="container">
			<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Artigos</h5>
		<hr class="blue-gray lighten-1"></hr></div> </div>
	<div class="container">
<?php include (TEMPLATEPATH.'/maisnoticias5-artigos.php') ?>
</div>
</div>

<div class="row  semmargem" style="padding-top:10px;">
	<div class="container">
		<div class="col s12 m4 l4">
			<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Cultura</h5>
		<hr class="blue-gray lighten-1"></hr>
<?php include (TEMPLATEPATH.'/maisnoticias-cultura.php') ?>
</div>

<div class="col s12 m4 l4">
	<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Esporte</h5>
<hr class="blue-gray lighten-1"></hr>
<?php include (TEMPLATEPATH.'/maisnoticias-esportes.php') ?>
</div>

<div class="col s12 m4 l4">
	<h5 class="blue-grey-text darken-2-text semmargem"><a class="btn-floating blue darken-4"><i class="icon-galo"></i></a> Ciência e Saúde </h5>
<hr class="blue-gray lighten-1"></hr>
<?php include (TEMPLATEPATH.'/maisnoticias-ciencia.php') ?>
</div>
	</div>
</div>
<?php

get_footer();
