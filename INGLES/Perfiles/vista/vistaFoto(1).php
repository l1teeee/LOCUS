<?php
$usuario = $_GET['nombreUsu'];
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>PROFILE PICTURE</title>    
        <!--link rel="stylesheet" type="text/css" href="estilos/logestilo.css"-->
        <link rel="stylesheet" type="text/css" href="css/vistaLista.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>    
    <body>
    
        <section class="cuerpo">
        <section class="incio"> 
               <header>
                    <a href="../../login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="vmod_pend.php"><h5>Back</h5></a></article>
                            <article id="items"><a href="../../login/index.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>
        <form action="../controlador/ctrlUsuario.php" method="POST" enctype="multipart/form-data">
            <?php
                if(isset($msjError)){
                    echo $msjError;
                }
            ?>
        <div class="form">
            <center>
            <h1>Change Profile picture</h1>

            </center>
            <div class="input">
                <div class="inputBox">
                    <label>Choose your photo:</label>
                    <input type="file" name="foto" id="foto">
                </div>
                <input type="hidden" name="usu" value="<?php echo $usuario; ?>">
                <div class="inputBox1">
                    <input type="submit" name="accion" value="Confirmar">
                </div>
            </div>
            <!-- <p class="forget"><a href="#">Olvidaste tu contraseña</a></p>
            <p class="forget"><a href="registrar.html">Registrate</a></p> -->
        </div>
        </section>
        
        </form>
    </body>
    
</html>