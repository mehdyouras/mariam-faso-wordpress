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
        <h2 class="section-header__title">Les évènements</h2>
        <p class="section-header__intro">Les différents evenements que nous organisons chaque année nous permette d'atteindre nos objectis financier ainsi que de faire connaitre nos missions et notre ASBL en général.</p>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("faire un don") ?>">Faire un don</a>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
    </div>
</header>
<section class="excerpt-container content-wrapper">
    <?php
    $args = array( 'post_type' => 'event',
        'posts_per_page' => 3,
        'meta_key'			=> 'event_date',
        'orderby'			=> 'meta_value',
        'order'				=> 'DESC'
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <article class="post-excerpt">
            <header class="post-excerpt__header">
                <h3 class="post-excerpt__title"><a class="post-excerpt__link" href="<?php the_permalink(); ?>"><?php the_field('event_title'); ?></a></h3>
                <p class="post-excerpt__info">
                    <span class="post-excerpt__date">
                        <time><?php the_field('event_date'); ?></time>
                    </span>
                    <span class="post-excerpt__location"><?php the_field('event_location'); ?></span>
                </p>
            </header>
            <div class="post-excerpt__content">
                <img class="post-excerpt__thumbnail" src="<?php the_field('event_thumbnail'); ?>" alt="Illustration de l'event'">
                <p class="post-excerpt__description"><?php the_field('event_excerpt'); ?></p>
            </div>
            <a class="read-more read-more_force-right" href="<?php the_permalink(); ?>">En savoir plus</a>
        </article>
    <?php endwhile; ?>
</section>