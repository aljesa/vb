<?php
// Template Name: Portfolio Template

get_header(); ?>

<?php
$parent_cat_arg = array('hide_empty' => false, 'parent' => 0);
$parent_cat = get_terms('category', $parent_cat_arg);//category name


$mainTitle = get_field('main_title');

?>

    <div class="banner py-100 bg-light-grey" style="background: linear-gradient(0deg, #000000b3, hsl(0deg 0% 0% / 70%)),url('<?= get_the_post_thumbnail_url(get_the_ID(), '') ?>') center center no-repeat; background-size: cover;">
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

    <div class="content my-100" data-module="Portfolio">
        <div class="container">
            <h2 class="section-title text-center"><?= $mainTitle ?></h2>
            <div class="portfolio-filters">

                <?php


                echo '
                <ul class="filter-list">';
                echo '<li>
                        <a href="javascript:void(0);" class="filter-link default-btn">Alle</a>
                    </li>';
                foreach ($parent_cat as $catVal) {
                    $child_arg = array('hide_empty' => false, 'parent' => $catVal->term_id);
                    $child_cat = get_terms('category', $child_arg);
                    foreach ($child_cat as $child_term) {
                        echo '
                    <li class="filter-item" data-filer=".' . $child_term->name . '">
                        <a href="' . $child_term->term_id . '" class="filter-link default-btn">' . $child_term->name . '</a>
                    </li>
                    '; //Child Category
                    }
                    echo '
                </ul>
                ';

                }
                ?>
            </div>
            <div class="row grid-list portfolio-list" id="posts">
                <?php $args = array(
                    'post_type' => 'post',
                    'category_name' => 'portfolio',
                );

                $loop = new wp_Query($args);

                while ($loop->have_posts()):
                    $loop->the_post();
                    $content = get_the_content();
                    $postTitle = get_the_title();
                    $categories = get_categories();
                    echo '<div class="grid-item portfolio-item col-xl-4 col-lg-4 col-md-6 col-12 mb-3">';
                    echo '<div class="portfolio-wrapper">
                                    <div class="portfolio-image">
                                        <figure class="position-relative">
                                      
                                            <img src = "' . get_the_post_thumbnail_url($post->ID, 'category-thumb') . '" alt = "" title = "">
                                        </figure>
                                    </div>
                                    <div class="image-overlay">
                                        <div class="caption">
                                            <div class="info">
                                                <a href = "' . get_the_post_thumbnail_url($post->ID, 'category-thumb') . '" class="icon full-image" data-lightbox="portfolio">
                                                    <span class="view-img">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                    echo '</div>';
                endwhile;
                wp_reset_query(); ?>

            </div>
        </div>
    </div>

<?php
get_footer();