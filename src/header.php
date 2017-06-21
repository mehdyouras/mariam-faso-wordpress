<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php mf_asset('css/main.css'); ?>">
    <link rel="icon" href="<?php mf_asset('img/favicon.png'); ?>">
    <title><?php mf_the_title(); ?> - Mariam-Faso</title>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<header class="header<?php if(!is_front_page()) :?> header_small<?php endif; ?>">
    <div class="site-header">
        <h1 aria-level=1 class="site-title">
            <a class="site-title__link" href="<?= get_site_url(); ?>">
                <img class="site-title__logo" src="<?php mf_asset('img/logo.svg'); ?>" alt="Mariam Faso">
            </a>
        </h1>
        <a class="hamburger-menu" href="#"><span class="u-hidden-visually" aria-hidden="true">Menu hamburger</span></a>
        <?php get_template_part('part', 'navbar');?>
    </div>
    <?php if(is_front_page()): ?>
        <?php get_template_part('part', 'motivational');?>
    <?php endif; ?>
</header>