<?php
if(isset($nombreUsu) && isset($nombre) && isset($email) && isset($pass)){
    $usu = $nombreUsu;
    $name = $nombre;
    $correo = $email;
    $contra = $pass;
    $dir = "../controlador/ctrlUsuario.php";
    $dirv = "../vista/vistaMostrar.php";
    $dirl = "../vista/vistaLogin.php";
    $dirc= "../../registrar/registrar.css";
    $diri= "../../IMG_INDEX/LOGO1.png";
}else{
    $usu = null;
    $name = null;
    $correo = null;
    $contra = null;
    $dir = "../perfiles/controlador/ctrlUsuario.php";
    $dirv = "vista/vistaMostrar.php";
    $dirl = "vista/vistaLogin.php";
    $dirc= "registrar.css";
    $diri= "../IMG_INDEX/LOGO1.png";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo $dirc; ?>">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        
        <title>REGISTER</title>
        <script src="../perfiles/JS/Validacion.js"></script>
    </head> 
        
    <body>
        <section class="incio">
               <header>
                    <a href="../../index.php"><article id="items"><img id="logo" src="<?php echo $diri; ?>"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                        </section>
                    </section>
                </header>
        </section>
  
        <form action="<?php echo $dir; ?>" method="POST" onsubmit="return validar();">
            <div class="form">
                <h2>Register</h2>
                <div class="input">
                    <?php 
                    if(isset($msj)){
                        echo "<p class='eco'>".$msj."</p>";
                    }
                    ?>
                    <div class="inputBox">
                        <label>Name</label>
                        <input type="text" name="nombre" required value="<?php echo $name; ?>" placeholder="Juan Carlos Lopez Perez">
                    </div>
                    <div class="inputBox">
                        <label>Username</label>
                        <input type="text" name="usuario" required value="<?php echo $usu; ?>" placeholder="JuanCaLoPe">
                    </div>
                    <div class="inputBox">
                        <label>E-mail</label>
                        <input type="email" name="email" required value="<?php echo $correo; ?>" placeholder="ejemplo@xyc.com">
                    </div>
                    <div class="inputBox">
                        <label>Password</label>
                        <input type="password" id="contraseña1" name="contraseña1" required value="<?php echo $contra; ?>" placeholder="********">
                    </div>
                    <div class="inputBox">
                        <label>Confirm Password</label required>
                        <input type="password" id="contraseña2" name="titulo" required value="<?php echo $contra; ?>" placeholder="********">
                    </div>
                        <input type="checkbox" list="tipo" required><label class="acep" style="color:#fff;"> Aceptar los términos y condiciones.</label>
                    <div class="inputBox2">
                        <label>
                          <input type="submit" id="boton" name="accion" value="Registrar">
                        </label>
                    </div>                   
                    <div class="inputBox3">
                        <a class="ini" href="iniciar.php">Log in</a><br/>
                        <a class="ini" href="../locusPerfiles/vista/vistaMostrar.php">View User</a><br/>
                        <a class="ini" href="../locusPerfiles/vista/vistaMods.php">View Mods</a><br/>
                    </div>
                </div>

            </div>

        </form>

        </div>
    </body>
</html>