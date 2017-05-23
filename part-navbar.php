<nav class="site-nav">
    <h2 aria-hidden="true">Navigation principale</h2>
    <a class="site-nav__close-btn" href="#">&times;</a>
    <ul class="o-list-bare site-nav__list">
        <?php foreach(mf_get_nav_items('header') as $item): ?>
        <li class="site-nav__item <?php if($item->children) : ?>site-nav__item_dropdown<?php endif; ?> active"><a class="site-nav__link <?php if($item->children) : ?>site-nav__item_dropdown<?php endif; ?>" href="<?= $item->url ?>"><?= $item->label ?></a>
            <?php if($item->children): ?>
                <ul class="o-list-bare site-nav__dropdown">
                    <?php foreach($item->children as $sub): ?>
                        <li class="site-nav__dropdown-item"><a class="site-nav__dropdown-link" href="<?= $sub->url ?>"><?= $sub->label ?></a></li>
                    <?php endforeach; ?>
                </ul>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
        <li class="site-nav__item">
            <a class="cta cta_dark cta_no-border" href="#">Faire un don</a>
        </li>
        <li class="site-nav__item">
            <a class="site-nav__item cta cta_dark cta_no-border" href="#">Participer</a>
        </li>
    </ul>
</nav>