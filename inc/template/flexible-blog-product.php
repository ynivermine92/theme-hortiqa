<?php
// Проверяем, есть ли строки в flexible_content


/* $hero_data = get_field('flexible_content'); */ // массив всех блоков

?>
<div class="castom-category">
    <div class="row castom-category__box">
        <div class="col-auto">
            <h4 class="castom-category__title">Product</h4>
        </div>
        <div class="col-auto">
            <div class="castom-category__content">
                <span class="castom-category__text-link">To shop</span>
                <a class="castom-category__link arrow-btn" href="#">
                    <?php svg_arrown(); ?>
                </a>
            </div>
        </div>
    </div>
    <ul class="row castom-category__items">
        <li class="col-3">
            <div class="castom-category__wrapepr">
                <img class="castom-category__image" src="https://picsum.photos/1920/1080" alt="">
                <div class="castom-category__info">
                    <div class="castom-category__sale"><span class="castom-category__sale-sum">-20% </span> <span class="castom-category__sale-text">Sale</span></div>
                </div>
                <div class="castom-category__promo">Easy care</div>
                <div class="castom-category__box-info">
                    <?php get_template_part('section/rating'); ?>
                    <span class="castom-category__coment">30 Reviews</span>
                </div>
                <p class="castom-category__name">Surprise package XL - 5 XL plants</p>
                <div class="castom-category__price">
                    <div class="castom-category__price-iscount">€30.99</div>
                    <div class="castom-category__price-sum">€60.00</div>
                </div>

        </li>
        <li class="col-3">
            <div class="castom-category__wrapepr">
                <img class="castom-category__image" src="https://picsum.photos/1920/1080" alt="">
                <div class="castom-category__info">
                    <div class="castom-category__sale"><span class="castom-category__sale-sum">-20% </span> <span class="castom-category__sale-text">Sale</span></div>
                </div>
                <div class="castom-category__promo">Easy care</div>
                <div class="castom-category__box-info">
                    <?php get_template_part('section/rating'); ?>
                    <span class="castom-category__coment">30 Reviews</span>
                </div>
                <p class="castom-category__name">Surprise package XL - 5 XL plants</p>
                <div class="castom-category__price">
                    <div class="castom-category__price-iscount">€30.99</div>
                    <div class="castom-category__price-sum">€60.00</div>
                </div>

        </li>
        <li class="col-3">
            <div class="castom-category__wrapepr">
                <img class="castom-category__image" src="https://picsum.photos/1920/1080" alt="">
                <div class="castom-category__info">
                    <div class="castom-category__sale"><span class="castom-category__sale-sum">-20% </span> <span class="castom-category__sale-text">Sale</span></div>
                </div>
                <div class="castom-category__promo">Easy care</div>
                <div class="castom-category__box-info">
                    <?php get_template_part('section/rating'); ?>
                    <span class="castom-category__coment">30 Reviews</span>
                </div>
                <p class="castom-category__name">Surprise package XL - 5 XL plants</p>
                <div class="castom-category__price">
                    <div class="castom-category__price-iscount">€30.99</div>
                    <div class="castom-category__price-sum">€60.00</div>
                </div>

        </li>

        <li class="col-3">
            <div class="castom-category__wrapepr">
                <img class="castom-category__image" src="https://picsum.photos/1920/1080" alt="">
                <div class="castom-category__info">
                    <div class="castom-category__sale"><span class="castom-category__sale-sum">-20% </span> <span class="castom-category__sale-text">Sale</span></div>
                </div>
                <div class="castom-category__promo">Easy care</div>
                <div class="castom-category__box-info">
                    <?php get_template_part('section/rating'); ?>
                    <span class="castom-category__coment">30 Reviews</span>
                </div>
                <p class="castom-category__name">Surprise package XL - 5 XL plants</p>
                <div class="castom-category__price">
                    <div class="castom-category__price-iscount">€30.99</div>
                    <div class="castom-category__price-sum">€60.00</div>
                </div>

        </li>
    </ul>
</div>