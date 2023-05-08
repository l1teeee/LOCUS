<?php
if(isset($nombreUsu) && isset($nombre) && isset($email) && isset($pass)){
    $usu = $nombreUsu;
    $name = $nombre;
    $correo = $email;
    $contra = $pass;
    $dir = "ctrlInsertar.php";
    $dirv = "vistaMostrar.php";
    $dirl = "vistaLogin.php";
}else{
    $usu = null;
    $name = null;
    $correo = null;
    $contra = null;
    $dir = "controlador/ctrlInsertar.php";
    $dirv = "vistaMostrar.php";
    $dirl = "vistaLogin.php";
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Registrarse</title> 
        <script src="JS/Validacion.js"></script>     
    </head>    
    <body>       
        <div class="form">
        <form action="<?php echo $dir; ?>" method="POST" onsubmit="return validar();">
            <h2>Registrarse</h2>
            <div class="input">
                <div class="inputBox">
                    <label>Nombre completo:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Juan Carlos Lopez Perez" value="<?php echo $name; ?>">
                </div>
                <div class="inputBox">
                    <label>Nombre de usuario:</label>
                    <input type="text" name="usuario" id="usu" placeholder="JuanCaLoPe" value="<?php echo $usu; ?>">
                </div>
                <div class="inputBox">
                    <label>Correo electronico:</label>
                    <input type="email" name="email" id="email" placeholder="ejemplo@xyc.com" value="<?php echo $correo; ?>">
                </div>
                <div class="inputBox">
                    <label>Contraseña:</label>
                    <input type="password"  id="contraseña1" name="contraseña1" placeholder="********" value="<?php echo $contra; ?>">
                </div>
                <div class="inputBox">
                    <label>Confirmación de Contraseña:</label>
                    <input type="password" id="contraseña2" name="contraseña2" placeholder="********" value="<?php echo $contra; ?>">
                </div>
                <!--div class="inputBox">
                    <label>Cuenta de banco</label>
                    <input type="password" id="banco" name="banco" placeholder="0123 4567 8910 1112" required>
                </div-->
         </form>
            
                <input type="checkbox" list="tipo" rquired><label class="acep"> Aceptar los términos y condiciones.</label> 
                    <div class="inputBox">
                        <input type="submit" name="" value="Registrarse">
                    
                    </div>
                </div>
                <p class="forget">¿Ya tienes una cuenta creada? <a href="Iniciar.html">Click Aquí</a></p><br>  
           
                      
        </div>
        <a href="<?php echo $dirv?>">Ver usuarios</a><br/>
        <a href="<?php echo $dirl?>">Ir a Login</a><br/>
        <!-- <a href="vista/vistaFoto.php">Modificar foto de Perfil</a><br/>         -->
</body>
</html>