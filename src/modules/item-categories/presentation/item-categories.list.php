<?php 


function shell_item_categories_list($wpdb){
    shell_header();
    ?>
    <h5>Item Categories List</h5>
    <?php testArray(shell_item_categories_blogic_list()); ?>
    <?= admin_url('admin-ajax.php?action=save_item_category')?>
    <?php
    
    shell_footer();

}