<?php
    $slides = 4;
    $slides -= 1;
?>
<section class="how-work">
    <div class="how-work__container container">
        <h2 class="how-work__title title">
            <?php the_field('title'); ?>
        </h2>
        <p class="how-work__subtitle">
            <?php the_field('subtitle'); ?>
        </p>
        <div class="how-work__wrap">
            <?php if(get_field('slider')): ?>
            <div id="how-work-slider" class="how-work__slider how-work-slider">
                <?php foreach (get_field('slider') as $key => $item): ?>
                    <div class="how-work-slider__slide">
                        <div class="how-work-slider__grid">
                            <div class="how-work-slider__img">
                                <?php
                                    $img_attr = $item['image']['url'] ? 'src=' . $item['image']['url'] : '';
                                    $img_attr .= $item['image']['url'] ? ' src=' . $item['image']['url'] : '';
                                    $img_attr .= $item['image']['width'] ? ' width=' . $item['image']['width'] : '';
                                    $img_attr .= $item['image']['height'] ? ' height=' . $item['image']['height'] : '';
                                    $img_attr .= $item['image']['alt'] ? ' alt=' . $item['image']['alt'] : '';
                                ?>
                                <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                            </div>
                            <div class="how-work-slider__wrap">
                                <div class="how-work-slider__line">
                                    <?php for($i = 0; $i <= $slides; $i++): ?>
                                        <?php if($i <= $key): ?>
                                            <button data-slide="<?php echo $i ?>" type="button" class="how-work-slider__step-btn how-work-slider__step-btn--active btn-reset">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </button>
                                        <?php else: ?>
                                            <button data-slide="<?php echo $i ?>" type="button" class="how-work-slider__step-btn btn-reset">
                                                <?php echo $i + 1; ?>
                                            </button>
                                        <?php endif; ?>
                                        <?php if($i <= $slides - 1): ?>
                                            <div class="how-work-slider__separator"></div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <div class="how-work-slider__img">
                                    <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                                </div>
                                <div class="how-work-slider__content">
                                    <div class="how-work-slider__top">
                                        <div class="how-work-slider__step">Passo <?php echo $key + 1 ?></div>
                                        <h3 class="how-work-slider__title title">
                                            <?php echo $item['title'] ?>
                                        </h3>
                                    </div>
                                    <p class="how-work-slider__text">
                                        <?php echo $item['text'] ?>
                                    </p>
                                    <?php if(!empty($item['btn_link'])): ?>
                                        <a href="<?php echo $item['btn_link'] ?>" class="how-work-slider__btn">Preventivo senza impegno</a>
                                    <?php endif; ?>
                                </div>
                                <div class="how-work-slider__controls">
                                    <?php if($key == 0): ?>
                                        <button type="button" class="how-work-slider__arrow how-work-slider__arrow--prev btn-reset" disabled>
                                            <i class="fas fa-angle-left" aria-hidden="true"></i>
                                        </button>
                                    <?php else: ?>
                                        <button type="button" class="how-work-slider__arrow how-work-slider__arrow--prev btn-reset">
                                            <i class="fas fa-angle-left" aria-hidden="true"></i>
                                        </button>
                                    <?php endif; ?>

                                    <div class="how-work-slider__dots">
                                        <?php for($i = 0; $i <= $slides; $i++): ?>
                                            <?php if($i === $key): ?>
                                                <button data-slide="<?php echo $i; ?>" type="button" class="how-work-slider__dot how-work-slider__dot--active btn-reset"></button>
                                            <?php else: ?>
                                                <button data-slide="<?php echo $i; ?>" type="button" class="how-work-slider__dot btn-reset"></button>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>

                                    <?php if($key == $slides): ?>
                                        <button type="button" class="how-work-slider__arrow how-work-slider__arrow--next btn-reset" disabled>
                                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                                        </button>
                                    <?php else: ?>
                                        <button type="button" class="how-work-slider__arrow how-work-slider__arrow--next btn-reset">
                                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>