<?php
/*
        Template Name: Faire un don
*/
get_header();
?>

<section class="wrapper">
    <header class="section-header section-header_donation">
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
                <?php the_field("donation_intro"); ?>
            </p>

        </div>
    </header>
    <section class="post post_donation content-wrapper">
        <h2 class="u-hidden-visually">Réaliser un don</h2>
        <section class="donation__column">
            <h3>Les avantages fiscaux d'une donation</h3>
            <div class="wysiwyg">
                <?php the_field('donation_fisc') ?>
            </div>
            <a href="<?php the_field('donation_spf') ?>" class="cta cta_dark">En savoir plus sur les avantages fiscaux</a>
        </section>
        <section class="donation__column">
            <h3>Réaliser un don via la Fondation Roi Baudouin</h3>
            <dl class="donation-iban__list">
                <dt class="donation-iban__term">Numéro de compte&nbsp;:</dt>
                <dd class="donation-iban__definition donation-iban__definition_full-color"><?php the_field('iban_frb', 'option');?></dd>
                <dt class="donation-iban__term">Communication structurée&nbsp;:</dt>
                <dd class="donation-iban__definition donation-iban__definition_full-color"><?php the_field('com_frb', 'option');?></dd>
            </dl>
            <a class="cta cta_dark" href="<?php the_field('donation_frb'); ?>">Réaliser un don el ligne</a>
        </section>
    </section>

<?php get_footer(); ?>
