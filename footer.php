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

<div class="contacts" style="display: none">
    <div class="contacts__wrap">
        <ul class="contacts__list list-reset">
            <li class="contacts__item">
                <a href="" class="contacts__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_8_1652)">
                            <path d="M16.5952 1.48242H2.71406C1.21734 1.48242 0 2.69977 0 4.19648V16.3605C0 16.9366 0.651516 17.2614 1.11141 16.9329L4.97719 14.1748C5.30156 13.9437 5.68313 13.8213 6.08156 13.8213H14.5842C16.0809 13.8213 17.2983 12.604 17.2983 11.1073V2.18555C17.2983 1.79742 16.9833 1.48242 16.5952 1.48242ZM13.1798 10.0001H5.05594C4.66781 10.0001 4.35281 9.68555 4.35281 9.29695C4.35281 8.90883 4.66781 8.59383 5.05594 8.59383H13.1798C13.568 8.59383 13.883 8.90883 13.883 9.29695C13.883 9.68555 13.568 10.0001 13.1798 10.0001ZM13.1798 6.71883H5.05594C4.66781 6.71883 4.35281 6.4043 4.35281 6.0157C4.35281 5.62758 4.66781 5.31258 5.05594 5.31258H13.1798C13.568 5.31258 13.883 5.62758 13.883 6.0157C13.883 6.4043 13.568 6.71883 13.1798 6.71883Z"
                                  fill="white"/>
                            <path d="M23.9999 9.65057V21.8142C23.9999 22.3864 23.3517 22.7173 22.8885 22.3865L19.0228 19.6288C18.6984 19.3978 18.3168 19.2754 17.9184 19.2754H9.41572C7.919 19.2754 6.70166 18.0576 6.70166 16.5609V15.2278H14.5842C16.8562 15.2278 18.7045 13.3795 18.7045 11.1074V6.93604H21.2859C22.7826 6.93604 23.9999 8.15385 23.9999 9.65057Z"
                                  fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_8_1652">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Live Chat
                </a>
            </li>
            <li class="contacts__item">
                <a href="#" class="contacts__link">
                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                    +49 30 223-898-45
                </a>
            </li>
            <li class="contacts__item">
                <a href="#" class="contacts__link">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    E-mail
                </a>
            </li>
            <li class="contacts__item">
                <a href="#" class="contacts__link">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    WhatsApp
                </a>
            </li>
            <li class="contacts__item">
                <a href="#" class="contacts__link">
                    <i class="fab fa-skype" aria-hidden="true"></i>
                    Skype
                </a>
            </li>
        </ul>
        <button type="button" aria-label="Open contacts" class="contacts__btn btn-reset">
                <span class="contacts__icons">
                    <span class="contacts__icon contacts__icon--dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="contacts__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_8_1652)">
                                <path d="M16.5952 1.48242H2.71406C1.21734 1.48242 0 2.69977 0 4.19648V16.3605C0 16.9366 0.651516 17.2614 1.11141 16.9329L4.97719 14.1748C5.30156 13.9437 5.68313 13.8213 6.08156 13.8213H14.5842C16.0809 13.8213 17.2983 12.604 17.2983 11.1073V2.18555C17.2983 1.79742 16.9833 1.48242 16.5952 1.48242ZM13.1798 10.0001H5.05594C4.66781 10.0001 4.35281 9.68555 4.35281 9.29695C4.35281 8.90883 4.66781 8.59383 5.05594 8.59383H13.1798C13.568 8.59383 13.883 8.90883 13.883 9.29695C13.883 9.68555 13.568 10.0001 13.1798 10.0001ZM13.1798 6.71883H5.05594C4.66781 6.71883 4.35281 6.4043 4.35281 6.0157C4.35281 5.62758 4.66781 5.31258 5.05594 5.31258H13.1798C13.568 5.31258 13.883 5.62758 13.883 6.0157C13.883 6.4043 13.568 6.71883 13.1798 6.71883Z"
                                      fill="white"/>
                                <path d="M23.9999 9.65057V21.8142C23.9999 22.3864 23.3517 22.7173 22.8885 22.3865L19.0228 19.6288C18.6984 19.3978 18.3168 19.2754 17.9184 19.2754H9.41572C7.919 19.2754 6.70166 18.0576 6.70166 16.5609V15.2278H14.5842C16.8562 15.2278 18.7045 13.3795 18.7045 11.1074V6.93604H21.2859C22.7826 6.93604 23.9999 8.15385 23.9999 9.65057Z"
                                      fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_8_1652">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <span class="contacts__icon">
                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                    </span>
                    <span class="contacts__icon">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </span>
                    <span class="contacts__icon">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                    </span>
                    <span class="contacts__icon">
                        <i class="fab fa-skype" aria-hidden="true"></i>
                    </span>
                </span>
        </button>
    </div>
</div>

<div class="modal">
    <div class="modal__container" role="dialog" aria-modal="true" data-modal-target="form-popup">
        <button class="btn-reset modal__close js-modal-close" aria-label="Close modal popup"></button>
        <div class="modal__content modal__content--form">
            Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты. Дороге заглавных своих рот
            предложения взобравшись коварный большой точках о маленькая жаренные однажды безопасную, власти даль, снова она
            ручеек обеспечивает букв там. Переписали, составитель? Взобравшись решила родного одна предупреждал переулка
            курсивных подзаголовок деревни! Ipsum рукописи маленькая это знаках толку маленький не! О продолжил деревни
            собрал инициал эта ее всемогущая свой заглавных она переписывается вскоре проектах щеке от всех, все рукописи
            вдали над на берегу родного своего имеет сбить силуэт то использовало путь? Рукописи вскоре семантика домах
            имеет пояс о своего не великий предупреждал возвращайся обеспечивает они осталось свой несколько он имени
            страну, грустный языкового буквоград переписали заголовок толку которое встретил. Если которое города она
            предупредила подзаголовок использовало гор власти. Наш родного использовало, залетают лучше все, алфавит за
            продолжил вершину прямо толку путь она свою взобравшись языком собрал над lorem. Вдали рыбными необходимыми,
            взобравшись, подпоясал своих пояс гор дал запятых парадигматическая вопрос курсивных составитель обеспечивает,
            от всех жизни за строчка своего первую! Пояс его раз маленькая жизни себя свой текст? Продолжил, грустный меня!
            Выйти вопроса текста ты буквоград переулка злых курсивных заманивший пор но, инициал пояс заглавных эта
            жаренные, она использовало. Своего всеми алфавит, свой составитель маленький, толку парадигматическая подпоясал
            вскоре власти выйти имени взобравшись рыбными запятых ipsum рукописи себя мир пунктуация решила речью эта
            города? Повстречался не рыбного океана, диких послушавшись подпоясал эта сих там заглавных переулка щеке инициал
            себя пустился букв семь. Своих последний власти он путь ведущими великий, коварный предупреждал осталось!
            Повстречался запятых вопроса имеет использовало переписывается ее заманивший рукописи оксмокс диких грамматики
            маленькая вопрос его, по всей страну? Пунктуация мир вдали взобравшись все одна курсивных свой, последний журчит
            силуэт реторический что диких вопрос маленькая первую необходимыми путь приставка выйти продолжил родного, свою
            большой моей раз языкового. По всей это великий домах лучше пустился необходимыми, ipsum себя что заглавных
            всемогущая заманивший над продолжил его города вопрос до знаках диких рукописи щеке предложения несколько
            единственное дал коварный буквоград! Пунктуация переписали возвращайся обеспечивает даже предложения. Вопрос
            злых своего текстами ipsum страну ведущими рукописи. Продолжил даже щеке, предупреждал проектах страну деревни?
            Имеет рот рукописи заголовок последний рекламных, ведущими, оксмокс домах, встретил первую они осталось
            языкового. Родного пояс свою своих знаках, алфавит лучше себя решила повстречался, предупредила текста
            послушавшись свое там своего возвращайся взгляд от всех? Лучше своих проектах они инициал залетают однажды мир,
            свою строчка буквенных наш власти lorem предложения агентство родного заманивший его языкового коварный! Вопрос
            рукописи вскоре сбить там если возвращайся алфавит до меня над? Маленькая даже, единственное буквенных заглавных
            безопасную скатился? Обеспечивает послушавшись букв ты злых текстов образ там языком имени предложения? Которое,
            грустный раз! Грамматики, реторический которой пунктуация вскоре от всех, решила рекламных свой инициал
            составитель но свое большого заманивший ты агентство, коварный подзаголовок заголовок осталось языком! Наш над
            рыбными живет возвращайся запятых продолжил текста снова все от всех решила вопроса, рукописи парадигматическая
            коварных своих собрал которой языком буквенных семь подпоясал безопасную вскоре реторический. Вопрос там назад
            буквоград деревни мир продолжил, собрал маленькая рот предложения дороге запятых взгляд возвращайся за рыбного
            путь страну сих, которое бросил заманивший своих эта! Коварных, языком взобравшись дорогу раз своего за гор
            языкового строчка предупреждал всемогущая, пор рыбными рукописи моей то алфавит себя большой курсивных
            безорфографичный. Злых рукописи инициал власти выйти рот вдали сих ручеек, деревни даже, даль единственное
            взгляд путь свое заманивший то которой, все своих по всей мир переписали осталось? Встретил деревни родного
            ipsum своего ее повстречался всеми! До встретил которой составитель по всей залетают взобравшись на берегу, пор
            коварный lorem вопрос продолжил текстов рыбного однажды вскоре ему прямо страну свое заголовок даль наш строчка
            осталось реторический большого безорфографичный! Великий текста которое безорфографичный вопроса это знаках
            текстами путь заглавных напоивший образ инициал ручеек встретил, проектах страна ее языкового. Одна меня
            рыбными, оксмокс пор щеке подзаголовок все толку свой коварных это живет свое запятой единственное предупредила
            всеми? Что она своих правилами раз использовало мир дал оксмокс силуэт вдали злых страну подзаголовок свою
            вершину предупреждал то меня языком, грустный языкового проектах составитель собрал ipsum переписывается! Своего
            запятой агентство страна рыбного даль она деревни грустный продолжил, проектах, скатился, встретил его. Толку
            букв рыбными, вопрос повстречался собрал наш семь единственное! Lorem продолжил живет составитель она власти ее
            переписывается которой, оксмокс маленький текста, имени, переулка снова толку необходимыми страна заманивший
            свой журчит коварных залетают свою! Рыбными они, залетают диких пустился которое собрал. Переписывается,
            напоивший рукопись единственное безорфографичный большого запятых коварный вдали. Страну страна правилами собрал
            составитель реторический, своего, о запятой меня она оксмокс свой великий. Последний назад которое предложения
            родного осталось толку, заголовок там но первую выйти проектах сбить всеми взгляд сих. Злых толку коварный
            подзаголовок, ты все текст. Путь текстами вопроса последний по всей ее маленький если, проектах которой запятых
            деревни осталось бросил журчит жаренные взобравшись семь это подзаголовок составитель меня сбить. Грамматики гор
            заманивший но великий путь родного одна ведущими, щеке единственное скатился переулка силуэт не маленький ручеек
            подзаголовок текстов парадигматическая. Свою напоивший свой, то скатился рыбного языкового от всех о журчит
            безопасную, деревни оксмокс составитель, переписали вершину путь. Путь, наш lorem. Курсивных грамматики даже
            живет пояс домах подпоясал несколько рыбного имеет последний переписывается, ее наш осталось первую города,
            lorem гор ручеек собрал. Предложения не, прямо агентство вопроса встретил парадигматическая ему дорогу точках по
            всей предупреждал рот до сбить которое, свой правилами сих рукописи. Продолжил текстами наш океана пунктуация
            проектах речью даль ты предупреждал диких моей. Вскоре однажды до курсивных языком предложения, маленькая злых
            подзаголовок но сих себя собрал вопрос рукописи? Снова переулка там, свой вскоре которое строчка большой
            послушавшись раз подпоясал, взобравшись lorem страна диких сих предупреждал маленький домах? Взобравшись
            маленький инициал, ipsum себя рукопись домах он города бросил несколько знаках ты деревни одна ведущими. Вопрос
            семь подзаголовок осталось имеет снова ведущими буквенных, рукопись мир, власти города коварный. Злых
            обеспечивает запятых мир безорфографичный, оксмокс своего коварных гор продолжил имени вскоре снова, напоивший
            маленький предупреждал свой путь вопрос семантика раз ведущими послушавшись она жаренные власти одна. Путь
            осталось использовало послушавшись проектах залетают безопасную! Напоивший пояс путь дал родного безопасную букв
            коварный? За переписали подзаголовок своих! Большой жизни путь предупредила до которое о ipsum великий эта моей.
            Свой свою реторический маленький эта, осталось даль рекламных семь большого не запятой. Пор текстами, не домах
            коварный первую деревни толку дал.
        </div>
    </div>
</div>

</div> <!-- /site-container -->

<?php wp_footer(); ?>

</body>
</html>
