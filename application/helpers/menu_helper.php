<?php
function set_active($uri_segment, $class = 'active') {
    $CI =& get_instance();
    return ($CI->uri->uri_string() == $uri_segment) ? $class : '';
}

function set_dropdown_active_header($links = [], $class = 'active') {
    $CI =& get_instance();
    $current_url = $CI->uri->uri_string();

    foreach ($links as $link) {
        if (strpos($current_url, $link) !== false) {
            return $class;
        }
    }

    return '';
}

function set_dropdown_active($links = [], $class = 'show') {
    $CI =& get_instance();
    $current_url = $CI->uri->uri_string();

    foreach ($links as $link) {
        if (strpos($current_url, $link) !== false) {
            return $class;
        }
    }

    return '';
}