<?php if( get_row_layout() == 'flexible_text' ): ?>
    <div class="wysiwyg-block wysiwyg-block">
        <div class="wysiwyg wysiwyg_margin">
            <?php the_sub_field('flexible_text_wysiwyg'); ?>
        </div>
    </div>

<?php elseif( get_row_layout() == 'flexible_image_full-width' ):?>
    <div class="image_full-width">
        <figure>
            <img src="<?php the_sub_field('flexible_image_image'); ?>" alt="">
            <figcaption class="figure__caption">
                <?php the_sub_field('flexible_image_caption'); ?>
            </figcaption>
        </figure>
    </div>

<?php elseif( get_row_layout() == 'flexible_text-image' ):?>
    <div class="text-image text-image<?php the_sub_field('flexible_text-image_leftright') ?>">
        <div class="wysiwyg wysiwyg_margin">
            <?php the_sub_field('flexible_text-image_text'); ?>
        </div>
        <div class="text-image__figure">
            <?php if( have_rows('flexible_text-images') ): while ( have_rows('flexible_text-images') ) : the_row(); ?>
            <figure>
                <?php mf_the_image(get_sub_field('flexible_text-image_image'),'mf_thumbnail', 'figure__image', true); ?>
            </figure>
        <?php endwhile; endif; ?>
        </div>
    </div>
<?php endif; ?>