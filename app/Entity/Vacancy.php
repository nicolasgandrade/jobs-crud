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
     
    $this->id = $objDatabase->Insert([
      'title' => $this->title,
      'description' => $this->description,
      'active' => $this->active,
      'date' => $this->date
    ]);

    // echo '<pre>'; print_r($this); echo '</pre>'; exit;

    return true;
  }

  public static function getVacancies($where = null, $order = null, $limit = null){
    return (new Database('jobs'))->select($where, $order, $limit)
                                  ->fetchAll(PDO::FETCH_CLASS, self::class);
  }
}

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);