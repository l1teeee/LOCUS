
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/archivocomenN.css">
        <link rel="stylesheet" type="text/css" href="css/archivono.css">
        <link rel="stylesheet" type="text/css" href="css/likesn.css">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        <script src="css/mensaje.js"></script>

        <title>BOOKS</title>
    </head>  

    <body>
        <div class="contenedorr">

            <section class="incio">
                <header>
                    <section class="menu">
                        <article id="items"><a href="../../index.php"><img id="logo"  src="css/LOGOO.png"></a></article>
                        <section class="panel-it">
                            <article id="items"><a href="../../categorias/menu-categorias.php">Menu Categories</a></article>
                            <article id="items"><a href="vistaLibro.php">Upload a book</a></article>
                            <article id="items"><a href="perfil.php">My Profile</a></article>
                            <article id="items"><a href="../../index.php"><i class="fas fa-arrow-circle-left" style="font-size:50px"></i></a></article>
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
                        </div>


                        <div class="contenedor">
    
                            <div class="pdf">
                                <object data="../archivos/<?php echo $archivo['nombre_archivo']; ?>" type="application/PDF" width="850px" height="850px" align="right"></object>
                                </div>
                                
                                <div class="bloqueo" onclick="mensajeclick()" >
                                </div>

                                <div id="mensaje"></div>

                            </div>
                        </div>

                        <div class="comentarios">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <h1>COMMENTS</h1>

                                <div class="text">
                                <i class="fas fa-user-circle"></i>
                                    <textarea onclick="mensajeclick()" name="comentario" placeholder="Add a comment" ></textarea>
                                </div>
            
                                <input class="btn" type="submit" value="Comentar" name="comentar" onclick="mensajeclick()">
                                <div id="comentarios"></div>
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

                <?php require_once "../modelo/daoLibro.php"; 
                $dao = new DaoLibro(); 
                $archivos = $dao->archivos($_GET['id']); 
                
                foreach ($archivos as $archivo){
                    ?><a id="btn" class="likes" onclick="mensajeLclick()"><img src="like.jpg"></a>
                    <div id="alerta"></div>
                    <p><?php echo $archivo['megusta']; ?></p>
               <?php }
                
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




                if ($valiV== 0){
                    $visita = new Visita($ip, $fecha, $idL);
                    $daoV->insertarVisita($visita);
                }else{
                    $visis = $daoV->mostrarVisita($_GET['id']);
                    foreach ($visis as $visi){
                        $fechaRegistro = $visi['fecha_visita'];
                        $fechaActual = date('Y-m-d H:i:s');
                        $nuevaFecha = strtotime($fechaRegistro."+ 1 day");
                        $nuevaFecha = date('Y-m-d', $nuevaFecha);
    
                        if($fechaActual >= $nuevaFecha){
                            $visita = new Visita($ip, $fecha, $idL);
                            $daoV->insertarVisita($visita);
                        }else{
                            echo "";
                        }
                    }                    
                }
                ?>
            </div>

        </div>
        
    </body>
</html>


