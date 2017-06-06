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
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("a propos") ?>"><?= __('En savoir plus sur Mariam Faso','mf');?></a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>"><?= __('Participer','mf');?></a>
        </div>
    </header>
    <section class="post post_donation content-wrapper">
        <h2 class="u-hidden-visually"><?= __('Réaliser un don','mf');?></h2>
        <section class="donation__column">
            <h3><?= __("Les avantages fiscaud d'une donation",'mf');?></h3>
            <div class="wysiwyg">
                <?php the_field('donation_fisc') ?>
            </div>
            <a href="<?php the_field('donation_spf') ?>" class="cta cta_dark"><?= __('En savoir plus sur les avantages fiscaux','mf');?></a>
        </section>
        <section class="donation__column">
            <h3><?= __('Réaliser un don via la fondation roi baudouin','mf');?></h3>
            <dl class="donation-iban__list">
                <dt class="donation-iban__term"><?= __('Numéro de compte','mf');?></dt>
                <dd class="donation-iban__definition donation-iban__definition_full-color"><?php the_field('iban_frb', 'option');?></dd>
                <dt class="donation-iban__term"><?= __('Communication structurée','mf');?></dt>
                <dd class="donation-iban__definition donation-iban__definition_full-color"><?php the_field('com_frb', 'option');?></dd>
            </dl>
            <a class="cta cta_dark" href="<?php the_field('donation_frb'); ?>"><?= __('Réaliser un don en ligne','mf');?></a>
        </section>
    </section>

<?php get_footer(); ?>
