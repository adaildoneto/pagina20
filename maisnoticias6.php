

  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '4',
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

     echo '<div class="col s12 m6 l8">';
    echo '<div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>';
     echo '</div>';

   } else {

      echo '<div class="col s12 m6 l4 white-text">';
    	get_template_part( 'content', 'home5' );
      echo '</div>';

   }

   wp_reset_postdata();

}
?>
