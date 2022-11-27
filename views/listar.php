<?php include_once "header.php" ?>
<?php

// $sql = $basededados->query("SELECT * FROM productos;");
// $productos = $sql->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./adicionarProdutos.php">Adicionar<i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Tipo</th>
					<th>Unidade</th>
					<th>Preço</th>
					
				</tr>
			</thead>
			<tbody>
				<?php //foreach($productos as $producto){ ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><a class="btn btn-warning" value='Eliminar' href="<?php echo "editar.php?id="// . $producto->id?>"><i class="fa fa-edit"></i>Editar</a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id="// . $producto->id?>"><i class="fa fa-trash"></i>Eliminar</a></td>
				</tr>
				<?php // } ?>
			</tbody>
		</table>
	</div>
<?php include_once "footer.php" ?>