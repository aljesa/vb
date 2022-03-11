<?php
// Template Name: About Template

get_header(); ?>
<?php

$aboutSubtitle = get_field('subtitle');
$aboutTitle = get_field('title');
$aboutDescription = get_field('description');
$aboutLink = get_field('link');
$aboutImage = get_field('image');


$teamSubtitle = get_field('team-subtitle');
$teamTitle = get_field('team-title');


//Social Media Links

$facebookLink = get_field('facebook-link');
$instagramLink = get_field('instagram-link');
?>
    <div class="banner py-100 bg-light-grey" style="background: linear-gradient(0deg, #000000b3, hsl(0deg 0% 0% / 70%)),url('<?= get_the_post_thumbnail_url(get_the_ID(), '') ?>') top center no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center text-white">
                    <h1><?= the_title() ?></h1>
                    <ul id="breadcrumb" class="list-unstyled">
                        <li class="breadcrumb-item">
                            <?php the_breadcrumb(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="about content my-100 position-relative">
        <div class="shape-one position-absolute">
            <img src="/wp-content/uploads/images/shape-2.png" alt="" class="d-inline-block">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image-block position-relative">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="image mb-3 overflow-hidden">
                                    <img src="<?= $aboutImage['url'] ?>" class="gallery-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-block">
                        <h2 class="section-title"><?= $aboutSubtitle ?></h2>
                        <h4><?= $aboutTitle ?></h4>
                        <div class="text">
                            <p><?= $aboutDescription ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content my-100 py-100 bg-black text-white">
        <div class="container">
            <h2 class="section-title"><?= the_title(); ?></h2>
            <div class="row">
                <div class="page-content col-xl-8 col-lg-8 col-md-12 col-12">
                    <p><?= the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="team content my-100">
        <div class="container">
            <div class="text-center mb-5">
                <h4 class="subtitle"><?= $teamSubtitle ?></h4>
                <h2 class="section-title"><?= $teamTitle ?></h2>
            </div>
            <div class="row justify-content-md-center">
                <?php if ($facebookLink): ?>
                    <h1><?= $facebookLink['url'] ?></h1>
                <?php endif; ?>
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'team',
                    'order' => 'ASC',
                );
                $loop = new wp_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                    $content = get_the_content();
                    $postTitle = get_the_title();
                    echo '<div class="col-lg-4 col-md-6 team-block-one"><div class="inner-box position-relative align-content-center"><div class="image position-relative overflow-hidden"> ';
                    echo get_the_post_thumbnail($post->ID, 'category-thumb') . '</div>
                           <div class="overlay-box position-absolute overflow-hidden">
                                <ul class="social-links">
                                    <li>
                                        <a href="' . $facebookLink['url'] . '">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        
                        <div class="content text-center">
                            <h4>' . $postTitle . '</h4>
                            <div class="designation"> ' . $content . '</div>
                        </div>
                        </div>
                    </div>
                ';
                endwhile;

                wp_reset_query(); ?>
            </div>
        </div>

    </div>


<?php
get_footer();
