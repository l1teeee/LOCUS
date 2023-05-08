<?php
session_start();
$varsesion = $_SESSION['usu'];
//$tipo = $_SESSION['rol'];
//|| $tipo !== 'mod';
if($varsesion == null || $varsesion = ''){
    echo  "No tiene acceso";
    die();
}

if(isset($_SESSION['rol']) && $_SESSION['rol'] == 'user'){
        $dire = '../../login/index.php';
      }elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'mod'){
        $dire = '../../login/indexMod.php';
      }elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'Admin'){
        $dire = '../../login/indexAdmin.php';
      }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/vistaLib.css">
        <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        
        <title>Upload your book</title>
    </head> 

    <body>
        <section class="incio"> 
               <header>
                    <a href="../../login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="../../categorias/menu-categoriasIni.php">Categories</a></article>
                            <article id="items1"><a href="Perfil.php?nombreUsu=<?php echo $_SESSION['usu'] ?>">My profile</a></article>
                            <article id="items"><a href="<?php echo $dire; ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>
         
        <form action="../controlador/ctrlLibro.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h2>UPLOAD YOUR BOOK</h2>
                <div class="input">

                    <div class="inputBox">
                        <label>Title</label>
                        <input type="text" name="titulo" required>
                        <input type="hidden" value="<?php echo $_SESSION['usu']; ?>" name="usu">
                    </div>

                    <div class="inputBox">
                        <label>Description <h5>(250 characters)</h5></label>
                        <textarea maxlength="250" name="descripcion" required></textarea>
                    </div>

                    <div class="inputBox">
                        <label>Categorie</label>
                        <select name="categoria" required>
                            <option value="">Choose your categorie</option>
                            <option value="Terror">Terror</option>
                            <option value="Romance">Romance</option>
                            <option value="Fantasía">Fantasy</option>
                            <option value="Ciencia Ficción">Science Fiction</option>
                            <option value="Aventura">Adventure</option>
                            <option value="Infantiles">Children</option>
                            <option value="Acción">Action</option>
                        </select>
                    </div>

                    <div class="inputBox1">
                        <label>Coverpage</label>
                        <td colspan="2"><input type="file" name="portada" required></td>
                    </div>

                    <div class="inputBox1">
                        <label>Book</label>
                        <td colspan="2"><input type="file" name="archivo" required></td>
                    </div>
                    
                    
                    <div class="inputBox2">
                        <label>
                          <input type="submit" id="boton" name="subir" value="subir" required>
                        </label>
                    </div>
                    

                </div>
                
            </div>

        </form>

        </div>
    </body>
</html>