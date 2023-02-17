<section class="text-block">
    <div class="text-block__container container">
        <h2 class="text-block__title title">Ora… probabilmente ti starai chiedendo qual è il prezzo per ricevere
            il servizio di consulenza tesi e scrittura da parte dei nostri esperti.</h2>
        <div class="text-block__grid">
            <div class="text-block__content">
                <p>La consegna dell’elaborato avviene in 90 giorni e sia per le tesi compilative che per quelle
                    sperimentali per le seguenti facoltà:</p>
                <ul>
                    <li>Medicina</li>
                    <li>Economia</li>
                    <li>Giurisprudenza</li>
                    <li>Indirizzi</li>
                </ul>
                <p>Il prezzo è a partire da 33€/per pagina. Nel servizio di assistenza integrale tesi avrai
                    anche a disposizione altri servizi, come:</p>
                <ol>
                    <li>Incontro audio on-line con l'autore, 30 minuti.</li>
                    <li>Elaborazione di altre pagine: pagina del titolo, bibliografia tesi, sitografia.</li>
                    <li>Controllo dell'unicità.</li>
                </ol>
            </div>
            <div class="text-block__img">
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
</section>