<?php
$args = array(
    'numberposts' => 3,     
    'orderby'     => 'date', 
    'order'       => 'DESC', 
    'post_status' => 'publish' 
);

$posts = get_posts($args);
// Recent post
$recent_post = $posts[0];
// Featured Image
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/blog-img.png";
// recent post Date
$date = get_field('date', $recent_post->ID);
// recent post Speciality
$speciality = get_field('speciality',$recent_post->ID);
// Other two posts
$two_other_posts = array($posts[1], $posts[2]);
?>

<div class="blog-section">
    <div class="flex-container">
        <h2 class="h2">News &amp; Articles</h2>
        <p class="standard-paragraph center">One day, after a troubling visit from the giant Catherine Clifford, Chloe leaves her house and sets out in search of three cosy sausages.</p>
        <div class="w-layout-grid news-grid">
            <a href="<?= $recent_post->guid ?>" class="articles-block w-inline-block">
                <img src="<?= $featured_img_url ?>" class="article-thumbnail">
                <div class="blog-category"><?= $recent_post->speciality ?></div>
                <div class="blog-title"><?= $recent_post->post_title ?></div>
                <div class="article-profile-block">
                    <div class="date"><?= $date ?></div>
                </div>
            </a>
            <?php foreach ($two_other_posts as $post) :
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/blog-img.png";
                // Post Date
                $date = get_field('date', $post->ID);
                // Post Speciality
                $speciality = get_field('speciality',$post->ID); 
                
            ?>
                <a href="<?= $post->guid ?>" class="articles-block w-inline-block">
                    <img src="<?= $featured_img_url ?>" class="article-thumbnail">
                    <div class="blog-category"><?= $post->speciality ?></div>
                    <div class="blog-title"><?= $post->post_title ?></div>
                    <div class="article-profile-block">
                        <div class="date"><?= $date ?></div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</div>