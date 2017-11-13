
  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '7',
  'cat'                    => array ('16,11,170,1936,13,15,8,27,169,9,82,78,85,2210,6,148,168,7,166,84'), 
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
