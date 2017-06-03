<?php
/*
        Template Name: Contact
*/
get_header();
?>


<section class="wrapper">
    <header class="section-header section-header_contact">
        <div class="section-header__content-container">
            <div class="section-header__breadcrumb">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>

            <h2 class="section-header__title"><?php the_title(); ?></h2>
            <p class="post-excerpt__info section-header__intro">
                <?php the_field("contact_intro"); ?>
            </p>

        </div>
    </header>
    <section class="post post_contact content-wrapper">
        <h2 class="u-hidden-visually">Nous contacter</h2>
        <section class="donation__column">
            <h3>Nous contacter directement par email</h3>
            <ul>
                <?php if( have_rows('contact_list') ): while ( have_rows('contact_list') ) : the_row(); ?>
                    <li><?php the_sub_field('contact_email') ?></li>
                <?php endwhile; endif; ?>
            </ul>
        </section>
        <section class="donation__column">
            <h3>Ou via ce formulaire</h3>
            <?php the_field('contact_form'); ?>
        </section>
    </section>
<?php get_footer(); ?>

