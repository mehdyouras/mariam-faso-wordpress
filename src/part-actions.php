<?php
    $actions = get_page_by_title('actions');
    $actions = $actions->ID;
?>

<header class="section-header section-header_actions">
    <div class="section-header__content-container">
        <div class="section-header__breadcrumb">
            <?php
            if(function_exists('bcn_display'))
            {
                bcn_display();
            }
            ?>
        </div>
        <h2 aria-level=2 class="section-header__title"><?= __('Les actions en cours','mf');?></h2>
        <p class="section-header__intro"><?php the_field('actions_intro', $actions); ?></p>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("projets") ?>"><?= __('Nos projets','mf');?></a>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>"><?= __('Participer','mf');?></a>
    </div>
</header>
<div class="excerpt-container content-wrapper">
    <?php
    $args = array( 'post_type' => 'action',
        'posts_per_page' => -1,
        'meta_key'			=> 'action_startdate',
        'orderby'			=> 'meta_value',
        'order'				=> 'DESC'
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <article itemscope itemtype="http://schema.org/Event" class="post-excerpt">
        <div class="post-excerpt__content-wrapper">
            <header class="post-excerpt__header">
                <h3 itemprop="name" aria-level=3 class="post-excerpt__title"><?php the_title(); ?></h3>
                <p class="post-excerpt__info">
                    <span class="post-excerpt__date">
                        <?= __('Du','mf');?> <time itemprop="startDate" datetime="<?php mf_the_datetime(get_field('action_startdate')); ?>" class="actions__time"><?php the_field('action_startdate') ?></time> <?= __('au','mf');?> <time itemprop="endDate" datetime="<?php mf_the_datetime(get_field('action_enddate')); ?>" class="actions__time"><?php the_field('action_enddate') ?></time>.
                    </span>
                    <span itemprop="location" itemscope itemtype="http://schema.org/Place" class="post-excerpt__location">
                        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress"><?php the_field('action_location'); ?></span>
                    </span>
                </span>
                    <?php if(get_field('action_fb')) : ?>
                        <a href="<?php the_field('action_fb'); ?>"><span class="post-excerpt__fb"><?= __("Vers l'événement facebook",'mf');?></span></a>
                    <?php endif; ?>
                </p>
            </header>
            <div itemprop="description" class="post-excerpt__content">
                <?php the_field('action_description') ?>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
</div>