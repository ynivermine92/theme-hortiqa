<?php


function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


function fix_svg($file, $filename, $mimes)
{
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext === 'svg') {
        $file['type'] = 'image/svg+xml';
    }
    return $file;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg', 10, 3);







function svg_arrown()
{

    $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

    $svg = file_get_contents($arrow);

    $svg = str_replace('<svg', '<svg class="icon-arrow"', $svg);

    echo $svg;
}
