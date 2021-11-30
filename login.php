<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>

	<title>Iniciar sesion</title>
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
            <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesión</h5>

            <form method="POST" action="loginProceso.php">
              <div class="form-floating mb-3">
                <input type="text" name="txtUsu" class="form-control"  placeholder="Usuario">
                <label for="floatingInput">Usuario</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="txtPass" class="form-control" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Iniciar sesión"></input>
              </div>
              
			  <div class="d-grid" style="padding-top: 7px;">
			  <a class="btn btn-secondary" href="main.html" role="button">Link</a>
                
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