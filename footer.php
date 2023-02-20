<?php
    $theme_options = get_fields('option');
?>
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__top">
            <div class="footer__col footer-top-1">
                <img src="<?php echo $theme_options['footer_logo'] ?>" class="footer__logo">
                <ul class="footer__contacts list-reset">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <?php $footer_phone = str_replace(' ', '', $theme_options['footer_phone']) ?>
                        <a href="tel:<?php echo $footer_phone ?>" class="footer__contact">
                            <?php echo $theme_options['footer_phone']; ?>
                        </a>
                    </li>
                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <?php $footer_whatsapp = str_replace(' ', '', $theme_options['footer_whatsapp']) ?>
                        <a href="tel:<?php echo $footer_whatsapp ?>" class="footer__contact">
                            <?php echo $theme_options['footer_whatsapp']; ?> (WhatsApp)
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo $theme_options['footer_email'] ?>" class="footer__contact">
                            <?php echo $theme_options['footer_email'] ?>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <div class="footer__work-time">
                            Orari di apertura:
                            <span><?php echo $theme_options['footer_work_time'] ?></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer__col footer-top-2">
                <div class="footer__menu-name">Azienda</div>
                <ul class="footer__menu list-reset">
                    <li>
                        <a href="#" class="footer__menu-link">
                            <i class="fas fa-envelope"></i>
                            Come funziona
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__menu-link">
                            <i class="fas fa-envelope"></i>
                            Domande frequenti
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__menu-link">
                            <i class="fas fa-envelope"></i>
                            Metodi di pagamento
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__col footer-top-3">
                <div class="footer__menu-name">Informazioni utili</div>
                <ul class="footer__menu list-reset">
                    <li>
                        <a href="#" class="footer__menu-link">Come funziona</a>
                    </li>
                    <li>
                        <a href="#" class="footer__menu-link">Domande frequenti</a>
                    </li>
                    <li>
                        <a href="#" class="footer__menu-link">Metodi di pagamento</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col footer__col--payment footer-top-4">
                <div class="footer__title">
                    Metodi di pagamento
                </div>
                <ul class="footer__logos list-reset">
                    <?php foreach ($theme_options['payment_logos'] as $payment_logo): ?>
                        <?php
                            $img_attr = $payment_logo['url'] ? 'src=' . $payment_logo['url'] : '';
                            $img_attr .= $payment_logo['url'] ? ' src=' . $payment_logo['url'] : '';
                            $img_attr .= $payment_logo['width'] ? ' width=' . $payment_logo['width'] : '';
                            $img_attr .= $payment_logo['height'] ? ' height=' . $payment_logo['height'] : '';
                            $img_attr .= $payment_logo['alt'] ? ' alt=' . $payment_logo['alt'] : '';
                        ?>
                        <li>
                            <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="footer__title">
                    Metodi di pagamento
                </div>
                <ul class="footer__logos list-reset">
                    <?php foreach ($theme_options['software_logos'] as $payment_logo): ?>
                        <?php
                        $img_attr = $payment_logo['url'] ? 'src=' . $payment_logo['url'] : '';
                        $img_attr .= $payment_logo['url'] ? ' src=' . $payment_logo['url'] : '';
                        $img_attr .= $payment_logo['width'] ? ' width=' . $payment_logo['width'] : '';
                        $img_attr .= $payment_logo['height'] ? ' height=' . $payment_logo['height'] : '';
                        $img_attr .= $payment_logo['alt'] ? ' alt=' . $payment_logo['alt'] : '';
                        ?>
                        <li>
                            <img <?php esc_attr_e($img_attr); ?> loading="lazy">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="footer__row">
            <div class="footer__menu-name">Prestazioni</div>
            <ul class="footer__menu list-reset">
                <li>
                    <a href="#" class="footer__menu-link">Abstract</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Articolo scientifico</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Progetto</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Diploma</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesi di laurea</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Esame</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Ricerca</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Presentazione</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesina</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesi finale</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Lavoro scientifico</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesi</a>
                    <ul class="sub-menu list-reset">
                        <li>
                            <a href="#" class="footer__menu-link">Tesi Triennale</a>
                        </li>
                        <li>
                            <a href="#" class="footer__menu-link">Tesi Magistrale</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="footer__row">
            <div class="footer__menu-name">Prestazioni</div>
            <ul class="footer__menu list-reset">
                <li>
                    <a href="#" class="footer__menu-link">Abstract</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Articolo scientifico</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Progetto</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Diploma</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesi di laurea</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Esame</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Ricerca</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Presentazione</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesina</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesi finale</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Lavoro scientifico</a>
                </li>
                <li>
                    <a href="#" class="footer__menu-link">Tesi</a>
                    <ul class="sub-menu list-reset">
                        <li>
                            <a href="#" class="footer__menu-link">Tesi Triennale</a>
                        </li>
                        <li>
                            <a href="#" class="footer__menu-link">Tesi Magistrale</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="footer__bottom">
            <div class="footer__text">2017-2022 | Tutti i diritti riservati © Tesiup</div>
            <div class="footer__text">Valutazione media di Studibucht.de su Trustami: con 1025 valutazioni | Base di
                valutazione del fornitore: 1 piattaforma di vendita e 17 piattaforme di valutazione | 270 Mi piace | 676
                follower
            </div>
        </div>
    </div>
</footer>
</div> <!-- /site-container -->

<?php wp_footer(); ?>

</body>
</html>
