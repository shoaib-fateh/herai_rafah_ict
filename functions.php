<?php




function herai_rafah_isp_enqueue_styles()
{
    wp_enqueue_style('herai-rafah-flaticon', get_stylesheet_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('theme-style-css', get_stylesheet_directory_uri() . '/assets/css/theme-style.css');
    wp_enqueue_style('theme-responsive-css', get_stylesheet_directory_uri() . '/assets/css/theme-responsive.css');
    wp_enqueue_style('elementor-post-7-css', get_stylesheet_directory_uri() . '/assets/css/post-7.css');

    // main styles
    wp_enqueue_style('hrisp-style-css', get_stylesheet_directory_uri() . '/style.css');

    // Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('bootstrap-icon-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css', array(), '1.7.0', 'all');

    wp_enqueue_style('ai-preloader-css', get_stylesheet_directory_uri() . '/css/ai-preloader-public.css');
    wp_enqueue_style('contact-form-7-css', get_stylesheet_directory_uri() . '/contact-form-7/includes/css/styles.css');
    wp_enqueue_style('hfe-style-css', get_stylesheet_directory_uri() . '/assets/css/header-footer-elementor.css');
    wp_enqueue_style('elementor-icons-css', get_stylesheet_directory_uri() . '/assets/lib/eicons/css/elementor-icons.min.css');
    wp_enqueue_style('elementor-frontend-css', get_stylesheet_directory_uri() . '/assets/css/frontend-lite.min.css');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/lib/swiper/swiper.min.css');
    wp_enqueue_style('venobox-css', get_stylesheet_directory_uri() . '/assets/css/venobox.min.css');
    wp_enqueue_style('style1-css', get_stylesheet_directory_uri() . '/assets/css/widgets-style.css');
    wp_enqueue_style('flaticon-css', get_stylesheet_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('ai-animation-css', get_stylesheet_directory_uri() . '/assets/css/ai-animation.css');
    wp_enqueue_style('owl-style-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('slick-style-css', get_stylesheet_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('widget-responsive-css', get_stylesheet_directory_uri() . '/assets/css/widget-responsive.css');
    wp_enqueue_style('elementor-icons-shared-0-css', get_stylesheet_directory_uri() . '/assets/lib/font-awesome/css/fontawesome.min.css');
    wp_enqueue_style('elementor-icons-fa-brands-css', get_stylesheet_directory_uri() . '/assets/lib/font-awesome/css/brands.min.css');

    // Add DNS prefetch links
    echo '<link rel="dns-prefetch" href="//unpkg.com" />';
    echo '<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />';
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com" />';
    echo '<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />';
}

add_action('wp_enqueue_scripts', 'herai_rafah_isp_enqueue_styles');


function herai_rafah_isp_enqueue_scripts()
{
    // Register and enqueue jQuery
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), '3.7.1', true);
    wp_enqueue_script('jquery');

    // Register and enqueue jQuery Migrate
    wp_register_script('jquery-migrate', get_stylesheet_directory_uri() . '/js/jquery-migrate.min.js', array('jquery'), '3.4.1', true);
    wp_enqueue_script('jquery-migrate');

    // Enqueue additional scripts
    wp_enqueue_script('ai-preloader-js', get_stylesheet_directory_uri() . '/js/ai-preloader-public.js', array(), '1.0.2', true);

    // Contact Form 7 scripts
    wp_enqueue_script('swv-js', get_stylesheet_directory_uri() . '/contact-form-7/swv/js/index.js', array(), '5.9.6', true);
    wp_enqueue_script('contact-form-7-js', get_stylesheet_directory_uri() . '/contact-form-7/js/index.js', array(), '5.9.6', true);

    // Additional scripts from solute-elementor-extension
    wp_enqueue_script('venobox-js', get_stylesheet_directory_uri() . '/assets/js/venobox.min.js', array(), '1.1', true);
    wp_enqueue_script('tabscript-js', get_stylesheet_directory_uri() . '/assets/js/tabscript.js', array(), '1.1', true);
    wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.1', true);
    wp_enqueue_script('slick-carousel-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array(), '1.1', true);
    wp_enqueue_script('isotope-js', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.1', true);
    wp_enqueue_script('images-loaded-js', 'https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js', array(), '1.1', true);
    wp_enqueue_script('particles-js', get_stylesheet_directory_uri() . '/assets/js/particles.min.js', array(), '1.1', true);
    wp_enqueue_script('widget-script-js', get_stylesheet_directory_uri() . '/assets/js/widget-script.js', array(), '1.1', true);
    wp_enqueue_script('swiper-script-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.js', array(), '1.0.2', true);

    // Elementor scripts
    wp_enqueue_script('elementor-webpack-runtime-js', get_stylesheet_directory_uri() . '/assets/js/webpack.runtime.min.js', array(), '3.22.1', true);
    wp_enqueue_script('elementor-frontend-modules-js', get_stylesheet_directory_uri() . '/assets/js/frontend-modules.min.js', array(), '3.22.1', true);
    wp_enqueue_script('elementor-waypoints-js', get_stylesheet_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array(), '4.0.2', true);
    wp_enqueue_script('jquery-ui-core-js', get_stylesheet_directory_uri() . '/js/jquery-ui/core.min.js', array(), '1.13.2', true);
    wp_enqueue_script('elementor-frontend-js', get_stylesheet_directory_uri() . '/assets/js/frontend.min.js', array(), '3.22.1', true);

    // wp_enqueue_script('theme-script-js', get_stylesheet_directory_uri() . '/js/theme-script.js', array(), '1.0.2', true);
    wp_enqueue_script(
        'theme-script-js',
        'https://wp.urnoit.net/solute/wp-content/themes/solute/assets/js/theme-script.js',
        array(),
        '1.0.2',
        true
    );

    // Inline script for Contact Form 7
    wp_add_inline_script('contact-form-7-js', 'var wpcf7 = {"api":{"root":"' . esc_url_raw(rest_url()) . '","namespace":"contact-form-7/v1"}};');
}

add_action('wp_enqueue_scripts', 'herai_rafah_isp_enqueue_scripts');
