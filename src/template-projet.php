<?php
/*
        Template Name: Page des projets
*/
?>
<?php get_header(); ?>
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
            <h2 class="section-header__title">Nos projets</h2>
            <p class="section-header__intro"><?php the_field('projects_intro'); ?></p>
            <a class="cta cta_dark cta_no-border">Faire un don</a>
            <a class="cta cta_dark cta_no-border">Participer</a>
        </div>
    </header>
    <div class="projects content-wrapper">
    <?php
        $args = array( 'post_type' => 'project',
            'posts_per_page' => -1,
            'meta_key'			=> 'project_startdate',
            'orderby'			=> 'meta_value',
            'order'				=> 'DESC'
            );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <article class="project-excerpt">
                    <div class="project-excerpt__content-wrapper">
                        <header class="project-excerpt__header">
                            <h3 class="project-excerpt__title"><a class="project-excerpt__link" href="<?php the_permalink(); ?>"><?php the_field('project_name'); ?></a></h3>
                            <?php if(get_field('project_startdate')) :?>
                                <p class="project-excerpt__info">
                                <span class="project-excerpt__date">
                                    <time <?= mf_get_datetime(get_field('project_startdate')); ?>><?php the_field('project_startdate'); ?></time>
                                    <?php if(get_field('project_enddate')) :?>au <time datetime="<?= mf_get_datetime(get_field('project_enddate')); ?>"><?php the_field('project_enddate'); ?></time><?php endif; ?>
                                </span>
                                    <span class="project-excerpt__location"><?php the_field('project_location'); ?></span>
                                </p>
                            <?php endif; ?>

                        </header>
                        <div class="project-excerpt__content"><img class="project-excerpt__thumbnail" src="<?php the_field('project_thumbnail'); ?>" alt="Photo du projet">
                            <div class="project-excerpt__descriptions-container">
                                <p class="project-excerpt__description"><?php the_field('project_excerpt'); ?></p>
                            </div>
                        </div>
                    </div>
                    <a class="read-more read-more_force-right" href="<?php the_permalink(); ?>">En savoir plus</a>
                </article>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>