<?php
/*
        Template Name: Galerie
*/
get_header();
?>

<section class="wrapper">
    <header class="section-header section-header_gallery">
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
            <p class="section-header__intro"><?php the_field("gallery_intro") ?></p>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("projets") ?>">Nos projets</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("nous contacter") ?>">Nous contacter</a>
        </div>
    </header>
    <section class="excerpt-container content-wrapper">
        <h2 class="u-hidden-visually">Les galeries</h2>
        <?php
        $args = array( 'post_type' => 'gallery',
            'posts_per_page' => -1,
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a class="gallery" href="<?php the_permalink(); ?>">
                <p class="gallery__title cta cta_over-image"><?php the_title(); ?></p>
                <?php mf_the_image(get_field('gallery_thumbnail'), 'mf_thumbnail', 'gallery__thumbnail'); ?>
            </a>
        <?php endwhile; ?>
    </section>
</section>
    <?php get_footer(); ?>
