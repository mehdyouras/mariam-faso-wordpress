<?php
get_header();
?>

<section class="wrapper">
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
            <h2 class="section-header__title"><?php the_title(); ?></h2>
            <p class="post-excerpt__info section-header__intro">
                <span class="post-excerpt__location"><?php the_field('gallery_location'); ?></span>
            </p>
        </div>
    </header>
    <section class="post content-wrapper">
        <ul class="images-list">
            <?php $i = 0; $images = get_field('gallery'); if( $images ): ?>
                <?php foreach($images as $image) :?>
                    <li class="images-list__item">
                        <a href="<?= $image['url']; ?>" data-lightbox="gallery" data-title="<?= $image['caption']; ?>">
                            <figure>
                                <?php mf_the_image($image, 'medium', 'images-list__image', true) ?>
                            </figure>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>
