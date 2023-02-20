<section class="video-chat">
    <div class="video-chat__container container">
        <div class="video-chat__wrap">
            <div class="video-chat__img">
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
            <div class="video-chat__content">
                <h2 class="video-chat__title title">
                    <?php the_field('title'); ?>
                </h2>
                <p class="video-chat__text">
                    <?php the_field('subtitle'); ?>
                </p>
                <button type="button" class="video-chat__btn btn-reset">
                    <?php the_field('btn_text'); ?>
                </button>
            </div>
        </div>
    </div>
</section>