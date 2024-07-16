<?php
// global $wpdb;
use Rakit\Validation\Validator;

function shell_item_categories_blogic_list(){
    $item_categories = item_categories_data_list();
    $categories = [];
    foreach($item_categories as $item_category){

        $categories[] = [
            "id"=> $item_category->ID,
            'name'=>get_post_meta($item_category->ID,'name', true),
        ];
    }

    return $categories;
}


function shell_item_categories_save($post){

    $validator = new Validator();

    $message = [];


    $validation = $validator->make($post, [
        'name'                  => 'required',
        'email'                 => 'required|email',
        'age'                 => 'required|numeric',
        
        
    ]);
    $validation->validate();

    if ($validation->fails()) {
        // handling errors
        $errors = $validation->errors();
        
        $errors->firstOfAll();
        // testArray($errors);
        $message['name'] = $errors->firstOfAll()['name'] ?? '';
        $message['email'] = $errors->firstOfAll()['email'] ?? '';
        $message['age'] = $errors->firstOfAll()['age'] ?? '';

        
        // exit;
    } else {
        // validation passes

        item_categories_data_save($post);

    }

    return $message;
    

}

//ajax

add_action('wp_ajax_save_item_category',function(){
    
});

