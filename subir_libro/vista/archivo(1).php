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
    $u = $_SESSION['usu'];
}else {
    $dir = '../index.php';
}

if(isset($_SESSION['rol']) &&  $_SESSION['rol'] == 'user'){
    $dire = '../login/index.php';
}elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'mod'){
    $dire = '../login/indexMod.php';
}elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'Admin'){
    $dire = '../login/indexAdmin.php';
 } 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/archivocomen.css">
        <link rel="stylesheet" type="text/css" href="css/archivolibro.css">
        <link rel="stylesheet" type="text/css" href="css/archivolikes.css">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        <script src="css/mensaje.js"></script>

        <title>LIBROS</title>
    </head> 

    <body>
        <div class="contenedor">

            <section class="incio">
                <header>
                    <section class="menu">
                        <article id="items"><a href="../../login/index.php"><img id="logo"  src="css/LOGOO.png"></a></article>
                        <section class="panel-it">
                            <article id="items"><a href="vistaLibro.php">Subir Libro</a></article>
                            <article id="items"><a href="Perfil.php?nombreUsu=<?php echo $_SESSION['usu']; ?>">Mi perfil</a></article>
                            <article id="items"><a href="<?php echo $dire; ?>">Regresar</a></article>
                            <article id="items"><a href="../../login/index.php"><i id="back" class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
            </section>

            <article id="contenido">
                <?php
                
                    require_once "../modelo/daoLibro.php";
                    $dao = new DaoLibro();
                    $archivos = $dao->archivos($_GET['id']);   
                    
                    foreach($archivos as $archivo){//corchete
                        ?>
                        <div class=conten>
                            <br>
                            <h1 class="titulo"><?php echo $archivo['titulo']; ?></h1>
                            <br><br>
                        </div>

                        <div id="main-content">
                            <div class="responsive">
                                <iframe src="../archivos/<?php echo $archivo['nombre_archivo']; ?>"></iframe>
                            </div>
                        </div>
                        
                        <br><br>

                        <div class="comentarios">
                            <form method="POST" onsubmit="return validar();" action="../controlador/ctrlComentario.php?id=<?php echo $archivo['id']; ?>" enctype="multipart/form-data" >
                                <a name="comentarios"><h1>COMENTARIOS</h1></a>

                                <div class="text">
                                    <i class="fas fa-user-circle"></i>
                                    <textarea name="comentario" placeholder="Agregar comentario...." id="comentarioss"></textarea>
                                </div>
                                <input type="hidden" value="<?php echo $u; ?>" name="usu">
                                <input class="btn" type="submit" value="Comentar" name="comentar">
                            </form>
                        </div>


                     <?php
                    } //corchete

                    require_once "../modelo/daoComentario.php";
                    $dao = new DaoComentario();
                    $comentarios = $dao->comentarios($archivo['id']);

                  ?>

                  <div class="caja-comen">
                      <?php 
                      
                      foreach ($comentarios as $comentario){
                      echo 
                      
                      "<div class='comenta'><div class='superior'><h1 class='name'>".$comentario['usuario']."</h1><h1 class='hora'>". $comentario['fecha']."</h1></div><br><p>".$comentario['comentario']."
                      </p></div>";

                      }
                ?></div>

            </article> 
                 
            <div class="contenedor_likes">
                <a name="likes"></a>
                <?php 

                require_once "../modelo/daoLike.php"; 
                $daooo = new DaoLike(); 
                $likes = $daooo->mostrarLikes($_GET['id']);
                $vali = $daooo->validacion($_GET['id'], $u); 
                $cant = $likes + 1;
                $cantNo = $likes - 1;
                ?><p><?php echo $likes; ?></p><?php
                if ($vali == 0){
                    ?>
                        <a id="btn" class="likes" href="../controlador/ctrlLibro.php?n=si&id=<?php echo $archivo['id']; ?>&usu=<?php echo $u; ?>&canti=<?php echo $cant; ?>"><img src="like.jpg"></a> 
                    <?php
                } else {
                    ?>
                        <a id="btn" class="likesn" href="../controlador/ctrlLibro.php?n=nou&id=<?php echo $archivo['id']; ?>&usu=<?php echo $u; ?>&cantiNo=<?php echo $cantNo; ?>"><img src="dislike.png"></a> 
                    <?php
                }
 
                ?>
            </div>

            <div class="view">
                <?php
                require_once '../modelo/daoVisita.php';
                require_once '../modelo/classVisita.php'; 
                $ip = $_SERVER['REMOTE_ADDR'];
                date_default_timezone_set('America/El_Salvador');
                $fecha = date('Y-m-d H:i:s');
                $idL = $_GET['id'];
                $daoV = new DaoVisita();
                $valiV = $daoV->validacionV($idL); 

                $visitasL = $daoV->mostrarVisitaL($_GET['id']);

                ?>
                    <div id="vista">
                        <i class="fas fa-eye" style="color:#fff"><?php echo  $visitasL;?></i>
                    </div>
                <?php

                if ($valiV==0){
                    $visita = new Visita($ip, $fecha, $idL);
                    $daoV->insertarVisita($visita);
                }else{
                    $visis = $daoV->mostrarVisita($_GET['id']);
                    foreach ($visis as $visi){
                        $fechaRegistro = $visi['fecha_visita'];
                    }                    
                  
                    $fechaActual = date('Y-m-d H:i:s');
                    $nuevaFecha = strtotime($fechaRegistro."+ 24 hour");
                    $nuevaFecha = date('Y-m-d H:i:s', $nuevaFecha);

                    if($fechaActual >= $nuevaFecha){
                        $visita = new Visita($ip, $fecha, $idL);
                        $daoV->insertarVisita($visita);
                    }
                }
                ?>
            </div>

        </div>
        
    </body>
</html>