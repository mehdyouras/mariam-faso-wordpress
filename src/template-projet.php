<?php
/*
        Template Name: Page des projets
*/
?>
<?php get_header(); ?>
<section class="wrapper">
    <header class="section-header section-header_projects">
        <div class="section-header__content-container">
            <h2 class="section-header__title">Nos projets</h2>
            <p class="section-header__intro"><?php the_field('projects_intro'); ?></p>
        </div>
    </header>
    <div class="projects content-wrapper">
        <article class="project-excerpt">
            <header class="project-excerpt__header">
                <h3 class="project-excerpt__title"><a class="project-excerpt__link" href="#">Le nom d'un projet</a></h3><a class="cta cta_dark">Participer</a>
            </header>
            <div class="project-excerpt__content"><img class="project-excerpt__thumbnail" src="img/article1.jpg" alt="Photo du projet">
                <div class="project-excerpt__descriptions-container">
                    <p class="project-excerpt__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium blanditiis vel iste laudantium, quidem minus ipsa, quas nostrum nulla aliquid nemo nihil accusantium ratione, quia sit tempora totam architecto eos.</p>
                    <p class="project-excerpt__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt neque cupiditate voluptate nemo obcaecati, necessitatibus cumque. Distinctio dicta nulla tempora perspiciatis recusandae at sequi dolore officiis. Totam excepturi provident facere!</p><a class="read-more" href="#">Lire plus</a>
                </div>
            </div>
        </article>
    </div>
<?php get_footer(); ?>