<?php
/* Template Name: support*/
get_header();
?>

<main class="support-page">

    <?php
    if (!is_front_page() && function_exists('breadcrumbs')) { ?>
        <div class="wrapper">
            <?= breadcrumbs(); ?>
        </div>
    <? } ?>

    
    <!-- 1. Hero Section -->
    <section class="support-hero">
        <div class="wrapper">
            <h1 class="support-hero__title">Чим ми можемо допомогти?</h1>
            <p class="support-hero__subtitle">Наша команда експертів готова відповісти на ваші запитання щодо догляду за рослинами, доставки замовлень або будь-яких інших питань.</p>
        </div>
    </section>

    <!-- 2. Способи зв'язку -->
    <section class="support-contact">
        <div class="wrapper">
            <h2 class="support-contact__title">Зв'яжіться з нами</h2>
            <div class="support-contact__grid">
                <div class="contact-card">
                    <div class="contact-card__icon">📧</div>
                    <h3 class="contact-card__title">Email</h3>
                    <p class="contact-card__text">support@horti.com</p>
                    <p class="contact-card__time">Відповідаємо протягом 24 годин</p>
                </div>
                <div class="contact-card">
                    <div class="contact-card__icon">📞</div>
                    <h3 class="contact-card__title">Телефон</h3>
                    <p class="contact-card__text">+380(93)35</p>
                    <p class="contact-card__time">Пн–Пт: 9:00–18:00</p>
                </div>
                <div class="contact-card">
                    <div class="contact-card__icon">💬</div>
                    <h3 class="contact-card__title">Онлайн-чат</h3>
                    <p class="contact-card__text">Жива підтримка на сайті</p>
                    <p class="contact-card__time">Доступний 7 днів на тиждень</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. FAQ (Часті питання) -->
    <section class="support-faq">
        <div class="wrapper">
            <h2 class="support-faq__title">Часті питання</h2>
            <div class="faq-grid">

                <div class="faq-item">
                    <h4 class="faq-item__question">Як довго триває доставка рослин?</h4>
                    <div class="faq-item__answer">
                        <p>Доставка зазвичай займає 24–48 годин залежно від вашого регіону. Ми використовуємо спеціальну упаковку, щоб рослини приїхали до вас у ідеальному стані.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h4 class="faq-item__question">Чи можу я повернути рослину, якщо вона прийшла пошкодженою?</h4>
                    <div class="faq-item__answer">
                        <p>Так, звичайно! Якщо ваша рослина прийшла пошкодженою, зв'яжіться з нами протягом 48 годин після отримання з фотографією, і ми замінимо її або повернемо кошти.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h4 class="faq-item__question">Чи надаєте ви поради щодо догляду за рослинами?</h4>
                    <div class="faq-item__answer">
                        <p>Абсолютно! Кожна рослина має детальну інструкцію з догляду, а наші експерти завжди готові відповісти на ваші запитання щодо поливу, освітлення та інших аспектів.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h4 class="faq-item__question">Які способи оплати ви приймаєте?</h4>
                    <div class="faq-item__answer">
                        <p>Ми приймаємо всі основні кредитні та дебетові картки (Visa, Mastercard), PayPal, а також оплату при отриманні (накладений платіж) у деяких регіонах.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h4 class="faq-item__question">Чи можна забрати замовлення самостійно?</h4>
                    <div class="faq-item__answer">
                        <p>Так! У нас є фізичний садовий центр, де ви можете забрати своє замовлення. Просто виберіть опцію "Самовивіз" під час оформлення замовлення.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <h4 class="faq-item__question">Чи є у вас програма лояльності?</h4>
                    <div class="faq-item__answer">
                        <p>Так! Зареєструйтеся на нашому сайті та отримуйте бали за кожну покупку, які можна обміняти на знижки та ексклюзивні пропозиції.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- 4. Форма зворотного зв'язку -->
    <section class="support-form" id="supportFormSection">
        <div class="wrapper">
            <div class="support-form__grid">
                <div class="support-form__content">
                    <h2 class="support-form__title">Не знайшли відповідь?</h2>
                    <p class="support-form__text">Напишіть нам, і ми зв'яжемося з вами якомога швидше. Наші експерти готові допомогти з будь-яким питанням.</p>
                </div>
                <div class="support-form__wrapper">
                    <form class="support-form__form" id="contactSupportForm" novalidate>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ваше ім'я" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Ваш email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Ваше повідомлення" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="support-form__button">Надіслати повідомлення</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Модальне вікно успішної відправки -->
    <div class="success-modal-overlay" id="successModalOverlay" style="display: none;">
        <div class="success-modal-box">
            <button class="success-modal-close" id="successModalCloseBtn" type="button" aria-label="Закрити">&times;</button>

            <div class="success-modal-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>

            <h3 class="success-modal-title">Дякуємо за повідомлення!</h3>
            <p class="success-modal-text">Ми успішно отримали ваш запит. Наші експерти зв'яжуться з вами протягом 24 годин.</p>

            <button class="success-modal-button" id="successModalOkBtn" type="button">Чудово</button>
        </div>
    </div>

</main>

<?php
get_footer();
?>