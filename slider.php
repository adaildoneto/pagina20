<div id="wrapper">
	<div class="row">
		<div class="container">
<div id="slider" class="col s12 m7 l9">

		<div class="blue" style="height: 400px"></div>
		<div class="orange" style="height: 400px"></div>
		<div class="green" style="height: 400px"></div>

</div>


<div class="col s12 m5 l3">
	<div id="slider-destaque">
			<div>
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

	<div class="red" style="height:400px"></div>
</div>

<?php
wp_reset_query();?>



</div>
</div>
</div>
</div>
