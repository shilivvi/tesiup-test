<section class="guaranty">
    <div class="guaranty__container container">
        <h2 class="guaranty__title title">
            <?php the_field('title'); ?>
        </h2>
        <?php if(get_field('list')): ?>
            <div class="guaranty__grid">
                <?php foreach (get_field('list') as $item): ?>
                    <div class="guaranty__card">
                        <div class="guaranty__card-img">
                            <?php
                                $img_attr = $item['image']['url'] ? 'src=' . $item['image']['url'] : '';
                                $img_attr .= $item['image']['url'] ? ' src=' . $item['image']['url'] : '';
                                $img_attr .= $item['image']['width'] ? ' width=' . $item['image']['width'] : '';
                                $img_attr .= $item['image']['height'] ? ' height=' . $item['image']['height'] : '';
                                $img_attr .= $item['image']['alt'] ? ' alt=' . $item['image']['alt'] : '';
                            ?>
                            <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                        </div>
                        <div class="guaranty__card-content">
                            <h3 class="guaranty__card-title title">
                                <?php echo $item['title']; ?>
                            </h3>
                            <p class="guaranty__card-subtitle"
                                <?php echo $item['subtitle']; ?>
                            </p>
                            <p class="guaranty__card-text">
                                <?php echo $item['text']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="guaranty__action">
            <div class="guaranty__wrap">
                <h3 class="guaranty__action-title title">
                    <?php the_field('action_title'); ?>
                </h3>
                <p class="guaranty__action-subtitle">
                    <?php the_field('action_subtitle'); ?>
                </p>
            </div>
            <a href="<?php the_field('btn_link'); ?>" class="guaranty__action-btn">
                <?php the_field('btn_text'); ?>
            </a>
        </div>
    </div>
</section>