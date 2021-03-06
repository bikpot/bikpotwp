<?php
/**
 * adforest functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package adforest
 */
add_action('after_setup_theme', 'adforest_setup');
if (!function_exists('adforest_setup')) :

    function adforest_setup() {
        /* ------------------------------------------------ */
        /* Theme Utilities */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/utilities.php';
        /* ------------------------------------------------ */
        /* Theme Settings */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/theme_settings.php';
        /* ------------------------------------------------ */
        /* TGM */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'tgm/tgm-init.php';
        /* ------------------------------------------------ */
        /* Theme Options */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/options-init.php';
        /* ------------------------------------------------ */
        /* Theme Shortcodes */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/theme_shortcodes/shortcodes.php';
        /* ------------------------------------------------ */
        /* Theme Nav */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/nav.php';
        /* ------------------------------------------------ */
        /* Shop Settings */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/shop-func.php';
        
        /* Wcmarket Place Vendor */
        /*------------------------------------------------ */
        if (in_array('dc-woocommerce-multi-vendor/dc_product_vendor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
            require trailingslashit(get_template_directory()) . 'dc-product-vendor/wcmarket-functions.php';
        }
        
        /* ------------------------------------------------ */
        /* Search Widgets */
        /* ------------------------------------------------ */
        require trailingslashit(get_template_directory()) . 'inc/ads-widgets.php';
        require trailingslashit(get_template_directory()) . 'inc/widgets.php';
        require trailingslashit(get_template_directory()) . 'css/colors/custom-theme-color.php';
        adforest_generate_custom_color_css();
        adforest_set_date_timezone();
    }
endif;
/* ------------------------------------------------ */
/* Enqueue google fonts . */
/* ------------------------------------------------ */
function adforest_google_fonts_service() {

    global $adforest_theme;

    if (!is_rtl()) {
        if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern') {
            $query_args = array('family' => 'Source+Sans+Pro:400,400italic,600%7CQuicksand:400,500,600', 'subset' => '',);
        } else {
            $query_args = array('family' => 'Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic%7CMerriweather:400,300,300italic,400italic,700,700italic', 'subset' => '',);
        }
        wp_register_style('adforest-google_fonts', add_query_arg($query_args, "//fonts.googleapis.com/css"), array(), null);
        wp_enqueue_style('adforest-google_fonts');
    }
}

add_action('wp_enqueue_scripts', 'adforest_google_fonts_service');

/* ------------------------------------------------ */
/* Enqueue scripts and styles. */
/* ------------------------------------------------ */
add_action('wp_enqueue_scripts', 'adforest_scripts');

function adforest_scripts() {
    global $adforest_theme;
    /* Register scripts. */
    wp_register_script('bootstrap', trailingslashit(get_template_directory_uri()) . 'js/bootstrap.min.js', false, false, true);
    wp_register_script('adforest-custom', trailingslashit(get_template_directory_uri()) . 'js/custom.js', array(
        'jquery', 'adforest-dt', 'typeahead', 'adforest-moment', 'adforest-moment-timezone-with-data','parsley',
            ), false, true);
    wp_register_script('adforest-shortcode-functions', trailingslashit(get_template_directory_uri()) . 'js/sb-shortcode-functions.js', array('jquery', 'adforest-dt', 'typeahead'), false, true);
    $shortcode_function = array( 'errorLoading' => __('Loding error', 'adforest'), 'inputTooShort' => __('Too Short Input', 'adforest'), 'searching' => __('Searching', 'adforest'), 'noResults' => __('No Result Found', 'adforest'), );
    
    wp_localize_script('adforest-shortcode-functions', 'shortcode_globals', $shortcode_function);
    wp_register_script('adforest-custom-coming-soon', trailingslashit(get_template_directory_uri()) . 'js/custom-coming-soon.js', array('jquery'), false, true);
    

    wp_register_script('adforest-perfect-scrollbar', trailingslashit(get_template_directory_uri()) . 'js/perfect-scrollbar.js', '', '', false);
    wp_register_style('adforest-perfect-scrollbar', trailingslashit(get_template_directory_uri()) . 'css/perfect-scrollbar.css', '', '', false);

    wp_register_script('adforest-dt', trailingslashit(get_template_directory_uri()) . 'js/datepicker.min.js', false, false, true);
    wp_register_script('animate-number', trailingslashit(get_template_directory_uri()) . 'js/animateNumber.min.js', false, false, true);
    wp_register_script('carousel', trailingslashit(get_template_directory_uri()) . 'js/carousel.min.js', false, false, true);
    wp_register_script('lightslider', trailingslashit(get_template_directory_uri()) . 'js/lightslider.js', false, false, true);

    wp_register_script('coundown-timer', trailingslashit(get_template_directory_uri()) . 'js/coundown-timer.js', false, false, true);
    wp_register_script('dropzone', trailingslashit(get_template_directory_uri()) . 'js/dropzone.js', false, false, true);
    wp_register_script('isotope', trailingslashit(get_template_directory_uri()) . 'js/isotope.min.js', false, false, true);
    wp_register_script('easing', trailingslashit(get_template_directory_uri()) . 'js/easing.js', false, false, true);
    wp_register_script('file-input', trailingslashit(get_template_directory_uri()) . 'js/fileinput.js', false, false, true);
    wp_register_script('forest-megamenu', trailingslashit(get_template_directory_uri()) . 'js/forest-megamenu.js', false, false, true);
    wp_register_script('form-dropzone', trailingslashit(get_template_directory_uri()) . 'js/form-dropzone.js', false, false, true);
    wp_register_script('hover', trailingslashit(get_template_directory_uri()) . 'js/hover.min.js', false, false, true);
    wp_register_script('icheck', trailingslashit(get_template_directory_uri()) . 'js/icheck.min.js', false, false, true);
    wp_register_script('modernizr', trailingslashit(get_template_directory_uri()) . 'js/modernizr.js', false, false, true);
    wp_register_script('toastr', trailingslashit(get_template_directory_uri()) . 'js/toastr.min.js', false, false, true);
    wp_register_script('search-map', trailingslashit(get_template_directory_uri()) . 'js/map.js', false, false, true);
    wp_register_script('element-map', trailingslashit(get_template_directory_uri()) . 'js/map-element.js', false, false, true);
    //wp_enqueue_script( 'marker-clusterer', trailingslashit( get_template_directory_uri () ) . 'js/markerclusterer.js' , false, false, false);

    wp_register_script('popup-video-iframe', trailingslashit(get_template_directory_uri()) . 'js/YouTubePopUp.js', false, false, true);
    wp_register_script('jquery-appear', trailingslashit(get_template_directory_uri()) . 'js/jquery.appear.min.js', false, false, true);
    wp_register_script('jquery-countTo', trailingslashit(get_template_directory_uri()) . 'js/jquery.countTo.js', false, false, true);
    wp_register_script('jquery-inview', trailingslashit(get_template_directory_uri()) . 'js/jquery.inview.min.js', false, false, true);
    wp_register_script('nouislider-all', trailingslashit(get_template_directory_uri()) . 'js/nouislider.all.min.js', false, false, true);
    wp_register_script('perfect-scrollbar', trailingslashit(get_template_directory_uri()) . 'js/perfect-scrollbar.min.js', false, false, true);
    wp_register_script('select-2', trailingslashit(get_template_directory_uri()) . 'js/select2.min.js', false, false, true);
    wp_register_script('slide', trailingslashit(get_template_directory_uri()) . 'js/slide.js', false, false, true);
    wp_register_script('color-switcher', trailingslashit(get_template_directory_uri()) . 'js/color-switcher.js', false, false, true);
    wp_register_script('parsley', trailingslashit(get_template_directory_uri()) . 'js/parsley.min.js', false, false, true);


    $language_code = apply_filters('adforest_languages_code', get_bloginfo('language'));
    if (function_exists('icl_object_id')) {
        wp_enqueue_style('adforest-multilinguale', trailingslashit(get_template_directory_uri()) . 'css/adforest-multilingual.css', false, false, false);
    }

    if (isset($adforest_theme['google_api_key']) && !empty($adforest_theme['google_api_key']) && isset($adforest_theme['google_api_secret']) && !empty($adforest_theme['google_api_secret'])) {
        if (isset($adforest_theme['google-recaptcha-type']) && $adforest_theme['google-recaptcha-type'] == 'v3') {
            $captcha_site_key = isset($adforest_theme['google_api_key']) && !empty($adforest_theme['google_api_key']) ? $adforest_theme['google_api_key'] : '';

            wp_register_script('recaptcha', 'https://www.google.com/recaptcha/api.js?hl=' . $language_code . '&render=' . $captcha_site_key . '', false, false, false);
        } else {
            wp_register_script('recaptcha', '//www.google.com/recaptcha/api.js?hl=' . $language_code . '', false, false, true);
        }
    }

    wp_register_script('hello', trailingslashit(get_template_directory_uri()) . 'js/hello.js', false, false, true);
    wp_register_script('jquery-te', trailingslashit(get_template_directory_uri()) . 'js/jquery-te.min.js', false, false, true);
    wp_register_script('tagsinput', trailingslashit(get_template_directory_uri()) . 'js/jquery.tagsinput.min.js', false, false, true);
    wp_register_script('theia-sticky-sidebar', trailingslashit(get_template_directory_uri()) . 'js/theia-sticky-sidebar.js', false, false, true);
    wp_register_script('bootstrap-confirmation', trailingslashit(get_template_directory_uri()) . 'js/bootstrap-confirmation.min.js', false, false, true);

    wp_register_script('adforest-fancybox', trailingslashit(get_template_directory_uri()) . 'js/jquery.fancybox.min.js', array('jquery'), false, false);

    wp_register_script('adforest-search', trailingslashit(get_template_directory_uri()) . 'js/search.js', false, false, true);
    wp_register_script('jquery-smartWizard', trailingslashit(get_template_directory_uri()) . 'js/jquery.smartWizard.min.js', false, false, true);
    wp_register_script('adforest-ad-wizard', trailingslashit(get_template_directory_uri()) . 'js/ad_post_wizard.js', array('adforest-moment', 'adforest-moment-timezone-with-data'), false, true);
    wp_register_script('oms', trailingslashit(get_template_directory_uri()) . 'js/oms.min.js', false, false, true);
    wp_register_script('adforest-timer', trailingslashit(get_template_directory_uri()) . 'js/timer.js', false, false, true);
    wp_register_script('jquery-ui-all', trailingslashit(get_template_directory_uri()) . 'js/jquery-ui.min.js', false, false, true);
    wp_register_script('adforest-jquery-touch-punch', trailingslashit(get_template_directory_uri()) . 'js/jquery.ui.touch-punch.min.js', false, false, true);
    wp_register_script('adforest-tiny-slider', trailingslashit(get_template_directory_uri()) . 'js/tiny-slider.js', false, false, true);

    wp_register_script('adforest-moment', trailingslashit(get_template_directory_uri()) . 'js/moment.js', false, false, true);

    
    wp_register_script('adforest-moment-timezone-with-data', trailingslashit(get_template_directory_uri()) . 'js/moment-timezone-with-data.js', false, false, true);




    wp_register_script('typeahead', trailingslashit(get_template_directory_uri()) . 'js/typeahead.min.js', false, false, true);
    
    wp_enqueue_style('spectrum-colorpicker', trailingslashit(get_template_directory_uri()) . 'css/spectrum-colorpicker.css', false, false);
    wp_enqueue_script('spectrum-colorpicker', trailingslashit(get_template_directory_uri()) . 'js/spectrum-colorpicker.js', false, false, true);

    /* Map Settings For The Theme. Default we have google map so if there is nothing selected the else statement will wors */
    $mapType = adforest_mapType();
    if ($mapType == 'leafletjs_map') {
        /* Open Street Map In The API */
        if (!is_rtl()) {
            wp_enqueue_style('leaflet', trailingslashit(get_template_directory_uri()) . 'assets/leaflet/leaflet.css');
        } else {
            wp_enqueue_style('leaflet', trailingslashit(get_template_directory_uri()) . 'assets/leaflet/leaflet-rtl.css');
        }
        wp_enqueue_style('leaflet-search', trailingslashit(get_template_directory_uri()) . 'assets/leaflet/leaflet-search.min.css');
        wp_register_script('leaflet', trailingslashit(get_template_directory_uri()) . 'assets/leaflet/leaflet.js', false, false, false);
        wp_register_script('leaflet-markercluster', trailingslashit(get_template_directory_uri()) . 'assets/leaflet/leaflet.markercluster.js', false, false, false);

        wp_register_script('leaflet-search', trailingslashit(get_template_directory_uri()) . 'assets/leaflet/leaflet-search.min.js', false, false, false);

        wp_enqueue_script('leaflet');
        wp_enqueue_script('leaflet-markercluster');
        wp_enqueue_script('leaflet-search');
        
    } else if ($mapType == 'no_map') {
        /* No Mapp In The Theme */
    } else {
        /* Default is google map */
        if (isset($adforest_theme['gmap_api_key']) && $adforest_theme['gmap_api_key'] != "") {
            $map_lang = 'fr';
            if (isset($adforest_theme['gmap_lang']) && $adforest_theme['gmap_lang'] != "") {
                $map_lang = $adforest_theme['gmap_lang'];
            }
            $map_lang = apply_filters('adforest_languages_code', $map_lang); // apply switcher language in case of wpml
            wp_register_script('google-map', '//maps.googleapis.com/maps/api/js?key=' . $adforest_theme['gmap_api_key'] . '&language=' . $map_lang, false, false, true);
            wp_register_script('google-map-callback', '//maps.googleapis.com/maps/api/js?key=' . $adforest_theme['gmap_api_key'] . '&libraries=geometry,places&language=' . $map_lang . '&callback=' . 'adforest_location', false, false, true);
        }
    }
    /* Load the custom scripts. */
    //ME Only include when browser <= 9 ie
    if ( isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/MSIE\s(?P<v>\d+)/i', $_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 9)
    {    
    wp_enqueue_script('adforest-maxcdn1', trailingslashit(get_template_directory_uri()) . 'js/html5shiv.min.js', array(), '3.7.2', false);
    wp_script_add_data('adforest-maxcdn1', 'conditional', 'lt IE 9');
    wp_enqueue_script('adforest-maxcdn2', trailingslashit(get_template_directory_uri()) . 'js/respond.min.js', array(), '1.4.2', false);
    wp_script_add_data('adforest-maxcdn2', 'conditional', 'lt IE 9');
    }


    if (is_singular()) {
        wp_enqueue_script("comment-reply", '', true);
    }
    global $adforest_theme;
    $ad_layout_style_modern = isset($adforest_theme['ad_layout_style_modern']) ? $adforest_theme['ad_layout_style_modern'] : '3';
    if (is_singular('ad_post')) {
        if ($ad_layout_style_modern == '6') {
            wp_enqueue_script('jquery-ui-all');
        }
    }


    wp_enqueue_script('bootstrap');
    wp_enqueue_script('toastr');
    wp_enqueue_script('imagesloaded');
    $is_live = true;
    if (isset($adforest_theme['sb_comming_soon_mode']) && $adforest_theme['sb_comming_soon_mode']) {
        $is_live = false;

        if (is_super_admin(get_current_user_id())) {
            if (!$is_live) {
                $is_live = true;
            }
        }
    }

    $sb_disable_menu = isset($adforest_theme['sb_disable_menu']) ? $adforest_theme['sb_disable_menu'] : false;

    if ($is_live) {
        wp_enqueue_script('animate-number');
        wp_enqueue_script('easing');
        wp_enqueue_script('isotope');
        wp_enqueue_script('carousel');
        wp_enqueue_script('file-input');
        if (!$sb_disable_menu) {
            wp_enqueue_script('forest-megamenu');
        }
        wp_enqueue_script('select-2');
        wp_enqueue_script('hover');
        wp_enqueue_script('modernizr');
        wp_enqueue_script('icheck');
        wp_enqueue_script('jquery-appear');
        wp_enqueue_script('jquery-countTo');
        wp_enqueue_script('jquery-inview');
        wp_enqueue_script('adforest-perfect-scrollbar');
        wp_enqueue_script('nouislider-all');
        wp_enqueue_script('slide');
        wp_enqueue_script('theia-sticky-sidebar');
        if (isset($adforest_theme['sb_color_plate']) && $adforest_theme['sb_color_plate']) {
            wp_enqueue_script('color-switcher');
        }
        wp_enqueue_script('parsley');
        
        wp_enqueue_script('dropzone');
        wp_enqueue_script('tagsinput');
        wp_enqueue_script('form-dropzone');
        wp_enqueue_script('jquery-te');
        wp_enqueue_script('perfect-scrollbar');
        wp_enqueue_script('bootstrap-confirmation');
        wp_enqueue_script('hello');
        wp_enqueue_script('recaptcha');
        wp_enqueue_script('g-spider');
        wp_enqueue_script('adforest-moment');
        wp_enqueue_script('adforest-moment-timezone-with-data');
         wp_enqueue_script('adforest-fancybox');
        
        wp_enqueue_script('adforest-timer');
        if (is_singular('ad_post')) {
           
            wp_enqueue_script('google-map');
            if ($ad_layout_style_modern != '6') {
                wp_enqueue_script('jquery-ui-all');
            }
            wp_enqueue_script('adforest-jquery-touch-punch');
        }

        if (isset($adforest_theme['sb_video_icon']) && $adforest_theme['sb_video_icon']) {
            wp_enqueue_script('popup-video-iframe');
        }
        wp_enqueue_script('coundown-timer');
        wp_enqueue_script('adforest-custom');
        wp_enqueue_script('adforest-shortcode-functions');

        if (is_singular('ad_post')) {
            
        }
    } else {
        wp_enqueue_script('coundown-timer');
        wp_enqueue_script('adforest-custom-coming-soon');
    }
    /* Load the stylesheets. */
    wp_enqueue_style('adforest-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', trailingslashit(get_template_directory_uri()) . 'css/bootstrap.css');
    wp_enqueue_style('et-line-fonts', trailingslashit(get_template_directory_uri()) . 'css/et-line-fonts.css');
    wp_enqueue_style('adforest-font-awesome', trailingslashit(get_template_directory_uri()) . 'css/font-awesome.css');
    wp_enqueue_style('animate', trailingslashit(get_template_directory_uri()) . 'css/animate.min.css');
    wp_enqueue_style('file-input', trailingslashit(get_template_directory_uri()) . 'css/fileinput.css');
    wp_enqueue_style('flaticon', trailingslashit(get_template_directory_uri()) . 'css/flaticon.css');
    wp_enqueue_style('adforest-select2', trailingslashit(get_template_directory_uri()) . 'css/select2.min.css');
    wp_enqueue_style('nouislider', trailingslashit(get_template_directory_uri()) . 'css/nouislider.min.css');
    wp_enqueue_style('owl-carousel', trailingslashit(get_template_directory_uri()) . 'css/owl.carousel.css');
    wp_enqueue_style('owl-theme', trailingslashit(get_template_directory_uri()) . 'css/owl.theme.css');
    wp_enqueue_style('lightslider', trailingslashit(get_template_directory_uri()) . 'css/lightslider.css');
    wp_enqueue_style('toastr', trailingslashit(get_template_directory_uri()) . 'css/toastr.min.css');
    wp_enqueue_style('minimal', trailingslashit(get_template_directory_uri()) . 'skins/minimal/minimal.css');

    wp_enqueue_style('adforest-fancybox', trailingslashit(get_template_directory_uri()) . 'css/jquery.fancybox.min.css');
    if (isset($adforest_theme['sb_video_icon']) && $adforest_theme['sb_video_icon']) {
        wp_enqueue_style('popup-video-iframe', trailingslashit(get_template_directory_uri()) . 'css/YouTubePopUp.css');
    }

    if (is_rtl()) {
        if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern') {
            wp_enqueue_style('adforest-theme', trailingslashit(get_template_directory_uri()) . 'css/modern-rtl.css');
        } else {
            wp_enqueue_style('adforest-theme', trailingslashit(get_template_directory_uri()) . 'css/style-rtl.css');
            wp_enqueue_style('responsive-media', trailingslashit(get_template_directory_uri()) . 'css/responsive-media.css');
            wp_enqueue_style('adforest-custom', trailingslashit(get_template_directory_uri()) . 'css/custom.css');
        }
        wp_enqueue_style('bootstrap-rtl', trailingslashit(get_template_directory_uri()) . 'css/bootstrap-rtl.css');        
        wp_enqueue_style('adforest-theme-rtl', trailingslashit(get_template_directory_uri()) . 'css/adforest-theme-rtl.css');
        wp_enqueue_style('adforest-theme-rtl-main', trailingslashit(get_template_directory_uri()) . 'css/adforest-theme-rtl-main.css');

    } else {
        if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern') {
            wp_enqueue_style('adforest-theme-modern', trailingslashit(get_template_directory_uri()) . 'css/modern.css');
        } else {
            wp_enqueue_style('adforest-theme', trailingslashit(get_template_directory_uri()) . 'css/style.css');
            wp_enqueue_style('responsive-media', trailingslashit(get_template_directory_uri()) . 'css/responsive-media.css');
            wp_enqueue_style('adforest-custom', trailingslashit(get_template_directory_uri()) . 'css/custom.css');
        }

        wp_enqueue_style('adforest-theme-ltr', trailingslashit(get_template_directory_uri()) . 'css/adforest-theme-ltr.css');
    }
    /* New Css For Shop */
    
    //wp_enqueue_style('shop-theme', trailingslashit(get_template_directory_uri()) . 'css/theme.css');
    //wp_enqueue_style('adforest-blog', trailingslashit(get_template_directory_uri()) . 'css/blog.css');
    
    if (in_array('dc-woocommerce-multi-vendor/dc_product_vendor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    wp_enqueue_style('adforest-wcmvendor', trailingslashit(get_template_directory_uri()) . 'css/wcmvendor.css');
    if(is_rtl()){    
        wp_enqueue_style('adforest-wcmvendor-rtl', trailingslashit(get_template_directory_uri()) . 'css/wcmvendor-rtl.css');
    }
}

    wp_enqueue_style('slider', trailingslashit(get_template_directory_uri()) . 'css/adforest-main-theme.css');

    $css_color = 'defualt';
    if (isset($adforest_theme['theme_color']) && $adforest_theme['theme_color'] != "") {
        $css_color = $adforest_theme['theme_color'];
    }
    if (isset($adforest_theme['custom_theme_color_switch']) && $adforest_theme['custom_theme_color_switch']) {
        $css_color = 'custom-theme-color';
    }

    wp_enqueue_style('defualt-color', trailingslashit(get_template_directory_uri()) . 'css/colors/' . $css_color . '.css', array(), null);
}

add_action('admin_enqueue_scripts', 'adforest_load_admin_js');

function adforest_load_admin_js() {
    wp_enqueue_media();
    wp_enqueue_script('adforest-widget-media', get_template_directory_uri() . '/js/widget.js', false, '1.0.0', true);
    wp_register_script('adforest-admin', trailingslashit(get_template_directory_uri()) . 'js/admin.js', false, false, true);
    wp_enqueue_script('adforest-admin');
}

function adforest_set_ad_featured_img($single_template) {
    global $post;
    if ($post->post_type == 'ad_post') {
        $media = adforest_get_ad_images($post->ID);
        $img_ids = '';
        if (is_array($media) && count($media) > 0) {
            foreach ($media as $m) {
                $mid = '';
                if (isset($m->ID)){  $mid = $m->ID; }  else{  $mid = $m; }
                if ($mid != get_post_thumbnail_id($post->ID)) {
                    set_post_thumbnail($post->ID, $mid);
                    break;
                }
            }
        }
    }
    return $single_template;
}

add_filter('single_template', 'adforest_set_ad_featured_img');

function adforest_custom_styles() {
    global $adforest_theme;

    $header_enable = false;
    if (isset($adforest_theme['sb_header']) && ($adforest_theme['sb_header'] == 'transparent' || $adforest_theme['sb_header'] == 'modern' || $adforest_theme['sb_header'] == 'transparent-2' || $adforest_theme['sb_header'] == 'transparent-3')) {
        $header_enable = true;
    }

    if (( basename(get_page_template()) == 'page-home.php' || is_singular('ad_post') ) && isset($adforest_theme['sb_menu_color']) && $header_enable) {
        $color = is_singular('ad_post') ? $adforest_theme['sb_menu_color_single'] : $adforest_theme['sb_menu_color'];
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css');
        $custom_css = ".mega-menu .menu-links > li > a {color: {$color};}";
        wp_add_inline_style('custom-style', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'adforest_custom_styles');
/* ------------------------------------------------ */
require trailingslashit(get_template_directory()) . 'inc/adforest-footer-functions.php';
if (class_exists('SitePress')) {
    require trailingslashit(get_template_directory()) . 'inc/multilingual-functions.php';
}
/* ------------------------------------------------ */

if (!function_exists('adforest_remove_blocks_css')) {
    function adforest_remove_blocks_css()
    {
        global $post;
        /* dequeue addtoany css/js */
        if( isset($post) && $post)
            {
            $disabled = @get_post_meta( $post->ID, 'sharing_disabled', true );
            if($disabled)
            {        
                    add_filter( 'addtoany_script_disabled', '__return_true' );    
                    wp_dequeue_style( 'addtoany' );
                    wp_dequeue_script( 'addtoany' );
            }

            if ($post && ( preg_match('/vc_row/', $post->post_content) || preg_match('/post_job/', $post->post_content) ) || is_singular('ad_post')) 
            {
                add_filter('use_block_editor_for_post_type', '__return_false', 10);
                wp_dequeue_style( 'wp-block-library' );
                wp_dequeue_style( 'wp-block-library-theme' );
            }
        }
    }
}
add_action( 'wp_enqueue_scripts', 'adforest_remove_blocks_css', 99);

if (!function_exists('adforest_defer_parsing_of_js')) {
    function adforest_defer_parsing_of_js( $url ) {
        if ( is_user_logged_in() ) return $url;
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        return str_replace( ' src', ' defer src', $url );
    }
}
//add_filter( 'script_loader_tag', 'adforest_defer_parsing_of_js', 10 );

if (!function_exists('adforest_conditionally_load_woc_js_css')) {
    function adforest_conditionally_load_woc_js_css(){
    if( function_exists( 'is_woocommerce' ) ){
            # Only load CSS and JS on Woocommerce pages   
        if(! is_woocommerce() && ! is_cart() && ! is_checkout() ) 
        {         
            remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
            ## Dequeue scripts.
            wp_dequeue_script('woocommerce'); 
            wp_dequeue_script('wc-add-to-cart'); 
            wp_dequeue_script('wc-cart-fragments');
            ## Dequeue styles.
            wp_dequeue_style( 'woocommerce-layout' );
            wp_dequeue_style( 'woocommerce-smallscreen' );
            wp_dequeue_style( 'woocommerce-general' );
            wp_dequeue_style( 'wc-bto-styles' );
            wp_dequeue_script( 'wc-add-to-cart' );
            wp_dequeue_script( 'wc-cart-fragments' );
            wp_dequeue_script( 'woocommerce' );
            wp_dequeue_script( 'jquery-blockui' );
            wp_dequeue_script( 'jquery-placeholder' );        

            add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
            }
        }   
    }
}
add_action( 'wp_enqueue_scripts', 'adforest_conditionally_load_woc_js_css', 11 );
if ( ! function_exists( 'wp_body_open' ) ) {
 
    /**
     * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
     */
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

add_action( 'send_headers', 'sb_block_iframes');
if(!function_exists('sb_block_iframes')){
    function sb_block_iframes(){           
        header( 'X-FRAME-OPTIONS: SAMEORIGIN');     
    }
}
//      adding all the hidden fields 
if(!function_exists('sb_add_footer_hidden_fields')){
function sb_add_footer_hidden_fields() {
    
    global $adforest_theme, $template;
    $page_template = basename($template);
    if (in_array('sb_framework/index.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    $rtl = 0;

    if (function_exists('icl_object_id')) {
        if (apply_filters('wpml_is_rtl', NULL)) {
            $rtl = 1;
        }
    } else {
        if (is_rtl()) {
            $rtl = 1;
        }
    }
    $is_single = 0;
    if (is_singular('ad_post')) {
        $is_single = 1;
    }
    $is_video_on = 0;
    if (isset($adforest_theme['sb_video_icon']) && $adforest_theme['sb_video_icon']) {
        $is_video_on = 1;
    }
    $theme_type = '0';
    if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern') {
        $theme_type = '1';
        ?>

        <?php
    }
    $auto_slide = 1000;
    if (isset($adforest_theme['sb_auto_slide_time']) && $adforest_theme['sb_auto_slide_time'] != "") {
        $auto_slide = $adforest_theme['sb_auto_slide_time'];
    }
    $sb_profile_page = apply_filters('adforest_language_page_id', $adforest_theme['sb_profile_page']);
    $after_login_redirect = get_the_permalink($sb_profile_page);
    if (isset($_GET['u']) && $_GET['u'] != "") {
        $after_login_redirect = $_GET['u'];
    }
    $is_logged_in = 0;
    if (is_user_logged_in()) {
        $is_logged_in = 1;
    }
    $sb_sign_in_page = apply_filters('adforest_language_page_id', $adforest_theme['sb_sign_in_page']);
    $sb_packages_page = apply_filters('adforest_language_page_id', $adforest_theme['sb_packages_page']);
    $ajax_url = apply_filters('adforest_set_query_param', admin_url('admin-ajax.php'));
    $custom_theme_color = isset($adforest_theme['custom-theme-color']) && !empty($adforest_theme['custom-theme-color']) ? $adforest_theme['custom-theme-color'] : '#f58936';
    $custom_btn_hover_color = isset($adforest_theme['custom-btn-hover-color']) && !empty($adforest_theme['custom-btn-hover-color']) ? $adforest_theme['custom-btn-hover-color'] : '#f58936';
    $custom_btn_border_color = isset($adforest_theme['custom-btn-border-color']) && !empty($adforest_theme['custom-btn-border-color']) ? $adforest_theme['custom-btn-border-color'] : '#f58936';
    $sb_disable_menu = isset($adforest_theme['sb_disable_menu']) ? $adforest_theme['sb_disable_menu'] : false;

    $adforest_menu_display = 'yes';
    if ($sb_disable_menu) {
        $adforest_menu_display = 'no';
    }

    $sb_upload_limit_admin = isset($adforest_theme['sb_upload_limit']) && !empty($adforest_theme['sb_upload_limit']) && $adforest_theme['sb_upload_limit'] > 0 ? $adforest_theme['sb_upload_limit'] : 0;

    $user_upload_max_images = $sb_upload_limit_admin;

    if (is_user_logged_in()) {
        $current_user = get_current_user_id();
        if ($current_user) {
            update_user_meta($current_user, '_sb_last_login', time());
        }

        $user_packages_images = get_user_meta($current_user, '_sb_num_of_images', true);
        if (isset($user_packages_images) && $user_packages_images == '-1') {
            $user_upload_max_images = 'null';
        } else if (isset($user_packages_images) && $user_packages_images > 0) {
            $user_upload_max_images = $user_packages_images;
        } 
    }
    $adforest_ad_html = isset($adforest_theme['sb_ad_desc_html']) ? $adforest_theme['sb_ad_desc_html'] : false;
            $allow_attachment    =   isset($adforest_theme['allow_media_upload_messaging'])  ?  $adforest_theme['allow_media_upload_messaging']   : false;
            $allowed_formats = isset($adforest_theme['sb_message_attach_formats']) ? $adforest_theme['sb_message_attach_formats'] : array('pdf', 'doc');           
            $formats_provided   =  "";
            if($allow_attachment){          
            $attachment_type    =   isset($adforest_theme['sb_media_upload_messaging_type'])  ?  $adforest_theme['sb_media_upload_messaging_type']   : "both";         
            if($attachment_type   ==  "images"){       
                $formats_provided   =    "image/*";
            }         
            else if($attachment_type  ==  "attachments"){
                 foreach ($allowed_formats as $format) {
                     $formats_provided .= "." . $format . ",";
                     
                     }               
            }
            else if($attachment_type  ==  "both"){
                $formats_provided   =    "image/*,"; 
                 foreach ($allowed_formats as $format) {
                     $formats_provided .= "." . $format . ",";
                     
                     }               
            }
          }          
          echo     '<input type="hidden" id="provided_format" value="'.esc_attr($formats_provided).'"/> ';      
  ?>      
        <input type="hidden" id="is_logged_in" value="<?php echo esc_attr($is_logged_in);?>" />
        <input type="hidden" id="auto_slide_time" value="<?php echo esc_attr($auto_slide);?>" />
        <input type="hidden" id="theme_type" value="<?php echo esc_attr($theme_type);?>" />
        <input type="hidden" id="is_rtl" value="<?php echo esc_attr($rtl);?>" />
        <input type="hidden" id="is_menu_display" value="<?php echo esc_attr($adforest_menu_display);?>" />
        <input type="hidden" id="is_single_ad" value="<?php echo esc_attr($is_single);?>" />
        <input type="hidden" id="is_video_on" value="<?php echo esc_attr($is_video_on);?>" />
        <input type="hidden" id="profile_page" value="<?php echo esc_url($after_login_redirect);?>" />
        <input type="hidden" id="login_page" value="<?php echo get_the_permalink($sb_sign_in_page);?>" />
        <input type="hidden" id="sb_packages_page" value="<?php echo get_the_permalink($sb_packages_page);?>" />
        <input type="hidden" id="theme_path" value="<?php echo trailingslashit(get_template_directory_uri());?>" />
        <input type="hidden" id="adforest_ajax_url" value="<?php echo adforest_returnEcho($ajax_url);?>" />
        <input type="hidden" id="_nonce_error" value="<?php echo __('There is something wrong with the security please check the admin panel.', 'adforest');?>" />
        <input type="hidden" id="adforest_ad_html" value="<?php echo adforest_returnEcho($adforest_ad_html);?>" />
        <input type="hidden" id="adforest_forgot_msg" value="<?php echo __('Password reset link sent to your email.', 'adforest');?>" />
        <input type="hidden" id="adforest_profile_msg" value="<?php echo __('Profile saved successfully.', 'adforest');?>" />
        <input type="hidden" id="adforest_max_upload_reach" value="<?php echo __('Maximum upload limit reached', 'adforest');?>" />
        <input type="hidden" id="not_logged_in" value="<?php echo __('You have been logged out.', 'adforest');?>" />
        <input type="hidden" id="sb_upload_limit" value="<?php echo esc_attr($user_upload_max_images);?>" />
        <input type="hidden" id="adforest_map_type" value="<?php echo esc_attr($adforest_theme['map-setings-map-type']);?>" />
        <input type="hidden" id="adforest_radius_type" value="<?php echo esc_attr($adforest_theme['search_radius_type']);?>" />
        <input type="hidden" id="facebook_key" value="<?php echo esc_attr($adforest_theme['fb_api_key']);?>" />
        <input type="hidden" id="google_key" value="<?php echo esc_attr($adforest_theme['gmail_api_key']);?>" />
        <input type="hidden" id="google_recaptcha_type" value="<?php echo esc_attr($adforest_theme['google-recaptcha-type']);?>" />
        <input type="hidden" id="google_recaptcha_site_key" value="<?php echo esc_attr($adforest_theme['google_api_key']);?>" />
        <input type="hidden" id="google_recaptcha_error_text" value="<?php echo esc_html__('Oops You are spammer ! or Check your Google reCaptcha keys.', 'adforest');?>" />
        <input type="hidden" id="no-result-found" value="<?php echo esc_html__('No results found', 'adforest');?>" />
        <input type="hidden" id="confirm_delete" value="<?php echo __('Are you sure to delete this?', 'adforest');?>" />
        <input type="hidden" id="confirm_update" value="<?php echo __('Are you sure to update this?', 'adforest');?>" />
        <input type="hidden" id="ad_updated" value="<?php echo __('Ad updated successfully.', 'adforest');?>" />
        <input type="hidden" id="ad_posted" value="<?php echo __('Ad Posted successfully.', 'adforest');?>" />
        <input type="hidden" id="redirect_uri" value="<?php echo esc_url($adforest_theme['redirect_uri']);?>" />
        <input type="hidden" id="select_place_holder" value="<?php echo __('Select an option', 'adforest');?>" />
        <input type="hidden" id="is_sticky_header" value="<?php echo esc_attr($adforest_theme['sb_sticky_header']);?>" />
        <input type="hidden" id="required_images" value="<?php echo __('Images are required.', 'adforest');?>" />
        <input type="hidden" id="ad_limit_msg" value="<?php echo __('Your package has been used or expired, please purchase now.', 'adforest');?>" />
        <input type="hidden" id="is_sub_active" value="1" />
        <input type="hidden" id="custom-theme-color" value="<?php echo esc_attr($custom_theme_color);?>" />
        <input type="hidden" id="custom-hover-color" value="<?php echo esc_attr($custom_btn_hover_color);?>" />
        <input type="hidden" id="custom-border-color" value="<?php echo esc_attr($custom_btn_border_color);?>" />
        <input type="hidden" id="sb-lang-code" value="<?php echo get_bloginfo('language');?>" />
        <?php
        $slider_item = 2;
        if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && ($page_template == 'taxonomy-ad_cats.php' || $page_template == 'taxonomy-ad_country.php')) {

            $search_cat_page = isset($adforest_theme['search_cat_page']) && $adforest_theme['search_cat_page'] ? TRUE : FALSE;
            if ($search_cat_page) {
                $slider_item = 3;
            } else {
                $slider_item = 4;
            }
        } else if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && !is_page_template('page-search.php') && !is_singular('ad_post') && !is_singular('page')) {
            $slider_item = 3;
        } else if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && isset($adforest_theme['search_design']) && $adforest_theme['search_design'] == 'topbar' && is_page_template('page-search.php')) {

            $slider_item = 4;
        } else if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && isset($adforest_theme['search_design']) && $adforest_theme['search_design'] == 'sidebar' && is_page_template('page-search.php')) {

            $slider_item = 3;
        } else if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && isset($adforest_theme['search_design']) && $adforest_theme['search_design'] == 'map' && is_page_template('page-search.php')) {
            $slider_item = 2;
        } else if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && is_singular('ad_post')) {
            $slider_item = 4;
        } else if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && is_singular('page')) {
            $slider_item = 4;
        }

        $time_zones_val = isset($adforest_theme['bid_timezone']) && $adforest_theme['bid_timezone'] != '' ? $adforest_theme['bid_timezone'] : 'Etc/UTC';
        if (function_exists('adforest_timezone_list') && isset($adforest_theme['bid_timezone']) && $adforest_theme['bid_timezone'] != '') {
            $time_zones_val = adforest_timezone_list('', $adforest_theme['bid_timezone']);
            date_default_timezone_set($time_zones_val);
        }
        echo '<input type="hidden" id="sb-bid-timezone" value="' . $time_zones_val . '"/>';
        ?>
        <input type="hidden" id="slider_item" value="<?php echo esc_attr($slider_item);?>" />
        <?php
        $yes = 0;
        $not_time = '';

        if (isset($adforest_theme['msg_notification_on']) && isset($adforest_theme['communication_mode']) && ( $adforest_theme['communication_mode'] == 'both' || $adforest_theme['communication_mode'] == 'message' )) {
            $yes = $adforest_theme['msg_notification_on'];
            $not_time = $adforest_theme['msg_notification_time'];
        }
        $unread_msgs = ADFOREST_MESSAGE_COUNT; /* Message count define in header */
        ?>
        <input type="hidden" id="msg_notification_on" value="<?php echo esc_attr($yes);?>" />
        <input type="hidden" id="msg_notification_time" value="<?php echo esc_attr($not_time);?>" />
        <input type="hidden" id="is_unread_msgs" value="<?php echo esc_attr($unread_msgs);?>" />
        <?php } else { ?>
        <input type="hidden" id="is_sub_active" value="0" />
        <?php }
          $transparent_flag = false;

          $sb_header_style   =   isset($adforest_theme['sb_header'])  ? $adforest_theme['sb_header'] : "";


    if ( $sb_header_style  &&   $sb_header_style == 'transparent-2' || $sb_header_style == 'transparent-3' || $sb_header_style == 'modern') {
        $transparent_flag = true;
    }
    $menu_color = '#000';
    if (isset($adforest_theme['sb_header']) && $transparent_flag && isset($adforest_theme['sb_menu_color']) && isset($adforest_theme['sb_menu_color_single'])) {
        $menu_color = is_singular('ad_post') ? $adforest_theme['sb_menu_color_single'] : $adforest_theme['sb_menu_color'];
    }
    $sb_static_logo = isset($adforest_theme['sb_site_logo']['url'])  ?  $adforest_theme['sb_site_logo']['url']  : "";
    if (is_singular('ad_post')) {
        $page_template = 'single-ad_post.php';
        if (isset($adforest_theme['ad_layout_style_modern']) && $adforest_theme['ad_layout_style_modern'] == 5) {
            $sb_static_logo = $adforest_theme['sb_site_logo_for_single']['url'];
        }
    } else if (basename($template) == 'page-home.php') {
        $sb_static_logo = $adforest_theme['sb_site_logo_for_home']['url'];
    }

       /*$front_page = is_front_page() || is_home() ? '1' : '2';*/
        $front_page = '2';
        if (is_front_page() && is_home()) {
            $front_page = '1';
        } elseif (is_front_page()) {
            $front_page = '1';
        } elseif (is_home()) {
            $front_page = '2';
        } else {
            $front_page = '2';
        }

      $is_mobile = wp_is_mobile() ? 1 : 2;
    ?>
    <input type="hidden" id="sticky_sb_logo" value="<?php echo esc_url($adforest_theme['sb_site_logo_for_transparent']['url']);?>" />
    <input type="hidden" id="static_sb_logo" value="<?php echo esc_url($sb_static_logo);?>" />
    <input type="hidden" id="sb_header_type" value="<?php echo esc_attr($adforest_theme['sb_header']);?>" />
    <input type="hidden" id="sb_menu_color" value="<?php echo esc_attr($menu_color);?>" />
    <input type="hidden" id="sb_page_template" value="<?php echo esc_attr($page_template);?>" />
    <input type="hidden" id="sb_is_mobile" value="<?php echo esc_attr($is_mobile);?>" />
    <input type="hidden" id="sb_is_homepage" value="<?php echo esc_attr($front_page);?>" />
    <?php get_template_part('template-parts/linkedin', 'access');?>
    <?php get_template_part('template-parts/verification', 'logic');?>
    <?php get_template_part('template-parts/layouts/sell', 'button');?>
    <?php get_template_part('template-parts/layouts/scroll', 'up');?>
    <?php
    
    if( isset( $adforest_theme['sb_android_app'] ) && $adforest_theme['sb_android_app'] ){ 
        if (!function_exists('adforest_app_notifier_html')) {
            function adforest_app_notifier_html() {
                get_template_part('template-parts/app', 'notifier');
            }
        }
        do_action('adforestAction_app_notifier', 'adforest_app_notifier_html');
    }
    
 $footer_js   =    isset($adforest_theme['footer_js_and_css'])  ?   $adforest_theme['footer_js_and_css'] : "";   
 echo adforest_returnEcho($footer_js);
 
 
    
}
}
add_action( 'wp_footer', 'sb_add_footer_hidden_fields', 10);



add_action('wp_head', 'sb_add_custom_header');
if(!function_exists('sb_add_custom_header')){
function sb_add_custom_header(){


global $adforest_theme, $wpdb;

$user_id = get_current_user_id();
   
$unread_msgs = 0;
if($user_id > 0){
 $unread_msgs = $wpdb->get_var("SELECT COUNT(meta_id) FROM $wpdb->commentmeta WHERE comment_id = '$user_id' AND meta_value = '0' ");
}
    
define('ADFOREST_MESSAGE_COUNT', $unread_msgs);

}}

