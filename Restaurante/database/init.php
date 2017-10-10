<?php
$db = mysqli_connect('127.0.0.1','root','1752109n','ecommerce');
if(mysqli_connect_errno()){
	echo 'Fallo de base de datos'. mysql_connect_errno();
	die();
}

define('BASEURL', '/Restaurante/');