<?php


$args = [
    'wfPage' => '66269d354c2e24d15c7b0863',
    'body' => '',
    'head' => 'head/page-old-home',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('404');
}
     
get_header('', $args);

udesly_get_content_template( '404' );

$args = [
  'footer' => 'footer/page-old-home',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('404');
}

get_footer('', $args);
