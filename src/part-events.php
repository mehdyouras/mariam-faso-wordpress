<?php
$events = get_page_by_title('evenements');
$events = $events->ID;
?>


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
        <h2 aria-level=2 class="section-header__title"><?= __('Les évènements','mf');?></h2>
        <p class="section-header__intro"><?php the_field('events_intro', $events); ?></p>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("faire un don") ?>"><?= __('Faire un don','mf');?></a>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>"><?= __('Participer','mf');?></a>
    </div>
</header>
<div class="excerpt-container content-wrapper">
    <?php
    $args = array( 'post_type' => 'event',
        'posts_per_page' => -1,
        'meta_key'			=> 'event_date',
        'orderby'			=> 'meta_value',
        'order'				=> 'DESC'
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <article itemscope itemtype="http://schema.org/Event" class="post-excerpt">
            <div>
                <header class="post-excerpt__header">
                    <h3 itemprop="name" aria-level=3 class="post-excerpt__title"><a class="post-excerpt__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="post-excerpt__info">
                    <span class="post-excerpt__date">
                        <time itemprop="startDate" datetime="<?= mf_get_datetime(get_field('event_date')); ?><?php if(get_field('event_time') !== ''): echo 'T'; the_field('event_time'); endif; ?>"><?php the_field('event_date'); ?><?php if(get_field('event_time')): ?><?= __(' à ','mf'); ?><?php the_field('event_time'); ?><?php endif; ?></time>
                    </span>
                        <span itemprop="location" itemscope itemtype="http://schema.org/Place" class="post-excerpt__location">
                        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress"><?php the_field('event_location'); ?></span>
                        </span>
                    </span>
                        <?php if(get_field('event_fb')) : ?>
                        <a href="<?php the_field('event_fb'); ?>"><span class="post-excerpt__fb"><?= __("Vers l'événement facebook",'mf');?></span></a>
                        <?php endif; ?>
                    </p>
                </header>
                <div class="post-excerpt__content">
                    <?php mf_the_image(get_field('event_thumbnail'), "mf_thumbnail", "post-excerpt__thumbnail"); ?>
                    <p itemprop="description" class="post-excerpt__description"><?php the_field('event_excerpt'); ?></p>
                </div>
            </div>
            <a class="cta cta_dark cta_no-border cta_force-right" href="<?php the_permalink(); ?>"><?= __('En savoir plus','mf');?><span class="u-hidden-visually" aria-hidden="true"><?= __(" sur l'événement ",'mf');?><?php the_title(); ?></span></a>
        </article>
    <?php endwhile; ?>
</div>