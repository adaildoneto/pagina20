<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->
	<footer class="page-footer blue darken-4">
          <div class="container">
            <div class="row">


										<div class="col l4 m12 s12">
													<?php dynamic_sidebar( 'rodape1' ); ?>
												<!-- Chamando formulario do Odin -->

										</div>
										<div class="col l4 m12 s12">
												<?php dynamic_sidebar( 'rodape2' ); ?>
										</div>
										<div class="col l4 m12 s12">
												<?php dynamic_sidebar( 'rodape3' ); ?>
										</div>

            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
          	<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Empoderado pelas forças de <a href="%s" rel="nofollow" target="_blank">Odin</a> e guiado na sabedoria do <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>

            </div>
          </div>
        </footer>


	<?php wp_footer(); ?>
</body>
</html>
