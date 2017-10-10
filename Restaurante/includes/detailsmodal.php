<?php
require_once '../database/init.php';
$id = $_POST['product_id'];
$id = (int)$id;
$sql = "SELECT * FROM productos WHERE product_id = '$id'";
$result = $db->query($sql);
$productos = mysqli_fetch_assoc($result);
$brand_id = $productos['product_cat'];
$sql = "SELECT cat_title FROM category WHERE cat_id= '$brand_id'";
$brand_query = $db->query($sql);
$category = mysqli_fetch_assoc($brand_query);
?>

<?php ob_start(); ?>
<!-- Pantalla de detalles des1-->
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center"><?= $productos['product_title']; ?></h4>
		</div>
		<div class="modal-body">
			<div class"container-fluid">
				<div class="row">
					<span id="modal_errors class="bg-danger"></span>
					<div class="col-sm-6">
						<div class="center-block">
							<img src="<?= $productos['product_image']; ?>" alt="<?= $productos['product_title']; ?>" class="details img-responsive">
						</div>
					</div>
					<div class="col-sm-6">
						<h4>Detalles</h4>
						<p> <?= $productos['product_des']; ?></p>
						<hr>
						<p>Precio: $<?= $productos['product_price']; ?></p>
						<p>Categoria: <?= $category['cat_title']; ?></p>

						<form action="add_cart.php" method="post" id="add_product_form">
							
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity">Cantidad:</label>
									<input type="text" class="form-control" id="cantidad" name="cantidad">
								</div>
							</div>
							</form>


					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button class="btn btn-warning" onclick="add_to_cart();return false;"><span class="glyphicon glyphicon-shopping-cart"></span>Agregar a carrito</button>
		</div>
	</div>
	</div>
</div>


<!-- Termina pantalla de detalles des1-->
<?php echo ob_get_clean(); ?>