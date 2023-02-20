<section class="links">
    <div class="links__container container">
        <h2 class="links__title title">
            <?php the_field('title'); ?>
        </h2>
        <p class="links__subtitle">
            <?php the_field('subtitle'); ?>
        </p>
        <div class="links__grid">
            <?php foreach (get_field('menus') as $key => $menu): ?>
                <?php
                if(empty($menu['menu_id'])){
                    continue;
                }
                ?>
                <div class="links__col <?php echo $key == 2 ? 'links__col--big' : '' ?>">
                    <?php $menu_object = wp_get_nav_menu_object($menu['menu_id']); ?>
                    <h3 class="links__menu-name">
                        <?php echo $menu_object->name ?>
                    </h3>
                    <?php echo wp_nav_menu([
                        'menu'            => $menu['menu_id'],
                        'container'       => '',
                        'container_class' => '',
                        'menu_class'      => $key == 2 ? 'links__list links__list--two-col list-reset' : 'links__list list-reset',
                        'echo'            => true,
                        'fallback_cb'     => '__return_empty_string',
                        'item_class'      => 'links__item',
                        'link_class'      => 'links__link',
                        'sub_menu_class'  => 'links__list list-reset',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 2,
                        'walker'          => new Tesiup_Walker_Nav_Menu(),
                    ]); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>