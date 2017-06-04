<section class="home-motivational">
    <h2 class="home-motivational__title">
        <?php foreach (mf_get_the_motivational() as $line): ?>
            <span class="home-motivational__item"><?= $line ?></span>
        <?php endforeach; ?>
    </h2>
    <a class="cta cta_over-image" href="<?php mf_the_permalink_by_title("projets") ?>">Découvrir nos projets</a>
</section>