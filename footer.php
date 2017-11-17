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
            <?php if ( dynamic_sidebar('wdfooter') ) : else : endif; ?>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
          	<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Empoderado pelas forças de <a href="%s" rel="nofollow" target="_blank">Odin</a> e guiado na sabedoria do <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>
            <a class="grey-text text-lighten-4 right" href="http://www.tntnerd.com.br">
								<img src="http://pagina20.net/v2/wp-content/uploads/2017/11/tntnerd-logo.png" alt="">
						</a>
            </div>
          </div>
        </footer>


	<?php wp_footer(); ?>
</body>
</html>
