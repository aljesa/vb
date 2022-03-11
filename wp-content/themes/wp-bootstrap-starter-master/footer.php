<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="top-footer bg-black py-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>" class="logo">
                                <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                       <?php dynamic_sidebar('footer-2') ?>
                    </div>
                </div>
<!--                --><?php //get_template_part( 'footer-widget' ); ?>
            </div>
        </div>
        <div class="bottom-footer bg-black text-white">
            <div class="container pt-3 pb-3 ">

                <div class="site-info text-center">
                    &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                </div><!-- close .site-info -->
            </div>
        </div>

	</footer><!-- #colophon -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>