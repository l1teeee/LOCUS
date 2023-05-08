<?php
if(isset($nombreUsu) && isset($nombre) && isset($email) && isset($pass)){
    $usu = $nombreUsu;
    $name = $nombre;
    $correo = $email;
    $contra = $pass;
    $dir = "../controlador/ctrlInsertar.php";
    $dirv = "../vista/vistaMostrar.php";
    $dirl = "../vista/vistaLogin.php";
    $dirc= "../../REGISTRAR/registrar.css";
    $diri= "../../IMG_INDEX/LOGO1.png";
}else{
    $usu = null;
    $name = null;
    $correo = null;
    $contra = null;
    $dir = "../locusPerfiles/controlador/ctrlInsertar.php";
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
         
        <form action="<?php echo $dir; ?>" method="POST">
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
                        <input type="text" name="nombre" required value="<?php echo $name; ?>">
                    </div>
                    <div class="inputBox">
                        <label>Username</label>
                        <input type="text" name="usuario" required value="<?php echo $usu; ?>">
                    </div>
                    <div class="inputBox">
                        <label>E-mail</label>
                        <input type="" name="email" required value="<?php echo $correo; ?>">
                    </div>
                    <div class="inputBox">
                        <label>Password</label>
                        <input type="password" name="contraseña1" required value="<?php echo $contra; ?>">
                    </div>
                    <div class="inputBox">
                        <label>Confirm Password</label required>
                        <input type="password" name="titulo" required value="<?php echo $contra; ?>">
                        <input type="checkbox" list="tipo" rquired><label class="acep"> Aceptar los términos y condiciones.</label>
                    <div class="inputBox2">
                        <label>
                        
                          <input type="submit" id="boton" name="subir" value="Enviar">
                        </label>
                    </div>
                    <div class="inputBox2">
                        <a href="../index.php">Log in</a>
                    </div>
                    

                </div>
                
            </div>

        </form>

        </div>
    </body>
</html>