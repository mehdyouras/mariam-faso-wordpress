<article class="post-excerpt <?php if(is_front_page()) :?>post-excerpt_home<?php endif; ?>">
    <div class="post-excerpt__content-wrapper">
        <header class="post-excerpt__header">
            <h3 class="post-excerpt__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-excerpt__info">
                        <span class="post-excerpt__date">
                            <time class="actions__time" datetime="<?= mf_get_datetime(get_field('post_date')); ?>"><?php the_field('post_date') ?></time>
                        </span>
            </p>
        </header>
        <?php mf_the_image(get_field('post_thumbnail'), "mf_thumbnail", "post-excerpt__thumbnail"); ?>
        <div class="post-excerpt__content">
            <p class="post__description"><?php the_field('post_excerpt'); ?></p>
        </div>
    </div>
    <a class="cta cta_dark cta_no-border cta_force-right" href="<?php the_permalink(); ?>"><?= __('Lire plus','mf');?></a>
</article>