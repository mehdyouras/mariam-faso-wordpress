<div class="home-motivational">
    <div class="home-motivational__title">
        <?php foreach (mf_get_the_motivational() as $line): ?>
            <span class="home-motivational__item"><?= $line ?></span>
        <?php endforeach; ?>
    </div>
    <a class="cta cta_over-image" href="<?php mf_the_permalink_by_title("projets") ?>">Découvrir nos projets</a>
</div>