<?php
session_start();
$varsesion = $_SESSION['usu'];
$tipo = $_SESSION['rol'];
if($varsesion == null || $varsesion = '' || $tipo !== 'Admin'){
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
                <a class="nave" href="#destacados" >Libros destacados</a>
                <a class="nave" href="../categorias/menu-categoriasIni.php" >Menú Categorias</a>
                <!-- <a class="nave" href="../subir_libro/vista/vistaLibroSup.php" >Subir Libro</a> -->
                <a class="nave" href="../Perfiles/vista/vistaMostrar.php" >Ver usuarios</a>
                <a class="nave" href="../subir_libro/vista/v_admin.php" >Ver Reportes</a>
	            <a class="nave" href="../subir_libro/vista/Perfil.php?nombreUsu=<?php echo $_SESSION['usu'] ?>">Perfil</a>
                <a class="nave" href="../perfiles/controlador/ctrlCerrarSesion.php" >Cerrar Sesion</a>
                <div class="modal">
                    <div class="contenedor">
                        <center>  
                        <div class="head">Iniciar Sesión</div>
                        </center>
                        <label for="btn-modal">X</label>

                        <div class="main-container">
                            <div class="conten">
                                <div class="upper box">
                                    <h1>Iniciar Sesión</h1>
                                    <h6>Para acceder a todas las funciones</h6>
                                </div>
                                <div class="lower box">
                                    <form action="perfiles/controlador/ctrlLogin.php" method="POST">
                                        <div class="input">
                                            <h4>Usuario</h4>
                                            <input type="text" name="Correo" id="username" required/>
                                            <label for="username">
                                            </label>
                                        </div>
                                        <div class="input">
                                            <br>
                                            <h4>Contraseña</h4>
                                            <input type="password" name="contra" id="contrase" required />
                                            <label for="password">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <a><h4 id="contri">¿Has olvidado tu contraseña?</h4></a>

                                            
                                            </label>
                                        </div>
                                        <div class="input1">
                                            <input type="submit" value="Login" class="login-btn">
                                            <h5 style="color:white;">No tienes cuenta? </h5>
                                            <a href="REGISTRAR/registrar.php"><h1>Click Aquí</h1></a>
                                            
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
                        <h2><a href="#Inicio">B I E N V E N I D O </a></h2>
                        <p><?php echo $_SESSION['usu']; ?></p>
                    </th>
                </tr> 
            </table>
        </center>
    </section>
    <section class="about">
        <div class="contentBx">
            <h2 class="heading">¿Qué es LOCUS?</h2>
            <br>
            
            <p class="text"> 
                LOCUS se plantea como una página web construido bajo los estándares de
                    desarrollo web actuales, tomando como punto partida, la implementación de su base
                de datos de datos sobre un motor gratuito, tal como MySQL.<br><br>

                    En el apartado del Front-end, todas las interfaces de usuario serán diseñadas e
                implementadas bajo la tecnología de CSS, garantizando así una interfaz que sea
                amigable y cómoda para los usuarios al momento de leer, procurando que el
                aplicativo responda con eficiencia ante las peticiones y requerimientos que el
                usuario necesite.<br><br> Por supuesto, todo esto acompañado de una apariencia amigable,
                    moderna, estética y adecuada a la funcionalidad del sitio.<br><br>

            </p>
        </div>
    </section>
    <section class="librosdestacado">

        <center>
            <h3 class="titu1">Pilares de LOCUS.</h3>

        </center>
        <section class="libritoo">
            <section class="destaK">
                    <div class="capa">
                        <h4>1</h4>
                        <h3>Innovación</h3>
                        <p>Como originalidad, innova en el mundo de los libros creando tus propios escritos y darlos a conocer a la
                           comunidad.
                        </p>
                    </div>
            </section>
            <section class="destaK">
                <div class="capa">
                    <h4>2</h4>
                    <h3>Creatividad</h3>
                    <p>Explota tu creatividad diseñando, escribiendo y publicando tus escritos a tu gusto.</p>
                </div>
            </section>
            <section class="destaK">
                <div class="capa">
                    <h4>3</h4>
                    <h3>Imaginación</h3>
                    <p>Explora los límites de tu imaginación con tus creaciones que jamas han sido contadas por otros.</p>
                </div>
            </section>
            
            
        </section>
        
        

    </section>
    <section class="services" >
        <section class="container">
            <section class="serviceBx">
                
                <section class="lateral">
                    <h2>Funcionalidad de LOCUS</h2>
                    
                </section>
                <p>Con el sitio web de LOCUS, el cual se ha desarrollado como proyecto para satisfacer
                    las necesidades de ser un proyecto aplicativo que sirva para solventar y crear un
                    nuevo pasamiento en las personas que ingresen a nuestro sitio web.<br><br>
                    Aclarando que los usuarios registrados realizaran la acción llenando un formulario
                    en el cual se les solicitara datos sobre ellos, para que así formen parte de la familia
                    de LOCUS. De la misma manera habrá moderadores que estarán al pendiente de
                    cualquier inconveniente que pueda suceder en la página por parte de los usuarios
                    reportando así a los administradores sobre los comportamientos incorrectos que
                    tengan.
                     <br>
                </p>
            </section>
        </section>
    </section>

    <section class="librosdestaca">
        <center>
            <a name="destacados"><h3 class="titu1">Libros Destacados.</h3></a>
            <p class="titu2">
                Estos son los libros más vistos y más gustados por nuestro publico.<br>
                Vamos, ¿Qué esperas? ve y ¡Echa un vistazo!
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
        <p class="textu">Diseño y Desarrollado por FONS © </p>
        <ul>
            <p class="textu">Síguenos en</p>
            <li><a href="https://www.facebook.com/LOCUS-101674371610128" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/LOCUS39176278" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/locus_lectura/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
        
        <ul class="idioma">
            <p class="textu">Selecciona el idioma: </p>
            <a href="../INGLES/index_in.html"><p class="textu">Ingles</p></a>
        </ul>
    </section>
</body>
</html>

