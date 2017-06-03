<?php
/*
        Template Name: Page à propos
*/
get_header();
?>

<section class="wrapper">
    <header class="section-header section-header_aboutus">
        <div class="section-header__content-container">
            <div class="section-header__breadcrumb">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>
            <h2 class="section-header__title">À propos de Mariam-Faso</h2>
            <p class="section-header__intro"><?php the_field("aboutus_intro") ?></p>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("projets") ?>">Nos projets</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("nous contacter") ?>">Nous contacter</a>
        </div>
    </header>
    <section class="post content-wrapper">
        <?php
        if( have_rows('flexible_aboutus') ): ?>
            <?php while ( have_rows('flexible_aboutus') ) : the_row(); ?>
                <?php get_template_part('part', 'flexible-content');?>
            <?php endwhile; ?>

        <?php endif; ?>
    </section>
    <?php get_footer(); ?>
