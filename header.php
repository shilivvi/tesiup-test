<?php
    $theme_options = get_fields('option');
    print_r($theme_options);
?>
<!doctype html>
<html <?php language_attributes(); ?> class="page">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class('page__body'); ?>>
<?php wp_body_open(); ?>
<div class="site-container">
    <header class="header">
        <div class="header__top-header top-header">
            <div class="top-header__container container">
                <ul class="top-header__contacts top-header-contacts list-reset" aria-label="Contacts">
                    <li class="top-header-contacts__item">
                        <i class="fas fa-phone-alt top-header-contacts__icon" aria-hidden="true"></i>
                        <a <?php esc_attr_e('href=tel:' . str_replace(' ', '', $theme_options['phone'])); ?> class="top-header-contacts__link">
                            <?php esc_html_e($theme_options['phone']); ?>
                        </a>
                    </li>
                    <li class="top-header-contacts__item top-header-contacts__item--time">
                        <p class="top-header-contacts__text">
                            <?php esc_html_e($theme_options['opening_time']); ?>
                        </p>
                    </li>
                    <?php if(!empty($theme_options['whatsapp'])): ?>
                    <li class="top-header-contacts__item">
                        <button data-drop-menu="1" class="top-header-contacts__btn btn-reset" aria-haspopup="true" aria-expanded="false" aria-label="Open WhatsApp phones list">
                            <i class="fab fa-whatsapp top-header-contacts__icon" aria-hidden="true"></i>
                            WhatsApp
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="top-header-contacts__drop-down list-reset" role="menu"
                            aria-label="WhatsApp phones list">
                            <?php foreach ($theme_options['whatsapp'] as $item): ?>
                            <li class="top-header-contacts__item">
                                <a <?php esc_attr_e('href=' . str_replace(' ', '', $item['link'])); ?> class="top-header-contacts__link">
                                    <?php esc_html_e($item['phone']); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($theme_options['e-mails'])): ?>
                    <li class="top-header-contacts__item">
                        <button data-drop-menu="1" class="top-header-contacts__btn btn-reset" aria-haspopup="true"
                                aria-expanded="false" aria-label="Open E-Mail address list">
                            <i class="fas fa-envelope top-header-contacts__icon" aria-hidden="true"></i>
                            E-Mail
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="top-header-contacts__drop-down list-reset" role="menu" aria-label="E-mails list">
                            <?php foreach ($theme_options['e-mails'] as $mail): ?>
                            <li class="top-header-contacts__item">
                                <a <?php esc_attr_e('href=mailto:' . $mail['e-mail']); ?> class="top-header-contacts__link">
                                    <?php esc_html_e($mail['e-mail']); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php echo wp_nav_menu([
                    'theme_location'  => 'top_header_menu',
                    'container'       => 'nav',
                    'container_class' => 'top-header__menu top-header-menu',
                    'menu_class'      => 'top-header-menu__list list-reset',
                    'echo'            => true,
                    'fallback_cb'     => '__return_empty_string',
                    'item_class'      => 'top-header-menu__item',
                    'link_class'      => 'top-header-menu__link',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 1,
                    'walker'          => new Tesiup_Walker_Nav_Menu(),
                ]); ?>
                <?php if(!empty($theme_options['facebook']) && !empty($theme_options['instagram']) && !empty($theme_options['linkedin'])): ?>
                <ul class="top-header__social top-header-social list-reset">
                    <?php if(!empty($theme_options['facebook'])): ?>
                    <li class="top-header-social__item">
                        <a <?php esc_attr_e('href=' . $theme_options['facebook']); ?> class="top-header-social__link" aria-label="Facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($theme_options['instagram'])): ?>
                    <li class="top-header-social__item">
                        <a <?php esc_attr_e('href=' . $theme_options['instagram']); ?> class="top-header-social__link" aria-label="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($theme_options['linkedin'])): ?>
                    <li class="top-header-social__item">
                        <a <?php esc_attr_e('href=' . $theme_options['linkedin']); ?> class="top-header-social__link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>
                <a href="#" class="top-header__mobile-btn">RICHIESTA SENZA IMPEGNO</a>
            </div>
        </div>
        <div class="header__desktop-header header-desktop">
            <div class="header-desktop__container container">
                <div class="header-desktop__logo">
                    <?php if(!empty($theme_options['site_logo'])): ?>
                        <?php
                            $logo_attr = 'width=' . $theme_options['site_logo']['width'];
                            $logo_attr .= ' height=' . $theme_options['site_logo']['height'];
                            $logo_attr .= ' src=' . $theme_options['site_logo']['url'];
                            $logo_attr .= $theme_options['site_logo']['alt'] ? ' alt=' . $theme_options['site_logo']['alt'] : '';
                        ?>
                        <img <?php esc_attr_e($logo_attr); ?> loading="lazy">
                    <?php endif; ?>
                </div>
                <button id="header-burger" class="header-desktop__burger header-desktop__burger btn-reset"><span></span></button>
                <div class="header-desktop__wrap">
                    <?php echo wp_nav_menu([
                        'theme_location'  => 'header_menu',
                        'container'       => false,
                        'container_id'    => '',
                        'menu_class'      => 'header-desktop__menu list-reset',
                        'menu_id'         => 'main-menu',
                        'echo'            => true,
                        'fallback_cb'     => '__return_empty_string',
                        'link_class'      => 'header-desktop__link',
                        'sub_menu_class'  => 'header-desktop__menu list-reset',
                        'drop_down_icon'  => '<i class="fas fa-angle-down" aria-hidden="true"></i>',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 2,
                        'walker'          => new Tesiup_Walker_Nav_Menu(),
                    ]); ?>
                    <form action="/" class="header-desktop__search">
                        <input class="header-desktop__input input-reset" type="text" placeholder="Ricerca…">
                        <button class="header-desktop__search-btn btn-reset" aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <?php echo wp_nav_menu([
                        'theme_location'  => 'mobile_header_menu',
                        'container'       => false,
                        'container_id'    => '',
                        'menu_class'      => 'header-desktop__menu-mobile mobile-menu list-reset',
                        'menu_id'         => 'mobile-menu',
                        'echo'            => true,
                        'fallback_cb'     => '__return_empty_string',
                        'link_class'      => 'mobile-menu__link',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 1,
                        'walker'          => new Tesiup_Walker_Nav_Menu(),
                    ]); ?>
                </div>
                <a href="#" class="header-desktop__btn">RICHIESTA NON VINCOLANTE</a>
            </div>
        </div>
    </header>