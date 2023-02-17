<section class="sale-text">
    <div class="sate-text__container container">
        <div class="sale-text__grid">
            <div class="sale-text__col">
                <h3 class="sale-text__title title">
                    <?php the_field('title'); ?>
                </h3>
                <?php
                $left_text = explode('<br>', get_field('left_text'));
                foreach ($left_text as $item):
                    if(!empty($item)):
                ?>
                    <p class="sale-text__text">
                        <?php echo $item; ?>
                    </p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="sale-text__col">
                <p class="sale-text__text sale-text__text--mark">
                    <i class="fas fa-exclamation sale-text__icon" aria-label="hidden"></i>
                    <?php the_field('warning_text'); ?>
                </p>
                <?php
                $right_text = explode('<br>', get_field('right_text'));
                foreach ($right_text as $item):
                    if(!empty($item)):
                        ?>
                        <p class="sale-text__text">
                            <?php echo $item; ?>
                        </p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
