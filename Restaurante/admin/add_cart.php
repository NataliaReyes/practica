<?php
//1.Crear una funcion en donde a la hora que se haga click el boton de ADD CART te despliegue lo que has seleccionado
//Guardar en variables ambos campos (titulo y cantidad)
//Hacer echo de las dos variables.
//(El titulo del producto y la cantidad ingresada por el usuario "Text Field").

//2.Crear una funcion en donde se conecte a la DB y te haga un select en donde obtenga la informacion de la comida seleccionada en base a el
//nombre del producto y la despleguemos. (Si yo seleccione Limonada Rosa hare un query algo asi: 
//"SELECT * FROM productos WHERE product_title LIKE '%"$VARIABLE DE PHP"%'")

//3.Crear una funcion en donde se almacene en la DB la informacion que obtuve en el paso 2.
//3.1 Primero crear funcion de insertado hardcodeado
//INSERT INTO cart (PRICE, DESC, CANTIDAD) VALUES ('6.99', 'LIMONADA ROSA', '10');

//3.2 UNa vez que la funcion de insertado funcione hardcodeada, entonces proceder a ingresar los valores que se obtuvieron en el paso 2
//en la seccion de values del query ejemplo:
//$get_productos = "select * from productos where product_title like '%"VARIABLE_PHP"%'";
//$run_productos = mysqli_query($con, $get_productos);
//$row_productos=mysqli_fetch_array($run_productos)){
//$prod_price = $row_productos['product_price'];
//$prod_desc = $row_productos['product_title'];
//$prod_cantidad = VARIABLE DE PHP DE CANTIDAD (SACADO DEL TEXT FIELD EN DONDE EL USUARIO INGRESA LA CANTIDAD DESEADA);
//INSERT INTO cart (PRICE, DESC, CANTIDAD) VALUES ($prod_price, $prod_title, $prod_cantidad);


require_once $_SERVER['DOCUMENT_ROOT'].'/Restaurante/database/init.php';
$product_id =  sanitize($_POST['product_id']);
$quantify = sanitize($_POST['quantify']);

$item=array();
$item[] = array('id' => $product_id,'quantify' => $quantify);
printf ("items".$item);

$domain = ($_SERVER['HTTP_HOST'] != 'localhost')?'.'.$_SERVER['HTTP_HOST']:false;
$query = $db->query("SELECT * FROM productos WHERE product_id = '{$product_id}'");
$product = mysql_fetch_assoc($query);
$_SESSION['success_flash'] = $product['product_title'].'ya se añadio.' ;
if ($scart_id != ''){
}else{
	$items_json = json_encode($item);
	$cart_expire = date("Y-m-d-H:i:s", strtotime("+30 days"));
	$db->query("INSERT INTO cart (items,expire_date) VALUES ('{$items_json}','{$cart_expire}')");
	$cart_id = $db->insert_id;
	setcookie(CART_COOKIE,$cart_id,CART_COOKIE_EXPIRE,'/',$domain,false);
}
}
?>