<?php
/* Template Name: Про нас (About Us) */
get_header();
?>

<main class="about-page">
    <?php
    if (!is_front_page() && function_exists('breadcrumbs')) { ?>
        <div class="wrapper">
            <?= breadcrumbs(); ?>
        </div>
    <? } ?>

    <!-- 1. Hero Section (Головний екран) -->
    <section class="about-hero">
        <div class="container">
            <h1 class="about-hero__title">Про Hortiqa</h1>
            <p class="about-hero__subtitle">Більше, ніж просто садовий центр. Ми створюємо затишок і оживляємо ваш простір природою, поєднуючи експертні знання з турботою про кожну рослину.</p>
        </div>
    </section>

    <!-- 2. Наша Історія -->
    <section class="about-story">
        <div class="container">
            <div class="about-story__grid">
                <div class="about-story__content">
                    <h2 class="about-story__title">Наша історія</h2>
                    <p class="about-story__text">
                        Історія Hortiqa почалася з простої, але щирої ідеї: зробити якісні рослини та садове приладдя доступними для кожного, хто хоче створити свій зелений оазис.
                    </p>
                    <p class="about-story__text">
                        Кілька років тому ми були невеликою ініціативою з кількома теплицями та великою любов'ю до природи. Сьогодні Hortiqa — це один із найбільших садових центрів, який поєднує традиційний догляд за рослинами з сучасними технологіями онлайн-шопінгу. Ми особисто відбираємо кожну рослину, співпрацюючи лише з перевіреними розплідниками, щоб ви отримували здорові, сильні та красиві зелені насадження прямо до своїх дверей.
                    </p>
                </div>
                <div class="about-story__image">
                    <!-- Замініть посилання на реальне фото вашої теплиці, магазину або команди -->
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/png/about.avif" alt="Теплиця Hortiqa">

                </div>
            </div>
        </div>
    </section>

    <!-- 3. Місія та Цінності -->
    <section class="about-mission">
        <div class="container">
            <h2 class="about-mission__title">Наші цінності</h2>
            <div class="about-mission__grid">
                <div class="mission-card">
                    <div class="mission-card__icon">🌱</div>
                    <h3 class="mission-card__title">Якість без компромісів</h3>
                    <p class="mission-card__text">Ми ретельно перевіряємо стан кожної рослини перед відправкою, гарантуючи, що ви отримаєте лише здоровий і життєздатний продукт.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-card__icon">🚚</div>
                    <h3 class="mission-card__title">Безпечна доставка</h3>
                    <p class="mission-card__text">Спеціальна екологічна упаковка захищає рослини під час транспортування, щоб вони приїхали до вас у ідеальному стані за 24–48 годин.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-card__icon">💚</div>
                    <h3 class="mission-card__title">Експертна підтримка</h3>
                    <p class="mission-card__text">Наші садівники та флористи завжди на зв'язку, щоб допомогти з вибором рослини та дати поради щодо догляду за нею.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Як ми працюємо (Процес) -->
    <section class="about-process">
        <div class="container">
            <h2 class="about-process__title">Як ми дбаємо про ваше замовлення</h2>
            <div class="about-process__steps">
                <div class="process-step">
                    <span class="process-step__number">01</span>
                    <h4 class="process-step__title">Ретельний відбір</h4>
                    <p class="process-step__text">Ми формуємо замовлення з найкращих доступних рослин у нашому центрі.</p>
                </div>
                <div class="process-step">
                    <span class="process-step__number">02</span>
                    <h4 class="process-step__title">Надійна упаковка</h4>
                    <p class="process-step__text">Використовуємо спеціальні матеріали, що фіксують ґрунт і захищають листя.</p>
                </div>
                <div class="process-step">
                    <span class="process-step__number">03</span>
                    <h4 class="process-step__title">Швидка доставка</h4>
                    <p class="process-step__text">Передаємо посилку надійним перевізникам для швидкого прибуття до вас.</p>
                </div>
                <div class="process-step">
                    <span class="process-step__number">04</span>
                    <h4 class="process-step__title">Ваш затишок</h4>
                    <p class="process-step__text">Ви насолоджуєтеся новою рослиною, а ми завжди поруч для консультацій.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Заклик до дії (CTA) -->
    <section class="about-cta">
        <div class="container">
            <h2 class="about-cta__title">Готові наповнити свій дім життям?</h2>
            <p class="about-cta__text">Обирайте з тисячі здорових рослин та садових аксесуарів вже сьогодні.</p>
            <a href="/сategory/" class="about-cta__button">Перейти до каталогу</a>
        </div>
    </section>

</main>

<?php
get_footer();
?>