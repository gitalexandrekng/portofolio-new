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
    <div class="in-footer">
      <div class="in">
          <h3>Contact</h3>
          <hr>
          <p>Votre projet m'interesse, et je suis persuadé d'être la personne qu'il vous faut, sans prétention ;).<br>N'hésitez pas à m'envoyer un message pour m'en faire part.</p>
        <?php echo do_shortcode('[contact-form-7 id="9" title="Formulaire de contact 1"]') ?>
      </div>
    </div>

    </div>
    <div class="in-footer-two">
      <div class="in">
        © Copyright Alexandre KONG <br>
        Design, intégration, développement par KONG Alexandre <br>
        <a href="">Mentions légales</a>
      </div>
    </div>
		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>


		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script>
var owl = $('#owl-carousel');
	owl.owlCarousel({
		mouseDrag: true,
		items: 1,
		nav:false,
		autoplay:true,
		autoplayTimeout:2000,
		autoplaySpeed: 1500,
		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		loop:true,
	});
</script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/jquery.fadethis.js"></script>
<script>$(window).fadeThis();</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
