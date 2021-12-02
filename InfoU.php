
<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
        include 'model/conexion.php';
        $iduser=$_SESSION['nombre'];
		$sentencia = $bd->query("SELECT * FROM t_usuario WHERE CorreoU ='$iduser';");
		$campos = $sentencia->fetchAll(PDO::FETCH_OBJ);

        foreach ($campos as $dato) {
            ?>
           <h1><?php echo $dato->NombreCompleto; ?></h1>
            <?php
        }

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
<h1 class="display-4" style="text-align: center; padding-top: 1em;">MISON</h1>
<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>

<table>
			<tr>
				<td>Correo</td>
				<td>Nombre Completo</td>
				<td>Fecha</td>
			
				
				<td>Promedio</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
				foreach ($campos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->CorreoU; ?></td>
						<td><?php echo $dato->NombreCompleto; ?></td>
						<td><?php echo $dato->FechaU; ?></td>
						
						
						<td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>


<a href="cerrar.php">Cerrar Sesión</a>
</div>

<div class="derecha">
<h1 class="display-4" style="text-align: center; padding-top: 1em;">MISON</h1>

		
</div>

    </section>


	
	
</body>
</html> 