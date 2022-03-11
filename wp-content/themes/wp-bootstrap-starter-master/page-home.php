<?php
// Template Name: Home Template
get_header(); ?>
<?php
//About Section
$servicesSubtitle = get_field('subtitle');
$servicesTitle = get_field('services-title');

// Contact banner
$bannerTitle = get_field('contact-banner-title');
$bannerLink = get_field('contact-banner-link');
$bannerBg = get_field('contact-banner-bg');
//News Section
$newsSubtitle = get_field('section_subtitle');
$newsTitle = get_field('section_title');

$aboutSubtitle = get_field('about-subtitle');
$aboutTitle = get_field('about-title');
$aboutDescription = get_field('about-description');
$aboutLink = get_field('about-link');
$aboutImage = get_field('about-image');

?>
    <div class="home-slider dl-slider" id="main-slider" data-module="Home">
        <?php
        $rows = get_field('slider-fields');
        if ($rows)
        {
            foreach ($rows as $row)
            {
                $image = $row['image'];
                $subtitle = $row['subtitle'];
                $title = $row['title'];
                $description = $row['description'];
                $link = $row['link'];

                echo '<div class="single-slide">';
                echo '<div class="bg-img kenburns-top-right" style="background-image: url(' . $image['url'] . ');"></div>
            <div class="overlay"></div>
            <div class="slider-content-wrap d-flex align-items-center text-left">
                <div class="container">
                    <div class="slider-content">
                        <div class="dl-caption medium">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="1s">' . $subtitle . '</div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="2s">' . $title . '</div>
                            </div>
                        </div>
                        <div class="dl-caption small">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="3s">' . $description . '</div>
                            </div>
                        </div>
                        <div class="dl-btn-group">
                            <div class="inner-layer">
                            
                                <a href="' . $link['url'] . '" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s" title=" ' . $title . '">' . $link['title'] . ' <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> ';
                echo '</div>';
            }
        }
        ?>

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
                                    <img src="<?= $aboutImage['url'] ?>" class="gallery-img" alt="<?= $aboutImage['alt'] ?>" title="">
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
                        <div class="link-btn">
                            <a href="<?= $aboutLink['url'] ?>" class="default-btn">
                                <span><?= $aboutLink['title'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content bg-image my-10 py-100" style="background: linear-gradient(0deg, #000000b3, hsl(0deg 0% 0% / 70%)), url(<?= $bannerBg['url'] ?>) no-repeat;     background-size: cover;
            background-position: center 70%;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-8 col-12 py-100 text-white">
                    <h1><?= $bannerTitle ?></h1>
                    <a href="<?= $bannerLink['url'] ?>" class="default-btn"><?= $bannerLink['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="content bg-black my-100 py-100 bg-tint">-->
<!--        <div class="container">-->
<!--            <div class="text-center mb-5">-->
<!--                <h4 class="subtitle">--><?//= $servicesSubtitle ?><!--</h4>-->
<!--                <h2 class="section-title">--><?//= $servicesTitle ?><!--</h2>-->
<!--            </div>-->
<!--            <div class="row justify-content-md-center text-center">-->
<!--                --><?php
//                $rows = get_field('services-fields');
//                if ($rows)
//                {
//                    foreach ($rows as $row)
//                    {
//                        $icon = $row['icon'];
//                        $title = $row['title'];
//                        $description = $row['description'];
//                        $link = $row['link'];
//
//                        echo '
//                <div class="col-xl-4 col-lg-4 col-md-12 col-12"> ';
//                        echo '  <div class="card mx-auto">
//                            <span class="icon-wrapper">
//                                <img src="' . $icon['url'] . '" alt="' . $icon['alt'] . '" title="' . $icon['title'] . '">
//                            </span>
//                        <div class="card-body">
//                            <h3>
//                                <a href="' . $link['url'] . '" title="' . $link['title'] . '">' . $title . '</a>
//                            </h3>
//                            <p class="card-text">
//                                ' . $description . '
//                            </p>
//                        </div>
//                    </div>';
//                        echo '</div>';
//
//                    }
//                }
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="portfolio content my-100">
        <div class="container">
            <div class="text-center mb-5">
                <h4 class="subtitle"><?= $newsSubtitle ?></h4>
                <h2 class="section-title"><?= $newsTitle ?></h2>
            </div>
            <div class="row">

                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'portfolio',
                );

                $loop = new wp_Query($args);

                while ($loop->have_posts()):
                    $loop->the_post();
                    $content = get_the_content();
                    $postTitle = get_the_title();
                    echo '<div class="col-xl-4 col-lg-4 col-md-12 col-12"> <div class="card mx-auto w-img">';
                    echo '<div class="card-img">';
                    echo get_the_post_thumbnail($post->ID, 'category-thumb') . '</div>';
                    echo '<div class="card-body"> ';
                    echo '<div class="d-flex mb-3">';
                    echo '<span class="date me-4 d-inline-block>">';
                    echo '<i class="far fa-calendar-alt me-2"></i>';
                    echo get_the_date();
                    echo '</span>';
                    echo '<span class="author>">';
                    echo '<i class="fas fa-user me-2"></i>';
                    echo get_the_author();
                    echo '</span>';
                    echo '</div>';
                    echo '<h4> ';
                    echo '<a href="' . get_permalink() . '"> ';
                    echo mb_strimwidth($postTitle, 0, 35, '...') . '</a> ';
                    echo '</h4> ';
                    echo mb_strimwidth($content, 0, 250, '...');
                    echo '<div>';
                    echo '<a href="' . get_permalink() . '" class="default-btn"> ' . 'Mehr Informationen' . '</a></div>';
                    echo '</div> ';
                    echo ' </div> </div>';
                    //                        echo '<a href="'.get_permalink().'">';
                    //                        echo get_the_post_thumbnail($post->ID, 'category-thumb');
                    //                        the_title( '<h6>', '</h6>' );
                    //                        echo '</a>';

                endwhile;

                wp_reset_query(); ?>
            </div>

        </div>
    </div>



<?php
get_footer();

