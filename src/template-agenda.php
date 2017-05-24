<?php
/*
        Template Name: L'agenda
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
            <h2 class="section-header__title">Les actions en cours</h2>
            <p class="section-header__intro">Les différentes actions que nous organisons tout au long de l'année nous permette de récolter du materiels, des vètements, des jouets <i>etc</i>. Afin de les redistribuer lors de nos prochains voyages.</p>
        </div>
    </header>
    <section class="actions content-wrapper">
        <article class="actions__item">
            <header class="actions__header">
                <h3 class="actions__title">Collecte de jouets</h3>
                <p class="actions__timespan">Du
                    <time class="actions__time">22/06</time> au
                    <time class="actions__time">22/09</time>.</p>
            </header>
            <div class="actions__descriptions-container">
                <p class="actions__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis unde, distinctio voluptates beatae molestiae, maxime esse corporis perspiciatis nihil deleniti accusamus temporibus voluptas placeat hic similique ad iusto nostrum!</p>
            </div>
        </article>
        <article class="actions__item">
            <header class="actions__header">
                <h3 class="actions__title">Collecte de vêtements</h3>
                <p class="actions__timespan">Du
                    <time class="actions__time">22/06</time> au
                    <time class="actions__time">22/09</time>.</p>
            </header>
            <div class="actions__descriptions-container">
                <p class="actions__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis unde, distinctio voluptates beatae molestiae, maxime esse corporis perspiciatis nihil deleniti accusamus temporibus voluptas placeat hic similique ad iusto nostrum!</p>
            </div>
        </article>
    </section>
</section>
<section class="wrapper">
    <header class="section-header section-header_events">
        <div class="section-header__content-container">
            <h2 class="section-header__title">Les évènements</h2>
            <p class="section-header__intro">Les différents evenements que nous organisons chaque année nous permette d'atteindre nos objectis financier ainsi que de faire connaitre nos missions et notre ASBL en général.</p>
        </div>
    </header>
    <section class="events content-wrapper">
        <article class="events__item">
            <header class="events__header">
                <h3 class="events__title">Souper annuel</h3>
                <time class="events_date">Samedi 8 juillet à 18h</time>
            </header><img class="events_thumbnail" src="img/article1.jpg" alt="Illustration de l'event'">
            <p class="events_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia est, asperiores autem cumque perspiciatis voluptatem dolores, laboriosam nobis dolorem blanditiis provident architecto reprehenderit dolorum? Magnam, unde, corporis. Rerum, illum qui?</p><a class="read-more" href="#">En savoir plus</a>
        </article>
        <article class="events__item">
            <header class="events__header">
                <h3 class="events__title">Souper annuel</h3>
                <time class="events_date">Samedi 8 juillet à 18h</time>
            </header><img class="events_thumbnail" src="img/article1.jpg" alt="Illustration de l'event'">
            <p class="events_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia est, asperiores autem cumque perspiciatis voluptatem dolores, laboriosam nobis dolorem blanditiis provident architecto reprehenderit dolorum? Magnam, unde, corporis. Rerum, illum qui?</p><a class="read-more" href="#">En savoir plus</a>
        </article>
        <article class="events__item">
            <header class="events__header">
                <h3 class="events__title">Souper annuel</h3>
                <time class="events_date">Samedi 8 juillet à 18h</time>
            </header><img class="events_thumbnail" src="img/article1.jpg" alt="Illustration de l'event'">
            <p class="events_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia est, asperiores autem cumque perspiciatis voluptatem dolores, laboriosam nobis dolorem blanditiis provident architecto reprehenderit dolorum? Magnam, unde, corporis. Rerum, illum qui?</p><a class="read-more" href="#">En savoir plus</a>
        </article>
    </section>
<?php get_footer(); ?>