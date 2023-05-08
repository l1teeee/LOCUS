<?php
    require_once "../modelo/classConexion.php";
    require_once "../modelo/classConsultas.php";
    require_once "../controlador/ctrlMostrar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vistaMostrar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        
    <title>USERS</title>
</head>

<body>
<section class="incio"> 
               <header>
                    <a href="../../login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="../../login/indexAdmin.php"><h5>Ir a NOSE</h5></a></article>
                            <article id="items"><a href="../../login/index.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>
<?php
 if(isset($msj)){
        echo $msj;
    }
?>
    <center><h1>Users and their data</h1></center>
    <div>
    <center>
        <form class="busca" action="" method="GET">
            <input id="buscador" type="text" value="Buscar Usuario" name="buscar" >
            <i style="color:#fff" class="fas fa-search"></i>
            <input id="bor" type="submit" name="Buscar" value="Buscar">
        </form>
    </center>
    </div>
    <?php 
        if(isset($_GET['buscar'])){
            buscarUsu($_GET['buscar']);
        }else{
            cargar();
        }
    ?>
    <div id="opciones">
    <a class="ini" href="../../registrar/registrar.php">Add new user</a>
    <a class="ini" href="../vista/vistaMods.php">View moderators</a>
    </div>
</body>
</html>