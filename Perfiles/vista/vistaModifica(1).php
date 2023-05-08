<?php
session_start();
$varsesion = $_SESSION['usu']; 
if($varsesion == null || $varsesion = ''){
    echo  "No tiene acceso";
    die();
}

if(isset($nombreUsu) && isset($nombre) && isset($email) && isset($pass)){
    $usu = $nombreUsu;
    $name = $nombre;
    $correo = $email;
    $contra = $pass;
    $mi = $sobre;
    $dir = "../controlador/ctrlUsuario.php";
    $dirv = "../vista/vistaMostrar.php";
    $dirl = "../vista/vistaLogin.php";
    $dirc= "../../REGISTRAR/registrar.css";
    $diri= "../../IMG_INDEX/LOGO1.png";
    $usuario = $_GET['nombreUsu'];
}else{
    $usu = null;
    $name = null;
    $correo = null;
    $contra = null;
    $mi = null;
    $dir = "../locusPerfiles/controlador/ctrlUsuario.php";
    $dirv = "vista/vistaMostrar.php";
    $dirl = "vista/vistaLogin.php";
    $dirc= "registrar.css";
    $diri= "../../IMG_INDEX/LOGO1.png";
    $usuario = $_GET['nombreUsu'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../registrar/registrar.css">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        
        <title>Modificar</title>
        <script src="../JS/Validacion.js"></script>
    </head> 
        
    <body>
        <section class="incio">
               <header>
                    <a href="../../Login/index.php"><article id="items"><img id="logo" src="<?php echo $diri; ?>"></article></a>
                    <article id="items"><a href="../../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu'] ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
                    <section class="menu">
                        <section class="panel-it">
                        </section>
                    </section>
                </header>
        </section>
         
        <form action="<?php echo $dir; ?>" method="POST" onsubmit="return validar();">
            <div class="form">
                <h2>Modificar Usuario</h2>
                <div class="input">
                    <?php 
                    if(isset($msj)){
                        echo "<p class='eco'>".$msj."</p>";
                    }
                    ?>
                    <div class="inputBox">
                        <label>Nombre</label>
                        <input type="text" name="nombre" required value="<?php echo $name; ?>" placeholder="Juan Carlos Lopez Perez">
                    </div>
                    <div class="inputBox">
                        <label>Nombre de Usuario</label>
                        <input type="text" name="usuario" required value="<?php echo $usu; ?>" placeholder="JuanCaLoPe">
                    </div>
                    <div class="inputBox">
                        <label>Correo</label>
                        <input type="" name="email" required value="<?php echo $correo; ?>" placeholder="ejemplo@xyc.com">
                    </div>
                    <div class="inputBox">
                        <label>Sobre Mí</label>
                        <textarea name="des" placeholder="Escribe algo sobre tí..."><?php echo $mi; ?></textarea>
                    </div>
                    <div class="inputBox">
                        <label>Contraseña</label>
                        <input type="password" id="contraseña1" name="pass" required placeholder="********">
                    </div>
                    <input type="hidden" name="usu" required value="<?php echo $_SESSION['usu']; ?>" placeholder="********">
                    <input type="hidden" name="cpntra" required value="<?php echo $contra ?>" placeholder="********">
                    <div class="inputBox">
                        <label>Confirmación de contraseña</label required>
                        <input type="password" id="contraseña2" name="pass" name="titulo" required placeholder="********">
                </div>
                <input type="checkbox" list="tipo" rquired><label class="acep"> Aceptar los términos y condiciones.</label>
                    <div class="inputBox2">
                        <label>
                        
                          <input type="submit" id="boton" name="accion" value="Modificar">
                        </label>
                    </div>
                    <div class="inputBox2">
                        <a class="ini" href="iniciar.php">Iniciar Sesión</a>
                    </div>
                    <div class="inputBox2">
                        <a class="ini" href="../vista/vistaMostrar.php">Ver Usuario</a>
                        <a class="ini" href="../Vista/vistaMods.php">Ver Moderadores</a>
                    </div>
                    

                </div>
                
            </div>

        </form>

        </div>
    </body>
</html>