<?php  
	
	
    session_start();
	if (!isset($_GET['id'])) {
		header('Location: infoU.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM t_usuario WHERE id_usuario = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}
	

///cosas pasadas

?>

<!DOCTYPE html>
<html>
<head>

	<title>Actualizar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" >
	
</head>
<body style="background-color:#0088FF;">
	
<img class="imglogo  mx-auto d-block" src="img/usuario.png">


	
	<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Actualizar Informacion</h5>

            <form method="POST" action="actualizarInfoProceso.php">
              <div class="form-floating mb-3">
                <input type="text" name="correo2txt"   class="form-control"  placeholder="Correo"  >
                <label for="floatingInput">Correo:</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="nombre2txt" class="form-control"   placeholder="Nombre Completo"  >
                <label for="floatingInput">Nombre Completo</label>
              </div>
              <div class="form-floating mb-3">
                <input type="date" name="fecha2txt" class="form-control" placeholder="AÑO-MES-DIA"  >
                
              </div>
             
              <div class="d-grid">
              <tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->id_usuario; ?>">
					<td colspan="2"><input type="submit"  class="btn btn-secondary" value="Actualizar"></td>
				</tr>
              </div>
              
			  <div class="d-grid" style="padding-top: 7px;">
			  <a class="btn btn-secondary" href="main.html" role="button">Volver al Menu</a>
                
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>