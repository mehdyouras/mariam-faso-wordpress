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
            <h2 class="section-header__title"><?php the_title(); ?></h2>
            <?php if(get_field('project_startdate')) :?>
            <p class="project-excerpt__info section-header__intro">
                <span class="project-excerpt__date">
                    <time <?= mf_get_datetime(get_field('project_startdate')); ?>><?php the_field('project_startdate'); ?></time>
                    <?php if(get_field('project_enddate')) :?>au <time datetime="<?= mf_get_datetime(get_field('project_enddate')); ?>"><?php the_field('project_enddate'); ?></time><?php endif; ?>
                </span>
            <?php endif; ?>
                <span class="project-excerpt__location"><?php the_field('project_location'); ?></span>
            </p>

        </div>
    </header>
    <section class="project content-wrapper">
        <?php
        if( have_rows('projet') ): ?>
            <?php while ( have_rows('projet') ) : the_row(); ?>

                <?php if( get_row_layout() == 'project_text' ): ?>
                    <div class="wysiwyg-block wysiwyg-block">
                        <div class="wysiwyg">
                            <?php the_sub_field('project_text_wysiwyg'); ?>
                        </div>
                    </div>
                <?php elseif( get_row_layout() == 'project_image_full-width' ):?>
                    <div class="image_full-width">
                        <figure>
                            <img src="<?php the_sub_field('project_image_image'); ?>" alt="">
                            <figcaption>
                                <?php the_sub_field('project_image_caption'); ?>
                            </figcaption>
                        </figure>
                    </div>
                <?php elseif( get_row_layout() == 'project_text-image' ):?>
                    <div class="text-image text-image<?php the_sub_field('project_text-image_leftright') ?>">
                        <div class="wysiwyg">
                            <?php the_sub_field('project_text-image_text'); ?>
                        </div>
                        <figure class="text-image__image">
                            <img src="<?php the_sub_field('project_text-image_image'); ?>" alt="">
                            <figcaption><?php the_sub_field('project_text-image_caption'); ?></figcaption>
                        </figure>
                    </div>
                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>
