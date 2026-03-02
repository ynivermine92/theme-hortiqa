<section class="testimonials">
    <div class="wrapper">


        <!-- Slider main container -->

        <!-- Slider main container -->
        <div class="testimonials__slider swiper">


            <div class="row">
                <div class="col-12">
                    <div class="testimonials__wrapper">

                        <h2 class="title">Testimonials & Social Proof</h2>

                        <?php
                        $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                        $svg = file_get_contents($arrow);

                        $svg = str_replace('<svg', '<svg class="icon-arrow"', $svg);


                        ?>
                        <div class="testimonials__content">

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"> <button class="arrow-btn"> <?php echo $svg; ?> </button></div>



                            <div class="swiper-button-next"> <button class="arrow-btn"> <?php echo $svg; ?> </button></div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->


                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">

                                <?php get_template_part('section/rating'); ?>

                                <div class="swiper-sub__title">
                                    Indoor Dracaena — thriving in my living room for over 2 months

                                </div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">I’m really happy with my new plant! The leaves are fresh and healthy, and it instantly brightened up my living room. Easy to care for and delivered safely in perfect condition — highly recommend</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Simona M.</div>
                                <div class="swiper-data month">Aug 23, 2025</div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">

                                <?php get_template_part('section/rating'); ?>

                                <div class="swiper-sub__title">
                                    Indoor Dracaena — thriving in my living room for over 2 months

                                </div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">I’m really happy with my new plant! The leaves are fresh and healthy, and it instantly brightened up my living room. Easy to care for and delivered safely in perfect condition — highly recommend</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Simona M.</div>
                                <div class="swiper-data month">Aug 23, 2025</div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">

                                <?php get_template_part('section/rating'); ?>

                                <div class="swiper-sub__title">
                                    Indoor Dracaena — thriving in my living room for over 2 months

                                </div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">I’m really happy with my new plant! The leaves are fresh and healthy, and it instantly brightened up my living room. Easy to care for and delivered safely in perfect condition — highly recommend</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Simona M.</div>
                                <div class="swiper-data month">Aug 23, 2025</div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">

                                <?php get_template_part('section/rating'); ?>

                                <div class="swiper-sub__title">
                                    Indoor Dracaena — thriving in my living room for over 2 months

                                </div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">I’m really happy with my new plant! The leaves are fresh and healthy, and it instantly brightened up my living room. Easy to care for and delivered safely in perfect condition — highly recommend</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Simona M.</div>
                                <div class="swiper-data month">Aug 23, 2025</div>

                            </div>

                        </div>
                    </div>

                </div>



            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>


        </div>
</section>