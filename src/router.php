<?php
use Module\Suppliers\Presentation\SupplierList;



add_action('admin_menu',function(){
    add_menu_page('Shell Inventory','Shell Inventory','manage_inventory','shell-inventory-dashboard','shell_dashboard','dashicons-location-alt',22);
    add_submenu_page( 'shell-inventory-dashboard', 'Dashboard', 'Dashboard', 'manage_inventory', 'shell-inventory-dashboard', 'shell_dashboard'); // replace function(){} with your function name
    add_submenu_page( 'shell-inventory-dashboard', 'Movements', 'Movements', 'manage_inventory', 'shell-inventory-movements', function(){ } );

    //ITEMS List
    add_submenu_page( 'shell-inventory-dashboard', 'Items', 'Items', 'manage_inventory', 'shell-inventory-items', 'shell_item_list' );
    //items create
    add_submenu_page( '', 'Add Items', 'Add Items', 'manage_inventory', 'shell-inventory-items-add', 'shell_items_add' );

    //ITEM CATEGORIES
    add_submenu_page( 'shell-inventory-dashboard', 'Item Categories', 'Item Categories', 'manage_inventory', 'shell-inventory-item-categories', 'shell_item_categories_list');
    add_submenu_page( 'shell-inventory-item-categories', 'Add Item Categories', 'Item Categories', 'manage_inventory', 'shell-inventory-item-categories-add', 'shell_item_categories_add');

    
    add_submenu_page( 'shell-inventory-dashboard', 'Suppliers', 'Suppliers', 'manage_inventory', 'shell-inventory-suppliers',function(){
        $x =  new SupplierList;
        $x->draw_table();
        
    });
});
