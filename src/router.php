<?php
add_action('admin_menu',function(){
    add_menu_page('Shell Inventory','Shell Inventory','manage_inventory','shell-inventory-dashboard',function(){},'dashicons-location-alt',22);
    add_submenu_page( 'shell-inventory-dashboard', 'Dashboard', 'Dashboard', 'manage_inventory', 'shell-inventory-dashboard', function(){} ); // replace function(){} with your function name
    add_submenu_page( 'shell-inventory-dashboard', 'Movements', 'Movements', 'manage_inventory', 'shell-inventory-movements', function(){ } );

    //ITEMS List
    add_submenu_page( 'shell-inventory-dashboard', 'Items', 'Items', 'manage_inventory', 'shell-inventory-items', 'shell_item_list' );
    //items create
    add_submenu_page( '', 'Items', 'Items', 'manage_inventory', 'shell-inventory-items-add', 'shell_items_add' );


    add_submenu_page( 'shell-inventory-dashboard', 'Item Categories', 'Item Categories', 'manage_inventory', 'shell-inventory-item-categories', function(){ } );
    add_submenu_page( 'shell-inventory-dashboard', 'Suppliers', 'Suppliers', 'manage_inventory', 'shell-inventory-suppliers', function(){ } );
});
