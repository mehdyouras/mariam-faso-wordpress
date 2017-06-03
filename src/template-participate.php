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
                <?php the_field("donation_intro"); ?>
            </p>

        </div>
    </header>
    <section class="post content-wrapper">

    </section>


<?php get_footer(); ?>
