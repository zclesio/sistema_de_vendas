<?php
//if(!isset($_GET["id"])) exit();
//$id = $_GET["id"];
//$sql = $base_de_dados->prepare("SELECT * FROM productos WHERE id = ?;");
//$sql->execute([$id]);
//$producto = $sql->fetch(PDO::FETCH_OBJ);
//if($producto === FALSE){
//echo "¡Nao existe nenhum produto com Esse ID!";
// exit();
//}

?>
<?php include_once "header.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto com o seguinte ID <?php  ?></h1>
		<form method="post" action="guardarDadosEditados.php">
			<input type="hidden" name="id" value="<?php ?>">
	
			<label for="codigo">Codigo:</label>
			<input value="<?php  ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escreva o codigo">

			<label for="precoVenda">Precio de venda:</label>
			<input value="<?php  ?>" class="form-control" name="precoVenda" required type="number" id="precoVenda" placeholder="Precio da venda">

			<label for="unidade">Unidade:</label>
			<input value="<?php ?>" class="form-control" name="unidade" required type="number" id="precoCompra" placeholder="Preco de compra">

			<label for="tipoDeCompra">Tipo de compra:</label>
			<input value="<?php  ?>" class="form-control" name="tipoDeCompra" required type="text" id="tipoDeCompra" placeholder="Tipo de Compra">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">

			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "footer.php" ?>
