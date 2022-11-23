<?php
include '../model/database.php';
if(isset($_REQUEST['usuario'])){
    switch($_REQUEST['usuario']){
        case 'adicionar':
            echo addUser($_REQUEST['name'], $_REQUEST['user_name'], $_REQUEST['password'], $_REQUEST['tipo']);break;
        case 'delete': 
            echo delete('usuarios', $_REQUEST['id']);break;
        case 'editar': 
            echo editarUsuario($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['user_name'], $_REQUEST['password'], $_REQUEST['tipo']); break;
        
    }
}

if(isset($_REQUEST['get'])){
    switch($_REQUEST['get']){
        case 'all':
            session_start();
            echo json_encode(verUsuarios($_SESSION['id']));break;
        case 'editar':
            break;
        default: echo json_encode(getSingleUser($_REQUEST['get']));break;
    }
}