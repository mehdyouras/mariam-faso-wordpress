<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<footer class="footer">
    <h2 aria-hidden="true">Pied de page</h2>
    <div class="footer__container">
        <section class="footer__item footer-partners">
            <h3>Nos partenaires</h3>
            <ul class="o-list-inline">
                <li class="footer-partners__item"><a href="https://www.kbs-frb.be/"><img src="<?php mf_asset('img/kbs_logo.svg'); ?>" alt="Logo de la Fondation Roi Baudouin"></a></li>
                <li class="footer-partners__item"><a href="http://www.federation-wallonie-bruxelles.be/"><img src="<?php mf_asset('img/fwb_logo.svg'); ?>" alt="Logo de la Fédération Wallonie-Bruxelles"></a></li>
            </ul>
        </section>
        <section class="footer__item footer-donation">
            <h3><a class="footer-donation__donation-link cta cta_no-border cta_title" href="#">Faire un don</a></h3>
            <dl class="footer-donation__list">
                <dt class="footer-donation__dt">Numéro de compte&nbsp;:</dt>
                <dd class="footer-donation__dd"><?php the_field('iban_frb', 'option');?></dd>
                <dt class="footer-donation__dt">Communication structurée&nbsp;:</dt>
                <dd class="footer-donation__dd"><?php the_field('com_frb', 'option');?></dd>
            </dl>
        </section>
        <section class="footer__item footer-project">
            <h3><a class="footer-project__contact-link cta cta_no-border cta_title" href="#">Nos derniers projets</a></h3>
            <ol class="o-list-bare">
                <li><a class="footer-project__link" href="#">Projet 1</a></li>
                <li><a class="footer-project__link" href="#">Projet 2</a></li>
                <li><a class="footer-project__link" href="#">Projet 3</a></li>
            </ol>
            <a href="#" class="cta">Participer</a>
        </section>
        <section class="footer__item footer-contact">
            <h3><a class="footer-contact__contact-link cta cta_no-border cta_title" href="#">Nous contacter</a></h3>
            <address class="footer-contact__content">
                <span class="footer-contact__content-item">Mariam-Faso ASBL</span>
                <span class="footer-contact__content-item">Association sociale</span>
                <span class="footer-contact__content-item"><?php the_field('street', 'option');?></span>
                <span class="footer-contact__content-item"><?php the_field('locality', 'option');?></span>
                <span class="footer-contact__content-item footer-contact__content-item_icon-phone"><?php the_field('phone', 'option');?></span>
                <span class="footer-contact__content-item footer-contact__content-item_icon-email"><?php the_field('email', 'option');?></span>
            </address>
        </section>
    </div>
    <section class="footer__social">
        <?php if( have_rows('social_network') ): ?>
        <?php while ( have_rows('social_network') ) : the_row(); ?>
            <?php var_dump(get_sub_field('social_network_name'));?>
            <a class="footer__social-link" title="Facebook" href="#"><span class="footer__social-text">Facebook</span></a>
        <?php endwhile; endif;?>
        <a class="footer__social-link" title="Youtube" href="#"><span class="footer__social-text">Youtube</span></a>
    </section>
    <section class="footer__copyright">
        <small>&copy; 2017 Mehdy Ouras</small>
    </section>
</footer>
<?php endwhile;?>
<?php endif; ?>
<script src="<?php mf_asset('js/script.js'); ?>"></script>
</section>
</body>
</html>