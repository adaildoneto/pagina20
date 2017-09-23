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

			<?php
			$args = array (
			  'pagination'             => true,
			  'paged'                  => $paged,
			  'posts_per_page'         => '14',
			  'ignore_sticky_posts'    => true,

			);
			// The Query
			$query = new WP_Query( $args );

			// The Loop
			while ( $query->have_posts() ) {

		      $query->the_post();

				 if  (  in_category( '4' ) ) {  // post Destaque


						get_template_part( 'content', 'home2' );

				}


				else if (  in_category( '5' ) ) {  // Destaque Foto


						 get_template_part( 'content', 'home3' );

					 }

				else if (  in_category( '6' ) ) {  // destaque foto

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
<?php

get_footer();
