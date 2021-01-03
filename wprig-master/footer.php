<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>

<footer id="colophon" class="site-footer">
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/info' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
