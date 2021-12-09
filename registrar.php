<?php  
	session_start();
	
		include 'model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM t_usuario;");    
		$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	
?>
<!DOCTYPE html>
<html>
<head>

	<title>Registrar</title>
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
            <h5 class="card-title text-center mb-5 fw-light fs-5">Crear Usuario</h5>

            <form method="POST" action="registrarProceso.php">
              <div class="form-floating mb-3">
                <input type="email" name="txtCorreo" class="form-control"  placeholder="Correo">
                <label for="floatingInput">Correo:</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="txtNombre" class="form-control"  placeholder="Nombre Completo">
                <label for="floatingInput">Nombre Completo</label>
              </div>
              <div class="form-floating mb-3">
                <input type="date" name="txtFecha" class="form-control" placeholder="AÑO-MES-DIA">
                <label for="floatingPassword">Contraseña</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="txtCon" class="form-control" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
              </div>

              
              <div class="d-grid">
                <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="registrar" name="registrar"></input>
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