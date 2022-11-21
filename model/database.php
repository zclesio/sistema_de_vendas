<?php
function connection(){
    try {
        $dbName = "SISVENDAS";
        $username = "root";
        $passwod = "";
        $pdo = new PDO('mysql:host=localhost;dbname='.$dbName, $username, $passwod);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function login($name, $password){
//    **Login** controller/login.php -> 'name' and 'password'-> return 'tipo de usuario'(0-vendedor, 1-admin)
    try{
        $pdo = connection();
        $sql = "SELECT * FROM usuarios WHERE user_name=$name AND password='$password'";
        $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if($data){
            session_start();
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['name'] = $data[0]['name'];
            $_SESSION['tipo'] = $data[0]['tipo'];
            return $data[0]['tipo'];
        }else{
            throw new PDOException("User name or password invalida");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function addProduto($name, $tipo, $unidade, $preco){
// **Adicionar produtos** controller/produtos -> ['id'], 'nome', 'tipo', 'unidade', 'preco', ['stock'] -> true or tal erro;
    try{
        $pdo = connection();
        $sql = "INSERT INTO produtos VALUES(NULL, '$name', '$tipo', '$unidade', '$preco', 0)";
        $pdo->query($sql);
        return true;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function getProdutos(){
    // **Listar produtos** controller/produtos.php -> 'get'='all' -> JSON;
    try{
        $pdo = connection();
        $sql = "SELECT * FROM produtos";
        $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if($data){
            return $data;
        }else{
            throw new PDOException("Nenhum produto registado");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function editarProduto($id, $name, $tipo, $unidade, $preco){
    try{
        $pdo = connection();
        $sql = "UPDATE produtos SET nome='$name', tipo='$tipo', unidade='$unidade', preco=$preco WHERE id=$id";
        $pdo->query($sql);
        return true;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
function addUser($name, $username, $passwod, $tipo){
    // **Adicionar usuario** ['id'], 'user_name', 'password', 'tipo', 'name' -> true or tal erro;
    try{
        $pdo = connection();
        $sql = "INSERT INTO usuarios VALUES(NULL, '$name', '$username', '$passwod', '$tipo')";
        $pdo->query($sql);
        return true;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function verUsuarios($id){
    // **Ver usuarios** controller/usuarios.php -> 'get'='all' -> JSON;
    try{
        $pdo = connection();
        $sql = "SELECT * FROM usuarios WHERE id!=$id";
        $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if($data){
            return $data;
        }else{
            throw new PDOException("Nenhum usuario registado");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

function delete($tabela, $id){
    try{
        $pdo = connection();
        $sql = "DELETE FROM $tabela WHERE id=$id";
        $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return true;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}