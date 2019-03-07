
  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '7',
  'cat'                    => array ('22, 8, 9, 17, 11, 12, 24, 23, 13, 14, 15'), 
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
while( $query->have_posts() ) {

   $query->the_post();

   if ( $query->current_post == 2 ) {  // first post

     echo '<div class="first-post">';
     get_template_part( 'content', 'home3' );
     echo '</div>';

   } else {

    echo '<div>';
   get_template_part( 'content', 'home4' );
    echo '</div>';

 }

   wp_reset_postdata();

}
?>
