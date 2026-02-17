<?php

/* inc */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/image.php';
require get_template_directory() . '/inc/underscores.php';
require get_template_directory() . '/inc/global-acf.php';
require get_template_directory() . '/inc/arrow.php';





require get_template_directory() . '/inc/header.php';
require get_template_directory() . '/inc/footer.php';
require get_template_directory() . '/inc/woo.php';
require get_template_directory() . '/inc/breadcrumbs.php';




function project_scripts()
{





	wp_enqueue_style(
		'style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		'1.0',
		'all'
	);



	wp_enqueue_script(
		'swiper',
		get_template_directory_uri() . '/assets/js/libs/swiper.js',
		array('jquery'),
		'1.0',
		true
	);

		wp_enqueue_script(
		'mask',
		get_template_directory_uri() . '/assets/js/libs/mask.js',
		array('jquery'),
		'1.0',
		true
	);


	

	wp_enqueue_script(
		'script',
		get_template_directory_uri() . '/assets/js/main.js',
		array('jquery'),
		'1.0',
		true
	);
}
add_action('wp_enqueue_scripts', 'project_scripts');













