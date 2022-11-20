<?php
include '../model/database.php';
if(isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    echo login($name, $password);
}