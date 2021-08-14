<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vacancy;

$vacancies = Vacancy::getVacancies();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';

?>