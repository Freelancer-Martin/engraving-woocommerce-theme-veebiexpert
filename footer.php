<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Graveering
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="icon-bar">
			<div class="icon-box text-center align-items-center">
				<img src="<?php echo get_template_directory_uri() . '/img/icons8-in-transit-50.png'?>" />
				<span class="" href="#"><h1>KIIRE TARNEAEG</h1><p>Tarneaeg kuni 7 päeva</p></span>
			</div>
			<div class="icon-box text-center align-items-center">
			    <img src="<?php echo get_template_directory_uri() . '/img/icons8-stationery-50.png'?>" />
				<span class="" href="#"><h1>PERSONAALNE</h1><p>Kliendi poolt disain</p></span>
			</div>
			<div class="icon-box text-center align-items-center">
				<img src="<?php echo get_template_directory_uri() . '/img/icons8-bank-cards-50.png'?>" />
				<span class="" href="#"><h1>TURVALINE</h1><p>Turvalised maksed</p></span>
			</div>		
		</div>
		<div class="widget-container col-lg-12">
			<div class="footer-widget-box  col-lg-4 text-left">
				<?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
					<ul id="footer-widget-area-1">
						<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="footer-widget-box  col-lg-4 text-left">
				<?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
					<span id="footer-widget-area-2">
						<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
					</span>
				<?php endif; ?>
			</div>
			<div class="footer-widget-box  col-lg-4 text-left">
				<h2 class="footer-widget-area-title">LIITU UUDISKIRJAGA</h2>
				<?php echo do_shortcode( '[contact-form-7 id="130" title="Liitu uudiskirjaga"]' ); ?>
				
				<?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
					<ul id="footer-widget-area-3">
						<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
					</ul>
				<?php endif; ?>
			</div>		
		</div>
	</footer><!-- #colophon -->
	<div class="site-info col-lg-12 text-center">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'graveering' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'graveering' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'graveering' ), 'graveering', '<a href="http://veebiexpert.ee">Freelancer Martin</a>' );
				?>
		</div><!-- .site-info -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
