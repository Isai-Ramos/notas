
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
<a href="main.html"  type="button" style=" margin: .3em .3em .3em .5em;" class="btn btn-light btn-lg" >Menu</a>
<img class="imglogo  mx-auto d-block" src="img/usuario.png">
<h1 class="display-4" style="text-align: center; padding-top: 0.3em; color:#FFFFFF;">Perfil</h1>


			<?php 
				foreach ($campos as $dato) {
					?>
					
				        <h1 style="text-align: center; padding-top: 1em; color:#FFFFFF;" >Correo:</h1>
				
						<h2 style="text-align: center; padding-top: 0.3em; color:#FFFFFF;" ><?php echo $dato->CorreoU; ?></h2>
                        <h1 style="text-align: center; padding-top: 0.3em; color:#FFFFFF;" >Nombre Completo:</h1>
						<h2 style="text-align: center; padding-top: 0.3em; color:#FFFFFF;" ><?php echo $dato->NombreCompleto; ?></h2>
                        <h1 style="text-align: center; padding-top: 0.3em; color:#FFFFFF;" >Fecha de nacimiento:</h1>
						<h2 style="text-align: center; padding-top: 0.3em; color:#FFFFFF;" ><?php echo $dato->FechaU; ?></h2>
						
						
						<a type="button" style=" margin: 2em 1em 2em 16em;" class="btn btn-light btn-lg" href="actualizarInfo.php?id=<?php echo $dato->id_usuario; ?>">Actualizar</a>
					
					<?php
				}
			?>
			
		


<a href="cerrar.php"  type="button" style="text-align: center;" class="btn btn-light btn-lg" >Cerrar Sesión</a>
</div>

<div class="derecha" style="background: #FFFFFF;" >
<h1 class="display-4" style="text-align: center; padding-top: 1em;  "> Mejores universidades de Tijuana</h1>

<h3  style="text-align: center; padding-top: 0.7em; " > <a href="main.HTML" class="text-dark" >1.Instituto Tecnológico de Tijuana (ITT)</a> </h3>
          <h3  style="text-align: center; padding-top: 0.7em; " > <a href="main.HTML" class="text-dark" >2.Universidad de Tijuana</a> </h3>
          <h3  style="text-align: center; padding-top: 0.7em; " > <a href="main.HTML" class="text-dark" >3.Centro de Estudios Superiores del Noroeste (CESUN</a> </h3>
          <h3 style="text-align: center; padding-top: 0.7em; " > <a href="main.HTML" class="text-dark" >4.Universidad tecnológica de Tijuana (UTT)</a> </h3>
		  <h3 style="text-align: center; padding-top: 0.7em; " > <a href="main.HTML" class="text-dark" >5.Universidad de las Californias Internacional (UDC)</a> </h3>

    </section>


	
	
</body>
</html> 