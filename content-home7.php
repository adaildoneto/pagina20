<div class="painel-noticias4">

      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
    <div class="bloco-img-noticias4 especiais-img img-slider efeito" style="background: url('<?php echo $image[0]; ?>');">

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
    <div class="nocanto4 tamanho-icones">

    </div>
</div>

<div class="diviser"></div>
