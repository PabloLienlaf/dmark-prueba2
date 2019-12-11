<?php

add_filter('the_tags','add_class_to_tags',10,3);

function add_class_to_tags( $before, $separator, $after){
    $class_to_add = 'text-orange';
    return str_replace('<a href="', '<a class="' . $class_to_add . '" href="', $before);
}

?>
