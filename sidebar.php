<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<aside id="sidebar" class="col s12 m3 l3" role="complementary">
	<?php
		if ( ! dynamic_sidebar( 'main-sidebar' ) ) {
			
		}
	?>
</aside><!-- #sidebar -->
