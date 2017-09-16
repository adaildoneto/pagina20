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

<div id="wrapper">
	<div class="row">
		<div class="container">
<div id="slider" class="col s12 l8">

		<div class="blue" style="height: 450px"></div>
		<div class="orange" style="height: 450px"></div>
		<div class="green" style="height: 450px"></div>

</div>


<<<<<<< HEAD
<div class="col s12 l4">
		<ul class="collection semmargem" >
<?php
			$args = array (
	'pagination'             => false,
	'paged'                  => $paged,
	'posts_per_page'         => '4',
	'ignore_sticky_posts'    => true,

);
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post(); ?>

<li class="collection-item newsthumb">
	 <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
		<img class="left thumbnews" src="<?php echo $image[0]; ?>">
		<span class="title blue-grey-text darken-5-text"><?php the_title();?></span></a>

</li>
<?php
endwhile; ?>
		</ul>
	</div>

<?php
wp_reset_query();?>



=======
	 <div class="col s12 l3" data-pg-id="142" data-pg-collapsed>
			 <ul class="collection" data-pg-id="149">
					 <li class="collection-item avatar" data-pg-id="150">
							 <img src="images/yuna.jpg" alt="" class="circle" data-pg-id="151">
							 <span class="title" data-pg-id="152">Title</span>
							 <p data-pg-id="153">First Line <br data-pg-id="154">
		Second Line</p>
							 <a href="#!" class="secondary-content" data-pg-id="155"><i class="material-icons" data-pg-id="156">grade</i></a>
					 </li>
					 <li class="collection-item avatar" data-pg-id="157">
							 <i class="material-icons circle" data-pg-id="158">folder</i>
							 <span class="title" data-pg-id="159">Title</span>
							 <p data-pg-id="160">First Line <br data-pg-id="161">
		Second Line</p>
							 <a href="#!" class="secondary-content" data-pg-id="162"><i class="material-icons" data-pg-id="163">grade</i></a>
					 </li>
					 <li class="collection-item avatar" data-pg-id="164">
							 <i class="material-icons circle green" data-pg-id="165">insert_chart</i>
							 <span class="title" data-pg-id="166">Title</span>
							 <p data-pg-id="167">First Line <br data-pg-id="168">
		Second Line</p>
							 <a href="#!" class="secondary-content" data-pg-id="169"><i class="material-icons" data-pg-id="170">grade</i></a>
					 </li>
					 <li class="collection-item avatar" data-pg-id="171">
							 <i class="material-icons circle red" data-pg-id="172">play_arrow</i>
							 <span class="title" data-pg-id="173">Title</span>
							 <p data-pg-id="174">First Line <br data-pg-id="175">
		Second Line</p>
							 <a href="#!" class="secondary-content" data-pg-id="176"><i class="material-icons" data-pg-id="177">grade</i></a>
					 </li>
					 <li class="collection-item avatar" data-pg-id="178">
							 <i class="material-icons circle red" data-pg-id="179">play_arrow</i>
							 <span class="title" data-pg-id="180">Title</span>
							 <p data-pg-id="181">First Line <br data-pg-id="182">
		Second Line</p>
							 <a href="#!" class="secondary-content" data-pg-id="183"><i class="material-icons" data-pg-id="184">grade</i></a>
					 </li>
			 </ul>
	 </div>
>>>>>>> 3bbbdb68d57cf5adbc3835b61a8716fde3669897
</div>
</div>


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
