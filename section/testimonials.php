<section class="testimonials">
    <div class="wrapper">
        <div class="testimonials__slider swiper">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials__wrapper">
                        <h2 class="title">Відгуки та довіра клієнтів</h2>

                        <?php
                        $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';
                        $svg = file_exists( $arrow ) ? file_get_contents( $arrow ) : '';
                        $svg = str_replace( '<svg', '<svg class="icon-arrow"', $svg );
                        ?>

                        <div class="testimonials__content">
                            <div class="swiper-button-prev">
                                <button class="arrow-btn"><?php echo $svg; ?></button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="arrow-btn"><?php echo $svg; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-wrapper">
                <!-- Слайд 1 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant1/618/318" alt="Драцена" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Моя драцена — справжня окраса вітальні</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Замовляла Dracaena для дому і залишилася в захваті! Листя свіже, зелене, без жодних пошкоджень. Рослина прижилася дуже швидко, догляд простий. Дякую за якісну упаковку та швидку доставку!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Олена К.</div>
                                <div class="swiper-data month">12 вер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 2 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant2/618/318" alt="Фікус Бенджаміна" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Ідеальний подарунок для любителя рослин</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Купував фікус у подарунок мамі — вона у захваті! Рослина прийшла в ідеальному стані, у гарному кашпо. Консультант допоміг обрати варіант, який не вимагає складного догляду. Рекомендую!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Андрій М.</div>
                                <div class="swiper-data month">28 сер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 3 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant3/618/318" alt="Монстера" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Нарешті знайшла магазин із живими рослинами!</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">До цього замовляла в інших місцях — часто приходили слабкі рослини. Тут все інакше: монстера приїхала міцна, з великим листям, у вологому ґрунті. Вже пустила новий пагін! Дякую за професійний підхід.</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Ірина В.</div>
                                <div class="swiper-data month">05 жов, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 4 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant4/618/318" alt="Сукуленти" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Затишок у домі завдяки вашим рослинам</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Замовила одразу три сукуленти для робочого столу. Всі здорові, акуратно запаковані, з інструкцією з догляду. Дуже зручно, що є доставка по всій Україні. Обов'язково повернуся за новими!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Тетяна Л.</div>
                                <div class="swiper-data month">19 вер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 5 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant5/618/318" alt="Епіпремнум" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Епіпремнум, який росте на очах</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Замовила Epipremnum aureum для кухні — і не помилилася! Пагони довгі, листя блискуче, рослина дуже витривала. За місяць вже подовшила гілки на 10 см. Ідеально для початківців!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Марія С.</div>
                                <div class="swiper-data month">03 жов, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 6 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant6/618/318" alt="Зааміокулькас" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Зааміокулькас — рослина для зайнятих</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Часто їжджу у відрядження, тому шукала невибагливу рослину. Зааміокулькас — ідеальний вибір! Поливаю раз на 2 тижні, а він росте і радує. Дякую за здоровий саджанець!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Дмитро П.</div>
                                <div class="swiper-data month">21 вер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 7 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant7/618/318" alt="Сансев'єрія" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Сансев'єрія — очищує повітря і радує око</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Купила «тещин язик» для спальні — чула, що він очищує повітря вночі. Рослина прийшла міцна, з рівними листками. За місяць жодного жовтого кінчика! Дуже задоволена покупкою.</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Наталія Р.</div>
                                <div class="swiper-data month">15 сер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 8 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant8/618/318" alt="Пеперомія" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Пеперомія — міні-щастя на підвіконні</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Замовила пеперомію через її компактність. Рослинка маленька, але дуже мила! Листя густе, соковите, без шкідників. Ідеально вписалася в мій міні-сад на кухні. Дякую!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Катерина Б.</div>
                                <div class="swiper-data month">08 вер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 9 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant9/618/318" alt="Філодендрон" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Філодендрон — швидко росте і не капризує</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Шукала ампельну рослину для полиці — філодендрон підійшов ідеально! Пагони гнучкі, листя серцеподібне, росте швидко. За два місяці вже звисає на 30 см. Рекомендую!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Ольга Т.</div>
                                <div class="swiper-data month">30 сер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 10 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant10/618/318" alt="Хлорофітум" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Хлорофітум — найкращий друг початківця</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Це моя перша кімнатна рослина, і я дуже рада, що обрала хлорофітум! Невимогливий, росте навіть у тіні, а ще дає «діток» для розмноження. Дякую за здоровий саджанець та поради!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Анна Г.</div>
                                <div class="swiper-data month">17 вер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 11 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant11/618/318" alt="Спатифілум" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Спатифілум — «жіноче щастя» справді цвіте!</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Замовила спатифілум із надією на цвітіння — і не помилилася! Через три тижні з'явився перший білий квіток. Рослина доглянута, ґрунт якісний, горщик зручний. Дуже вдячна!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Вікторія Д.</div>
                                <div class="swiper-data month">25 сер, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Слайд 12 -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="swiper-inner">
                            <img class="swiper-image" src="https://picsum.photos/seed/plant12/618/318" alt="Набір рослин" />
                            <div class="swiper-conntent">
                                <?php get_template_part('section/rating'); ?>
                                <div class="swiper-sub__title">Набір «Стартовий сад» — ідеально для новачка</div>
                            </div>
                        </div>
                        <div class="swiper-box">
                            <p class="swiper-text">Купила набір із 3 рослин для початку. Всі прижилися, кожна — з інструкцією з догляду. Дуже зручно, що не треба окремо підбирати види. Вже планую наступне замовлення!</p>
                            <div class="swiper-wraper__content">
                                <div class="swiper-admin text">Юлія Ф.</div>
                                <div class="swiper-data month">10 жов, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>