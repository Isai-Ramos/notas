<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: main.html');
	}

	include 'model/conexion.php';
    $id2 = $_POST['id2'];
        $correo2 = $_POST['correo2txt'];
        $nombre2 = $_POST['nombre2txt'];
        $fecha2 = $_POST['fecha2txt'];
       

            
        $sentencia = $bd->prepare("UPDATE t_usuario SET CorreoU = ?, NombreCompleto = ?, FechaU = ? WHERE id_usuario = ?;");
	    $resultado = $sentencia->execute([$correo2,$nombre2,$fecha2,$id2]);

        if ($resultado === TRUE) {
            session_destroy();
            header('Location: login.php');
            
        }else{
            echo "Error";
        }

?>
