
<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
        include 'model/conexion.php';
        $iduser=$_SESSION['nombre'];
		$sentencia = $bd->query("SELECT * FROM t_usuario WHERE CorreoU ='$iduser';");
		$campos = $sentencia->fetchAll(PDO::FETCH_OBJ);

        

	}else{
		echo "Error en el sistema";
	}

    
	
    
	
?>

<!DOCTYPE html>
<html>
<head>

	<title>Informacion de usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href= "css/main.css">
    
    <link rel="stylesheet" href="estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" >
	
</head>
<body>



	<section id="PantallaDividida" >


<div class="izquierda" >
<img class="imglogo  mx-auto d-block" src="img/usuario.png">
<h1 class="display-4" style="text-align: center; padding-top: 1em;">Perfil</h1>


			<?php 
				foreach ($campos as $dato) {
					?>
					
				        <h1>Correo</h1>
				
						<h2><?php echo $dato->CorreoU; ?></h2>
                        <h1>Nombre Completo</h1>
						<h2><?php echo $dato->NombreCompleto; ?></h2>
                        <h1>Fecha</h1>
						<h2><?php echo $dato->FechaU; ?></h2>
						
						
						<h1><a href="actualizarInfo.php?id=<?php echo $dato->id_usuario; ?>">Actualizar</a></h1>
					
					<?php
				}
			?>
			
		


<a href="cerrar.php">Cerrar Sesión</a>
</div>

<div class="derecha">
<h1 class="display-4" style="text-align: center; padding-top: 1em;">Preferencias de Escuela</h1>


</div>

    </section>


	
	
</body>
</html> 