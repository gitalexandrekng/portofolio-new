<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="contact">
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
                <h3 class="Portfolio">Contact</h3>
            </div>
        </div>
    </div>
    <div class="row small-collapse fullwidth aboutme">
        <div class="medium-12 columns">
            <div class="in">
                <div class="">
                    <h4>Contact</h4>
                    <hr>
                    <span class="email">e-mail: alexandre.kong@gmail.com</span>
                    <p><?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="myfooter">
    Copyright© 2016 - Alexandre KONG<br><a href="#">Mentions légales</a>
</div>

<?php get_footer();
