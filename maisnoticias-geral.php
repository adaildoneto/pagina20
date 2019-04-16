

  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '4',
<<<<<<< HEAD
  'cat'                    => array(' 17'),
=======
  'cat'                    =>
>>>>>>> 18a726653fb18cbab7e3a55c6ad6865c4790eb1b
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
while( $query->have_posts() ) {

   $query->the_post();
      echo '<div class=\'noticias-capa\'>';
    	get_template_part( 'content', 'home5' );
      echo '</div>';


   wp_reset_postdata();

}
?>
