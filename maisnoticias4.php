
  <div id="slider">
  <?php
  $args = array (
  'pagination'             => true,
  'posts_per_page'         => '4',
  'cat'                    => 3,
  'ignore_sticky_posts'    => true,
  'order'                  => 'DESC',
  'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
while( $query->have_posts() ) {

   $query->the_post();



     echo '<div class="">';
     get_template_part( 'content', 'home7' );
     echo '</div>';



   wp_reset_postdata();

}
?>
</div>
