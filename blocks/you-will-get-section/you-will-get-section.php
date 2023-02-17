<section class="you-will-get">
    <div class="you-will-get__container container">
        <h2 class="you-will-get__title title">Cosa otterete se affidate la stesura della vostra tesi a noi?</h2>
        <?php if(get_field('list')): ?>
            <div class="you-will-get__grid">
                <?php foreach (get_field('list') as $item): ?>
                    <div class="you-will-get__item">
                        <div class="you-will-get__img">
                            <?php
                                $img_attr = $item['image']['url'] ? 'src=' . $item['image']['url'] : '';
                                $img_attr .= $item['image']['url'] ? ' src=' . $item['image']['url'] : '';
                                $img_attr .= $item['image']['width'] ? ' width=' . $item['image']['width'] : '';
                                $img_attr .= $item['image']['height'] ? ' height=' . $item['image']['height'] : '';
                                $img_attr .= $item['image']['alt'] ? ' alt=' . $item['image']['alt'] : '';
                            ?>
                            <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                        </div>
                        <p class="you-will-get__text">
                            <?php echo $item['text']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>