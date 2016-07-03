<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="contact">

    <!-- TITRE -->
    <div class="containerheaderz">
        <h2>Contact</h2>
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
