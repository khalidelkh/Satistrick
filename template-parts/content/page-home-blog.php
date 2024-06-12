<?php
// Get Blog
$args = array(
  'post_type'   => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 4,
);

$all_posts = new WP_Query($args);

$all_categories = get_categories(array(
  'hide_empty' => false,
));
?>

<div class="grid div-block-773">
  <div class="container-3">
    <div class="w-layout-grid blog-grid">
      <?php if ($all_posts->have_posts()) : ?>
        <div class="content-left">
          <?php while ($all_posts->have_posts()) :
            $all_posts->the_post();
            // Featured Image
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/image-1.jpg";
            // Post Date
            $date = get_field('date', $post->ID);
            // Post description
            $description = get_field('description', $post->ID);
            // Post small description
            $description = get_field('small_description', $post->ID);
            // Post title
            $name = get_field('Name', $post->ID);
          ?>
            <a href="<?=the_permalink();?>" class="blog-item w-inline-block">
              <div class="blog-image-wrap">
                <img src="<?= $featured_img_url ?>" width="380" class="blog-image">
              </div>
              <div class="blog-content">
                <h3 class="heading-h2"><?= $post->post_title ?></h3>
                <p class="paragraph-detials-medium">
                  <?= wp_strip_all_tags($post->post_content) ?></p>
                <div class="profile-block-2">
                  <div class="normal-wrapper">
                    <p class="paragraph-detials-small"><?= $date ?></p>
                  </div>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>

        <div class="content-right">
          <div class="stick-wrapper">
            <form action="<?php echo home_url(''); ?>" class="search w-form" method="get" role="search"><input class="seach-bar w-input" maxlength="256" name="s" placeholder="Search articles" type="search" id="search" required="">
              <a href="#" class="search-button-wrapper w-inline-block">
                <input type="submit" class="search-button w-button" value="">
                <img src="<?= get_template_directory_uri() ?>/assets/images/search-icon.svg" class="search-icon"></a>
            </form>
            <div class="subscription">
              <div class="title-large">Subscribe to our newsletter</div>
              <div class="w-form">
                <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-2" data-wf-page-id="6627c3ecb260398e39d7e6fe" data-wf-element-id="139d2025-4abc-b93c-7d32-985cd5bea1fd" data-ajax-action="contact">
                  <input class="text-field w-input" maxlength="256" name="contact[email]" data-name="Name" placeholder="Email address" type="email" id="name" required="">
                  <div class="submit-button-wrap">
                    <input type="submit" data-wait="Please wait..." class="submit-button-3 w-button" value="">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/arrow-1.svg" class="image-2">
                  </div>
                  <?php udesly_honeypot_field() ?>
                </form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
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
            <div class="categories-block">
              <div class="title-large">Categories</div>
              <?php if (!empty($all_categories)) :
                foreach ($all_categories as $category) :
              ?>
                  <a href="<?= esc_url(get_category_link($category->term_id)); ?>" class="categories-pill w-inline-block">
                    <div class="title-small pink"><?= esc_html($category->name); ?></div>
                  </a>
              <?php
                endforeach;
              endif;
              ?>
            </div>
          </div>
        </div>
    </div>
  </div>
   
  <?php // Pagination
  $total_pages = $all_posts->max_num_pages;
  $next_page_url = get_next_posts_page_link($total_pages);?> 
  <div style="display:flex; justify-content: center;">
  <a href="<?= esc_url($next_page_url); ?>" class="next-button w-inline-block">
   <div class="title-medium" >Next page</div>
  </a>
  </div>