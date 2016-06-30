<div class="customheader">

    <!-- ******************* ANINMATION ROND
    =========================================================== -->
    <div class="rond">
        <div class="rond-centre"></div>
        <div class="rond-one">
            <div class="uno"></div>
            <div class="dos"></div>
            <div class="tres"></div>
        </div>
        <div class="rond-two">
            <div class="uno"></div>
            <div class="dos"></div>
            <div class="tres"></div>
        </div>
    </div>

    <div id="head" class="owl-carousel">
        <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' ); ?>
        <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="item" data-hash="<?php the_ID() ?>"><div class="inslide" style="background-image:url(<?php the_post_thumbnail_url() ?>)"></div></div>
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>

    <div class="logosvg"></div>
    <div class="logosvgroue"></div>

    <!-- Side bar left
    ====================-->
    <div class="name">

        <div class="slogan">
            <h2>Alexandre<span style="color:#c0392b">Kong</span><i class="fa fa-angle-right"></i>
                <a href="<?php bloginfo('home') ?>/presentation-alexandre-k-webdesigner/" class="whois hvr-grow-shadow fadeall">Qui suis-je ?</a>
            </h2>
            <hr>
            <ul>
                <li>Graphic & webdesigner / Intégrateur</li>
                <li>Développeur frontend / backend</li>
            </ul>
            <!--<a href="<?php bloginfo('home') ?>/presentation-alexandre-k-webdesigner/" class="custom-button hvr-bounce-to-top fadeall">Qui suis-je ?</a>-->
        </div>

        <div class="social">
            <ul>
                <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                <li><a href="https://www.instagram.com/alexandrekfr/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                <li><a href="https://www.linkedin.com/in/alexandre-kong-7758b6113"><i class="fa fa-linkedin fa-2x"></i></a></li>
            </ul>
        </div>

        <!-- DERNIERes
        ===================-->

        <div class="lastcrea">
            <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <a class="row crea" href="#<?php the_ID() ?>" data-equalizer>
                        <div class="small-4 columns" data-equalizer-watch>
                            <div class="home-image-crea" style="background-image:url(<?php the_post_thumbnail_url('medium') ?>)">
                                <div class="arrowsee"><i class="fa fa-angle-right fa-2x"></i></div>
                            </div>
                        </div>
                        <div class="small-8 columns" data-equalizer-watch>
                            <div class="home-texte-crea">
                                <div class="in">
                                    <h3 class="home-crea-title"><?php the_title() ?></h3>
                                    <div class="texte"><?php the_excerpt() ?></div>
                                </div>
                            </div>
                        </div>
                    </a>
        		<?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

    <!-- Bouton plus
    ==================== -->

    <div class="seemore">
        <a href="<?php bloginfo('home') ?>/portfolio/" class="fadeall hvr-buzz"><i class="fa fa-angle-double-right fa-2x"></i></a>
    </div>

    <!--texte voir plus-->
    <div class="text-see">
        Découvrir toutes mes créations
    </div>

    <!-- Gros zoom sur images
    =========================== -->
    <div class="groszoom">
        <div class="owl-carousel" id="zooms">
            <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="item" data-hash="<?php the_ID() ?>">
                        <div class="ins" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                            <div class="fade">
                                <div class="content-slide">
                                    <div class="in">
                                        <h2 class="titleslide"><?php the_title() ?></h2>
                                        <hr>
                                        <p class="description"><?php the_excerpt() ?></p>
                                        <a href="<?php the_permalink() ?>" class="custom-button-white hvr-underline-from-left fadeall">En découvrir plus<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php include("responsive.php"); ?>
