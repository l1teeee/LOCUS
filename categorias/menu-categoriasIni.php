<?php 
session_start();
$varsesion = $_SESSION['usu'];
//$tipo = $_SESSION['rol'];
//|| $tipo !== 'mod';
if($varsesion == null || $varsesion = ''){
    echo  "No tiene acceso";
    die();
}

if(isset($_SESSION['usu'])){
    $direc= '../login/index.php#destacados';
    if(isset($_SESSION['rol']) && $_SESSION['rol'] == 'user'){
        $dire = '../login/index.php';
        $libro = '../subir_libro/vista/vistaLibro.php';
      }elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'mod'){
        $dire = '../login/indexMod.php';
        $libro = '../subir_libro/vista/vistaLibroMod.php';
      }elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'Admin'){
        $dire = '../login/indexAdmin.php';
        $libro = '../subir_libro/vista/vistaLibroMod.php';
      }

}else {
    $dire = '../index.php';
    $direc= '../index.php#destacados';
}


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CATEGORIAS</title>    
        <link rel="stylesheet" type="text/css" href="categoria_style.css">     
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
 
    </head>    
    <body>
            <section class="incio">
                
                <header>
                <a href="<?php echo $dire; ?>"><article id="items"><img id="logo" src="LOGOO.png"></article></a>

                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="<?php echo $libro; ?>">Subir Libro</a></article>                            
                            <article id="items1"><a href="../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu']; ?>">Mi perfil</a></article>
                            <!--<article id="items1"><a href="<?php echo $direc; ?>">Libros destacados</a></article>-->
                            <article id="items"><a href="<?php echo $dire; ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
            </section>
            <section class="librosdestaca">
        <center>
            <a name="destacados"><h3 class="titu1">Categorias de Libros</h3></a>
            <p class="titu2">
                Estos son los libros más vistos y más gustados por nuestro publico.<br>
                Vamos, ¿Qué esperas? ve y ¡Echa un vistazo!
            </p>
        </center>
        <section class="librito">
        <section class="destaK">
                <div class="figure">
                <a href="TerrorIni.php"><img src="imagenesCategorias/Imagenes Cat menu/Terror.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="TerrorIni.php">
                        <h3>Terror</h3>
                        <p style="text-align: justify;">El terror, al igual que el humor, es un género que se basa en afectar al lector de un modo concreto a través de un texto.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="RomanceIni.php"><img src="imagenesCategorias/Imagenes Cat menu/AMOR.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="RomanceIni.php">
                        <h3>Romance</h3>
                        <p style="text-align: justify;">La literatura del romanticismo es una rama de la literatura que se desarrolló a finales del siglo XVIII y formó parte del movimiento estético, artístico y filosófico del romanticismo</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="FantasiaIni.php"><img src="imagenesCategorias/Imagenes Cat menu/fanta.jpeg" class="imgd"></a>
                    <div class="capa">
                        <a href="FantasiaIni.php">
                        <h3>Fantasia</h3>
                        <p style="text-align: justify;">La literatura fantástica es, probablemente, uno de los géneros más abiertos y difusos por su asociación con otros géneros narrativos, como la novela de aventuras, la ciencia-ficción o el terror.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="cienciaFiccionIni.php"><img src="imagenesCategorias/Imagenes Cat Menu/fiction.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="cienciaFiccionIni.php">
                        <h3>Ciencia Ficción</h3>
                        <p style="text-align: justify;">La ciencia ficción es un género cuyos contenidos se encuentran basados en supuestos logros científicos o técnicos que podrían lograrse en el futuro</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="AventuraIni.php"><img src="imagenesCategorias/Imagenes Cat menu/aventura_.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="AventuraIni.php">
                        <h3>Aventura</h3>
                        <p style="text-align: justify;">Las novelas de aventuras son un género literario que enfatiza en su argumento los viajes, el misterio y el riesgo. Una característica recurrente es la acción presente hasta dominar los escenarios, básica para el desarrollo de la trama.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="InfantilesIni.php"><img src="imagenesCategorias/Imagenes Cat menu/infantiles.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="InfantilesIni.php">
                        <h3>Infantiles</h3>
                        <p style="text-align: justify;">Libros infantiles. Son una gran herramienta para ayudar a los niños a superar conflictos o circunstancias de la vida cotidiana. A través del cuento, el niño se siente identificado con el protagonista de la historia, lo cual le ayuda a comprender mejor la situación y expresar</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="AccionIni.php"><img src="imagenesCategorias/Imagenes Cat menu/accion.jpg" alt="Acción"></a>
                    <div class="capa">
                        <a href="AccionIni.php">
                        <h3>Acción</h3>
                        <p style="text-align: justify;">El cine de acción es un género que se ha caracterizado por presentar en sus películas hombres atléticos que suelen preferir trabajar solos, representando el ideario individualista típico de la Sociedad Estadounidense. </p>
                        </a>
                    </div>
                </div>
            </section>
            
            
        </section>
        
        

    </section>

        <!--<div class="contenedor">

            

            div class="fondo">
                <img src="varias/Categorias.jpg">
            </div

            
            <div class="cate">
                
                <a href="Accion.php"><img src="imagenesCategorias/Imagenes Cat menu/Accion.jpeg" class="imgd"></a>     
            </div>-->
    </div>
    </body>    
</html>


