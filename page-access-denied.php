<?php


$args = [
    'wfPage' => '66277404bafcf9258b80200c',
    'body' => '',
    'head' => 'head/page-old-home',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-access-denied');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-access-denied' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/page-old-home',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-access-denied');
}

get_footer('', $args);