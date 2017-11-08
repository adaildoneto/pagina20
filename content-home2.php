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
	      <div class="card painel-noticias" >

	          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque1' ); ?>
			<div class="bloco-img-noticias especiais-img" style="background: url('<?php echo $image[0]; ?>');">

	          </div></a>
						<div class="nocanto1">
							<?php $categories = get_the_category();
										 if ( ! empty( $categories ) ) {
												 echo '<a class="chip blue darken-4 white-text" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
												 }?>

						</div>
						<div class="categoria nocanto3">
							<span class="white-text data-post"> <?php the_time('d.m.Y');?> </span>
			        <br><span class="white-text hora-post"> <?php the_time('G:i');?></span>

						</div>
	          <div class="bloco-des-noticias">

	              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-titulo blue-text text-darken-2">
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
	              <span class="destaque-resumo hide-on-med-and-down"><?php $DestaqueChamada = get_post_meta( $post->ID,'chamada-destaque1', true ); echo $DestaqueChamada;?></span>
	          </div>
	          <div class="nocanto4 tamanho-icones">

	          </div>

	        <div class="clearfix"></div>
	      </div>
</div>
</div>
