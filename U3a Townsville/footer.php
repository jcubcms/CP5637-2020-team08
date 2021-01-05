<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!--<a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'my-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'my-theme' ), 'WordPress' );
				?>
			</a> -->
			<span class="sep"> 
				<a class="footer-menu" href="/home/">HOME</a> | <a class="footer-menu" href="/education/">EDUCATION</a> | <a class="footer-menu" href="/motorcycling/">MOTORCYCLING</a> | <a class="footer-menu" href="/sustainability/">SUSTAINABILITY</a> | <a class="footer-menu" href="/contact-us/">CONTACT US</a>
			
			<br><br>
			<a href="https://www.facebook.com/pages/U3A-Townsville/1408119702772700"> <img src="/wp-content/uploads/2021/01/facebook.png" width="30px" /></a> &nbsp; 
			<a href="https://www.linkedin.com/"><img src="/wp-content/uploads/2020/05/in.png" width="32px" /></a>
			</span><br><br>
			
			<span class="sep"> __________ </span><br><br>
			<span class="sep"> Copyright © 2021 u3a Townsville - All Rights Reserved.</span><br>
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'my-theme' ), 'my-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>