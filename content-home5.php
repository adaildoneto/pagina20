<div class="newsthumb">
	<?php $categories = get_the_category();
				 if ( ! empty( $categories ) ) {
						 echo '<a class="chip blue darken-4 white-text" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						 }?>

	 <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
		<img class="left thumbnews" src="<?php echo $image[0]; ?>">
		<span class="titulopeuqeno"><?php the_title();?></span></a>

		<div class="categoria nocanto2">
			<span class="data-post"> <?php the_time('d.m.Y');?> </span>
			<span class="hora-post"> <?php the_time('G:i');?></span>

		</div>
</div>
