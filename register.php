<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vacancy;

// POST validation
if(isset($_POST['title'], $_POST['description'], $_POST['active'])){
    $objVacancy = new Vacancy;
    $objVacancy->title = $_POST['title'];
    $objVacancy->description = $_POST['description'];
    $objVacancy->active = $_POST['active'];
    $objVacancy->register();
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';

?>