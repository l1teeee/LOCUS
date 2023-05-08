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
    <title>Adventure</title>
    <link rel="stylesheet" href="css/Aventura.css">
    <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="incio">
        <header>
            <a href="<?php echo $dire ?>"><article id="items"><img id="logo" src="../IMG_INDEX/LOGO1.png"></article></a>
            <section class="menu">
                <section class="panel-it">
                    <article id="items1" style="font-family: arial;"><a href="<?php echo $libro; ?>">Upload Book</a></article>
                    <article id="items1" style="font-family: arial;"><a href="../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu'] ?>">My Profile</a></article>
                    <article id="items"><a href="<?php echo $dire ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
                </section>
            </section>
        </header>
    </section>
    <section class="defini">
        <div class="definicion">
            <h2 id="tit">Adventure</h2>
            <h2>
                The adventure genre is one that opposes routine, the normal things, from this 
                it's value. Is the capacity of the main character to face risks, mysteries and dangers.
                As a norm, the adventure novels always have a happy ending. The hero even if he is tired,
                he always accomplish his objective.
            </h2>        
        </div>
    </section>
        <section class="libros">
            <h1>Libros subidos</h1>
            <div>
                <?php
            require_once "../subir_libro/modelo/daoLibro.php";      
            $dao = new DaoLibro();
            $libros = $dao->LAventura();

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