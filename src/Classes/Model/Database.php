<?php

namespace App\Classes\Model;
use PDO;
use PDOException;

class Database
{
    public $databaseHandler;
    public $host = "localhost";
    public $dbname = "real_estate";
    public $user = "root";
    public $password = "";

    public function __construct()
    {
        try {
            $this->databaseHandler = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            //echo "Database Connected";
        }
        catch(PDOException $error){
            echo $error->getMessage();

        }
    }

}