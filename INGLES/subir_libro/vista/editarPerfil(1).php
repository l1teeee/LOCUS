<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/editarPerfil.css">
                <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
        
        <title>Edit Profile</title>
    </head> 

    <body>
        <section class="incio">
               <header>
                    <a href="../../Login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="../subir_libro/vista/vistaLibro.php">Upload your book</a></article>
                            <article id="items"><a href="../../Login/index.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>
         
        <form action="../controlador/ctrlLibro.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h2>Edit your profile</h2>
                <div class="input">
                    <div class="inputBox">
                        <label>Name</label>
                        <input type="text" name="titulo">
                    </div>
                    <div class="inputBox">
                        <label>About you<h5>(40 characters)</h5></label>
                        <textarea maxlength="40" name="descripcion"></textarea>
                    </div>
                    <div class="inputBox1">
                        <label>Profile Picture</label>
                        <input type="file" name="portada">
                    </div>
                    
                    <div class="inputBox2">
                        <label>
                          <input type="submit" id="boton" name="subir" value="Enviar">
                        </label>
                    </div>
                    

                </div>
                
            </div>

        </form>

        </div>
    </body>
</html>