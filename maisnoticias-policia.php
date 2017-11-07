

  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '4',
  'cat'                    => 23,
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
