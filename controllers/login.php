<?php

if(!isset($_SESSION['id'])){
    header("location: ../index.html");
    exit;
}

class Login {
    private $conn;
    private $error;
    private $connect_error;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "myapp");
        if(!$this->conn){
            $this->connect_error = mysqli_connect_error();
            return false;
        }else{
            return true;
        }
    }
}