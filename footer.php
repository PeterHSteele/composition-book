<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chocolate_passion
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="row">
			<div class="col-80">
			<div class="secondary-menu-wrap">
				<nav id="secondary-menu" class="secondary-navigation">
					<!--<button class="menu-toggle" aria-controls="seconary-menu"></button>-->
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id' => 'nav-secondary-menu'
						));
					?>
				</nav>
			</div><!--secondary-menu-wrap-->
			</div>
		</div><!--.row-->		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'chocolate-passion' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'chocolate-passion' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'chocolate-passion' ), 'chocolate-passion', '<a href="'. esc_url( 'https://peterhsteele.com' ) . '">Peter Steele</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>