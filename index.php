<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site</title>
    <style>
    </style>
</head>
<body>
    <?php get_header(); ?>
<main>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
            <?php the_post(); ?>
            <section>
                <h2><?= the_title(); ?></h2>
                <div>
                    <?= the_content(); ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <section class="content__articles">
        <h2>Les articles de mon site</h2>

        <?php
        $posts = new WP_Query();
        $posts->query([
            'post_type' => 'trip',
            'showpost' => '5',
        ])
        ?>
        <?php if($posts->have_posts()):while($posts->have_posts()):
        $posts->the_post();
        ?>
        <?php
        $fields = get_fields(get_the_ID());
        var_dump($fields);
        ?>
        <article class="post">
            <h3 class="post__title"><?php the_title(); ?></h3>
            <p class="post__date">Publié le <time class="post__time" datetime="<?php the_time('c');  ?>"><?php the_time('l j F Y'); ?></time>.</p>

            <p>
                Endroits&nbsp;: <?php dw_the_places(', ','<strong class="post__place post__place--:place_type">', '</strong>'); ?>
            </p>

            <figure class="post__thumb">
                <?php the_post_thumbnail(array(600)); ?>
            </figure>
            <div class="post__excerpt">
                <p><?php dw_the_excerpt(600); ?></p>
                <a href="<?php the_permalink(); ?>" class="post__more">Lire plus</a>
            </div>
            <dl>
                <dt class="post__term">Durée du voyage</dt>
                <dd class="post__data"><?= $fields['length']?></dd>
                <dd><?= dw_chose_singularity($fields['participants'], 'Il n\'y avait qu\'un participant', 'Il y avait :number participants', 'il n\'y avait personne')?></dd>
            </dl>
        </article>
    </section>
<?php endwhile; else: ?>
    <p class="content__empty">Il n'y a pas d'articles à afficher.</p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
</body>
</html>
