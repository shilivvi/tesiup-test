<section class="work-with-us">
    <div class="work-with-us__container container">
        <div class="work-with-us__grid">
            <h2 class="work-with-us__title title">
                <?php the_field('title'); ?>
            </h2>
            <?php if(!empty(get_field('you_will_get_list'))): ?>
            <ul class="work-with-us__list list-reset" aria-label="Work with us you will get">
                <?php foreach (get_field('you_will_get_list') as $item): ?>
                    <li class="work-with-us__item">
                            <span class="work-with-us__icon" aria-hidden="true">
                                <i class="fas fa-check" aria-hidden="true"></i>
                            </span>
                        <p class="work-with-us__item-text">
                            <?php echo $item['text']; ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <div class="work-with-us__bg" <?php echo ' style="background-image: url(' . get_field('image') . ')"'; ?>></div>
        </div>
        <?php if(!empty(get_field('reasons'))): ?>
            <ul class="work-with-us__reasons reasons-work-with-us list-reset" aria-label="3 main reasons why we">
                <?php foreach (get_field('reasons') as $item): ?>
                    <li class="reasons-work-with-us__item">
                        <div class="reasons-work-with-us__icon">
                            <?php
                                $img_attr = $item['icon']['url'] ? 'src=' . $item['icon']['url'] : '';
                                $img_attr .= $item['icon']['url'] ? ' src=' . $item['icon']['url'] : '';
                                $img_attr .= $item['icon']['width'] ? ' width=' . $item['icon']['width'] : '';
                                $img_attr .= $item['icon']['height'] ? ' height=' . $item['icon']['height'] : '';
                                $img_attr .= $item['icon']['alt'] ? ' alt=' . $item['icon']['alt'] : '';
                            ?>
                            <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                        </div>
                        <div class="reasons-work-with-us__content">
                            <h3 class="reasons-work-with-us__title title">
                                <?php echo $item['title']; ?>
                            </h3>
                            <p class="reasons-work-with-us__text">
                                <?php echo $item['text']; ?>
                            </p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>