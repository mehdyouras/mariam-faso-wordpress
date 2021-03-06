<?php
/*
        Template Name: Actualité
*/
get_header();
?>
<section class="wrapper">
    <header class="section-header section-header_post">
        <div class="section-header__content-container">
            <div class="section-header__breadcrumb">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>
            <h2 aria-level=2 class="section-header__title"><?php the_title(); ?></h2>
            <p class="section-header__intro"><?php the_field('news_intro'); ?></p>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("projets") ?>">Nos projets</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
        </div>
    </header>
    <div class="excerpt-container content-wrapper">
        <?php
        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,);

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php get_template_part('part', 'news');?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
