<?php
/*
        Template Name: Actualité
*/
get_header();
?>
<section class="wrapper">
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
            <h2 class="section-header__title"><?php the_title(); ?></h2>
            <p class="section-header__intro">Les différentes actions que nous organisons tout au long de l'année nous permette de récolter du materiels, des vètements, des jouets <i>etc</i>. Afin de les redistribuer lors de nos prochains voyages.</p>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("projets") ?>">Nos projets</a>
            <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
        </div>
    </header>
    <section class="excerpt-container content-wrapper">
        <?php
        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,);

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php get_template_part('part', 'news');?>
        <?php endwhile; endif; ?>
    </section>


<?php get_footer(); ?>
