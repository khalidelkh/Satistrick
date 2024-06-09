<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php

//  $args = wp_parse_args($args, [
//          'footer' => 'footer/front-page',
//  ]);

get_template_part('template-parts/' . $args['footer']);

wp_footer();   

?>
<div class="bottom-section">
    <div class="flex-container">
      <div class="w-layout-grid footer-grid">
        <div class="footer-block">
          <img src="<?= get_template_directory_uri() ?>/assets/images/whatsapp-image-2024-04-03-at-6.57.27-PM.jpeg" 
          sizes="(max-width: 1439px) 94vw, 1179.984375px" 
          class="footer-logo">
          <div class="paragraph-basic">
            One day, after a troubling visit from the giant Catherine Clifford.
          </div>
        </div>
        <div class="footer-block">
          <div class="footer-title">
             About us
          </div>
          <?php 
           wp_nav_menu(array(
            'theme_location' => 'about-us',
            'menu_id' => 'about-us',
            'container' => 'div',
            'menu_class' => 'about-us',
          ));
          ?>
        </div>
        <div class="footer-block">
          <div class="footer-title">
            Useful
          </div>
          <?php 
           wp_nav_menu(array(
            'theme_location' => 'useful',
            'menu_id' => 'useful',
            'container' => 'div',
            'menu_class' => 'useful',
          ));
          ?>
        </div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form"
           method="get" data-wf-page-id="6627dc5bbb97b6711766a108" 
           data-wf-element-id="20022d5e-1198-04a6-cd46-0297f7e791f5" 
           data-ajax-action="contact">
            <div class="footer-title">Subscribe to Our Newsletter</div>
            <div class="paragraph-basic _40-bottom-padding">One day, after a troubling visit from the giant Catherine Clifford, Chloe leaves her house and sets out in search of three cosy sausages.</div><input class="input-field w-input" maxlength="256" name="contact[email]" data-name="Name" placeholder="Enter your email" type="email" id="name"><input type="submit" data-wait="Please wait..." class="submit-button w-button" value="Subscribe">
          <?php udesly_honeypot_field() ?></form>
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    </body>
</html>
 