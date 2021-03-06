<?php get_header();?>
<section class="wrapper">
    <h2 aria-level=2 aria-hidden="true"><?= __('Contenu principal','mf');?></h2>
    <div class="home-questions">
        <section class="home-questions__item home-questions__item_bcg-dark">
            <div class="home-questions__content-wrapper_left">
                <h3 aria-level=3 class="home-questions__title"><?= __('Qui sommes-nous ?','mf');?></h3>
                <p class="home-questions__content"><?php the_field('home_about_us') ?></p>
                <a class="cta" href="<?php mf_the_permalink_by_title("a propos") ?>"><?= __('En savoir plus','mf');?><span class="u-hidden-visually" aria-hidden="true"><?= __(' sur Mariam Faso','mf'); ?></span></a>
            </div>
        </section>
        <section class="home-questions__item home-questions__item_bcg-light">
            <div class="home-questions__content-wrapper_right">
                <h3 aria-level=3 class="questions__title questions__title_dark"><?= __('Nos objectifs','mf');?></h3>
                <p class="questions__content"><?php the_field('home_help_us') ?></p>
                <a class="cta cta_dark" href="<?php mf_the_permalink_by_title("faire un don") ?>"><?= __('Faire un don','mf');?></a>
            </div>
        </section>
    </div>
    <section class="col2-images">
        <h3 aria-level=3 class="u-hidden-visually" aria-hidden="true"><?= __('Nos galeries photos et nos actions','mf');?></h3>
        <div class="col2-images__item col2-images__item_actions">
            <a class="cta cta_centered-middled cta_over-image" href="<?php mf_the_permalink_by_title("actions"); ?>"><?= __('Nous aider à collecter du matériel','mf');?></a>
        </div>
        <div class="col2-images__item col2-images__item_gallery">
            <a class="cta cta_over-image cta_centered-middled" href="<?php mf_the_permalink_by_title("galeries") ?>"><?= __('Découvrir nos voyages en image','mf');?></a>
        </div>
    </section>
    <section class="home-news home-news_light">
        <h3 aria-level=3 class="home-news__title"><a href="<?php mf_the_permalink_by_title("actualite") ?>"><?= __('Nos prochains événements','mf');?></a></h3>
        <div class="home-news__article-container">
            <?php
            $args = array(
                'post_type' => 'event',
                'posts_per_page' => 3,
                'meta_key'			=> 'event_date',
                'orderby'			=> 'meta_value',
                'order'				=> 'DESC'
            );

            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <article itemscope itemtype="http://schema.org/Event" class="post-excerpt">
                    <header class="post-excerpt__header">
                        <h4 itemprop="name" aria-level=4 class="post-excerpt__title"><a class="post-excerpt__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="post-excerpt__info">
                        <span class="post-excerpt__date">
                            <time itemprop="startDate" datetime="<?= mf_get_datetime(get_field('event_date')); ?><?php if(get_field('event_time') !== ''): echo 'T'; the_field('event_time'); endif; ?>"><?php the_field('event_date'); ?><?php if(get_field('event_time')): ?><?= __(' à ','mf'); ?><?php the_field('event_time'); ?><?php endif; ?></time>
                        </span>
                        <span itemprop="location" itemscope itemtype="http://schema.org/Place" class="post-excerpt__location">
                            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <span itemprop="streetAddress"><?php the_field('event_location'); ?></span>
                            </span>
                        </span>
                        </p>
                    </header>
                    <div class="post-excerpt__content">
                        <?php mf_the_image(get_field('event_thumbnail'), "mf_thumbnail", "post-excerpt__thumbnail"); ?>
                        <p itemprop="description" class="post-excerpt__description"><?php the_field('event_excerpt'); ?></p>
                    </div>
                    <a class="cta cta_dark cta_no-border cta_force-right" href="<?php the_permalink(); ?>"><?= __('En savoir plus','mf');?><span class="u-hidden-visually" aria-hidden="true"><?= __(" sur l'événement ",'mf');?><?php the_title(); ?></span></a>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="home-news home-news_dark">
        <h3 aria-level=3 class="home-news__title"><a href="<?php mf_the_permalink_by_title("actualite") ?>"><?= __('Notre actualité','mf');?></a></h3>
        <div class="home-news__article-container">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,);

            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php get_template_part('part', 'news');?>
            <?php endwhile; endif; ?>
        </div>
    </section>
</section>
<?php get_footer(); ?>