<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="wrapper">

  <div style="height:100%" class="scrollme">
    <div class="banniere animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="-250">
    	<div class="slider-texte animateme" data-when="exit" data-from="0" data-to="0.50" data-opacity="0" data-translatey="-250">
    		<div class="owl-carousel" id="owl-carousel">
    			<div class="item">Passionnant</div>
    			<div class="item">Distingué</div>
    			<div class="item">Inspirant</div>
    		</div>
    		<div class="slogan">
    			Webdesigner / developpeur / intégrateur
    		</div>
    		<div class="socialmedia">
    			<ul>
    				<li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
    				<li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
    				<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
    			</ul>
    		</div>
    	</div>
    </div>
  </div>

</div>

<div class="wrapper-in">
  <div class="lastcrea scrollme">
    <div class="animateme" data-when="view" data-from="1" data-to="0" data-opacity="0" data-translatey="-150">
      <h3>Dernières créations</h3>
      <hr>
      <p>Quel meilleur moyen de me présenter ?<br>Voici mes dernières réalisations afin de vous faire une idée de ce que je peux apporter à votre projet personnel.</p>
    </div>
    <div class="scrollme">
      <!--<div class="row animateme" data-when="view" data-from="1" data-to="0" data-opacity="0" data-translatey="-50">-->
        <div class="small-4 columns">
          <div class="thumb"><img src="http://placehold.it/650x650"></div>
        </div>
        <div class="small-4 columns">
          <div class="thumb"><img src="http://placehold.it/650x650"></div>
        </div>
        <div class="small-4 columns">
          <div class="thumb"><img src="http://placehold.it/650x650"></div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="scrollme">
  <div class="animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0.4" data-translatey="-100">
    <div class="greyband">
      <div class="texte">
        <h1>Hello</h1>
        <hr>
        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. </p>
      </div>
    </div>
    <div class="greyband-bottom"></div>
    <div class="round-competences">
      <div class="in">
        <div class="rond"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/web.png" alt=""></div>
        <div class="rond"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/paint.png" alt=""></div>
        <div class="rond"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/people.png" alt=""></div>
      </div>
    </div>
    <div class="texte-competences">
      <div class="in">
        <div>CMS / CSS</div>
        <div>Webdesign</div>
        <div>Référencement</div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper-in scrollme">
  <div class="skills animateme" data-when="view" data-from="0" data-to="1" data-opacity="0" data-translatey="150">
    <div class="row slide-bottom" data-plugin-options='{"reverse":false}'>
      <div class="medium-4 columns">
        <div class="inset">
          <div class="in">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/eye.png" alt="">
            <h5>Competences</h5>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux</p>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="inset">
          <div class="in">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/eye.png" alt="">
            <h5>Competences</h5>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux</p>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="inset">
          <div class="in">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/eye.png" alt="">
            <h5>Competences</h5>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row slide-bottom" data-plugin-options='{"reverse":false}'>
      <div class="medium-4 columns">
        <div class="inset">
          <div class="in">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/eye.png" alt="">
            <h5>Competences</h5>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux</p>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="inset">
          <div class="in">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/eye.png" alt="">
            <h5>Competences</h5>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux</p>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="inset">
          <div class="in">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/eye.png" alt="">
            <h5>Competences</h5>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--
<div id="page" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
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

	</article>
	<?php get_sidebar(); ?>

</div>-->

<?php get_footer();
