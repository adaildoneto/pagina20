<<<<<<< current
<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search', 'odin' ); ?>" />
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" value="<?php esc_attr_e( 'Search', 'odin' ); ?>">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</span><!-- /input-group-btn -->
    </div><!-- /input-group -->
</form><!-- /searchform -->
=======
<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div id="modal1" class="modal">
  <div class="modal-content">
    <form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
   	<div class="input-group">
   		<input type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search', 'odin' ); ?>" />
   	       </div><!-- /input-group -->
   </form><!-- /searchform -->
  </div>
  <div class="modal-footer">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-default blue darken-5" value="<?php esc_attr_e( 'Search', 'odin' ); ?>">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </span><!-- /input-group-btn -->
  </div>
</div>
>>>>>>> before discard
