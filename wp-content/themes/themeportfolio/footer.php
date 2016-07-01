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
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/custom-js.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js-presentation.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/protonet/jquery.inview/jquery.inview.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/scroll-parallax/dist/Parallax.js"></script>
<script>
	var parallax = new Parallax('.parallax', {})
	parallax.on('image:loaded', function() {
		console.log(arguments)
	})
	parallax.on('images:loaded', function() {
		console.log(arguments)
	})
	parallax.init()
</script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
