
<?php 
	include 'model/conexion.php';
    
    
        $correo = $_POST['txtCorreo'];
        $nombre = $_POST['txtNombre'];
        $fecha = $_POST['txtFecha'];
        $contra = $_POST['txtCon'];

        
            
        $sentencia = $bd->prepare("INSERT INTO t_usuario(CorreoU,password_usu,NombreCompleto,FechaU) VALUES (?,?,?,?);");
	    $resultado = $sentencia->execute([$correo,$contra,$nombre,$fecha]);

        if ($resultado === TRUE) {
            header('Location: main.html');
            
        }else{
            echo "Error";
        }
    
?>