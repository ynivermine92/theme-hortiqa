<section class="catalogs testimonials">

    <div class="wrapper">


        <!-- Slider main container -->


        <div class="catalogs__slider swiper">


            <div class="row">
                <div class="col-12">
                    <div class="testimonials__wrapper">

                        <h2 class="title">Subcategories</h2>

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


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide ">

                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/1920/1080" alt="" />
                            <div class="swiper-conntent">


                                <div class="swiper-sub__title">
                                   TEST 2

                                </div>
                            </div>
                        </div>

                    </div>

                </div>




            </div>

            <div class="swiper-pagination"></div>


        </div>
    </div>
</section>