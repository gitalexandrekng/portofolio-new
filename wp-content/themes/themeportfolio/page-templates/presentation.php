<?php
/*
Template Name: Qui suis-je?
*/
get_header(); ?>

<section class="presentation">
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
                <h3 class="Portfolio">Qui suis-je ?</h3>
            </div>
        </div>
    </div>
    <div class="row small-collapse fullwidth aboutme">
        <div class="medium-12 columns">
            <div class="in">
                <div class="">
                    <h4>A propos de moi</h4>
                    <hr>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <p><?php the_content(); ?></p>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
    <div class="row formation">
        <div class="medium-6 columns">
            <h4>Formation</h4>
            <hr>
            <ul id="forma">
                <li>
                    <span class="date">2012 : Baccalauréat ES spé anglais</span><br>
                    <span>Lycée privé la Doctrine Chrétienne</span>
                </li>
                <li>
                    <span class="date">2012 - 2016 : Licence en droit.</span><br>
                    <span>Faculté de droit de Strasbourg</span>
                </li>
                <li>
                    <span class="date">2015 - 2016 : Webdesign</span><br>
                    <span>MJM Graphic design</span>
                </li>
            </ul>

            <h4 style="margin-top:70px;">Expériences</h4>
            <hr>
            <ul id="exp">
                <li>
                    2015 - 2016 : Webdesigner<br>
                    <span>IRCAD - WeBSurg</span>
                </li>
            </ul>

            <h4 style="margin-top:70px;">Langues</h4>
            <hr>
            <div id="langues">
                <span class="rowcolumn">
                    <strong>ANGLAIS</strong> : Courant
                    <br>Niveau B2 : Intermédiaire - Avancé<br>
                    <p><strong>Obtention du <a href="http://www.certification-cles.fr/fr/presentation/le-cles-en-bref/le-cles-en-bref-220400.kjsp" target="_blank">CLES 2</a> (n. B2) à la faculté de droit en 2015</strong></p>
                </span>
                <span class="rowcolumn">
                    <strong>CHINOIS (teochew)</strong> : Courant
                    <br>Niveau C1 : Avancé<br>
                    <p><strong>Langue maternelle</strong></p>
                </span>
                <span class="rowcolumn"><strong>ALLEMAND</strong> : Scolaire</span>
            </div>
        </div>
        <div class="medium-6 columns respclass">
            <h4>Diplômes</h4>
            <hr>
            <span class="oc">OpenClassrooms</span>
            <span class="pcertifs">
                <div class="icon"><i class="fa fa-graduation-cap fa-2x"></i></div>
                Parcours certifiants
            </span>
            <div class="parcours">
                <h3>Intégrateur web</h3>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/inte.png" alt="">
            </div>
            <span class="pcertifs">
                <div class="icon"><i class="fa fa-trophy fa-2x"></i></div>
                Certifications
            </span>
            <span class="cl cl-css">[HTML / CSS]</span>
            <ul class="certifs">
                <li>Prenez en main Bootstrap</li>
                <li>Apprenez à créer votre site web avec HTML5 et CSS3</li>
                <li>Découper et intégrer une maquette</li>
            </ul>
            <span class="cl cl-git">[GIT]</span>
            <ul class="certifs">
                <li>Gérer son code avec Git et GitHub</li>
            </ul>
            <span class="cl cl-php">[PHP]</span>
            <ul class="certifs">
                <li>Concevez votre site web avec PHP et MySQL</li>
            </ul>
            <span class="cl cl-cms">[CMS]</span>
            <ul class="certifs">
                <li>Créez votre premier site avec WordPress</li>
                <li>Découvrez les solutions CMS</li>
                <li>Réalisez des sites modernes et beaux grâce à WordPress</li>
            </ul>
            <span class="cl cl-js">[JS]</span>
            <ul class="certifs">
                <li>Introduction à jQuery</li>
                <li>Coder avec javascript</li>
            </ul>
            <span class="cl cl-em">[eMailing]</span>
            <ul class="certifs">
                <li>Réussir sa campagne d'e-mailing avec MailChimp</li>
            </ul>
            <span class="cl cl-seo">[SEO]</span>
            <ul class="certifs">
                <li>Les clés pour réussir son référencement web</li>
            </ul>
            <span class="cl cl-web">[WEB]</span>
            <ul class="certifs">
                <li>Comprendre le Web</li>
                <li>Apprenez à naviguer en sécurité sur Internet</li>
            </ul>
        </div>
    </div>

    <div class="row compz fullwidth">
        <div class="small-12 columns">
            <div class="in">
                <h4>Compétences</h4>
                <hr>
                <div class="row" style="margin-top:80px;">
                    <div class="medium-4 columns">
                        <h4>Webdesign</h4>
                        <img class="picz" src="<?php echo get_stylesheet_directory_uri() ?>/images/monitor.svg" alt="">
                        <div class="mycomp">
                            <ul>
                                <li>
                                    <h5>Photoshop</h5>
                                    <div class="zeta">Conception de maquettes de site internet</div>
                                </li>
                                <li>
                                    <h5>SEO</h5>
                                    <div class="zeta">Faire connaître votre site, et optimiser son référencement naturel.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="medium-4 columns">
                        <h4>Intégration</h4>
                        <img class="picz" src="<?php echo get_stylesheet_directory_uri() ?>/images/eye.svg" alt="">
                        <div class="mycomp">
                            <ul>
                                <li>
                                    <h5>HTML / CSS</h5>
                                    <div class="zeta">Intégration de maquettes en HTML/CSS, code clean, et cross browser</div>
                                </li>
                                <li>
                                    <h5>Wordpress</h5>
                                    <div class="zeta">Expertise wordpress, intégration de maquettes sur le CMS wordpress, développement spécifique.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="medium-4 columns">
                        <h4>Développement</h4>
                        <img class="picz" src="<?php echo get_stylesheet_directory_uri() ?>/images/cloud-computing.svg" alt="">
                        <div class="mycomp">
                            <ul>
                                <li>
                                    <h5>PHP / mySQL</h5>
                                    <div class="zeta">Expertise du language PHP/ mySQL, création de sites web dynamiques aux fonctionnalités diverses et variés.</div>
                                </li>
                                <li>
                                    <h5>Javascript, jQuery</h5>
                                    <div class="zeta">Créations de sites web dynamiques et attractifs, cross browser, compatibilité maximum.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="myfooter">
    Copyright© 2016 - Alexandre KONG<br><a href="#">Mentions légales</a>
</div>


<?php get_footer();
