<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php $yes = wpdocs_custom_taxonomies_terms_links(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry large-4 medium-6 columns end mix noremove'); ?>>
    <a href="<?php the_permalink() ?>" class="thecontain fadepartiel">
		<div class="image-portfolio" style="background-image:url(<?php the_post_thumbnail_url('large') ?>)">
            <div class="fade">
            </div>
		</div>
        <div class="titre">
            <div class="ina">
                <div class="int"><?php the_title() ?></div>
                <div class="ino"><?php the_excerpt() ?></div>
                <div class="cat"><?php echo wpdocs_custom_taxonomies_terms_links(); ?></div>
            </div>

        </div>
	</a>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</div>
