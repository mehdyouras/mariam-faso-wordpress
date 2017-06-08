<?php get_header();?>
    <section class="wrapper">
    <h2 aria-level=2 aria-hidden="true">Contenu principal</h2>
    <div class="home-questions">
        <section class="home-questions__item home-questions__item_bcg-dark">
            <div class="home-questions__content-wrapper_left">
                <h3 aria-level=3 class="home-questions__title">Qui sommes nous ?</h3>
                <p class="home-questions__content"><?php the_field('home_about_us') ?></p>
                <a class="cta" href="#">En savoir plus</a>
            </div>
        </section>
        <section class="home-questions__item home-questions__item_bcg-light">
            <div class="home-questions__content-wrapper_right">
                <h3 aria-level=3 class="questions__title questions__title_dark">Nous aider ?</h3>
                <p class="questions__content"><?php the_field('home_help_us') ?></p>
                <a class="cta cta_dark" href="#">Faire un don</a>
            </div>
        </section>
    </div>
    <section class="home-events">
        <h3 aria-level=3 aria-hidden="true">Nos évènements</h3>
        <div class="home-full-image-block home-events__featured"><a class="cta cta_centered-middled cta_over-image" href="actions.html">Action en cours à la une</a></div>
        <ol class="home-events__nexts o-list-bare">
            <li class="home-events__nexts-container">
                <a class="home-events__nexts-link" href="#">
                    <time>22/06</time>
                    <p class="home-events__nexts-title">Titre de l'event</p>
                </a>
                <p class="home-events__nexts-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aliquid, amet asperiores atque.
                    <a class="read-more" href="#">En savoir plus</a>
                </p>
            </li>
            <li class="home-events__nexts-container">
                <a class="home-events__nexts-link" href="#">
                    <time>22/06</time>
                    <p class="home-events__nexts-title">Titre de l'event</p>
                </a>
                <p class="home-events__nexts-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aliquid, amet asperiores atque.
                    <a class="read-more" href="#">En savoir plus</a>
                </p>
            </li>

            <li class="home-events__cta-container"><a class="cta cta_dark" href="agenda.html">Découvrir tous nos évènements</a></li>
        </ol>
    </section>
    <section class="home-full-image-block home-gallery">
        <h3 aria-level=3 aria-hidden="true">Galerie</h3>
        <a class="cta cta_over-image cta_centered-middled" href="#">Découvrir notre galerie</a>
    </section>
    <section class="home-news">
        <h3 aria-level=3 class="home-news__title">Notre actualité</h3>
        <div class="home-news__article-container">
            <article role="article" class="home-news__article">
                <h4 aria-level=4 class="article__title"><time class="article__time">12/09</time>Titre de la news</h4>
                <img class="article__img" src="img/article1.jpg" alt="#">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, reprehenderit praesentium labore aperiam ab ut necessitatibus, quas, culpa eius blanditiis odit. Quae ipsum necessitatibus, iure modi recusandae omnis laudantium. Non.</p>
                <a class="read-more">Lire plus</a>
            </article>
            <article role="article" class="home-news__article">
                <h4 aria-level=4 class="article__title"><time class="article__time">12/09</time>Titre de la news</h4>
                <img class="article__img" src="img/article1.jpg" alt="#">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, reprehenderit praesentium labore aperiam ab ut necessitatibus, quas, culpa eius blanditiis odit. Quae ipsum necessitatibus, iure modi recusandae omnis laudantium. Non.</p>
                <a class="read-more">Lire plus</a>
            </article>
            <article role="article" class="home-news__article">
                <h4 aria-level=4 class="article__title"><time class="article__time">12/09</time>Titre de la news</h4>
                <img class="article__img" src="img/article1.jpg" alt="#">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, reprehenderit praesentium labore aperiam ab ut necessitatibus, quas, culpa eius blanditiis odit. Quae ipsum necessitatibus, iure modi recusandae omnis laudantium. Non.</p>
                <a class="read-more">Lire plus</a>
            </article>
        </div>
    </section>
<?php get_footer(); ?>