<?php get_header();?>
<section class="wrapper">
    <h2 aria-hidden="true"><?= __('Contenu principal','mf');?></h2>
    <div class="home-questions">
        <section class="home-questions__item home-questions__item_bcg-dark">
            <div class="home-questions__content-wrapper_left">
                <h3 class="home-questions__title"><?= __('Qui sommes nous ?','mf');?></h3>
                <p class="home-questions__content"><?php the_field('home_about_us') ?></p>
                <a class="cta" href="<?php mf_the_permalink_by_title("a propos") ?>"><?= __('En savoir plus','mf');?></a>
            </div>
        </section>
        <section class="home-questions__item home-questions__item_bcg-light">
            <div class="home-questions__content-wrapper_right">
                <h3 class="questions__title questions__title_dark"><?= __('Nos objectifs','mf');?></h3>
                <p class="questions__content"><?php the_field('home_help_us') ?></p>
                <a class="cta cta_dark" href="<?php mf_the_permalink_by_title("faire un don") ?>"><?= __('Faire un don','mf');?></a>
            </div>
        </section>
    </div>
    <section class="col2-images">
        <h3 class="u-hidden-visually">Nos galeries photos et nos actions</h3>
        <div class="col2-images__item col2-images__item_actions">
            <a class="cta cta_centered-middled cta_over-image" href="<?php mf_the_permalink_by_title("actions"); ?>"><?= __('Nous aider à collecter du matériel','mf');?></a>
        </div>
        <div class="col2-images__item col2-images__item_gallery">
            <a class="cta cta_over-image cta_centered-middled" href="<?php mf_the_permalink_by_title("galeries") ?>"><?= __('Découvrir nos voyages en image','mf');?></a>
        </div>
    </section>
    <section class="home-news">
        <h3 class="home-news__title"><a href="<?php mf_the_permalink_by_title("actualite") ?>"><?= __('Notre actualité','mf');?></a></h3>
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
<?php get_footer(); ?>