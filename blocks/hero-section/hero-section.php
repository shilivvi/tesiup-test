<section class="hero">
    <div class="hero__container container">
        <div class="hero__breadcrumbs breadcrumbs"></div>
        <div class="hero__grid">
            <div class="hero__col">
                <p class="hero__subtitle">
                    <?php the_field('subtitle') ?>
                </p>
                <h1 class="hero__title title">
                    <?php the_field('title') ?>
                </h1>
                <div class="hero__form">
                    <?php echo do_shortcode(get_field('form')) ?>
                </div>
            </div>
            <div class="hero__col">
                <div class="hero__img">
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
        <p class="hero__text">
            <?php the_field('information_text'); ?>
        </p>
    </div>
</section>