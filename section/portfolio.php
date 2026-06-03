<?php
/*
 * Template Name: page constructor
 */
get_header();




// Завантаження SVG стрілки (безпечний метод)
$arrow_path = get_template_directory() . '/assets/img/svg/arrow.svg';
$svg_arrow = '';
if (file_exists($arrow_path)) {
    $svg_arrow = file_get_contents($arrow_path);
    $svg_arrow = str_replace('<svg', '<svg class="icon-arrow"', $svg_arrow);
}
?>

<section class="portfolio">
    <div class="wrapper">
        <div class="row">
            <h2 class="title">Портфоліо</h2>
        </div>

        <!-- Slider main container -->
        <div class="swiper-portfolio">
            <div class="swiper-wrapper">

                <?php
                // Масив з назвами для alt текстів (щоб не писати вручну)
                $portfolio_items = [
                    'Композиція з червоних троянд',
                    'Весняний букет з тюльпанами',
                    'Декоративна композиція для вітальні',
                    'Весільний букет з півоній',
                    'Садовий декор з пампасною травою',
                    'Елегантний настільний декор',
                    'Квіткова арка',
                    'Польовий букет',
                    'Тропічна композиція'
                ];
                ?>

                <?php for ($i = 1; $i <= 9; $i++) : ?>
                    <div class="swiper-slide">
                        <a class="portfolio__slider-link"
                            data-fancybox="services-gallery"
                            href="<?php echo get_template_directory_uri(); ?>/assets/img/png/r<?php echo $i; ?>.webp">

                            <img class="swiper-image"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/png/r<?php echo $i; ?>.webp"
                                alt="<?php echo $portfolio_items[$i - 1]; ?>">

                        </a>
                    </div>
                <?php endfor; ?>

            </div>

            <!-- Навігація Swiper -->
            <div class="swiper-slide__wrapper">
                <div class="swiper-button-prev">
                    <button class="arrow-btn"><?php echo $svg_arrow; ?></button>
                </div>
                <div class="swiper-button-next">
                    <button class="arrow-btn"><?php echo $svg_arrow; ?></button>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>