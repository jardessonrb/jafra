<?php
namespace Source\Models;
use PDO;
use PDOException;


class Connection{

    private $dsn, $userDBA, $passwordDBA;
    public $conn;

    public function __construct(){
        $this->dsn = BD_DRIVER_DEFAULT.":dbname=".BD_BANCO.";host=".BD_HOST;
        $this->userDBA = BD_USER;
        $this->passwordDBA = BD_PASSWORD;
    }


    public function createConnection(){
        try{

            $this->conn = new PDO($this->dsn, $this->userDBA, $this->passwordDBA);

            var_dump("cheguei no createConnection");

            return $this->conn;
            

        } catch (PDOException $e){

            echo "Connection Failed: " . $e->getMessage();
        }
    }

    public function getALL(){
        return "olha eu na connection";
    }
}

?>