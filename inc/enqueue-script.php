<?php 

// Enqueue scripts and styles.

function cozy_scripts() {
    
    wp_enqueue_style( 'cozy-style', get_stylesheet_uri() );

    wp_enqueue_style( 'cozy-bootsrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

    //wp_enqueue_style( 'cozy-revolution-style', get_template_directory_uri() . '/rs-plugin/css/settings.css' );

    wp_enqueue_style( 'cozy-main-style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_style( 'cozy-google-font', 'http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic' );

    wp_enqueue_script( 'cozy-modernizr', get_template_directory_uri() . '/js/modernizr-2.8.1.min.js');

    wp_enqueue_script( 'cozy-common', get_template_directory_uri() . '/js/common.js', array(), '', true );


    if ( is_page_template('page-home-search.php') || is_page_template('page-home-map.php')) {
    wp_enqueue_script( 'cozy-prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '', true );
    }

    wp_enqueue_script( 'cozy-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-chosen-jquery', get_template_directory_uri() . '/js/chosen.jquery.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-wow', 'http://maps.google.com/maps/api/js?sensor=false', array(), '', true );


    if ( is_page_template('page-home-grid.php') || is_page_template('page-home-slider.php') || is_page_template('page-home-search.php')) {
    wp_enqueue_script( 'cozy-infobox', get_template_directory_uri() . '/js/infobox.min.js', array(), '', true );
    }

    if ( is_page_template('page-home-search.php') || is_page_template('page-home-slider.php') || is_page_template('page-home-search.php') || is_page_template('archive-agency.php')){
    //wp_enqueue_script( 'cozy-agencies', get_template_directory_uri() . '/js/agencies.js', array(), '', true );
    }

    //wp_enqueue_script( 'cozy-google-map', get_template_directory_uri() . '/libs/google-map/admin-google.js', array(), '', true );
    //wp_enqueue_script( 'cozy-term-button', get_template_directory_uri() . '/js/term-button.js', array(), '', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


    if ( is_page_template('page-home-grid.php')) {
    wp_enqueue_script( 'cozy-freewall', get_template_directory_uri() . '/js/freewall.js', array(), '', true );
    }


    if ( is_page_template('page-home-slider.php')) {
    //wp_enqueue_script( 'cozy-themepunch-tools', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '', true);
    //wp_enqueue_script( 'cozy-revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '', true);
    }


    if ( is_page_template('page-home-map.php')) {
    wp_enqueue_script( 'cozy-markerclusterer', get_template_directory_uri() . '/js/markerclusterer.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-countup', get_template_directory_uri() . '/js/countUp.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-tweet', get_template_directory_uri() . '/twitter/jquery.tweet.min.js', array(), '', true );
    }
    
    if ('property' == get_post_type()) {
    wp_enqueue_script( 'cozy-markerclusterer', get_template_directory_uri() . '/js/markerclusterer.min.js', array(), '', true );
    }

    if (is_page_template('register.php')) {
        wp_enqueue_script('cozy-registration', get_template_directory_uri() . '/js/registration.js', array(), '', true);
        wp_enqueue_script('cozy-bootstrap-checkbox', get_template_directory_uri() . '/js/bootstrap-checkbox.js', array(), '', true);
        //wp_enqueue_script('cozy-agencies', get_template_directory_uri() . '/js/agencies.js', array(), '', true);
    }

    wp_enqueue_script( 'cozy-variables', get_template_directory_uri() . '/js/variables.js', array(), '', true );

    wp_enqueue_script( 'cozy-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );

    //wp_enqueue_script( 'cozy-properties', get_template_directory_uri() . '/js/properties.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'cozy_scripts' );


add_action('admin_enqueue_scripts', 'wt_cozy_add_admin_scripts_page');
    if(!function_exists('wt_cozy_add_admin_scripts_page'))
    {
        function wt_cozy_add_admin_scripts_page()
        {
            wp_enqueue_script( 'metabox-sc', get_template_directory_uri().'/js/change-metabox.js' , array( 'jquery' ) );
        }
    }
