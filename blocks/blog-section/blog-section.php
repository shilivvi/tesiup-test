<section class="blog">
    <div class="blog__container container">
        <div class="blog__top">
            <h2 class="blog__title title">
                <?php the_field('title'); ?>
            </h2>
            <a href="<?php the_field('btn_link'); ?>" class="blog__btn">
                <?php the_field('btn_text'); ?>
                <i class="fas fa-external-link-alt" aria-hidden="true"></i>
            </a>
        </div>
        <div class="blog__wrap">
            <button class="blog__arrow blog__arrow--prev btn-reset">
                <i class="fas fa-angle-left" aria-hidden="true"></i>
            </button>
            <div id="blog-slider" class="blog__slider">.
                <?php global $post; ?>
                <?php $posts = get_posts(['numberposts' => 5]); ?>
                <?php foreach( $posts as $post ): ?>
                    <?php setup_postdata( $post ); ?>
                    <article class="blog__slide">
                        <div class="blog__content">
                            <div class="blog__img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <div class="blog__read-time">
                                    <i class="fas fa-clock" aria-hidden="true"></i>
                                    <span>Tempo di lettura: 5,4 min</span>
                                </div>
                            </div>
                            <h3 class="blog__name">
                                <a href="<?php the_permalink(); ?>" class="blog__link">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="blog__publish-time">
                                Pubblicato il: 05.05.2022
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <button class="blog__arrow blog__arrow--next btn-reset">
                <i class="fas fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</section>