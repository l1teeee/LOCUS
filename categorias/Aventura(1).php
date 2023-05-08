<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventura</title>
    <link rel="stylesheet" href="css/Aventura.css">
    <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="incio">
        <header>
            <a href="../index.php"><article id="items"><img id="logo" src="../IMG_INDEX/LOGO1.png"></article></a>
            <section class="menu">
                <section class="panel-it">

                    <article id="items"><a href="../index.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                </section>
            </section>
        </header>
    </section>
    <section class="defini">
        <div class="definicion">
            <h2 id="tit">Aventura</h2>
            <h2>El género de aventura es aquello que se opone a la rutina, a lo cotidiano, de ahí su valor. Es la capacidad del protagonista para enfrentarse a riesgos, misterios y peligros. Por norma, la novela de aventuras cuenta con un final feliz. El héroe, aunque cansado, logra al fin sus propósitos</h2>
        </div>
    </section>
        <section class="libros">
            <h1>Libros subidos</h1>
            <div>
                <?php
            require_once "../subir_libro/modelo/daoLibro.php";      
            $dao = new DaoLibro();
            $libros = $dao->LAventura();

            foreach($libros as $libro){
                
                    ?><div class="contenedor">
                        <section class="librito">
                            <section class="destaK">
                                <figure>
                                    <a href="../subir_libro/vista/archivo_no.php?id=<?php echo $libro['id']?>"><img height="100px" src="../subir_libro/portadas/<?php echo $libro['portada'];?>"></a>
    
                                    <div class="capa">
                                       <a href="../subir_libro/vista/archivo_no.php?id=<?php echo $libro['id']?>"> <h3 s><?php echo $libro['titulo']; ?></h3></a>
                                        <p style="text-align: justify;"><?php echo $libro['descripcion']; ?></p>
                                    </div>
                                </figure> 
                            </section> 
                        </section>
                    </div>
                    <?php
                
            } 
        ?></div>
            </div>
        
        </section>
        
</body>
</html>