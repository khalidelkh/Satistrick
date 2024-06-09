<?php


$args = [
    'wfPage' => '66269d2994f3d93d11e8e8f2',
    'body' => '',
    'head' => 'head/page-old-home',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('401');
}
     
get_header('', $args);

udesly_get_content_template( '401' );

$args = [
  'footer' => 'footer/page-old-home',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('401');
}

get_footer('', $args);
