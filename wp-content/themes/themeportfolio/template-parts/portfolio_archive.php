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

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry large-4 columns'); ?>>
    <a href="<?php the_permalink() ?>" class="thecontain fadepartiel">
		<div class="image-portfolio" style="background-image:url(<?php the_post_thumbnail_url('large') ?>)">
            <div class="fade">
            </div>
		</div>
        <div class="titre">
            <div class="ina">
                <?php the_title() ?>
                <div class="ino"><?php the_excerpt() ?></div>
            </div>

        </div>
	</a>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</div>
