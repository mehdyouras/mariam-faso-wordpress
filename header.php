<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php mf_asset('css/main.css'); ?>">
    <link rel="icon" href="img/favicon.ico">
    <title>Accueil - Mariam-Faso</title>
</head>
<body>
<header class="header <?php if(!is_home()) :?><?php endif; ?>">
    <div class="site-header">
        <h1 class="site-title"><a class="site-title" href="index.html"><img class="site-title__logo" src="<?php mf_asset('img/logo.svg'); ?>" alt"Logo de Mariam-Faso"><span class="site-title__content">Marriam-Faso</span></a></h1>
        <a class="hamburger-menu" href="#"></a>
        <nav class="site-nav">
            <h2 aria-hidden="true">Navigation principale</h2>
            <a class="site-nav__close-btn" href="#">&times;</a>
            <ul class="o-list-bare site-nav__list">
                <li class="site-nav__item active"><a class="site-nav__link" href="#">Accueil</a></li>
                <li class="site-nav__item"><a class="site-nav__link" href="projects.html">Projets</a></li>
                <li class="site-nav__item site-nav__item_dropdown">
                    <a class="site-nav__link site-nav__link_dropdown" href="agenda.html" tabindex="-1">Agenda</a>
                    <ul class="o-list-bare site-nav__dropdown">
                        <li class="site-nav__dropdown-item"><a class="site-nav__dropdown-link" href="actions.html">Actions en cours</a></li>
                        <li class="site-nav__dropdown-item"><a class="site-nav__dropdown-link" href="events.html">Evenements</a></li>
                    </ul>
                </li>
                <li class="site-nav__item"><a class="site-nav__link" href="#">À propos</a></li>
                <a class="site-nav__item cta cta_dark cta_no-border" href="#">Faire un don</a>
                <a class="site-nav__item cta cta_dark cta_no-border" href="#">Participer</a>
            </ul>
        </nav>
    </div>
    <section class="home-motivational">
        <h2 class="home-motivational__title"><span class="home-motivational__item">Dévelopmment,</span> <span class="home-motivational__item">Echange,</span> <span class="home-motivational__item">Solidarité,</span> <span class="home-motivational__item">Education.</span></h2>
        <a class="cta cta_over-image" href="#">Découvrir nos projets</a>
    </section>
</header>