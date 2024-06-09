<?php
$args = array(
    'post_type'      => 'our_client',
    'posts_per_page' => -1,
);
$clients = new WP_Query($args);
?>

<div class="testimonial-section">
    <img src="<?= get_template_directory_uri() ?>/assets/images/hero-shape-cta.svg" alt="" class="hero-graphic-right">
    <h2 class="h2 white">Our Clients Know Best</h2>
    <p class="standard-paragraph center white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind text</p>
    <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
        <div class="mask w-slider-mask">
            <?php
            if ($clients->have_posts()) :
                while ($clients->have_posts()) :
                    $clients->the_post();
                    $job = get_field('job');
                    $image_url = get_the_post_thumbnail_url('full') ?: get_template_directory_uri() . "/assets/images/team05.jpg";
            ?>
                    <div class="slide w-slide">
                        <div class="slide-wrap">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icn.svg" alt="" class="quotes-icon">
                            <div class="standard-paragraph"><?php the_content(); ?></div>
                            <div class="profile-block">
                                <img src="<?= $image_url?>" width="60" class="profile-image">
                                <div class="profile-details">
                                    <div class="faq-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="paragraph-basic">
                                        <?php echo esc_html($job); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <div class="arrow-left w-slider-arrow-left">
            <div class="icon w-icon-slider-left"></div>
        </div>
        <div class="arrow-right w-slider-arrow-right">
            <div class="icon w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-round"></div>
    </div><img src="<?= get_template_directory_uri() ?>/assets/images/dots.svg" alt="" class="halftone-pattern-2">
</div>