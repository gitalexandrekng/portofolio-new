<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="singleimage" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
	<div class="flex">
		<div class="inas"><h1 class="entry-title"><?php the_title(); ?></h1></div>
		<div class="scroll">SCROLL<br><i class="fa fa-angle-down fa-3x"></i></div>
	</div>
</div>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class('singlecontent') ?> id="post-<?php the_ID(); ?>">

    <!-- ENCART DE COULEUR
    /
    ============================= -->

    <div class="toptop">
        <div class="backg"></div>
        <h2><?php the_excerpt() ?></h2>
        <div class="linkproject">
            <a href="<?php the_field('link'); ?>"><i class="fa fa-link"></i> <?php the_field('link'); ?></a>
        </div>
    </div>

	<div class="colored-description">
        <div class="septop"><i class="fa fa-angle-double-down"></i></div>
        <div class="sep"></div>
        <div class="row">
            <div class="small-12 columns">
                <div class="detailproject">
                    <div class="row">
                        <div class="medium-12 columns">
                            <div class="titletype">Type de projet :</div>
                            <div class="row">
                                <?php

        							$values = get_field('type');
        							if($values)
        							{
        								foreach($values as $value)
        								{
        									echo '<div class="medium-6 large-3 columns end"><div class="insingle">' . $value . '</div></div>';
        								}
        							}

        						?>
                            </div>
                        </div>
                        <div class="medium-12 columns">
                            <div class="titletype">Mon rôle :</div>
                            <ul class="ta">
                                <?php

        							$values = get_field('role');
        							if($values)
        							{
        								foreach($values as $value)
        								{
        									echo '<li>' . $value . '</li>';
        								}
        							}

        						?>
                            </ul>
                        </div>
                        <div class="medium-12 columns">
                            <div class="titletype">Client et cahier des charges :</div>
                            <div><?php the_field('client'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <!-- LIEN DE RETOUR
    /
    ============================= -->
	<div class="row fullwidth">
		<div class="medium-12 columns">
			<a class="fadepartiel comeback" href="<?php bloginfo('home') ?>/portfolio">
				<span class="yes">
					<i class="fa fa-angle-left"></i>
				</span>
				<span class="no">Retour au portfolio</span>
			</a>
		</div>
	</div>


	<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

    <!-- DÉBUT DU CONTENU
    /
    ============================= -->
	<div class="entry-content">

        <!-- Image avec les typos et tout
        -->

        <div class="galleryphoto">
			<img src="<?php the_field('galerie_photo'); ?>" alt="" />
		</div>

        <!-- Et le contenu
        ==-->
        <div class="row">
            <div class="small-12 columns">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="linknavigation">
            <div class="left"><?php previous_post_link('<div class="icon"><i class="fa fa-angle-double-left"></i></div><div class="link">%link</div>'); ?></div>
            <div class="middle"><a href="<?php echo bloginfo('home') ?>/portfolio" class="fadepartiel hvr-grow-shadow">En voir plus</a></div>
            <div class="right"><?php next_post_link('<div class="link">%link</div><div class="icon"><i class="fa fa-angle-double-right"></i></div>'); ?></div>
        </div>
	</div>
	<?php include('custom-footer.php'); ?>
</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
