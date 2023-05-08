<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MODERATOR PENDINGS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/vmod_pend.css">
        
    </head>
    <body>
    <section class="incio"> 
               <header>
                    <a href="../../login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="vistaLista.php"><h5>View List</h5></a></article>
                            <article id="items"><a href="../../login/index.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>
    <header></header>
        <center><h1>Pending Books</h1></center>
        <br>
     
        <?php
        require_once '../modelo/daoLibro.php';
        $dao = new DaoLibro();
        $cont = $dao->conteo();
        // echo $cont;
            
            if($cont==0){
               echo "<center><h4>Come back later, there are no books to approve</h4></center>";
            } else {
                ?>
                <table class="table caption-top">
                <tr>
                    <td class="titulos">TITLE</td>
    
                    <td class="titulos">COVERPAGE</td>
                    
                    <td class="titulos">DESCRIPTION</td>
                    
                    <td class="titulos">CATEGORY</td>
                   
                    <td class="titulos">PUBLICATION DATE</td>
                  
                    <td class="titulos">PDF</td>

                    <td class="titulos">ACTION</td>
    
                </tr> 
                
                <?php
                    require_once "../modelo/daoLibro.php";
                   
                    $dao = new DaoLibro();
                    $libros = $dao->ListLibros_p();
                    
                    //$enlace = "<a href='controlador/ctrlCliente.php?accion=1&id='";
                    foreach($libros as $libro){
                       
                        echo "<tr><td class='cuerpo'>".$libro['titulo']."</td>";
                        /*?><td><img height="200px" src="data:image/jpg;base64, <?php echo base64_encode($datos['portada'])?>"></td><?php*/
                        ?> <td class='cuerpo'><img height="90px" src="../portadas/<?php echo $libro['portada'];?>"></td><?php
                        echo "<td class='cuerpo'>".$libro['descripcion']."</td>";
                        echo "<td class='cuerpo'>".$libro['categoria']."</td>";
                        echo "<td class='cuerpo'>".$libro['fecha_publicacion']."</td>";?> 
                        <td class="cuerpo"><a href="../vista/archivoMod.php?id=<?php echo $libro['id']?>"><i class="fas fa-file-pdf"></i></a></td>
                        <td class='cuerpo'>
                        <div class="inputBox2">
                        <a id="accion" href="../controlador/ctrlMod.php?id=<?php echo $libro['id']?>&accion=Aprobar"> Approve </a>
                        </div>
                        <div class="inputBox2">
                        <a id="accion" href="../controlador/ctrlMod.php?id=<?php echo $libro['id']?>&accion=Rechazar"> Reject </a>
                        </div>
                        </td>
                    <form>
                    </tr>
                        
                        <?php
                        
                    }
                ?>
    
            </table>
            <?php
            }
        ?>
    </body>
</html>