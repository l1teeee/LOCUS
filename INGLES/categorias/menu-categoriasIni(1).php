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
        <title>CATEGORIES</title>    
        <link rel="stylesheet" type="text/css" href="categoria_style.css">     
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
 
    </head>    
    <body>
            <section class="incio">
                
                <header>
                <a href="<?php echo $dir; ?>"><article id="items"><img id="logo" src="LOGOO.png"></article></a>

                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="<?php echo $libro; ?>">Upload Book</a></article>                            
                            <article id="items1"><a href="../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu']; ?>">My Profile</a></article>
                            <article id="items1"><a href="<?php echo $direc; ?>">Trending Books</a></article>
                            <article id="items"><a href="<?php echo $dire; ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
            </section>
            <section class="librosdestaca">
        <center>
            <a name="destacados"><h3 class="titu1">Books Categories</h3></a>
            <p class="titu2">
                    These are the most viewed and liked books by our users.<br>
                    Come on, what are you waiting for? Take a look!
            </p>
        </center>
        <section class="librito">
        <section class="destaK">
                <div class="figure">
                <a href="TerrorIni.php"><img src="imagenesCategorias/Imagenes Cat menu/Terror.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="TerrorIni.php">
                        <h3>Terror</h3>
                        <p style="text-align: justify;">Terror, like humor, is a genre that is based on affecting the reader in a specific way through a text.</p>
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
                        <p style="text-align: justify;">The literature of romanticism is a branch of literature that developed in the late 18th century and was part of the aesthetic, artistic, and philosophical movement of romanticism.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="FantasiaIni.php"><img src="imagenesCategorias/Imagenes Cat menu/fanta.jpeg" class="imgd"></a>
                    <div class="capa">
                        <a href="FantasiaIni.php">
                        <h3>Fantasy</h3>
                        <p style="text-align: justify;">Fantasy literature is probably one of the most open and diffuse genres due to its association with other narrative genres, such as the adventure novel, science fiction or horror.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="cienciaFiccionIni.php"><img src="imagenesCategorias/Imagenes Cat Menu/fiction.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="cienciaFiccionIni.php">
                        <h3>Science Fiction</h3>
                        <p style="text-align: justify;">Science fiction is a genre whose contents are based on supposed scientific or technical achievements that could be achieved in the future.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="AventuraIni.php"><img src="imagenesCategorias/Imagenes Cat menu/aventura_.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="AventuraIni.php">
                        <h3>Adventure</h3>
                        <p style="text-align: justify;">Adventure novels are a literary genre that emphasizes travel, mystery and risk in its plot. A recurring characteristic is the action present until mastering the scenarios, basic for the development of the plot.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="InfantilesIni.php"><img src="imagenesCategorias/Imagenes Cat menu/infantiles.jpg" class="imgd"></a>
                    <div class="capa">
                        <a href="InfantilesIni.php">
                        <h3>Children</h3>
                        <p style="text-align: justify;">They are a great tool to help children overcome conflicts or circumstances in everyday life. Through the story, the child feels identified with the protagonist of the story, which helps him better understand the situation and express it.</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="destaK">
                <div class="figure">
                <a href="AccionIni.php"><img src="imagenesCategorias/Imagenes Cat menu/accion.jpg" alt="Acción"></a>
                    <div class="capa">
                        <a href="AccionIni.php">
                        <h3>Action</h3>
                        <p style="text-align: justify;">Action cinema is a genre that has been characterized by presenting athletic men in its films who tend to prefer to work alone, representing the typical individualistic ideology of the American Society.</p>
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


