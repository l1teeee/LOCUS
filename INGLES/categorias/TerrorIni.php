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
    $dir = '../login/index.php';
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
    $dir = '../index.php';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terror</title>
    <link rel="stylesheet" href="css/terror.css">
    <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="incio">
        <header>
            <a href="<?php echo $dire ?>"><article id="items"><img id="logo" src="../IMG_INDEX/LOGO1.png"></article></a>
            <section class="menu">
                <section class="panel-it">
                    <article id="items1" style="font-family: arial;"><a href="<?php echo $libro; ?>">Uploaded Books</a></article>
                    <article id="items1" style="font-family: arial;"><a href="../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu'] ?>">My Profile</a></article>
                    <article id="items"><a href="<?php echo $dire ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
                </section>
            </section>
        </header>
    </section>
    <section class="defini">
        <div class="definicion">
            <h2 id="tit">Terror</h2>
            <h2>Genre of literature, which aims, or has the ability to scare its readers, inducing feelings of horror and terror. The genre has ancient origins, which were reformulated in the 18th century as horror Gothic, with the publication of the Castle of Otranto in 1764 by Horace Walpole.</h2>
        </div>
    </section>
        <section class="libros">
            <h1>Uploaded Books</h1>
            <div>
                <?php
            require_once "../subir_libro/modelo/daoLibro.php";      
            $dao = new DaoLibro();
            $libros = $dao->LTerror();

            foreach($libros as $libro){
                
                    ?><div class="contenedor">
                        <section class="librito">
                            <section class="destaK">
                                <figure>
                                    <a href="../subir_libro/vista/archivo.php?id=<?php echo $libro['id']?>"><img height="100px" src="../subir_libro/portadas/<?php echo $libro['portada'];?>"></a>
    
                                    <div class="capa">
                                       <a href="../subir_libro/vista/archivo.php?id=<?php echo $libro['id']?>"> <h3 s><?php echo $libro['titulo']; ?></h3></a>
                                        <p style="text-align: justify;"><?php echo $libro['descripcion']; ?></p>
                                    </div>
                                </figure> 
                            </section> 
                        </section>
                    </div>
                    <?php
                
            } 
        ?></div>
            </div>
        
        </section>
        
</body>
</html>