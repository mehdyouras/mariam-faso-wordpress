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
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("faire un don") ?>">Faire un don</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
        </div>
    </header>
    <div class="excerpt-container content-wrapper">
    <?php
        $args = array( 'post_type' => 'project',
            'posts_per_page' => -1,
            'meta_key'			=> 'project_startdate',
            'orderby'			=> 'meta_value',
            'order'				=> 'DESC'
            );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <article class="post-excerpt">
                    <div class="post-excerpt__content-wrapper">
                        <header class="post-excerpt__header">
                            <h3 class="post-excerpt__title"><a class="post-excerpt__link" href="<?php the_permalink(); ?>"><?php the_field('project_name'); ?></a></h3>
                            <?php if(get_field('project_startdate')) :?>
                                <p class="post-excerpt__info">
                                <span class="post-excerpt__date">
                                    <time datetime="<?= mf_get_datetime(get_field('project_startdate')); ?>"><?php the_field('project_startdate'); ?></time>
                                    <?php if(get_field('project_enddate')) :?>au <time datetime="<?= mf_get_datetime(get_field('project_enddate')); ?>"><?php the_field('project_enddate'); ?></time><?php endif; ?>
                                </span>
                                    <?php endif; ?>
                                    <span class="post-excerpt__location"><?php the_field('project_location'); ?></span>
                                </p>

                        </header>
                        <div class="post-excerpt__content">
                            <?php mf_the_image(get_field('project_thumbnail'), "mf_thumbnail", "post-excerpt__thumbnail"); ?>
                            <div class="post-excerpt__descriptions-container">
                                <p class="post-excerpt__description"><?php the_field('project_excerpt'); ?></p>
                            </div>
                        </div>
                    </div>
                    <a class="cta cta_dark cta_no-border cta_force-right" href="<?php the_permalink(); ?>">En savoir plus</a>
                </article>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>