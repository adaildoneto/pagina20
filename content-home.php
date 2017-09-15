<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


<div class="grid-item col s12 m3 l3">
	<div class="">
	<div class="card painel-noticias2">
		<a href="<?php the_Permalink()?>" title="<?php the_title();?>">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
				<div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

			</div></a>
			<div class="categoria nocanto1">

			</div>
			<div class="bloco-des-noticias3">
					<span class="destaque-chamada">
							<?php echo get_post_meta( $post->ID,'chamada', true )?>
					</span>
					<a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte blue-grey-text darken-2">
							<?php
							$tituloPost = get_the_title();
							$tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
							if(empty($tituloCapa)){
								 $titulo = $tituloPost;
							}else{
								$titulo = $tituloCapa;
							}
							echo $titulo;
							?>
					</a>
			</div>
			<div class="nocanto4 tamanho-icones">

			</div>
	</div>

</div>
</div>
