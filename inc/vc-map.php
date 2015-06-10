<?php 

if( function_exists('vc_map') ):
    vc_map(
    array(
       "name" => __("Faq","cozy"),//done
       "base" => "faq",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Faq Shortcode','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Price Table 1","cozy"),//done
       "base" => "price_table_1",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Price Table Style 1','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Price Table 2","cozy"),//done
       "base" => "price_table_2",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Price Table Style 2','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Price Table 3","cozy"),//done
       "base" => "price_table_3",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Price Table Style 3','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Price Table 4","cozy"),//done
       "base" => "price_table_4",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Price Table Style 4','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Cozy Tab 1","cozy"),//done
       "base" => "more_info_1",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Cozy Tab Style 1','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Cozy Tab 2","cozy"),//done
       "base" => "more_info_2",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Cozy Tab Style 2','cozy'),
       "params" => array()
    )
    );


    vc_map(
    array(
       "name" => __("Cozy Icon Pack","cozy"),//done
       "base" => "cozy_icon_pack",
       "class" => "",
       "category" => __('Cozy','cozy'),
       'admin_enqueue_js' => array(get_template_directory_uri().'/admin/vc_extend/vc.js'),
       'admin_enqueue_css' => array(get_template_directory_uri().'/admin/vc_extend/vc.css'),
       'weight'=>100,
       'icon'   => get_template_directory_uri() . "/admin/vc_extend/vc.png",
       'description'=>__('Cozy Icon Pack','cozy'),
       "params" => array()
    )
    );


endif;