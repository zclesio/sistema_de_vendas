<?php
include '../model/database.php';
if(isset($_REQUEST['produto'])){
    switch($_REQUEST['produto']){
        case 'adicionar':
            // Metodo para adicionar produto
            echo addProduto($_REQUEST['nome'], $_REQUEST['tipo'], $_REQUEST['unidade'], $_REQUEST['preco']);break;
        case 'editar':
            // Metodo para editar produto
            echo editarProduto($_REQUEST['id'], $_REQUEST['nome'], $_REQUEST['tipo'], $_REQUEST['unidade'], $_REQUEST['preco']);break;
        case 'delete':
            echo delete('produtos', $id);
        default: 
            echo 'Requisição inválida';break;
    }
}
if(isset($_REQUEST['get'])){
    switch($_REQUEST['get']){
        case 'all':
            echo json_encode(getProdutos());break;
        case 'editar':
            break;
        default: echo 'Requisição inválida';break;
    }
}