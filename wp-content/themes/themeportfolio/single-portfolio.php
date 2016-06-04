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
    	<article <?php post_class('singlecontent') ?> id="post-<?php the_ID(); ?>">
            <div class="row">
                <div class="medium-6 columns">
                    <a class="fadepartiel comeback" href="<?php bloginfo('home') ?>/portfolio">
                        <span class="yes">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="no">Retour au portfolio</span>
                    </a>
                </div>
                <div class="medium-6 columns"></div>
            </div>
    		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
    		<div class="entry-content">
    		    <div class="zer">
                    <div class="row caract">
                        <div class="medium-4 columns">
                            <div class="carac">
                                <strong>Caractéristique</strong>:<br>
                                Webdesign
                            </div>
                        </div>
                        <div class="medium-4 columns">
                            <div class="carac">
                                <strong>Caractéristique</strong>:<br>
                                Webdesign
                            </div>
                        </div>
                        <div class="medium-4 columns">
                            <div class="carac">
                                <strong>Caractéristique</strong>:<br>
                                Webdesign
                            </div>
                        </div>
                    </div>
    		        <?php the_content(); ?>
    		    </div>
    		</div>
    	</article>
    <?php endwhile;?>
	</div>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
