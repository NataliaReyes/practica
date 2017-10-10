<?php
$sql = "SELECT * FROM category";
$pquery = $db->query($sql);
?>
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Restaurante Nataliux</a>
			<ul class="nav navbar-nav">
				<li class="dopdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Desayunos</a></li>
						<li><a href="#">Comida</a></li>
						<li><a href="#">Cena</a></li>
						<li><a href="#">Postres</a></li>
						<li><a href="#">Bebidas</a></li>
					</ul>
				</li>
			<?php ?>
		</div>
	</nav>