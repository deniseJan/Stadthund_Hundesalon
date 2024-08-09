<?php

add_filter('upload_mimes', function($mimes = []){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
});


?>