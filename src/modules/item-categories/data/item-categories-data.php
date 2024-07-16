<?php 

function item_categories_data_list(){
    $query = new WP_Query(array(
        'post_type' => 'item-categories'
    ));
    $item_categories= $query->posts;
    return $item_categories;
}


function item_categories_data_save($data){
    //save to database;

    //insert using wp_insert_post();

    // $post_id =  wp_insert_post();

    //update post meta 
    // update_post_meta( $post_id, 'escaped_json', 'value' );
}