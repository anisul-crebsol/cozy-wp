<?php
    /**
     * Framework Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux_Framework_sample_config' ) ) {

        class Redux_Framework_sample_config {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Just for demo purposes. Not needed per say.
                $this->theme = wp_get_theme();

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }


                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            /**
             * This is a test function that will let you see when the compiler hook occurs.
             * It only runs if a field    set with compiler=>true is changed.
             * */
            function compiler_action( $options, $css, $changed_values ) {
                echo '<h1>The compiler hook has run!</h1>';
                echo "<pre>";
                print_r( $changed_values ); // Values that have changed since the last save
                echo "</pre>";
      
            }

            function dynamic_section( $sections ) {
                //$sections = array();
                $sections[] = array(
                    'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                    'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-paper-clip',
                    // Leave this as a blank section, no options just some intro text set above.
                    'fields' => array()
                );

                return $sections;
            }

            function change_arguments( $args ) {
                //$args['dev_mode'] = true;

                return $args;
            }


            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            // Remove the demo link and the notice of integrated demo from the redux-framework plugin
            function remove_demo() {

                // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
                if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                    remove_filter( 'plugin_row_meta', array(
                        ReduxFrameworkPlugin::instance(),
                        'plugin_metalinks'
                    ), null, 2 );

                    // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                    remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
                }
            }

            public function setSections() {

                /**
                 * Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
                 * */
                // Background Patterns Reader
                $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
                $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
                $sample_patterns      = array();

                if ( is_dir( $sample_patterns_path ) ) :

                    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                        $sample_patterns = array();

                        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                                $name              = explode( '.', $sample_patterns_file );
                                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                                $sample_patterns[] = array(
                                    'alt' => $name,
                                    'img' => $sample_patterns_url . $sample_patterns_file
                                );
                            }
                        }
                    endif;
                endif;

                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'redux-framework-demo' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                               title="<?php echo esc_attr( $customize_title ); ?>">
                                <img src="<?php echo esc_url( $screenshot ); ?>"
                                     alt="<?php esc_attr_e( 'Current theme preview', 'redux-framework-demo' ); ?>"/>
                            </a>
                        <?php endif; ?>
                        <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'redux-framework-demo' ); ?>"/>
                    <?php endif; ?>

                    <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                    <div>
                        <ul class="theme-info">
                            <li><?php printf( __( 'By %s', 'redux-framework-demo' ), $this->theme->display( 'Author' ) ); ?></li>
                            <li><?php printf( __( 'Version %s', 'redux-framework-demo' ), $this->theme->display( 'Version' ) ); ?></li>
                            <li><?php echo '<strong>' . __( 'Tags', 'redux-framework-demo' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                        </ul>
                        <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                        <?php
                            if ( $this->theme->parent() ) {
                                printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'redux-framework-demo' ) . '</p>', __( 'http://codex.wordpress.org/Child_Themes', 'redux-framework-demo' ), $this->theme->parent()->display( 'Name' ) );
                            }
                        ?>

                    </div>
                </div>

                <?php
                $item_info = ob_get_contents();

                ob_end_clean();

                $sampleHTML = '';
                if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
                    Redux_Functions::initWpFilesystem();

                    global $wp_filesystem;

                    $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
                }
                


                // ACTUAL DECLARATION OF SECTIONS
                $this->sections[] = array(
                    'title'  => __( 'Global Settings', 'redux-framework-demo' ),
                    'desc'   => __( '', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-home',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'cozy_logo',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Logo', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload logo.', 'cozy' ),
                            'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/logo/logo.png'),
                        ),
                        array(
                            'id'       => 'cozy_favicon',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Favicon', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload favicon', 'cozy' ),
                            'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/fav_touch_icons/favicon.ico'),
                        ),
                        array(
                            'id'       => 'cozy_apple_tc_icon',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Apple Touch Icon', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload Apple Touch Icon', 'cozy' ),
                            'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/fav_touch_icons/apple-touch-icon.png'),
                        ),
                        array(
                            'id'       => 'cozy_apple_tc_icon_md',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Apple Touch Icon ( medium )', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload Apple Touch Icon (72x72)', 'cozy' ),
                            'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/fav_touch_icons/apple-touch-icon-72x72.png'),
                        ),
                        array(
                            'id'       => 'cozy_apple_tc_icon_lg',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Apple Touch Icon ( large )', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload Apple Touch Icon (114x114)', 'cozy' ),
                            'default'  => array( 'url' => get_stylesheet_directory_uri().'/images/fav_touch_icons/apple-touch-icon-114x114.png'),
                        ),
                        array(
                            'id' => "cozy_description",
                            'type' => 'textarea',
                            'title' => __('Description', 'cozy'),
                            'default' => "Cozy is a simple clean and modern WordPress Theme designed for Real Estate business. This theme has a lot of useful features and it's highly customizable so you can turn it into your own awesome website.",
                        ),
                        array(
                            'id' => "cozy_tracking_code",
                            'type' => 'textarea',
                            'title' => __('Tracking Code', 'cozy'),
                        ),
                        
                    ),
                );



                // Contact Section

                $this->sections[] = array(
                    'title'  => __( 'Contact', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el-icon-phone',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id' => "section_contact_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "Contact Info",
                        ),

                        array(
                            'id' => "section_contact_address",
                            'type' => 'text',
                            'title' => __('Address', 'cozy'),
                            'default' => "24th Street, New York, USA",
                        ),

                        array(
                            'id' => "section_contact_email",
                            'type' => 'text',
                            'title' => __('Contact Email', 'cozy'),
                            'default' => "hello@yourcompany.com",
                        ),

                        array(
                            'id' => "section_contact_phone",
                            'type' => 'text',
                            'title' => __('Contact Number', 'cozy'),
                            'default' => "Phone: 800-123-4567",
                        ),

                        array(
                            'id' => "section_contact_fax",
                            'type' => 'text',
                            'title' => __('Contact Number', 'cozy'),
                            'default' => "Fax: 00351 456 789 101",
                        ),

                        array(
                            'id' => "contact_map_lat",
                            'type' => 'text',
                            'title' => __('Google Map Latitude', 'cozy'),
                            'default' => "26.596433",
                        ),

                        array(
                            'id' => "contact_map_long",
                            'type' => 'text',
                            'title' => __('Google Map Longitude', 'cozy'),
                            'default' => "-98.451481",
                        ),
                    ),
                );



            //Search Section
                

                $this->sections[] = array(
                'icon'   => 'el el-search',
                'title'  => __( 'Home Search Section', 'cozy' ),
                'fields' => array(

                        array(
                            'id' => 'section_search_heading',
                            'type' => 'text',
                            'title' => __('Section Heading', 'cozy'),
                            'default' => "Find The Perfect Home",
                        ),

                        array(
                            'id' => 'section_search_heading2',
                            'type' => 'text',
                            'title' => __('Section Heading 2', 'cozy'),
                            'default' => "With Cozy Real Estate HTML Template",
                        ),
                        array(
                            'id'       => 'section_search_bg',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Search Background', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload .....', 'cozy' ),
                            'default'  => array( 'url' => 'http://placehold.it/1920x800'),
                        ),
                    ),
                );


            //Action (Buy Now) Section

                $this->sections[] = array(
                'icon'   => 'el el-usd',
                'title'  => __( 'Buy Now', 'cozy' ),
                'fields' => array(

                        array(
                            'id' => 'section_action_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),

                        array(
                            'id' => 'section_action_description',
                            'type' => 'textarea',
                            'title' => __('Section Description', 'cozy'),
                            'default' => "Cozy - Real Estate Template it's Awesome!<br/>It offers you a lot of great features.",
                        ),  

                        array(
                            'id' => "section_action_buy",
                            'type' => 'text',
                            'title' => __('Action Button Text', 'cozy'),
                            'default' => "Buy Now!",
                        ),

                        array(
                            'id' => "section_action_link",
                            'type' => 'text',
                            'title' => __('Action Link', 'cozy'),
                            'default' => "http://themeforest.net/user/WiselyThemes",
                        ),
                                      
                    ),
                );



            //New Properties Section
                

                $this->sections[] = array(
                'icon'   => 'el el-map-marker-alt',
                'title'  => __( 'New Properties', 'cozy' ),
                'fields' => array(
                       
                       array(
                            'id' => 'section_properties_info',
                            'type' => 'info',
                            'title' => __('Create a new post from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=listing">here</a> ', 'cozy'),
                            'style' => 'warning'
                        ),

                        array(
                            'id' => 'section_properties_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),
                        
                        array(
                            'id' => "section_properties_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "New Properties Available",
                        ),

                        array(
                            'id' => 'section_properties_number',
                            'type' => 'text',
                            'title' => __('How many posts to display?', 'cozy'),
                            'default' => "9",
                        ),                                        
                    ),
                );



                // Property Gallery Section

                $this->sections[] = array(
                    'title'  => __( 'Property Gallery', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-picture',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id' => 'section_gallery_display',
                            'type' => 'switch',
                            'title' => __('Display Gallery Section', 'cozy'),
                            'default' => true,
                        ),

                        array(
                            'id' => "section_gallery_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "Property Gallery",
                        ),

                        array(
                            'id' => "section_featured_properties_title",
                            'type' => 'text',
                            'title' => __('Featured Properties Section Title', 'cozy'),
                            'default' => "Featured Properties",
                        ),

                        array(
                            'id' => "section_recent_properties_title",
                            'type' => 'text',
                            'title' => __('Recent Properties Section Title', 'cozy'),
                            'default' => "Recent Properties",
                        ),

                        array(
                            'id' => "cozy_gallery_description",
                            'type' => 'textarea',
                            'title' => __('Description', 'cozy'),
                            'default' => "Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et.",
                        ),
                        array(
                            'id' => 'property_gallery_number',
                            'type' => 'text',
                            'title' => __('How many gallery image to display?', 'cozy'),
                            'default' => "4",
                        ), 
                        array(
                            'id' => 'section_featured_properties_number',
                            'type' => 'text',
                            'title' => __('How many featured Properties to display?', 'cozy'),
                            'default' => "3",
                        ), 
                        array(
                            'id' => 'section_recent_properties_number',
                            'type' => 'text',
                            'title' => __('How many Recent Property to display?', 'cozy'),
                            'default' => "6",
                        ), 
                    ),
                );



            //Latest News Section
                

                $this->sections[] = array(
                'icon'   => 'el el-time',
                'title'  => __( 'Latest News', 'cozy' ),
                'fields' => array(
                       
                       array(
                            'id' => 'section_feature_info',
                            'type' => 'info',
                            'title' => __('Create a new post from <a href="' . site_url() . '/wp-admin/post-new.php">here</a> ', 'cozy'),
                            'style' => 'warning'
                        ),

                        array(
                            'id' => 'section_news_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),
                        
                        array(
                            'id' => "section_news_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "Latest News",
                        ),

                        array(
                            'id' => "section_news_description",
                            'type' => 'textarea',
                            'title' => __('Section Description', 'cozy'),
                            'default' => "Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et. ",
                        ),

                        array(
                            'id' => 'section_news_number',
                            'type' => 'text',
                            'title' => __('How many posts to display?', 'cozy'),
                            'default' => "3",
                        ),                                        
                    ),
                );



            // Features Section
                

                $this->sections[] = array(
                'icon'   => 'el el-leaf',
                'title'  => __( 'Feature', 'cozy' ),
                'fields' => array(
                       
                       array(
                            'id' => 'section_feature_info',
                            'type' => 'info',
                            'title' => __('Create a new feature from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=feature">here</a> ', 'cozy'),
                            'style' => 'warning'
                        ),

                        array(
                            'id' => 'section_feature_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),
                        
                        array(
                            'id' => "section_feature_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "Template Features",
                        ),

                        array(
                            'id' => 'section_feature_number',
                            'type' => 'text',
                            'title' => __('How many posts to display?', 'cozy'),
                            'default' => "3",
                        ),   

                        array(
                            'id' => 'section_feature_number_grid',
                            'type' => 'text',
                            'title' => __('How many posts to display in home grid page?', 'cozy'),
                            'default' => "4",
                        ),
                    ),
                );



                // Service Section


                $this->sections[] = array(
                    'icon'   => 'el el-list-alt',
                    'title'  => __( 'Service', 'cozy' ),
                    'fields' => array(

                        array(
                            'id' => 'section_service_info',
                            'type' => 'info',
                            'title' => __('Create a new service from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=service">here</a> ', 'cozy'),
                            'style' => 'warning'
                        ),

                        array(
                            'id' => 'section_service_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),

                        array(
                            'id' => "section_service_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "WORK WITH COZY REAL-ESTATE",
                        ),

                        array(
                            'id' => 'section_service_number',
                            'type' => 'text',
                            'title' => __('How many posts to display?', 'cozy'),
                            'default' => "3",
                        ),
                    ),
                );

                // Our Partners Section

                $this->sections[] = array(
                    'title'  => __( 'Our Partners', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-group-alt',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id' => 'section_partners_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),

                        array(
                            'id' => "section_partners_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "Our Partners",
                        ),

                        array(
                            'id'       => 'opt_select_partners',
                            'type'     => 'select',
                            'title'    => __('Select Partners Page', 'cozy'), 
                            'subtitle' => __('Select Our Partners Page to Display', 'cozy'),
                            'desc'     => __('Please create a page with page template "Our Partners" and add some partner image then select that page here to display in section our partners.', 'cozy'),
                            // Must provide key => value pairs for select options
                            'options'  => wt_cozy_page_list( array( 'post_type' => 'page', 'numberposts' => -1 ) ),
                        ),

                    ),
                );

                // Our Agents Section

                $this->sections[] = array(
                    'title'  => __( 'Our Agents', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-user',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id' => 'section_agents_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),
                        array(
                            'id' => "section_agents_title",
                            'type' => 'text',
                            'title' => __('Section Title', 'cozy'),
                            'default' => "Our Agents",
                        ),
                        array(
                            'id' => 'section_agents_number',
                            'type' => 'text',
                            'title' => __('How many agents to display?', 'cozy'),
                            'default' => "4",
                        ),  
                    ),
                );


                // Grid Section

                $this->sections[] = array(
                    'title'  => __( 'Grid Section', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-th',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id' => 'section_grid_display',
                            'type' => 'switch',
                            'title' => __('Display Grid Section', 'cozy'),
                            'default' => true,
                        ),
                        array(
                            'id' => 'section_grid_number',
                            'type' => 'text',
                            'title' => __('How many posts to display in grid section?', 'cozy'),
                            'default' => "15",
                        ), 
                    ),
                );


            //Newsletter
                

                $this->sections[] = array(
                'icon'   => 'el el-envelope',
                'title'  => __( 'Newsletter', 'cozy' ),
                'fields' => array(

                        array(
                            'id' => 'section_newsletter_display',
                            'type' => 'switch',
                            'title' => __('Display Newsletter', 'cozy'),
                            'default' => true,
                        ),

                        array(
                            'id' => "section_newsletter_title",
                            'type' => 'text',
                            'title' => __('Newsletter Title', 'cozy'),
                            'default' => "NEWSLETTER",
                        ),

                        array(
                            'id' => "section_newsletter_title2",
                            'type' => 'text',
                            'title' => __('Newsletter Title 2', 'cozy'),
                            'default' => "SUBSCRIBE OUR",
                        ),

                        array(
                            'id' => "section_newsletter_description",
                            'type' => 'textarea',
                            'title' => __('Newsletter Description', 'cozy'),
                            'default' => "Lorem ipsum dolor sit amet, consectetur elit.",
                        ),

                        array(
                            'id'       => 'newsletter_bg',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Newsletter Background', 'cozy' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Please upload .....', 'cozy' ),
                            'default'  => array( 'url' => 'http://placehold.it/1920x800'),
                        ),
                                      
                    ),
                );


            // Testimonial Section

                $this->sections[] = array(
                    'title'  => __( 'Testimonial', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-quote-right',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id' => 'section_testimonial_info',
                            'type' => 'info',
                            'title' => __('Create a new Testimonial from <a href="' . site_url() . '/wp-admin/post-new.php?post_type=testimonial">here</a> ', 'cozy'),
                            'style' => 'warning'
                        ),

                        array(
                            'id' => 'section_testimonial_display',
                            'type' => 'switch',
                            'title' => __('Display Section', 'cozy'),
                            'default' => true,
                        ),
                        
                      array(
                            'id'       => 'section_testimonial_title',
                            'type'     => 'text',
                            'validate' => '',
                            'title'    => __( 'Section heading', 'cozy'),
                            'default'  => 'Testimonials',
                        ),

                      array(
                            'id' => 'section_testimonial_number',
                            'type' => 'text',
                            'title' => __('How many posts to display?', 'cozy'),
                            'default' => "3",
                        ),

                    ),
                );


                // Home Map Page

                $this->sections[] = array(
                    'title'  => __( 'Home Map Page', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-map-marker',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id' => 'section_looking_for_display',
                            'type' => 'switch',
                            'title' => __('Display Grid Section', 'cozy'),
                            'default' => true,
                        ),
                        array(
                            'id' => "section_looking_for_title",
                            'type' => 'text',
                            'title' => __('Looking For Title', 'cozy'),
                            'default' => "WHAT ARE YOU LOOKING FOR?",
                        ),
                        array(
                            'id' => "section_looking_for_description",
                            'type' => 'textarea',
                            'title' => __('Looking For Description', 'cozy'),
                            'default' => "Curabitur dignissim tortor ut scelerisque consectetur. Praesent pulvinar placerat lorem, et ultricies urna ultrices vel. Praesent eu libero a sapien adipiscing interdum feugiat id lectus.",
                        ),

                        array(
                            'id' => 'section_why_choose_display',
                            'type' => 'switch',
                            'title' => __('Display Why Choose Us Section', 'cozy'),
                            'default' => true,
                        ),
                        
                      array(
                            'id'       => 'section_why_choose_title',
                            'type'     => 'text',
                            'validate' => '',
                            'title'    => __( 'Section Why Choose Us Heading', 'cozy'),
                            'default'  => 'Why Choose Us?',
                        ),

                      array(
                            'id' => 'section_why_choose_number1',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "1281",
                        ),
                      array(
                            'id' => 'section_why_choose_text1',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "Properties<br/>Rented",
                        ),
                      array(
                            'id' => 'section_why_choose_number2',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "426",
                        ),
                      array(
                            'id' => 'section_why_choose_text2',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "Residential<br/>Properties Sold",
                        ),
                      array(
                            'id' => 'section_why_choose_number3',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "179",
                        ),
                      array(
                            'id' => 'section_why_choose_text3',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "Commercial<br/>Properties Sold",
                        ),
                      array(
                            'id' => 'section_why_choose_number4',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "153",
                        ),
                      array(
                            'id' => 'section_why_choose_text4',
                            'type' => 'text',
                            'title' => __(' ', 'cozy'),
                            'default' => "Land<br/>Properties Sold",
                        ),
                      array(
                            'id' => 'twitter_username',
                            'type' => 'text',
                            'title' => __('Twitter Username', 'cozy'),
                            'default' => "Envato",
                        ),
                    ),
                );


            // 404 Not Found Page

                $this->sections[] = array(
                    'title'  => __( '404 Not Found Page', 'cozy' ),
                    'desc'   => __( 'Content for 404 not found page', 'cozy' ),
                    'icon'   => 'el el-error',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                      array(
                            'id'       => 'not_found_title',
                            'type'     => 'text',
                            'title'    => __( '404 page title', 'cozy'),
                            'default'  => 'Hey! Page not found.',
                        ),

                      array(

                            'id'       => 'not_found_description',
                            'type'     => 'textarea',
                            'title'    => __( '404 page description', 'cozy'),
                            'default'  => '<p><br/><br/>Sorry, but the page you requested could not be found. This page may have been moved, deleted or maybe you have mistyped the URL.</p> <p>Please, try again and make sure you have typed the URL correctly.</p>',
                        ),
                    ),
                );


            // Footer Section

                $this->sections[] = array(
                    'title'  => __( 'Footer', 'cozy' ),
                    'desc'   => __( '', 'cozy' ),
                    'icon'   => 'el el-chevron-down',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id' => "footer_copyright",
                            'type' => 'text',
                            'title' => __('Copyright text', 'cozy'),
                            'default' => "&copy; 2014 Cozy - Real Estate WordPress Theme. All rights reserved. Developed by <a href='http://www.wiselythemes.com' target='_blank'>WiselyThemes</a>",
                        ),

                        array(
                            'id' => "footer_facebook_link",
                            'type' => 'text',
                            'title' => __('Facebook Link', 'cozy'),
                            'default' => "http://www.facebook.com/wiselythemes",
                        ),

                        array(
                            'id' => "footer_twitter_link",
                            'type' => 'text',
                            'title' => __('Twitter Link', 'cozy'),
                            'default' => "http://www.twitter.com/wiselythemes",
                        ),

                        array(
                            'id' => "footer_googleplus_link",
                            'type' => 'text',
                            'title' => __('Google Plus Link', 'cozy'),
                            'default' => "http://plus.google.com/wiselythemes",
                        ),

                        array(
                            'id' => "footer_pinterest_link",
                            'type' => 'text',
                            'title' => __('Pinterest Link', 'cozy'),
                            'default' => "http://www.pinterest.com/wiselythemes",
                        ),

                        array(
                            'id' => "footer_youtube_link",
                            'type' => 'text',
                            'title' => __('YouTube Link', 'cozy'),
                            'default' => "http://www.youtube.com/user/wiselythemes",
                        ),

                        array(
                            'id' => "footer_feed_link",
                            'type' => 'text',
                            'title' => __('Feed Link', 'cozy'),
                            'default' => "#",
                        ),
                      
                    ),
                );



            // Import/Export Options

                $this->sections[] = array(
                    'title'  => __( 'Import/Export', 'redux-framework-demo' ),
                    'desc'   => __( '', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-edit',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(

                        array(
                            'id'            => 'opt-import-export',
                            'type'          => 'import_export',
                            'title'         => 'Import Export',
                            'subtitle'      => 'Save and restore your Redux options',
                            'full_width'    => false,
                        ),
                      
                    ),
                );
                


                /**
                 *  Note here I used a 'heading' in the sections array construct
                 *  This allows you to use a different title on your options page
                 * instead of reusing the 'title' value.  This can be done on any
                 * section - kp
                 */
                
                

                $theme_info = '<div class="redux-framework-section-desc">';
                $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . __( '<strong>Theme URL:</strong> ', 'redux-framework-demo' ) . '<a href="' . $this->theme->get( 'ThemeURI' ) . '" target="_blank">' . $this->theme->get( 'ThemeURI' ) . '</a></p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . __( '<strong>Author:</strong> ', 'redux-framework-demo' ) . $this->theme->get( 'Author' ) . '</p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . __( '<strong>Version:</strong> ', 'redux-framework-demo' ) . $this->theme->get( 'Version' ) . '</p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get( 'Description' ) . '</p>';
                $tabs = $this->theme->get( 'Tags' );
                if ( ! empty( $tabs ) ) {
                    $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . __( '<strong>Tags:</strong> ', 'redux-framework-demo' ) . implode( ', ', $tabs ) . '</p>';
                }
                $theme_info .= '</div>';

             

                // You can append a new section at any time.
                

              

                $this->sections[] = array(
                    'type' => 'divide',
                );

               
            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'wt_cozy',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'         => 'Cozy Theme Options',
                    // Name that appears at the top of your panel
                    'display_version'      => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'            => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'       => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'           => __( 'Cozy Theme Options', 'redux-framework-demo' ),
                    'page_title'           => __( 'Cozy Theme Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'       => '',
                    // Set it you want google fonts to update weekly. A google_api_key value is required.
                    'google_update_weekly' => false,
                    // Must be defined to add google fonts to the typography module
                    'async_typography'     => true,
                    // Use a asynchronous font on the front end or font string
                    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                    'admin_bar'            => true,
                    // Show the panel pages on the admin bar
                    'admin_bar_icon'     => 'dashicons-portfolio',
                    // Choose an icon for the admin bar menu
                    'admin_bar_priority' => 50,
                    // Choose an priority for the admin bar menu
                    'global_variable'      => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'             => false,
                    // Show the time the page took to load, etc
                    'update_notice'        => false,
                    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
                    'customizer'           => true,
                    // Enable basic customizer support
                    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                    // OPTIONAL -> Give you extra features
                    'page_priority'        => 61,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'          => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'     => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'            => '',
                    // Specify a custom URL to an icon
                    'last_tab'             => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'            => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'            => 'wt_cozy_option',
                    // Page slug used to denote the panel
                    'save_defaults'        => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'         => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'         => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export'   => false,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'       => 60 * MINUTE_IN_SECONDS,
                    'output'               => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'           => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'             => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'          => false,
                    // REMOVE

                    // HINTS
                    'hints'                => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );


                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '', 'redux-framework-demo' );
            }

            public function validate_callback_function( $field, $value, $existing_value ) {
                $error = true;
                $value = 'just testing';

                /*
              do your validation

              if(something) {
                $value = $value;
              } elseif(something else) {
                $error = true;
                $value = $existing_value;
                
              }
             */

                $return['value'] = $value;
                $field['msg']    = 'your custom error message';
                if ( $error == true ) {
                    $return['error'] = $field;
                }

                return $return;
            }

            public function class_field_callback( $field, $value ) {
                print_r( $field );
                echo '<br/>CLASS CALLBACK';
                print_r( $value );
            }

        }

        global $reduxConfig;
        $reduxConfig = new Redux_Framework_sample_config();
    } else {
        echo "The class named Redux_Framework_sample_config has already been called. <strong>Developers, you need to prefix this class with your company name or you'll run into problems!</strong>";
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ):
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    endif;

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ):
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error = true;
            $value = 'just testing';

            /*
          do your validation

          if(something) {
            $value = $value;
          } elseif(something else) {
            $error = true;
            $value = $existing_value;
            
          }
         */

            $return['value'] = $value;
            $field['msg']    = 'your custom error message';
            if ( $error == true ) {
                $return['error'] = $field;
            }

            return $return;
        }
    endif;


function wt_cozy_page_list( $query_args ) {

    $args = wp_parse_args( $query_args, array(
        'post_type'   => 'page',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array();
    if ( $posts ) {
        foreach ( $posts as $post ) {
          $post_options[ $post->ID ] = $post->post_title;
        }
    }

    return $post_options;
}