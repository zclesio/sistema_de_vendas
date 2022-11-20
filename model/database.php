<?php
function connection(){
    try {
        $dbName = "vendas";
        $username = "root";
        $passwod = "";
        $pdo = new PDO('mysql:host=localhost;dbname='.$dbName, $username, $passwod);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function login($name, $passwod){
   
}