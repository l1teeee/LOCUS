<?php
if(isset($nombreUsu) && isset($nombre) && isset($email) && isset($pass)){
    $usu = $nombreUsu;
    $name = $nombre;
    $correo = $email;
    $contra = $pass;
    $dir = "../controlador/ctrlLogin.php";
    $dirv = "../vista/vistaMostrar.php";
    $dirl = "../vista/vistaLogin.php";
    $dirc= "../../registrar/iniciar.css";
    $diri= "../../IMG_INDEX/LOGO1.png";
}else{
    $usu = null;
    $name = null;
    $correo = null;
    $contra = null;
    $dir = "../perfiles/controlador/ctrlLogin.php";
    $dirv = "vista/vistaMostrar.php";
    $dirl = "vista/vistaLogin.php";
    $dirc= "../../registrar/iniciar.css";
    $diri= "../../IMG_INDEX/LOGO1.png";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../registrar/iniciar.css">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        
        <title>Iniciar Sesión</title>
    </head> 
        
    <body>
        <section class="incio">
               <header>
                    <a href="../../index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                        </section>
                    </section>
                </header>
        </section>
         
        <form action="ctrlLogin.php" method="POST">
            <div class="form">
                <h2>Iniciar Sesión</h2>
                <div class="input">
                    <?php 
                    if(isset($msjError)){
                        echo "<p class='eco'>".$msjError."</p>";
                    }
                    ?>
                    <div class="inputBox">
                        <label>Nombre de Usuario</label>
                        <input type="text" name="usuario" required value="<?php echo $usu; ?>">
                    </div>
                    <div class="inputBox">
                        <label>Contraseña</label>
                        <input type="password" name="pass" required value="<?php echo $contra; ?>">
                    </div>
                        
                          <input type="submit" id="boton" name="subir" value="Iniciar">
                        </label>
                    </div>
                    <div class="inputBox2">
                        <h3 style="color:white">No tienes cuenta?</h2>
                        <a href="../registrar.php"><h5>Click Aquí</h5></a>
                    </div>
                    

                </div>
                
            </div>

        </form>

        </div>
    </body>
</html>