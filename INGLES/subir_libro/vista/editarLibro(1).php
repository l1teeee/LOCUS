
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/vistaLibro.css">
                <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        
        <title>Upload your book</title>
    </head> 
    
    <body>
        <section class="incio">
               <header>
                    <a href="../../index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="vistaLibro.php">Upload your book</a></article>
                            <article id="items"><a href="../../login/index.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>

        <?php
            $u = isset($_GET['usu'])?$_GET['usu']:"";
            $id = isset($_GET['id'])?$_GET['id']:"";
            require_once "../modelo/daoLibro.php"; 
            $dao = new DaoLibro();
            $libro = $dao->mostrarL($id);
        ?>

        <form action="../controlador/ctrlLibro.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h2>EDIT BOOK</h2>
                <div class="input">

                <div class="inputBox">
                    <label>Title</label>
                    <input type="text" name="titulo" value="<?php echo $libro['titulo'];?>">
                </div>

                <div class="inputBox">
                    <label>Description <h5>(250 characteres)</h5></label>
                    <textarea maxlength="250" name="descripcion"><?php echo $libro['descripcion'];?></textarea>
                </div>

                <input type="hidden" name="categoria" value="<?php echo $libro['categoria'];?>">
                <input type="hidden" name="portada" value="<?php echo $libro['portada'];?>">
                <input type="hidden" name="estado" value="<?php echo $libro['estado'];?>">
                <input type="hidden" name="usu" value="<?php echo $libro['usuario'];?>">
                <input type="hidden" name="fecha" value="<?php echo $libro['fecha_publicacion'];?>">
                <input type="hidden" name="archivo" value="<?php echo $libro['nombre_archivo'];?>">
                <input type="hidden" name="id" value="<?php echo $libro['id'];?>">
                <input type="hidden" name="money" value="<?php echo $libro['monetizacion'];?>">

                <div class="inputBox2">
                    <label>
                    <input type="submit" id="boton" name="accion" value="Modificar">
                    </label>
                </div>
            </div>          
        </form>
    </body>
</html>