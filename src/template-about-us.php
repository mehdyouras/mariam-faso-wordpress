<?php
/*
        Template Name: Page à propos
*/
get_header();
?>

<section class="wrapper">
    <header class="section-header section-header_events">
        <div class="section-header__content-container">
            <div class="section-header__breadcrumb">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>
            <h2 class="section-header__title">À propos de Mariam-Faso</h2>
            <p class="section-header__intro">Les différents evenements que nous organisons chaque année nous permette d'atteindre nos objectis financier ainsi que de faire connaitre nos missions et notre ASBL en général.</p>
        </div>
    </header>

    <?php get_footer(); ?>
