<?php
/*
        Template Name: Participer
*/
get_header();
?>

<article class="wrapper">
    <header class="section-header section-header_participate">
        <div class="section-header__content-container">
            <div class="section-header__breadcrumb">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>

            <h2 aria-level=2 class="section-header__title"><?php the_title(); ?></h2>
            <p class="post-excerpt__info section-header__intro">
                <?php the_field("participate_intro"); ?>
            </p>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("nous contacter") ?>"><?= __('Nous contacter','mf');?></a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("événements") ?>"><?= __('Nos événements','mf');?></a>
        </div>
    </header>
    <section class="post content-wrapper">
        <h2 aria-level=2 class="u-hidden-visually" aria-hidden="true"><?= __('Foire aux questions','mf');?></h2>
        <?php if( have_rows('participate_faq') ): ?>
        <dl class="qa">
            <?php while ( have_rows('participate_faq') ) : the_row(); ?>
                <dt class="qa__question"><?php the_sub_field('participate_question'); ?></dt>
                <dd class="qa__answer">
                    <?php the_sub_field('participate_answer'); ?>
                    <?php if( have_rows('participate_cta') ): ?>
                        <div class="qa__ctas">
                        <?php while ( have_rows('participate_cta') ) : the_row(); ?>
                            <a class="cta cta_dark cta_no-border" href="<?php the_sub_field('participate_cta_link'); ?>"><?php the_sub_field('participate_cta_title'); ?></a>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </dd>
            <?php endwhile; ?>
        </dl>
        <?php endif; ?>
    </section>
</article>

<?php get_footer(); ?>
