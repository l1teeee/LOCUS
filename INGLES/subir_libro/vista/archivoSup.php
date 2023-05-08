<?php 
session_start();
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
        <link rel="stylesheet" type="text/css" href="css/archivocomenN.css">
        <link rel="stylesheet" type="text/css" href="css/archivono.css">
        <link rel="stylesheet" type="text/css" href="css/archivolikes.css">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        <script src="css/mensaje.js"></script>

        <title>BOOKS</title>
    </head> 

    <body>
    <section class="incio">
                <header>
                    <section class="menu">
                        <article id="items"><a href="../../login/index.php"><img id="logo"  src="css/LOGOO.png"></a></article>
                        <section class="panel-it">
                            <article id="items"><a href="vistaLibro.php">Upload yor book</a></article>
                            <article id="items"><a href="Perfil.php?nombreUsu=<?php echo $_SESSION['usu']; ?>">My profile</a></article>
                            <article id="items"><a href="<?php echo $dire; ?>">Go back</a></article>
                            <article id="items"><a href="../../login/index.php"><i class="fas fa-arrow-circle-left" style="width: 150px height: 50px;"></i></a></article>
                        </section>
                    </section>
                </header>
            </section>
        <div class="contenedor">

            

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

                     <?php
                    } //corchete
                  ?>

            </article> 
                 
        </div>
        
    </body>
</html>