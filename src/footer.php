<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<footer role="contentinfo" class="footer">
    <section>
        <h2 aria-level=2 class="u-hidden-visually" aria-hidden="true">Pied de page</h2>
        <div class="footer__container">
            <section class="footer__item footer-partners">
                <h3 aria-level=3><?= __('Nos partenaires','mf');?></h3>
                <?php if( have_rows('partners', 'option') ): ?>
                    <ul class="o-list-inline">
                        <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
                            <?php
                            $partner_name = get_sub_field('partner_name');
                            $partner_logo = get_sub_field('partner_logo');
                            $partner_url = get_sub_field('partner_url');
                            ?>
                            <li class="footer-partners__item"><a href="<?= $partner_url; ?>"><img src="<?= $partner_logo; ?>" alt="Logo de <?= $partner_name; ?>"></a></li>
                        <?php endwhile;?>
                    </ul>
                <?php endif; ?>
            </section>
            <section class="footer__item footer-donation">
                <h3 aria-level=3><a class="footer-donation__donation-link cta cta_no-border cta_title" href="<?php mf_the_permalink_by_title("faire un don") ?>"><?= __('Faire un don','mf');?></a></h3>
                <dl class="donation-iban__list">
                    <dt class="donation-iban__term"><?= __('Numéro de compte','mf');?></dt>
                    <dd class="donation-iban__definition"><?php the_field('iban_frb', 'option');?></dd>
                    <dt class="donation-iban__term"><?= __('Communication structurée','mf');?></dt>
                    <dd class="donation-iban__definition"><?php the_field('com_frb', 'option');?></dd>
                </dl>
            </section>
            <section class="footer__item footer-project">
                <h3 aria-level=3><a class="footer-project__contact-link cta cta_no-border cta_title" href="<?php mf_the_permalink_by_title("projets") ?>"><?= __('Nos derniers projets','mf');?></a></h3>
                <ol class="o-list-bare">

                    <?php
                    $args = array( 'post_type' => 'project',
                        'posts_per_page' => 3,
                        'meta_key'			=> 'project_startdate',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'DESC'
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <li><a class="footer-project__link" href="<?php the_permalink(); ?>"><?php the_field('project_name') ?></a></li>
                    <?php endwhile; ?>
                </ol>
                <a href="<?php mf_the_permalink_by_title("participer") ?>" class="cta"><?= __('Participer','mf');?></a>
            </section>
            <section  class="footer__item footer-contact">
                <h3 aria-level=3><a class="footer-contact__contact-link cta cta_no-border cta_title" href="<?php mf_the_permalink_by_title("nous contacter") ?>"><?= __('Nous contacter','mf');?></a></h3>
                <address itemscope itemtype="http://schema.org/Organization" class="footer-contact__content">
                    <span itemprop="name" class="footer-contact__content-item"><?= __('Mariam Faso ASBL','mf');?></span>
                    <span class="footer-contact__content-item"><?= __('Association sociale','mf');?></span>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress" class="footer-contact__content-item"><?php the_field('street', 'option');?></span>
                        <span itemprop="addressLocality" class="footer-contact__content-item"><?php the_field('locality', 'option');?></span>
                    </div>
                    <span itemprop="telephone" class="footer-contact__content-item footer-contact__content-item_icon-phone"><?php the_field('phone', 'option');?></span>
                    <span itemprop="email" class="footer-contact__content-item footer-contact__content-item_icon-email"><?php the_field('email', 'option');?></span>
                </address>
            </section>
        </div>
        <section class="footer__social">
            <h3 aria-level=3 class="u-hidden-visually" aria-hidden="true">Nos réseaux sociaux</h3>
            <?php if( have_rows('social_network', 'option') ): ?>
                <?php while ( have_rows('social_network', 'option') ) : the_row(); ?>
                    <?php
                    $sn_name = get_sub_field('social_network_name');
                    $sn_link = get_sub_field('social_network_link');
                    ?>
                    <a class="footer__social-link footer__social-link<?= $sn_name['value']; ?>" href="<?= $sn_link; ?>"><span class="footer__social-text"><?= $sn_name['label'];?></span></a>
                <?php endwhile; endif;?>
        </section>
        <section class="footer__copyright">
            <h3 aria-level=3 class="u-hidden-visually" aria-hidden="true">Droits d'auteur</h3>
            <small><?= __('&copy; 2017 ','mf');?><a class="author" href="http://mehdy.ouras.be/"><?= __('Mehdy Ouras','mf');?></a></small>
        </section>
    </section>
</footer>
<?php endwhile;?>
<?php endif; ?>
<script src="<?php mf_asset('js/script.js'); ?>"></script>
</body>
</html>