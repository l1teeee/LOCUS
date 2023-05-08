<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terror</title>
    <link rel="stylesheet" href="css/terror.css">
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
            <h2 id="tit">Terror</h2>
            <h2>Género de la literatura, que tiene por objeto, o tiene la capacidad de asustar a sus lectores, induciendo sentimientos de horror y el terror. El género tiene orígenes antiguos, que fueron reformuladas en el siglo XVIII como gótica de terror, con la publicación del Castillo de Otranto en 1764 por Horace Walpole.</h2>
        </div>
    </section>
        <section class="libros">
            <h1>Libros subidos</h1>
            <div>
                <?php
            require_once "../subir_libro/modelo/daoLibro.php";      
            $dao = new DaoLibro();
            $libros = $dao->LTerror();

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