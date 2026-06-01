<?php



function footer_logo($wp_customize)
{
    // Раздел для футера
    $wp_customize->add_section('footer_logo_section', array(
        'title'    => __('Footer Logo', 'your-theme-textdomain'),
        'priority' => 30,
        'description' => '',
    ));

    // Настройка логотипа
    $wp_customize->add_setting('footer_logo_setting', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));

    // Контрол для загрузки изображения
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_control', array(
        'label'    => __('Footer Logo', 'your-theme-textdomain'),
        'section'  => 'footer_logo_section',
        'settings' => 'footer_logo_setting',
    )));
}
add_action('customize_register', 'footer_logo');
?>