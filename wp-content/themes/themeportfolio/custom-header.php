<div class="customheader">
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
    <div class="name">
        <div class="slogan">
            <h2>Alexandre<span style="color:#6db3e3">Kong</span></h2>
            <hr>
            <ul>
                <li>Graphic & webdesigner</li>
                <li>Intégrateur</li>
                <li>Développeur frontend / backend</li>
            </ul>
            <a href="#" class="custom-button hvr-bounce-to-top">Qui suis-je ?</a>
        </div>
        <div class="other">
            <ul>
                <li class="sociallink"><div class="icon"><i class="fa fa-trophy"></i></div><a href="#">Certifications</a></li>
                <li class="sociallink"><div class="icon"><i class="fa fa-graduation-cap"></i></div><a href="#">Formation</a></li>
                <li class="sociallink"><div class="icon"><i class="fa fa-phone"></i></div><a href="#">Contact</a></li>
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
                            <div class="home-image-crea" style="background-image:url(<?php the_post_thumbnail_url() ?>)"></div>
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

        <!-- Bouton plus
        ==================== -->

        <div class="seemore">
            <a href="#" class="hvr-buzz"><i class="fa fa-plus fa-2x"></i></a>
        </div>
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
                    <div class="item" style="background-image:url(<?php the_post_thumbnail_url() ?>)" data-hash="<?php the_ID() ?>">
                        <div class="content-slide">
                            <div class="in">
                                <h2 class="titleslide"><?php the_title() ?></h2>
                                <hr>
                                <p class="description"><?php the_excerpt() ?></p>
                                <a href="<?php the_permalink() ?>" class="custom-button-white hvr-underline-from-left">En découvrir plus<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

</div>











<!---
OHTER
===============-->

<div id="hello" class="customcontent">
    ddezdze
</div>
