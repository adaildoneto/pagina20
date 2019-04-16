<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<nav class="white">
	<div class="nav-wrapper">
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="input-field white-text">
			 <input id="search" type="search" placeholder="Pesquisa" value="<?php echo get_search_query(); ?>" name="s"/>
				<label class="label-icon" for="search"><i class="material-icons">search</i></label>
				<i class="material-icons">close</i>
			</div>
		</form>
	</div>
</nav>
