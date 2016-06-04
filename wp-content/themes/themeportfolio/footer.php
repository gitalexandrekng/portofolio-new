<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/custom-js.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js-presentation.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/mixitup/src/jquery.mixitup.js"></script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
