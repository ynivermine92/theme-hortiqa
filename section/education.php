<section class="education">
    <div class="wrapper">
        <div class="row ">
            <div class="col-12">
                <div class="education__wrapper">

                    <h2 class="title">Inspiration & Education</h2>
                    <a class="education__link" href="#"><span class="text">All articles</span>
                        <?php
                        $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                        $svg = file_get_contents($arrow);

                        $svg = str_replace('<svg', '<svg class="icon-arrow"', $svg);

                        echo $svg;
                        ?>
                    </a>
                </div>
            </div>
        </div> <a href=""></a>
        <div class="row">
            <div class="col-xxl-3 col-md-6 col-12">
                <a class="education__inner" href="#">
                    <div class="education__image">
                        <img src="https://picsum.photos/1920/1080" alt="">
                    </div>
                    <div class="education__box">
                        <div class="education__data">
                            <div class="education__label">Category</div>

                            <span class="education__month month">Aug 23, 2025</span>

                        </div>

                        <div class="education__sub-title title">
                            Top 5 Easy Indoor Plants for better air quality
                        </div>
                        <p class="education__text text">Shop plants, decor & tools with fast delivery and expert care guides</p>

                        <button class="education__content-btn">
                            <span class="text">Learn more</span>
                            <?= $svg; ?>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-12">
                <a class="education__inner" href="#">
                    <div class="education__image">
                        <img src="https://picsum.photos/1920/1080" alt="">
                    </div>
                    <div class="education__box">
                        <div class="education__data">
                            <div class="education__label">Category</div>

                            <span class="education__month month">Aug 23, 2025</span>

                        </div>

                        <div class="education__sub-title title">
                            Top 5 Easy Indoor Plants for better air quality
                        </div>
                        <p class="education__text text">Shop plants, decor & tools with fast delivery and expert care guides</p>


                        <button class="education__content-btn">
                            <span class="text">Learn more</span>
                            <?= $svg; ?>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-12">
                <a class="education__inner" href="#">
                    <div class="education__image">
                        <img src="https://picsum.photos/1920/1080" alt="">
                    </div>
                    <div class="education__box">
                        <div class="education__data">
                            <div class="education__label">Category</div>

                            <span class="education__month month">Aug 23, 2025</span>

                        </div>

                        <div class="education__sub-title title">
                            Top 5 Easy Indoor Plants for better air quality
                        </div>
                        <p class="education__text text">Shop plants, decor & tools with fast delivery and expert care guides</p>


                        <button class="education__content-btn">
                            <span class="text">Learn more</span>
                            <?= $svg; ?>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-12">
                <a class="education__inner" href="#">
                    <div class="education__image">
                        <img src="https://picsum.photos/1920/1080" alt="">
                    </div>
                    <div class="education__box">
                        <div class="education__data">
                            <div class="education__label">Category</div>

                            <span class="education__month month">Aug 23, 2025</span>

                        </div>

                        <div class="education__sub-title title">
                            Top 5 Easy Indoor Plants for better air quality
                        </div>
                        <p class="education__text text">Shop plants, decor & tools with fast delivery and expert care guides</p>


                        <button class="education__content-btn">
                            <span class="text">Learn more</span>
                            <?= $svg; ?>
                        </button>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>