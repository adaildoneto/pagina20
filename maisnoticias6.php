
    <?php ( dynamic_sidebar('videodestaque'); ?>

  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '5',
  'cat'                    => 2237,
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
while( $query->have_posts() ) {

   $query->the_post();
    {
      echo '<div class=\'mais-videos\'>';
    	get_template_part( 'content', 'home5' );
      echo '</div>';
   }

   wp_reset_postdata();

}
?>
