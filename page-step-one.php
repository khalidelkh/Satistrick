<?php


$args = [
    'wfPage' => '6627ad2cd274041346c11e0b',
    'body' => '',
    'head' => 'head/page-old-home',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-step-one');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-step-one' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/page-old-home',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-step-one');
}

get_footer('', $args);
