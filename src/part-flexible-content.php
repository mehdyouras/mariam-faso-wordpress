<?php if( get_row_layout() == 'flexible_text' ): ?>
    <div class="wysiwyg-block wysiwyg-block">
        <div class="wysiwyg wysiwyg_margin">
            <?php the_sub_field('flexible_text_wysiwyg'); ?>
        </div>
    </div>

<?php elseif( get_row_layout() == 'flexible_image_full-width' ): $image = get_sub_field('flexible_image_image'); ?>
    <div class="image_full-width">
        <a href="<?= $image['url']; ?>" data-lightbox="flexible" data-title="<?= $image['caption']; ?>">
            <figure>
                <?php mf_the_image($image, "mf_large", "image_full-width__image", true); ?>
            </figure>
        </a>
    </div>

<?php elseif( get_row_layout() == 'flexible_video' ): ?>
    <div class="image_full-width">
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe class="yt-frame" src="https://www.youtube.com/embed/<?php mf_the_video(get_sub_field('video_url')); ?>?ecver=2" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
    </div>

<?php elseif( get_row_layout() == 'flexible_text-image' ):?>
    <div class="text-image text-image<?php the_sub_field('flexible_text-image_leftright') ?>">
        <div class="wysiwyg wysiwyg_margin">
            <?php the_sub_field('flexible_text-image_text'); ?>
        </div>
        <div class="text-image__figure">
            <?php if( have_rows('flexible_text-images') ): while ( have_rows('flexible_text-images') ) : the_row(); $image = get_sub_field('flexible_text-image_image');?>
            <a href="<?= $image['url']; ?>" data-lightbox="flexible" data-title="<?= $image['caption']; ?>">
                <figure>
                    <?php mf_the_image($image,'mf_thumbnail', 'figure__image', true); ?>
                </figure>
            </a>
        <?php endwhile; endif; ?>
        </div>
    </div>
<?php endif; ?>