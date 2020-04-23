<?php

include "DB.php";

 

include "../includes/header.php";

 


class Queries{
    public $conn;
    
    function __construct(){
        $db = new DB();
        $this->conn = $db->connection();
    }


    function getAllProducts(){
        $stmt = $this->conn->prepare('SELECT * FROM products');
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }


  

    function insertProduct($name, $amount, $data, $bar_code, $expiration, $input_date){
        
        $stmt = $this->conn->prepare("INSERT INTO `products`(`name`,`amount`,`data`,`bar_code`,`expiration`,`input_date`) VALUES (:name, :amount, :data, :bar_code, :expiration, :input_date)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':bar_code', $bar_code);
        $stmt->bindParam(':expiration', $expiration);
        $stmt->bindParam(':input_date', $input_date);

        $stmt->execute();
        echo "warmatebit chaabare dzmobilo";

    }


    function deleteProduct($id){
        
        $stmt = $this->conn->prepare("DELETE FROM `products` WHERE `id`='$id'");

        $stmt->execute();
        return "waishala " . $id;

    }
}




$query = new Queries();
if (isset($_POST['name']) || isset($_POST['id'])) {
    $action = $_POST['action'];

    switch($action) {
        case 'insert' : 
            $name = $_POST['name'];
            $amount = $_POST['amount'];
            $data = $_POST['data'];
            $bar_code = $_POST['bar_code'];
            $expiration = $_POST['expiration'];
            $input_date = $_POST['input_date'];

            $query->insertProduct($name, $amount, $data, $bar_code, $expiration, $input_date);

            return "product is added";


            break;

        case 'delete' : 
            $id = $_POST['id'];

            $query->deleteProduct($id);

            return "product is added";


            break;
    
    }
}

// isset($_POST['name'])  isset($_POST['amount'])  isset($_POST['data'])  isset($_POST['bar_code'])  isset($_POST['expiration'])  isset($_POST['input_date']) 
