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
<div id="dabs" class="row blue-grey darken-4 semmargem">
	<div class="row">
	    <div class="col s12 ">
	      <ul id="tabs" class="tabs tabs-transparent">
	        <li class="tab col s3"><a href="#test1">Test 1</a></li>
	        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
	        <li class="tab col s3"><a href="#test3">Disabled Tab</a></li>
	        <li class="tab col s3"><a href="#test4">Test 4</a></li>
	      </ul>
	    </div>
	    <div id="test1" class="container">
				<div class="col s12 m4 l4"><?php include (TEMPLATEPATH.'/maisnoticias.php') ?></div>
				<div class="col s12 m4 l4"><?php include (TEMPLATEPATH.'/maisnoticias.php') ?></div>
				<div class="col s12 m4 l4"><?php include (TEMPLATEPATH.'/maisnoticias3.php') ?></div>
</div>
	    <div id="test2" class="container">
				<?php include (TEMPLATEPATH.'/maisnoticias5.php') ?>
</div>
	    <div id="test3" class="container">
				<div class="col s12 m4 l4"><?php include (TEMPLATEPATH.'/maisnoticias.php') ?></div>
					<div class="col s12 m4 l4"><?php include (TEMPLATEPATH.'/maisnoticias3.php') ?></div>
				<div class="col s12 m4 l4"><?php include (TEMPLATEPATH.'/maisnoticias.php') ?></div>
</div>
	    <div id="test4" class="container">
				<?php include (TEMPLATEPATH.'/maisnoticias2.php') ?>
</div>
	  </div>
</div>
<div class="row blue-grey lighten-3 semmargem">
	<div class="container">
<?php include (TEMPLATEPATH.'/maisnoticias2.php') ?>
</div>
</div>
<?php

get_footer();
