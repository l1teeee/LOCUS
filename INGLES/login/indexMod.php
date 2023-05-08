<?php
session_start();
$varsesion = $_SESSION['usu'];
$tipo = $_SESSION['rol'];
if($varsesion == null || $varsesion = '' || $tipo !== 'mod'){
    echo  "No tiene acceso";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCUS</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>

</head>


<body >
	
    <div class="contenedoor">
        <header>
            <div class="logo">
                <img id="logo"  src="../IMG_INDEX/LOGO1.png">
            </div>
            <nav>
                <a class="nave" href="#destacados" >Trending books</a>
                <a class="nave" href="../categorias/menu-categoriasIni.php" >Categories</a>
                <a class="nave" href="../subir_libro/vista/vistaLibroSup.php" >Upload book</a>
                <a class="nave" href="../subir_libro/vista/vistaLista.php" >Books list</a>
	            <a class="nave" href="../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu'] ?>">Profile</a>
                <a class="nave" href="../perfiles/controlador/ctrlCerrarSesion.php" >Log Out</a>
                <div class="modal">
                    <div class="contenedor">
                        <center>  
                        <div class="head">Log In</div>
                        </center>
                        <label for="btn-modal">X</label>

                        <div class="main-container">
                            <div class="conten">
                                <div class="upper box">
                                    <h1>Log In</h1>
                                    <h6>To acces all the functions</h6>
                                </div>
                                <div class="lower box">
                                    <form action="perfiles/controlador/ctrlLogin.php" method="POST">
                                        <div class="input">
                                            <h4>Username</h4>
                                            <input type="text" name="Correo" id="username" required/>
                                            <label for="username">
                                            </label>
                                        </div>
                                        <div class="input">
                                            <br>
                                            <h4>Password</h4>
                                            <input type="password" name="contra" id="contrase" required />
                                            <label for="password">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <a><h4 id="contri">Forgot your password?</h4></a>

                                            
                                            </label>
                                        </div>
                                        <div class="input1">
                                            <input type="submit" value="Login" class="login-btn">
                                            <h5 style="color:white;">No account? </h5>
                                            <a href="REGISTRAR/registrar.php"><h1>Click Here</h1></a>
                                            
                                        </div>

                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    window.addEventListener("scroll", function(){
                        var header = document.querySelector("header");
                        header.classList.toggle("sticky", window.scrollY > 0);
                    })

                </script>
            </nav>
        </header>
         
    </div>    
    <div class="slider">
        <ul>
            <li><img src="../EJEMPLO_IMG/slide1.jpg" alt="imagen1"></li>
            <li><img src="../EJEMPLO_IMG/slide2.jpeg" alt="imagen2"></li>
            <li><img src="../EJEMPLO_IMG/slide3.jpg" alt="imagen3"></li>
            <li><img src="../EJEMPLO_IMG/slide4.jpg" alt="imagen4"></li>
        </ul>
    </div>
    <section class="content">
        <center>
            <table>
                <tr>
                    <th>
                        <h2><a href="#Inicio">W E L C O M E </a></h2>
                        <p><?php echo $_SESSION['usu']; ?></p>
                    </th>
                </tr> 
            </table>
        </center>
    </section>
    <section class="about">
        <div class="contentBx">
            <h2 class="heading">What is LOCUS?</h2>
            <br>
            
            <p class="text"> 
                    LOCUS is a webpage built under the current web development standards,
                taking as a starting point, implementing a data base, on a free template or engine,
                as it is MySQL.<br><br>

                    In the Front-end part, all the user interfaces will be designed and implemented 
                with CSS technology, guaranteeing a friendly and comfortable interface for the users
                at the moment of reading, making the app answers with efficiency all the requests and 
                requirements the user asks.<br><br> Of Course! everything is complemented 
                with a friendly, modern, aesthetic and adequate appearance, 
                according to the functionality of the site.<br><br>

            </p>
        </div>
    </section>
    <section class="librosdestacado">

        <center>
            <h3 class="titu1">LOCUS Pillars.</h3>

        </center>
        <section class="libritoo">
            <section class="destaK">
                    <div class="capa">
                        <h4>1</h4>
                        <h3>Innovation</h3>
                        <p style="text-align: justify;">
                        Innovate in the books world creating your own writings 
                        and make them know to the community, with originality.
                        </p>
                    </div>
            </section>
            <section class="destaK">
                <div class="capa">
                    <h4>2</h4>
                    <h3>Creativity</h3>
                    <p style="text-align: justify;">
                    Exploit your creativity by designing, writing and publishing your writing as you want.
                    </p>
                </div>
            </section>
            <section class="destaK">
                <div class="capa">
                    <h4>3</h4>
                    <h3>Imagination</h3>
                    <p style="text-align: justify;">
                    Explore your imagination limits with your creations that have never been told.</p>
                </div>
            </section>
            
            
        </section>
        
        

    </section>
    <section class="services" >
        <section class="container">
            <section class="serviceBx">
                
                <section class="lateral">
                    <h2>LOCUS functionality</h2>
                    
                </section>
                <p>
                        With LOCUS website, which was created as a project to satisfy the needs to be useful to the society by 
                    solving and creating people with new thoughts by entering into othis webpage.<br><br>

                    Clarifying that for being part of LOCUS family or a registeres user, you will have to fill 
                    a forms in which we ask some data about you, in the same way there will be some moderators
                    who will attend any inconvenient or problem that could happen in the webpage, reporting this
                    to the administrator about the incorrect behaviors that they could have.
                     <br>
                </p>
            </section>
        </section>
    </section>

    <section class="librosdestaca">
        <center>
            <a name="destacados"><h3 class="titu1">Trending Books.</h3></a>
            <p class="titu2">
                    These are the most viewed and liked books by our users.<br>
                    Come on, what are you waiting for? Take a look!
            </p>
        </center>

        <section class="librito">
            <?php
                require_once "../subir_libro/modelo/daoLibro.php";      
                $dao = new DaoLibro();
                $destacados = $dao->destacados();
                foreach($destacados as $destacado){
                    ?>  
                        <section class="destaK">
                            <figure>
                                <a href="../subir_libro/vista/archivo.php?id=<?php echo $destacado['id']?>"><img height="100px" src="subir_libro/portadas/<?php echo $destacado['portada'];?>"></a>
        
                                <div class="capa">
                                    <a href="../subir_libro/vista/archivo.php?id=<?php echo $destacado['id']?>"> <h3><?php echo $destacado['titulo']; ?></h3></a>
                                    <p><?php echo $destacado['descripcion']; ?></p>
                                </div>
                            </figure> 
                        </section> 
                    <?php
                } 
            ?>
        </section>
        
        

    </section>
    <section class="footer">
        <p class="textu">Designed and developed by FONS © </p>
        <ul>
            <p class="textu">Follow Us</p>
            <li><a href="https://www.facebook.com/LOCUS-101674371610128" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/LOCUS39176278" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/locus_lectura/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
        
        <ul class="idioma">
            <p class="textu">Change Language:</p>
            <a href="../../login/indexMod.php"><p class="textu">Spanish</p></a>
        </ul>
    </section>
</body>
</html>

