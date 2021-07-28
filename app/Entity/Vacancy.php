<?php
namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vacancy{
    
    /**
     * Exclusive identifier
     * @var integer
     */
    public $id;
    
    /**
     * Title of Vacancy
     * @var string
     */
    public $title;
    
    /**
     * Description of the vacancy
     * @var string
     */
    public $description;
    
    /**
     * Status of the vacancy
     * @var string(y/n)
     */
    public $active;
    
    /**
     * Post date
     * @var string
     */
    public $date;
    
    /**
     * Method responsible for registering new vacancy
     * @return boolean
     */
    public function register(){
        // Set a date
        $this->date = date['Y-m-d H:i:s'];
        
        // Register into the database
        $objDatabase = new Database('jobs');
        
        print_r($objDatabase);
        
        // Put a new id
        
        // Return success!
    }
    
}
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);