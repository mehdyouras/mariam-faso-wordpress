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
    <section class="post content-wrapper">
        <h2 class="u-hidden-visually">Réaliser un don</h2>
        <section>
            <h3>Les avantages fiscaux d'une donation</h3>
            <div class="wysiwyg">
                <?php the_field('donation_fisc') ?>
            </div>
            <a href="<?php the_field('donation_spf') ?>" class="cta cta_dark">En savoir plus sur les avantages fiscaux liés aux donations</a>
        </section>
        <section>
            <h3>Réaliser un don via la Fondation Roi Baudouin</h3>
            <dl class="footer-donation__list">
                <dt class="footer-donation__dt">Numéro de compte&nbsp;:</dt>
                <dd class="footer-donation__dd"><?php the_field('iban_frb', 'option');?></dd>
                <dt class="footer-donation__dt">Communication structurée&nbsp;:</dt>
                <dd class="footer-donation__dd"><?php the_field('com_frb', 'option');?></dd>
            </dl>
            <a class="cta cta_dark" href="<?php the_field('donation_frb'); ?>">Réaliser un don à Mariam Faso via la Fondation Roi Baudouin</a>
        </section>
    </section>

<?php get_footer(); ?>
