
  <div class="card">
  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '2',
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
     get_template_part( 'content', 'home6' );
     echo '</div>';

   } else {

      echo '<div class="white">';
    	get_template_part( 'content', 'home5' );
      echo '</div>';

   }

   wp_reset_postdata();

}
?>
</div>
