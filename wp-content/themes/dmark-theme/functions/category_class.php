<?php

add_filter('the_category','add_class_to_category',10,3);

function add_class_to_category( $thelist, $separator, $parents){
    $class_to_add = 'text-orange';
    return str_replace('<a href="', '<a class="' . $class_to_add . '" href="', $thelist);
}

?>
