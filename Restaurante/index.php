<?php 
	  require_once 'database/init.php';
	  include 'includes/head.php';
	  include 'includes/navigation.php';


	  $sql = "SELECT * FROM productos WHERE featured = 1";
	  $featured = $db->query($sql);
	


 ?>

	

	<!-- Header -->
	<div id="headerWrapper">
		<div id="back-flower"></div>
		<div id="logotext"></div>
		<div id="for-flower"></div>
	</div>


		<div class="col-md-2"></div>

	<div class="col-md-9">
		<div class="row">
			<h2 class="text-center">Productos</h2>
			<?php while($productos = mysqli_fetch_assoc($featured)) : ?>
			
			<div class="col-md-3">
				<h4><?= $productos['product_title']; ?></h4>
				<img src="<?= $productos['product_image']; ?>" alt="<?= $productos['product_title']; ?>" class="img-thumb"/>
				<p class="price text-danger">Price: $<?= $productos['product_price']; ?></p>
				<p class="descripcion"><?= $productos['product_des']; ?></p>
				<button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $productos['product_id']; ?>)" >
				Detalles</button>
			</div>
		<?php endwhile; ?>
		

			<!--
			<div class="col-md-3">
				<h4>Huevos con salchica</h4>
				<img src="images/desayunos/numero3.jpg" alt="huevos con salchica" class="img-thumb"/>
				<p class="price text-danger">Price: $50.00</p>
				<p class="descripcion">Descripcion: 2 huevos con 2 salchichas alemanas </p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" >
				Detalles</button>
			</div>

			<div class="col-md-3">
				<h4>Tostadas estrellas</h4>
				<img src="images/desayunos/numero2.jpg" alt="tostadas estrellas" class="img-thumb"/>
				<p class="price text-danger">Price: $80.00</p>
				<p class="descripcion">Descripcion: 4 tostadas con aguacate, frijoles etc. </p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" >
				Detalles</button>
			</div>

			<div class="col-md-3">
				<h4>Fruta de amanecer</h4>
				<img src="images/desayunos/numero1.jpg" alt="huevos con jamon" class="img-thumb"/>
				<p class="price text-danger">Price: $30.00</p>
				<p class="descripcion">Descripcion: Frutas de todas las temporadas </p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1" >
				Detalles</button>
			</div>
		-->
		</div>
	</div<>

			<div class="col-md-2"></div>

<footer class="text-center" id="footer">&copy; Copyright 2015-2017 Viking Software </footer>


<script>


function detailsmodal(product_id){
	var data={"product_id" : product_id};
	jQuery.ajax({
		url : <?=BASEURL;?>+'includes/detailsmodal.php',
		method : "post",
		data : data,
		success: function(data){
			jQuery('body').append(data);
			jQuery('#details-modal').modal('toggle');
		},
		error: function(){
			alert("Algo esta mal!");
		}
	});
}

function add_to_cart(){
	jQuery('#modal_errors').html("");
	var quantity = jQuery('#quantity').val();
	var error = '';
	var data = jQuery('#add_product_form').serialize();

	jQuery.ajax({
		ulr : '/Restaurante/admin/add_cart.php',
		method : 'post',
		data : data,
		success : function(){
			location.reload();
		},
		error : function(){alert("Algo esta mal");}
	});
}
</script>





	</body>
	</html>
