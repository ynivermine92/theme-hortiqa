<?php





function svg_arrown()
{

    $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

    $svg = file_get_contents($arrow);

    $svg = str_replace('<svg', '<svg class="icon-arrow"', $svg);

    echo $svg;
}
