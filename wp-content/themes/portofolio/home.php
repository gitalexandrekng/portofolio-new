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
    <div class="banniere animateme" data-when="exit" data-from="0" data-to="0.8" data-opacity="0" data-scale="1.2">
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
  <section class="aboutme">
    <div class="degrade"></div>
    <div class="row fluid">
      <div class="small-6 columns">
        <article>
          <h3>A propos de moi</h3><hr>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
        </article>
      </div>
      <div class="small-6 columns">
        <div class="row symbol">
          <div class="small-12 columns">
            <div class="compz">
              <div class="nineteen">
                CMS / CSS
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/plume.png" alt=""></div>
              </div>
            </div>
          </div>
          <div class="small-12 columns">
            <div class="compz">
              <div class="nineteen">
                Intégration / dev.
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/web.png" alt=""></div>
              </div>
            </div>
          </div>
          <div class="small-12 columns">
            <div class="compz">
              <div class="nineteen">
                Webdesign
              <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/paint.png" alt=""></div>
            </div>
            </div>
          </div>
          <div class="small-12 columns end">
            <div class="compz">
              <div class="nineteen">
                Référencement / SEO
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/people.png" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="row plusplus">
    <div class="small-12 columns">EN SAVOIR PLUS</div>
  </section>
  <section class="title-creations scrollme animateme" data-when="span" data-from="0.7" data-to="0" data-opacity="0" data-translatey="250">
    <div class="title">
      <h3>Dernières créations</h3>
      <hr>
      <p class="description">Quel meilleur moyen de me présenter que d’avoir un oeil sur mes créations ?</p>
    </div>
  </section>
  <section class="fluid creations">

    <div class="in-creations">
      <div class="row border scrollme animateme" data-when="span" data-from="0.7" data-to="0" data-opacity="0" data-translatey="250">
        <div class="small-8 columns image" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/1.jpg)"></div>
        <div class="small-4 columns"></div>
      </div>
      <div class="row texte">
        <div class="small-6 columns"></div>
        <div class="small-6 columns">
          <div class="title scrollme animateme" data-when="view" data-from="1" data-to="0" data-opacity="1" data-translatey="300">
            <h2>Portail des haras</h2>
          </div>
          <div class="row">
            <div class="small-4 columns"></div>
            <div class="small-8 columns">
              <div class="content">
                <ul>
                  <li><strong>TYPE</strong> : Site web</li>
                  <li><strong>ROLE</strong> : Designer / dev / intégrateur</li>
                </ul>
              </div>
              <div class="bouton">View more</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="in-creations">
      <div class="row border scrollme animateme" data-when="span" data-from="0.7" data-to="0" data-opacity="0" data-translatey="250">
        <div class="small-8 columns image" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/4.jpg)"></div>
        <div class="small-4 columns"></div>
      </div>
      <div class="row texte">
        <div class="small-6 columns"></div>
        <div class="small-6 columns">
          <div class="title scrollme animateme" data-when="view" data-from="1" data-to="0" data-opacity="1" data-translatey="300">
            <h2>Brasserie des Haras</h2>
          </div>
          <div class="row">
            <div class="small-4 columns"></div>
            <div class="small-8 columns">
              <div class="content">
                <ul>
                  <li><strong>TYPE</strong> : Site web</li>
                  <li><strong>ROLE</strong> : Designer / dev / intégrateur</li>
                </ul>
              </div>
              <div class="bouton">View more</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="in-creations">
      <div class="row border scrollme animateme" data-when="span" data-from="0.7" data-to="0" data-opacity="0" data-translatey="250">
        <div class="small-8 columns image" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/1.jpg)"></div>
        <div class="small-4 columns"></div>
      </div>
      <div class="row texte">
        <div class="small-6 columns"></div>
        <div class="small-6 columns">
          <div class="title scrollme animateme" data-when="view" data-from="1" data-to="0" data-opacity="1" data-translatey="300">
            <h2>Portail des haras</h2>
          </div>
          <div class="row">
            <div class="small-4 columns"></div>
            <div class="small-8 columns">
              <div class="content">
                <ul>
                  <li><strong>TYPE</strong> : Site web</li>
                  <li><strong>ROLE</strong> : Designer / dev / intégrateur</li>
                </ul>
              </div>
              <div class="bouton">View more</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="all">
      <a href="">Vous voulez en voir plus ?</a>
    </div>

    <div class="liked">
      Vous aimez mon travail ?<br>
      Vous avez vous même envie de créer votre site web ?<br>
      Ca tombe bien, faîtes moi part de votre projet.
      <a href="" class="contact-button">Formulaire de contact</a>
    </div>
  </section>
  <section class="qualifications">
    <h3>Qualifications</h3>
    <div class="row">
      <div class="small-6 columns">
        <h4>Certifications OpenClassrooms</h4>
        <ul>
          <li>[HTML / CSS] Découper et intégrer une maquette</li>
          <li>[HTML / CSS] Prenez en main Bootstrap</li>
          <li>[HTML / CSS] Créez votre premier site avec WordPress</li>
          <li>[HTML / CSS] Découvrez les solutions CMS</li>
          <li>[HTML / CSS] Apprenez à créer votre site web avec HTML5 et CSS3</li>
          <li>[SEO] Les clés pour réussir son référencement web</li>
          <li>[WEB] Comprendre le Web</li>
          <li>[WEB] Apprenez à naviguer en sécurité sur Internet</li>
        </ul>
      </div>
      <div class="small-6 columns"></div>
    </div>
  </section>
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
