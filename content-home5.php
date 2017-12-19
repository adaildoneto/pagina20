<div class="newsthumb">
	 <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
		
		<img class="left thumbnews" src="<?php the_post_thumbnail_url( 'postthumb' ); ?>">
		<span class="titulopeuqeno"><?php the_title();?></span></a>

		<div class="categoria datahora-titulopequeno">
			<span class="data-post"> <?php the_time('d.m.Y');?> </span>
			<span class="hora-post"> <?php the_time('G:i');?></span>

		</div>
</div>
