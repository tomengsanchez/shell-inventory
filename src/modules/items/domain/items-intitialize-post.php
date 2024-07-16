<?php 
function create_items_post_type() {
    $labels = array(
        'name'               => _x( 'Items', 'post type general name' ),
        'singular_name'      => _x( 'Item', 'post type singular name' ),
        'menu_name'          => _x( 'Items', 'admin menu' ),
        'name_admin_bar'     => _x( 'Item', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Item' ),
        'add_new_item'       => __( 'Add New Item' ),
        'new_item'           => __( 'New Item' ),
        'edit_item'          => __( 'Edit Item' ),
        'view_item'          => __( 'View Item' ),
        'all_items'          => __( 'All Items' ),
        'search_items'       => __( 'Search Items' ),
        'parent_item_colon'  => __( 'Parent Items:' ),
        'not_found'          => __( 'No Items found.' ),
        'not_found_in_trash' => __( 'No Items found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Item' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
    );

    register_post_type( 'Item', $args );
}
add_action( 'init', 'create_items_post_type' );
