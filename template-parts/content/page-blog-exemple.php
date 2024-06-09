<?php 
/* Template Name: Blog exemple*/

            // Featured Image
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/image-1.jpg";
            // Post Date
            $date = get_field('date', $post->ID);
            // Post description
            $description = get_field('description', $post->ID);
            // Post small description
            $small_description = get_field('small_description', $post->ID);
            // Post title
            $name = get_field('Name', $post->ID);
 ?>

<div class="header-blog">
    <div class="hero-container">
      <h1 class="heading-h1">
       <?=$post->post_title ?>
      </h1>
      <div class="profile-block-header">
          <div class="paragraph-detials-small white-50" >
          <?=$date?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="blog-section-2" >
    <div class="container-5">
      <div class="w-layout-grid blog-grid">
        <div class="content-left_blog">
          <p class="content-left_blo">
          <?= $description ?>
           </p>
          <h2 class="blog-h2">
          <?=$name ?>
          </h2>
          <p class="paragraph-detials-large">
          <?=$small_description?>
          </p>
          <h3 class="heading-h3">
            1. Jasmine
          </h3>
          <img src="<?= get_template_directory_uri() ?>/assets/images/jasmine.jpg" 
            width="733" sizes="(max-width: 991px) 94vw, 733px" 
          >
        </div>
        <div class="content-right">
          <div class="stick-wrapper">
            <div class="subscription">
              <div class="title-large">
                Subscribe to our newsletter
              </div>
              <div class="w-form">
                <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-3" data-wf-page-id="6627c7bc5c49b83a6004c618" data-wf-element-id="3388e20f-b247-1d40-63d2-b7bd39503be0" data-ajax-action="contact">
                  <input class="text-field w-input" maxlength="256" name="contact[email]" data-name="Name 2" placeholder="Email address" type="email" id="name-2" required="">
                  <div class="submit-button-wrap">
                    <input type="submit" data-wait="Please wait..." class="submit-button-4 w-button" value="">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/arrow-1.svg" class="image-2"></div>
                <?php udesly_honeypot_field() ?></form>
                <div class="w-form-done">
                  <div data-text="t5a0ea5a1">Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div data-text="tn7c112e99">Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="featured-articles">
              <div class="title-large">Related articles</div>
              <div class="featured-block">
              <div class="featured-articles">
              <div class="title-large">Featured</div>
              <div class="featured-block">
                <?php
                $args = array(
                  'post_type'      => 'post',
                  'posts_per_page' => 4,
                  'meta_query'     => array(
                    array(
                      'key'     => 'featured_post',
                      'value'   => '1',
                      'compare' => '==',
                    ),
                  ),
                );
                $featured_posts = new WP_Query($args);
                if ($featured_posts->have_posts()) :
                  while ($featured_posts->have_posts()) :
                    $featured_posts->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="featured-item w-inline-block">
                      <img src="<?= $featured_img_url ?>" width="90" class="feature-image">
                      <div class="title-small"><?php the_title(); ?></div>
                    </a>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>No featured articles found.</p>';
                endif;
                ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  