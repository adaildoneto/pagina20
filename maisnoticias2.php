
  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '3',
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
while( $query->have_posts() ) {

   $query->the_post();

   if ( $query->current_post == 0 ) {  // first post

     echo '<div class="first-post">';
     get_template_part( 'content', 'home3' );
     echo '</div>';

   } else {

      echo '<div>';
    	get_template_part( 'content', 'home' );
      echo '</div>';

   }

   wp_reset_postdata();

}
?>
