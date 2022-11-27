<?php include "header.php" ?>
<div class="col-xs-12">
	<h1>Novo producto</h1>
	<form method="post" action="novo.php">
		<label for="codigo">Nome:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Digite o codigo de barras">
		<label for="precioVenda">Preco de venda:</label>
		<input class="form-control" name="precoVenda" required type="number" id="precoVenda" placeholder="Preco de venda">

		<label for="unidade">Unidade:</label>
		<input class="form-control" name="unidade" required type="number" id="unidade" placeholder="unidade">

		<label for="">Tipo de compra:</label>
		<input class="form-control" name="tipoDeCompra" required type="text" id="tipoDeCompra" placeholder="Tipo de Compra">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "footer.php" ?>