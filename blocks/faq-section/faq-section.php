<section class="faq">
    <div class="faq__container container">
        <div class="faq__wrap">
            <h2 class="faq__title title">
                <?php the_field('title'); ?>
            </h2>
            <ul class="faq__list list-reset">
                <?php foreach (get_field('faq_list') as $list): ?>
                    <li class="faq__item">
                        <button class="faq__btn btn-reset" aria-expanded="false">
                            <h3 class="faq__question">
                                <?php echo $list['title'] ?>
                            </h3>
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__content" aria-hidden="true">
                            <?php echo $list['content'] ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>