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
                <h2 class="video-chat__title title">Prenota una videochiamata in diretta con il tuo
                    consulente!</h2>
                <p class="video-chat__text">Se ci lasci scrivere la tua tesi di laurea, risparmierai molto tempo
                    e otterrai un servizio dal rapporto qualità-prezzo favorevole.</p>
                <button type="button" class="video-chat__btn btn-reset">Richiesta non vincolante</button>
            </div>
        </div>
    </div>
</section>