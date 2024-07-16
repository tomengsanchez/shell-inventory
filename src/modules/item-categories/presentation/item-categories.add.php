<?php




function shell_item_categories_add()
{
    shell_header();
    // $validator = new Validator();
    $message = [];
    if($_POST){
        $logic= shell_item_categories_save($_POST);
        $message = $logic;

    }
    
    ?>
    <form action="<?= admin_url('admin.php?page=' . $_GET['page'])?>" method="post">
        <label for="exampleInputEmail1">Item Category Name</label>
        <input type="name" name='name'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_POST['name'] ?? ''?>"
            placeholder="Enter name" >
            <small id="emailHelp" class="form-text text-danger"><?php echo $message['name'] ?? ''; ?></small><br>
            <label for="exampleInputEmail1">Email</label>
            <input type="name" name='email'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_POST['email'] ?? ''?>"
            placeholder="Enter email" >
        <small id="emailHelp" class="form-text text-danger"><?php echo $message['email'] ?? ''; ?></small><br>
        <label for="exampleInputEmail1">Age</label>
        <input type="name" name='age'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_POST['age'] ?? ''?>"
            placeholder="Enter age" >
        <small id="emailHelp" class="form-text  text-danger"><?php echo $message['age'] ?? ''; ?></small><br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <?php
    shell_footer();
}