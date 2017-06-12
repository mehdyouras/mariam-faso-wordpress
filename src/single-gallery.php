<?php
get_header();
?>

<article role="article" class="wrapper">
    <header class="section-header section-header_gallery">
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
            <?php if(get_field('gallery_location')) : ?>
            <p class="post-excerpt__info section-header__intro">
                <span class="post-excerpt__location"><?php the_field('gallery_location'); ?></span>
            </p>
            <?php endif; ?>
        </div>
    </header>
    <div class="post content-wrapper">
        <ul class="images-list">
            <?php $i = 0; $images = get_field('gallery'); if( $images ): ?>
                <?php foreach($images as $image) :?>
                    <li class="images-list__item">
                        <a href="<?= $image['url']; ?>" data-lightbox="gallery" data-title="<?= $image['caption']; ?>">
                            <?php mf_the_image($image, 'medium', 'images-list__image', false, false) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</article>
    <?php get_footer(); ?>
