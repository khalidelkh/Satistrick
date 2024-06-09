<?php


$args = [
    'wfPage' => '6627c7bc5c49b83a6004c618',
    'body' => '',
    'head' => 'head/page-old-home',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-blog-exemple');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-blog-exemple' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/page-old-home',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-blog-exemple');
}

get_footer('', $args);
