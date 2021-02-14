<?php 
namespace Source\Controllers;
use Source\Models\Connection;


class TestController{

    public function __construct(){}

    public function getTest(){
        $conn = (new Connection())->createConnection();
        $num = 1;

        $stmt = $conn->qurey("SELECT * FROM table_test WHERE 1");
        // $stmt->bindParam(1, $num);
        // $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        
        var_dump($row);

    }

    public function hum()
    {
        $test = new Connection();

        print_r($tes->getALL());
    }
}







?>