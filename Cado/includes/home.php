<?php

/**
 * Home Menu Page
 */
# Custom home post type
add_action('init', 'create_home_post_type');

function create_home_post_type() {
    register_post_type('home', array(
        'labels' => array(
            'name' => __('Home'),
            'singular_name' => __('Home'),
            'add_new' => __('Add new'),
            'add_new_item' => __('Add new Home'),
            'new_item' => __('New Home'),
            'edit' => __('Edit'),
            'edit_item' => __('Edit Home'),
            'view' => __('View Home'),
            'view_item' => __('View Home'),
            'search_items' => __('Search Home'),
            'not_found' => __('No Home found'),
            'not_found_in_trash' => __('No Home found in trash'),
        ),
        'public' => true,
        'show_ui' => true,
        'publicy_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array(
            'title',
        //'custom-fields', 'excerpt', 'comments', 'author', 'thumbnail', 'editor', 
        ),
        'rewrite' => array('slug' => 'home', 'with_front' => false),
        'can_export' => true,
        'description' => __('Home description here.')
    ));
}

# home meta box
$home_meta_box = array(
    'id' => 'home-meta-box',
    'title' => 'Thông tin chung',
    'page' => 'home',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Danh mục',
            'desc' => '',
            'id' => 'home_cat',
            'type' => 'select',
            'options' => $category_list,
            'std' => '',
        ),
        array(
            'name' => 'Kiểu hiển thị',
            'desc' => '',
            'id' => 'home_style',
            'type' => 'select',
            'options' => array(0 => 1, 1 => 2),
            'std' => '',
        ),
        array(
            'name' => 'Sắp xếp',
            'desc' => '',
            'id' => 'home_order',
            'type' => 'text',
            'std' => '1',
        ),
));

// Add home meta box
if (is_admin()) {
    add_action('admin_menu', 'home_add_box');
    add_action('save_post', 'home_add_box');
    add_action('save_post', 'home_save_data');
}

function home_add_box() {
    global $home_meta_box;
    add_meta_box($home_meta_box['id'], $home_meta_box['title'], 'home_show_box', $home_meta_box['page'], $home_meta_box['context'], $home_meta_box['priority']);
}

// Callback function to show fields in home meta box
function home_show_box() {
    // Use nonce for verification
    global $home_meta_box, $post;

    custom_output_meta_box($home_meta_box, $post);
}

// Save data from home meta box
function home_save_data($post_id) {
    global $home_meta_box;
    custom_save_meta_box($home_meta_box, $post_id);
}
