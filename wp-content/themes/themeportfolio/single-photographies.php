<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="fondsingle"></div>

	<div class="fademe">
        <div class="singleimage" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
    	    <div class="flex">
    	        <div class="inas"><h1 class="entry-title"><?php the_title(); ?></h1></div>
                <div class="scroll">SCROLL<br><i class="fa fa-angle-down fa-3x"></i></div>
    	    </div>
    	</div>

    <?php do_action( 'foundationpress_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<article <?php post_class('singlecontent customsingle') ?> id="post-<?php the_ID(); ?>">
    		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<div class="entry-content customentry">
                <?php
    			$images = get_field('galeriephotos');

    			if( $images ): ?>
    			    <ul class="row small-collapse fullwidth galz">
    			        <?php foreach( $images as $image ): ?>
    			            <li class="large-3 medium-6 columns yoz" style="background-image:url(<?php echo $image['sizes']['large']; ?>)">
    			                <a href="<?php echo $image['url']; ?>">
    			                </a>
    			            </li>
    			        <?php endforeach; ?>
    			    </ul>
    			<?php endif; ?>
			</div>

            <?php include('custom-footer.php'); ?>
    	</article>
    <?php endwhile;?>

	</div>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
