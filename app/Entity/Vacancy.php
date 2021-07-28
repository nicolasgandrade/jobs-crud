<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vacancy{

  public $id;

  public $title;

  public $description;

  public $active;

  public $date;

  public function register(){
    //Define new date
    $this->date = date('Y-m-d H:i:s');

    // Insert new job vacancy
    $objDatabase = new Database('jobs');
    print_r($objDatabase);
  }
}

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);