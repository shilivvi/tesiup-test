<section class="text-block">
    <div class="text-block__container container">
        <h2 class="text-block__title title">
            <?php the_field('title'); ?>
        </h2>
        <div class="text-block__grid">
            <div class="text-block__content">
                <?php the_field('text'); ?>
            </div>
            <div class="text-block__img">
                <?php
                    $image = get_field('image');
                    $img_attr = 'src=' . $image['url'];
                    $img_attr .= ' src=' . $image['url'];
                    $img_attr .= ' width=' . $image['width'];
                    $img_attr .= ' height=' . $image['height'];
                    $img_attr .= $image['alt'] ? ' alt=' . $image['alt'] : '';
                ?>
                <img <?php esc_attr_e($img_attr); ?> loading="lazy">
            </div>
        </div>
    </div>
</section>