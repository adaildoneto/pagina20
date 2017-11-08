<div id="wrapper">
	<div class="row">
		<div class="container">
<div  class="col s12 m12 l8">

		<?php include (TEMPLATEPATH.'/maisnoticias4.php'); ?>

</div>


<div class="col s12 m5 l4 right hide-on-med-and-down">
	<div id="slider-destaque">

	<?php dynamic_sidebar( 'capa20' ); ?>

	<div style="height:600px"> <?php include (TEMPLATEPATH.'/maisnoticias-destaques.php'); ?></div>
</div>




<?php
wp_reset_query();?>

</div>

<div  class="col s12 m7 l8 left hide-on-med-and-down">

	<?php dynamic_sidebar( 'banner_slider' ); ?>

</div>

</div>
</div>
</div>
