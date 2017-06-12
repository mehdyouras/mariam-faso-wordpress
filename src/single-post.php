<?php
get_header();
?>

<article itemscope itemtype="http://schema.org/NewsArticle" role="article" class="wrapper">
    <header class="section-header section-header_post">
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
            <h2 itemprop="headline" aria-level=2 class="section-header__title"><?php the_title(); ?></h2>
            <?php if(get_field('post_date')) :?>
            <p class="post-excerpt__info section-header__intro">
                <span class="post-excerpt__date">
                    <time itemprop="datePublished" datetime="<?= mf_get_datetime(get_field('post_date')); ?>"><?php the_field('post_date'); ?></time>
                </span>
                <?php endif; ?>
            </p>
            <meta itemprop="author" content="Mariam Faso">
        </div>
    </header>
    <div itemprop="articleBody" class="post content-wrapper">
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
