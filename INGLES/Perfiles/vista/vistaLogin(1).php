<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Log In</title>    
        <!--link rel="stylesheet" type="text/css" href="estilos/logestilo.css"-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>    
    <body>
        <form action="../controlador/ctrlLogin.php" method="POST">
            <?php
                if(isset($msjError)){
                    echo $msjError;
                }
            ?>
        <div class="form">
            <h2>Log In</h2>
            <div class="input">
                <div class="inputBox">
                    <label>Username</label>
                    <input type="text" name="usuario" placeholder="ejemplo@xyc.com">
                </div>
                <div class="inputBox">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="********">
                </div>
                <div class="inputBox">
                    <label>
                        <input type="submit" name="" value="Iniciar Sesión">
                    </label>
                </div>
            </div>
            <p class="forget"><a href="#">Forgot your password?</a></p>
            <p class="forget"><a href="../index.php">Register</a></p>
        </div>
        </form>
    </body>
    
</html>