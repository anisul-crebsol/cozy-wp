<?php

// Hooks your functions into the correct filters
function cozy_shortcode_add_mce_button() {
    // check user permissions
    if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
        return;
    }
    // check if WYSIWYG is enabled
    if ('true' == get_user_option('rich_editing')) {
        add_filter('mce_external_plugins', 'cozy_shortcode_add_tinymce_plugin');
        add_filter('mce_buttons', 'cozy_shortcode_register_mce_button');
    }
}

add_action('admin_head', 'cozy_shortcode_add_mce_button');

// Declare script for new button
function cozy_shortcode_add_tinymce_plugin($plugin_array) {
    $plugin_array['cozy_shortcode_mce_button'] = get_template_directory_uri() . '/js/cozyshortcode.js';
    return $plugin_array;
}

// Register new button in the editor
function cozy_shortcode_register_mce_button($buttons) {
    array_push($buttons, 'cozy_shortcode_mce_button');
    return $buttons;
}