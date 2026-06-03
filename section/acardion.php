<?php
// Отримуємо дані з ACF repeater поля (масив елементів акордеону)
$acardion_data = get_field('acardion');

// Дебаг-вивід даних (тимчасово, для перевірки структури)
echo '<pre>';
print_r($acardion_data);
echo '</pre>';
?>

<!-- Секція акордеону -->
<section id='accordion1' class="acardion">
    <div class="wrapper">
        
        <!-- Заголовок секції -->
        <h2 class="title">Відповіді на поширені запитання</h2>
        
        <div class="acardion__inner">

            <ul class="acardion__items acardion__content-box">

                <!-- Перший елемент акордеону -->
                <li class="acardion__item  acardion__item-box">

                    <div class="acardion__item-wrapper">
                        <!-- Заголовок питання -->
                        <div class="accordion1__title text">
                            Чи безпечні великі кімнатні рослини для домашніх тварин?
                        </div>
                        <!-- Іконка-стрілка -->
                        <span><?php echo svg_arrown(); ?></span>
                    </div>

                    <!-- Контент для мобільної версії -->
                    <ul class="acardion__items acardion__content acardion__items acardion__mobile">
                        <li class="acardion__item acardion__item-mobile active">
                            <p class="acardion__text">
                                Зверніть увагу: не кожна велика кімнатна рослина є безпечною для допитливих домашніх улюбленців та дітей. Деякі з наших зелених рослин можуть бути токсичними при вживанні, тому вони не підходять для будинків, де є тварини або маленькі діти. Завжди перевіряйте інформацію про безпеку на сторінці кожного товару або запитайте нашу команду перед покупкою.
                            </p>
                        </li>
                    </ul>
                </li>

                <!-- Другий елемент акордеону -->
                <li class="acardion__item  acardion__item-box">

                    <div class="acardion__item-wrapper">
                        <div class="accordion1__title text">
                            Як часто потрібно поливати XL рослини?
                        </div>
                        <span><?php echo svg_arrown(); ?></span>
                    </div>

                    <ul class="acardion__items acardion__content acardion__items acardion__mobile">
                        <li class="acardion__item acardion__item-mobile active">
                            <p class="acardion__text">
                                Частота поливу залежить від виду рослини, розміру горщика та умов у вашому домі. Зазвичай великим рослинам потрібен рясний полив один раз на тиждень, але перед цим обов'язково перевірте верхній шар ґрунту — він має бути сухим. Краще недолити, ніж перелити: зайва волога може призвести до загнивання коріння.
                            </p>
                        </li>
                    </ul>
                </li>


                <!-- Третій елемент акордеону -->
                <li class="acardion__item  acardion__item-box">

                    <div class="acardion__item-wrapper">
                        <div class="accordion1__title text">
                            Скільки світла потрібно великим кімнатним рослинам?
                        </div>
                        <span><?php echo svg_arrown(); ?></span>
                    </div>

                    <ul class="acardion__items acardion__content acardion__items acardion__mobile">
                        <li class="acardion__item acardion__item-mobile active">
                            <p class="acardion__text">
                                Більшість великих кімнатних рослин (наприклад, монстера, фікус, філодендрон) люблять яскраве, але розсіяне світло. Уникайте прямих сонячних променів — вони можуть залишити опіки на листі. Ідеальне місце — поруч із вікном, що виходить на схід або захід. Якщо у вас темна кімната, оберіть тіньовитривалі види, наприклад, заміокулькас або сансев'єру.
                            </p>
                        </li>
                    </ul>
                </li>

                <!-- Четвертий елемент акордеону -->
                <li class="acardion__item  acardion__item-box">

                    <div class="acardion__item-wrapper">
                        <div class="accordion1__title text">
                            Чи підходять великі рослини для створення домашнього саду?
                        </div>
                        <span><?php echo svg_arrown(); ?></span>
                    </div>

                    <ul class="acardion__items acardion__content acardion__items acardion__mobile">
                        <li class="acardion__item acardion__item-mobile active">
                            <p class="acardion__text">
                                Абсолютно! XL кімнатні рослини з великим ефектним листям — це справжня окраса будь-якого інтер'єру. Вони ідеально підходять для створення власного міського джунглі в квартирі чи будинку. Такі рослини не лише додають затишку, але й очищують повітря, створюючи приємний мікроклімат. Крім того, влітку вони можуть стати чудовим затишним укриттям для ваших домашніх улюбленців.
                            </p>
                        </li>
                    </ul>
                </li>


            </ul>


            <!-- Контент для десктопної версії (синхронізується з кліками по заголовках зліва) -->
            <ul class="acardion__items acardion__content acardion__items acardion__desktop">
                <li class="acardion__item acardion__item-content active">
                    <p class="acardion__text">
                        Зверніть увагу: не кожна велика кімнатна рослина є безпечною для допитливих домашніх улюбленців та дітей. Деякі з наших зелених рослин можуть бути токсичними при вживанні, тому вони не підходять для будинків, де є тварини або маленькі діти. Завжди перевіряйте інформацію про безпеку на сторінці кожного товару або запитайте нашу команду перед покупкою.
                    </p>
                </li>
                <li class="acardion__item acardion__item-content">
                    <p class="acardion__text text">
                        Частота поливу залежить від виду рослини, розміру горщика та умов у вашому домі. Зазвичай великим рослинам потрібен рясний полив один раз на тиждень, але перед цим обов'язково перевірте верхній шар ґрунту — він має бути сухим. Краще недолити, ніж перелити.
                    </p>
                </li>
                <li class="acardion__item acardion__item-content">
                    <p class="acardion__text">
                        Більшість великих кімнатних рослин люблять яскраве, але розсіяне світло. Уникайте прямих сонячних променів — вони можуть залишити опіки на листі. Ідеальне місце — поруч із вікном, що виходить на схід або захід.
                    </p>
                </li>
                <li class="acardion__item acardion__item-content">
                    <p class="acardion__text">
                        Абсолютно! XL кімнатні рослини з великим ефектним листям — це справжня окраса будь-якого інтер'єру. Вони ідеально підходять для створення власного міського джунглі в квартирі чи будинку, очищують повітря та створюють приємний мікроклімат.
                    </p>
                </li>
            </ul>


        </div>

    </div>
</section>