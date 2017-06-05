<?php
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
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <h2 class="section-header__title"><?php the_title(); ?></h2>
            <?php if(get_field('post_date')) :?>
            <p class="post-excerpt__info section-header__intro">
                <span class="post-excerpt__date">
                    <time <?= mf_get_datetime(get_field('post_date')); ?>><?php the_field('post_date'); ?></time>
                </span>
                <?php endif; ?>
            </p>

        </div>
    </header>
    <section class="post content-wrapper">
        <?php
        if( have_rows('flexible_post') ): ?>
            <?php while ( have_rows('flexible_post') ) : the_row(); ?>
                <?php get_template_part('part', 'flexible-content');?>
            <?php endwhile; ?>

        <?php endif; ?>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>
