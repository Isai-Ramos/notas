<?php 
	session_start();
	include_once 'model/conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = $bd->prepare('select * from t_usuario where 
	CorreoU = ? and password_usu = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->CorreoU;
	
		header('Location: InfoU.php');
	}
?>