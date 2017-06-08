<?php
get_header();
?>

<section class="wrapper">
    <header class="section-header section-header_projects">
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
            <h2 aria-level=2 class="section-header__title"><?php the_title(); ?></h2>
            <?php if(get_field('project_startdate')) :?>
            <p class="post-excerpt__info section-header__intro">
                <span class="post-excerpt__date">
                    <time <?= mf_get_datetime(get_field('project_startdate')); ?>><?php the_field('project_startdate'); ?></time>
                    <?php if(get_field('project_enddate')) :?>au <time datetime="<?= mf_get_datetime(get_field('project_enddate')); ?>"><?php the_field('project_enddate'); ?></time><?php endif; ?>
                </span>
            <?php endif; ?>
                <span class="post-excerpt__location"><?php the_field('project_location'); ?></span>
            </p>
            <?php if(get_field('project_gallery')) : ?>
                <a class="cta cta_dark cta_no-border" href="<?php the_field('project_gallery'); ?>"><?= __("Découvrir nos photos du projet", "mf")?></a>
            <?php endif; ?>
        </div>
    </header>
    <section class="post content-wrapper">
        <?php
        if( have_rows('flexible') ): ?>
            <?php while ( have_rows('flexible') ) : the_row(); ?>
                <?php get_template_part('part', 'flexible-content');?>
            <?php endwhile; ?>

        <?php endif; ?>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
    <?php get_footer(); ?>
