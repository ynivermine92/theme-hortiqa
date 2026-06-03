<section class="reverse">
    <div class="wrapper">
        <div class="reverse__inner">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Отримайте безкоштовну консультацію сьогодні</h2>
                </div>
                <div class="reverse__wrapper">
                    <form action="" class="reverse__form">
                        <!-- Ім'я -->
                        <label class="reverse__label" for="name">
                            <input class="reverse__name" id="name" name="name" placeholder="Введіть ваше ім'я" type="text" required>
                        </label>

                        <div class="reverse__box">
                            <!-- Email -->
                            <label class="reverse__label" for="email">
                                <input class="reverse__email" id="email" name="email" placeholder="Введіть ваш email" type="email" required>
                            </label>

                            <!-- Телефон -->
                            <!-- Телефон -->
                            <label class="reverse__label" for="phone">
                                <input class="reverse__phone phone__input"
                                    id="phone"
                                    name="phone"
                                    placeholder="+380 (__) ___-__-__"
                                    type="tel"
                                    maxlength="18"
                                    required>
                            </label>
                        </div>

                        <!-- Поле для опису проекту -->
                        <label class="reverse__label" for="textarea">
                            <textarea class="reverse__textarea" id="textarea" name="project" placeholder="Коротко опишіть ваш проект" required></textarea>
                        </label>

                        <button class="reverse__btn btn-green" type="submit">Замовити дзвінок</button>
                        <div class="reverse__time">
                            <p class="reverse__text">Ми відповімо протягом 24 годин</p>
                        </div>
                    </form>

                    <!-- Модальне вікно успішної відправки -->
                    <div class="modal-overlay" id="reverseModal">
                        <div class="modal-content">
                            <button class="modal-close" id="reverseModalClose">&times;</button>
                            <div class="modal-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <h3 class="modal-title">Дякуємо за звернення!</h3>
                            <p class="modal-text">Ваше повідомлення успішно надіслано. Наші спеціалісти зв'яжуться з вами найближчим часом.</p>
                            <button class="modal-btn" id="reverseModalBtn">Чудово</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>