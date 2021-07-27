<?php 

require __DIR__.'/vendor/autoload.php';

// POST validation
if(isset($_POST['title'], $_POST['description'], $_POST['active'])){
    die('Register');
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';

?>