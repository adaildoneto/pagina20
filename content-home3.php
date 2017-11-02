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
<div id="item" class="col s12 m12 l6">

	<div class="">
		<div class="painel-noticias2 card">

					<a href="<?php the_Permalink()?>" title="<?php the_title();?>">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
				<div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php echo $image[0]; ?>');">

				</div>  </a>
				<div class="categoria nocanto1">

				</div>
				<div class="bloco-des-noticias2">
						<div class="card-content">
								<a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text destaque-fonte">
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
				</div>
				<div class="divider detalhe"></div>
				<div class="nocanto3 small white-text">
					<?php $my_date = the_date('M j, Y @ G:i', '<em>', '</em>', FALSE); echo $my_date; ?>
				</div>
				<div class="nocanto4 tamanho-icones">

				</div>
		</div>

	<div class="clearfix"></div>
</div>
</div>
