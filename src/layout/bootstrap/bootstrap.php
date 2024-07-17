<?php
$_GET['page'] = $_GET['page'] ?? null;
 if(count(explode('shell',$_GET['page'])) > 1){
    wp_enqueue_style( 'shell-bootstrap-css', plugin_dir_url( __FILE__ ) . '/css/bootstrap.css', []);
    wp_enqueue_script( 'shell-bootstrap-js', plugin_dir_url( __FILE__ ) . '/js/bootstrap.bundle.min.js', []);
    

    
 }
?>