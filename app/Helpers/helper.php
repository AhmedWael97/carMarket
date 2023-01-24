<?php

if(!function_exists('translate')) {
    function translate( $term ) {
        return $term;
    }
}

if(!function_exists('get_info')) {
    function get_info($term) {
        return translate($term);
    }
}

?>
