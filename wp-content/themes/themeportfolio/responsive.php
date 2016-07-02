<div class="responsivehome">
    <div class="fade">
        <div class="in">
            <div class="title"><h1>Alexandre<span class="red">Kong</span></h1></div>
            <div class="slo">
                Webdesigner / intégrateur / développeur
            </div>
            <div class="link">
                <div class="zax">
                    <ul>
                        <li><a class="fadepartiel" href="<?php bloginfo('home') ?>/portfolio">Portfolio</a></li>
                        <li><a class="fadepartiel" href="<?php bloginfo('home') ?>/presentation-alexandre-k-webdesigner/">Qui suis-je ?</a></li>
                        <li><a class="fadepartiel" href="<?php bloginfo('home') ?>/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="social">
                <ul>
                    <li><a href="" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
                </ul>
            </div>

            <div class="content">
                <h2>Dernières créations</h2>
                <div class="text-center" style="margin-bottom:15px;"><i class="fa fa-angle-down fa-2x"></i></div>
                <div class="row">
                    <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC' ); ?>
                    <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="small-12 columns fadepartiel crea">
                                <div class="imagecrea" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                                    <div class="titre"><?php the_title() ?></div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
