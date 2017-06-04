<?php
/*
        Template Name: Participer
*/
get_header();
?>

<section class="wrapper">
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

            <h2 class="section-header__title"><?php the_title(); ?></h2>
            <p class="post-excerpt__info section-header__intro">
                <?php the_field("participate_intro"); ?>
            </p>

        </div>
    </header>
    <section class="post content-wrapper">
        <h2 class="u-hidden-visually">Foire aux questions</h2>
        <?php if( have_rows('participate_faq') ): ?>
        <dl class="qa">
            <?php while ( have_rows('participate_faq') ) : the_row(); ?>
            <div class="qa__container">
                <dt class="qa__question"><?php the_sub_field('participate_question'); ?></dt>
                <dd class="qa__answer">
                    <p>
                        <?php the_sub_field('participate_answer'); ?>
                    </p>
                    <?php if( have_rows('participate_cta') ): while ( have_rows('participate_cta') ) : the_row(); ?>
                    <a class="cta cta_dark cta_no-border" href="<?php the_sub_field('participate_cta_link'); ?>"><?php the_sub_field('participate_cta_title'); ?></a>
                    <?php endwhile; endif; ?>
                </dd>
            </div>
            <?php endwhile; ?>
        </dl>
        <?php endif; ?>
    </section>


<?php get_footer(); ?>
