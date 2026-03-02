<?php
/*
 * Template Name: page constructor
 */
get_header();
?>





<section class="portfolio">
    <div class="wrapper">
        <div class="row">
            <h2 class="title">Portfolio</h2>
        </div>


        <!-- Slider main container -->
        <div class="swiper-portfolio">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                      <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                      <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>
                      <div class="swiper-slide">
                    <a class="portfolio__slider-link" href="#">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                        <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="">
                    </a>
                </div>



            </div>
            <div class="swiper-slide__wrapper">
                <?php
                $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                $svg = file_get_contents($arrow);

                $svg = str_replace('<svg', '<svg class="icon-arrow"', $svg);
                ?>


                <div class="swiper-button-prev"> <button class="arrow-btn"> <?php echo $svg; ?> </button></div>



                <div class="swiper-button-next"> <button class="arrow-btn"> <?php echo $svg; ?> </button></div>
                <!-- If we need navigation buttons -->
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>




        </div>

    </div>
</section>



