<?php


//add capabilities to administrators

add_action("init",function(){
    $role = get_role("administrator");
    $role->add_cap("manage_inventory");
});

//add Roles

// Add the shell role Developer.
add_action( 'init', function(){
    add_role(
		'inventory_developer',
		'Ecosys Developer',
		array(
			'manage_inventory' => true,
            'view_admin_dashboard'=>true
		),
	);
});

// Login redirect
add_filter('login_redirect','shell_login_redirect',10,3);
function shell_login_redirect( $redirect_to, $request, $user ) {
    
    if ( current_user_can('manage_inventory')) {
        $redirect_to = admin_url("/admin.php?page=shell-inventory-dashboard");
    }
    
    return $redirect_to;
}