<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<?php

    // $args = wp_parse_args($args, [
    //     'wfPage' => '6627d23f8ef4ad8319545117',
    //     'head' => 'head/front-page',
    //     'body' => ''
    // ]);

?>
<html data-wf-page="<?php echo $args['wfPage'] ?>" data-wf-site="66267d6c707f285508041c1c" <?php language_attributes(); ?>><head><?php get_template_part( 'template-parts/' . $args['head'] );  ?><?php wp_enqueue_script('jquery'); wp_head(); ?></head>
<body <?php body_class($args["body"]); ?>>
<?php wp_body_open(); ?>
<img src="<?= get_template_directory_uri() ?>/assets/images/hero-shape.svg"
   alt=""
   class="hero-graphic-right" >

   <div class="navigation-wrap" sym="true">
    <div data-animation="default" 
     class="navigation w-nav" 
     data-easing2="ease" 
     data-easing="ease"
      data-collapse="medium" 
      data-w-id="1910c175-2264-fd01-5982-c38f0c2b7bb7"
      role="banner" data-duration="400" data-doc-height="1">

       <div class="navigation-container">
        <div class="navigation-left">
          <a href="#" 
          class="brand w-nav-brand">
          <img src="<?= get_template_directory_uri() ?>/assets/images/whatsapp_image_2024-04-03_at_6.57.27_PM-removebg-preview-1.png"
           width="116" height="100" loading="eager" 
           alt="" 
            sizes="(max-width: 991px) 100vw, 116px">
          </a>
        </div>
        <div class="navigation-right">
          <nav role="navigation" class="nav-menu-2 w-nav-menu">
            <a href="/" aria-current="page" class="nav-link w-nav-link">Home</a>
            <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
              <nav class="dropdown-toggle w-dropdown-toggle" style="margin-right:-15px">
                <a>
                Features
                </a>
              </nav>
              <nav class="navigation-dropdown w-dropdown-list">
                <div class="dropdown-pointer">
                  <div class="dropdown-wrapper">
                    <a href="/old-home"
                     class="dropdown-link w-inline-block">
                      <div class="icon-wrap">
                        <img alt=""
                         src="https://uploads-ssl.webflow.com/5e2d503812d9356ed3ed29c4/5e2d503812d935b164ed29de_yellow-icon-03.svg"
                          data-img="i41b7992b">
                        </div>
                      <div class="nav-content-wrap">
                        <p class="dropdown-title">
                        Survey Crafting
                      </p>
                        <p class="nav-link-details">
                        Choose the best Questions from our industry based database
                        </p>
                      </div>
                    </a>
                    <a href="/old-home"
                     class="dropdown-link w-inline-block">
                      <div class="icon-wrap">
                        <img alt=""
                         src="https://uploads-ssl.webflow.com/5e2d503812d9356ed3ed29c4/5e2d503812d93559f7ed29dd_yellow-icon-02.svg">
                        </div>
                      <div class="nav-content-wrap">
                        <p class="dropdown-title">
                         Loyalty Incetives
                        </p>
                        <p class="nav-link-details">
                         Drive your sales and feedback with Loyalty Programs
                        </p>
                      </div>
                    </a>
                    <a href="/old-home" class="dropdown-link w-inline-block">
                      <div class="icon-wrap">
                        <img alt=""
                         src="https://uploads-ssl.webflow.com/5e2d503812d9356ed3ed29c4/5e2d503812d9357dfaed29db_yellow-icon-01.svg">
                        </div>
                      <div class="nav-content-wrap">
                        <p class="dropdown-title">
                         Ambassadors
                        </p>
                        <p class="nav-link-details">
                         Create and Manage Client ambassadors
                        </p>
                      </div>
                    </a>
                    <a href="/old-home" class="dropdown-link w-inline-block">
                      <div class="icon-wrap">
                        <img alt=""
                         src="https://uploads-ssl.webflow.com/5e2d503812d9356ed3ed29c4/5e2d503812d9357dfaed29db_yellow-icon-01.svg">
                        </div>
                      <div class="nav-content-wrap">
                        <p class="dropdown-title">NPS</p>
                        <p class="nav-link-details">Create and Manage Client ambassadors</p>
                      </div>
                    </a>
                  </div>
                  <div class="pointer"></div>
                </div>
              </nav>
            </div>
            <a href="/home-blog" class="nav-link w-nav-link">Blog</a>
            <a href="/pricing" class="nav-link w-nav-link">Pricing</a>
          </nav>
          <a href="https://app.satistrick.com/" class="primary-cta w-inline-block">
            <div class="nav-link dark-blue">Try Now</div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/arrow-left.svg"
             alt="" class="arrow">
          </a>
        </div>
      </div> 
    </div> 
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-out" data-easing2="ease-out" role="banner" class="navigation-mob w-nav">
      <div class="navigation-container-mob">
        <a href="#" class="w-nav-brand">
        <img src="
        "
        width="Auto" height="Auto" sizes="(max-width: 991px) 40px, 100vw" 
        class="nav-logo"></a>

        <nav role="navigation" class="mobile-nav w-nav-menu">
          <a href="#" class="mobile-nav-link w-nav-link">Home</a>
          <a href="#" class="mobile-nav-link w-nav-link">Mobile Link 1</a>
          <a href="#" class="mobile-nav-link w-nav-link">Mobile Link 2</a>
          <a href="#" class="mobile-nav-link w-nav-link">Mobile Link 3</a>
          <a href="#" class="mobile-nav-link w-nav-link">Mobile Link 4</a>
          <a href="#" class="mobile-nav-link w-nav-link">Sign Up</a>
        </nav>
        <div class="menu-mob w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>