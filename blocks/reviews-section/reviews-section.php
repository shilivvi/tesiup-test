<section class="reviews">
    <div class="reviews__container container">
        <div class="reviews__top">
            <h2 class="reviews__title title">
                <?php the_field('title'); ?>
            </h2>
            <a href="<?php the_field('link'); ?>" class="reviews__btn">
                <?php the_field('text_btn'); ?>
                <i class="fas fa-external-link-alt" aria-hidden="true"></i>
            </a>
        </div>
        <div class="reviews__wrap">
            <button class="reviews__arrow reviews__arrow--prev btn-reset">
                <i class="fas fa-angle-left" aria-hidden="true"></i>
            </button>
            <?php if(!empty(get_field('review'))): ?>
                <div id="reviews__slider" class="reviews__slider">
                    <?php foreach (get_field('review') as $review): ?>
                        <div class="reviews__slide">
                            <div class="reviews__content">
                                <div class="reviews__meta">
                                    <div class="reviews__name">
                                        <?php echo $review['name'] ?>
                                    </div>
                                    <div class="reviews__date">
                                        <?php echo $review['date'] ?>
                                    </div>
                                </div>
                                <div class="reviews__stars">
                                    <?php for($i = 0; $i <= 5; $i++): ?>
                                        <?php if($i <= $review['rating']): ?>
                                            <span class="fa fa-star reviews__star"></span>
                                        <?php else: ?>
                                            <span class="far fa-star reviews__star"></span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <div class="reviews__theme">
                                    <?php echo $review['theme'] ?>
                                </div>
                                <p class="reviews__review">
                                    <?php echo $review['text'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <button class="reviews__arrow reviews__arrow--next btn-reset">
                <i class="fas fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</section>