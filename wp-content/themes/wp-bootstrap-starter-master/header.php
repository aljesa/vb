<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="site-preloader-wrap">
    <div class="spinner"></div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="top-header">
            <div class="container-xl">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                        <ul class="list-unstyled">
                            <li class="d-inline-block me-3">
                                <a href="https://goo.gl/maps/vfGzhzmUHYPN7NGFA" target="_blank">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>
                                        Schlosstalstrasse 9, 8406 Winterthur,
                                    </span>
                                </a>
                            </li>
                            <li class="d-inline-block me-3">
                                <a href="tel:+41791202677">
                                    <i class="fas fa-phone-alt"></i>
                                    <span>
                                       +41 79 120 26 77
                                    </span>
                                </a>
                            </li>
                            <li class="d-inline-block me-3">
                                <a href="mailto:vb@gmail.com">
                                    <i class="fas fa-envelope"></i>
                                    <span>
                                       vesel-bytyqi@outlook.com
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-media col-xl-3 col-lg-3 col-md-3 col-3 text-end">
                        <ul class="list-unstyled">
                            <li class="d-inline-block me-3">
                                <a href="https://facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="https://instagram.com" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <div class="container">

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'secondary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
                <nav class="navbar navbar-expand-xl p-0">
                    <div class="navbar-brand">
                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>

                </nav>
            </div>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
        <?php endif; ?>

