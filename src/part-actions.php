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
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("projets") ?>">Nos projets</a>
        <a class="cta cta_dark cta_no-border" href="<?php mf_the_permalink_by_title("participer") ?>">Participer</a>
    </div>
</header>
<section class="excerpt-container content-wrapper">
    <article class="post-excerpt">
        <header class="post-excerpt__header">
            <h3 class="post-excerpt__title">Collecte de jouets</h3>
            <p class="post-excerpt__info">
                    <span class="post-excerpt__date">
                        Du <time class="actions__time">22/06</time> au <time class="actions__time">22/09</time>.
                    </span>
                <span class="post-excerpt__location">Rue Neuve 5, Huy.</span>
            </p>
        </header>
        <div class="post-excerpt__content">
            <p class="actions__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis unde, distinctio voluptates beatae molestiae, maxime esse corporis perspiciatis nihil deleniti accusamus temporibus voluptas placeat hic similique ad iusto nostrum!</p>
        </div>
    </article>
    <article class="post-excerpt">
        <header class="post-excerpt__header">
            <h3 class="post-excerpt__title">Collecte de jouets</h3>
            <p class="post-excerpt__date">Du
                <time class="actions__time">22/06</time> au
                <time class="actions__time">22/09</time>.
            </p>
        </header>
        <div class="post-excerpt__content">
            <p class="actions__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis unde, distinctio voluptates beatae molestiae, maxime esse corporis perspiciatis nihil deleniti accusamus temporibus voluptas placeat hic similique ad iusto nostrum!</p>
        </div>
    </article>
</section>