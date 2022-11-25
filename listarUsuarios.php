<?php include "header.php" ;
include "../model/database.php";

    $pdo = connection();
    $sql = $pdo->query("SELECT * FROM usuarios;");
    $respostas = $sql->fetchAll(PDO::FETCH_OBJ);
   
    ?>
<table class="table table-sm table-striped" id="tabelaUsuariosDadosTabela" style="width: 100%;">
    <thead>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>sexo</th>
        <th>telefone</th>
        <th>email</th>
        <th>Usuario</th>
        <th>Endereço</th>
        <th>Mudar Password</th>
        <th>Mudar Funcao</th>
        <th>Editar</th>
        <th>Eliminar</th>
        <th></th>

    </thead>

    <tbody>
        <?php 
        
        foreach($respostas as $resposta){
        ?>
        <tr>
            <td><?php echo $resposta->id ?></td>
            <td><?php  echo $resposta->name ?></td>
            <td><?php  echo $resposta->user_name ?></td>
            <td><?php // echo $resposta->user ?></td>
            
            <td> <button class="btn btn-success btn-sm">Mudar Passoword</button></td>
            <td> <button class="btn btn-primary btn-sm">Mudar Funcao</button></td>
            <td><button class="btn btn-warning btn-sm">Editar</button></td>
            <th><button class="btn btn-danger btn-sm">Eliminar</button></th>
            <th></th>
            
        </tr>

        <?php }  ?>
    </tbody>
    
</table>
