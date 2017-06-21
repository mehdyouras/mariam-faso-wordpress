<?php
get_header();
?>

<article itemscope itemtype="http://schema.org/Event" class="wrapper">
    <header class="section-header section-header_events">
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
            <h2 itemprop="name" aria-level=2 class="section-header__title"><?php the_title(); ?></h2>
            <?php if(get_field('event_date')) :?>
            <p class="post-excerpt__info section-header__intro">
                <span class="post-excerpt__date">
                    <time itemprop="startDate" datetime="<?= mf_get_datetime(get_field('event_date')); ?><?php if(get_field('event_time') !== ''): echo 'T'; the_field('event_time'); endif; ?>"><?php the_field('event_date'); ?><?php if(get_field('event_time')): ?><?= __(' à ','mf'); ?><?php the_field('event_time'); ?><?php endif; ?></time>
                </span>
                <?php endif; ?>
                <span itemprop="location" itemscope itemtype="http://schema.org/Place" class="post-excerpt__location">
                        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress"><?php the_field('event_location'); ?></span>
                    </span>
                </span>
            </p>

        </div>
    </header>
    <div itemprop="description" class="post content-wrapper">
        <?php
        if( have_rows('flexible') ): ?>
            <?php while ( have_rows('flexible') ) : the_row(); ?>
                <?php get_template_part('part', 'flexible-content');?>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</article>
    <?php get_footer(); ?>
