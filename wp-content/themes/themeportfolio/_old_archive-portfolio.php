<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="archiveportfolio fademe">
	<div class="in">

        <!-- TITRE -->
        <div class="containerheader">
            <div class="flexed">
                <div class="leftheader">
                    <div class="slogan">
                        <h2>Alexandre<span style="color:#c0392b">Kong</span></h2>
                    </div>
                </div>
                <div class="rightheader">
                    <nav class="archiveportfolionav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        <button class="shownav"><i class="fa fa-bars"></i></button>
                    </nav>
                </div>
            </div>
            <div class="showresponsive">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
            <div class="titzc">
                <div class="titz">
                    <h3 class="Portfolio">Portfolio</h3>
                </div>
            </div>
        </div>

        <!-- Titre -->
        <div class="portfoliotitle">
            <div class="boutonfiltre">
                <button class="hvr-bounce-to-top buttonchange allz">Tout</button>
                <button class="hvr-bounce-to-top buttonchange sites">Sites</button>
                <button class="hvr-bounce-to-top buttonchange illus">Illustrations</button>
                <button class="hvr-bounce-to-top buttonchange photographies">Photographies</button>
            </div>
        </div>

        <!-- Contenu -->
        <article class="main-content">
            <div class="row fullwidth small-collapse oeuvres">
                <?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content-portfolio', get_post_format() ); ?>
                    <?php endwhile; ?>

                    <?php else : ?>
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; // End have_posts() check. ?>

                    <?php /* Display navigation to next/previous pages when applicable */ ?>
                    <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
                        <nav id="post-nav">
                            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
                            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
                        </nav>
                    <?php } ?>
            </div>
        </article>
	</div>
</div>
<?php include('custom-footer.php'); ?>

<?php get_footer();
