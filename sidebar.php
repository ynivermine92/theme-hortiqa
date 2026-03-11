<aside class="sidebar">
    <?php
    // Проверяем, зарегистрирован ли сайдбар 'main-sidebar'
    if (is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar'); // Вывод виджетов
    }
    ?>
</aside>