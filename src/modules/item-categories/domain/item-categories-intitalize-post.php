<?php 

add_action('init',function(){
    $labels = array(
        'name'               => _x( 'Item Categories', 'post type general name' ),
        'singular_name'      => _x( 'Item Category', 'post type singular name' ),
        'menu_name'          => _x( 'Item Categories', 'admin menu' ),
        'name_admin_bar'     => _x( 'Item Categories', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New Item Catagory', 'item-categories' ),
        'add_new_item'       => __( 'Add New Book' ),
        'new_item'           => __( 'New Book' ),
        'edit_item'          => __( 'Edit Book' ),
        'view_item'          => __( 'View Book' ),
        'all_items'          => __( 'All Books' ),
        'search_items'       => __( 'Search Books' ),
        'parent_item_colon'  => __( 'Parent Books:' ),
        'not_found'          => __( 'No books found.' ),
        'not_found_in_trash' => __( 'No books found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => '' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
    );

    register_post_type( 'item-categories', $args );
});




