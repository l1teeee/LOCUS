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
        $dire = '../login/index.php';
      }elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'mod'){
        $dire = '../login/indexMod.php';
      }elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'Admin'){
        $dire = '../login/indexAdmin.php';
      }
?>
<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title>LISTA MODERADOR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/vistaLista.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>
    <section class="incio"> 
               <header>
                    <a href="../../login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                    <section class="menu">
                        <section class="panel-it">
                            <article id="items1"><a href="vmod_pend.php"><h5>Aprobar Libros</h5></a></article>
                            <article id="items"><a href="../../login/indexMod.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                        </section>
                    </section>
                </header>
        </section>

        <center><h1>Listado Libros</h1></center>
        
        <br>
        <table class="table caption-top">
            <tr>
                <td class="titulos">TITULO</td>

                <td class="titulos">PORTADA</td>
                
                <td class="titulos">DESCRIPCIÓN</td>
                
                <td class="titulos">CATEGORIA</td>
               
                <td class="titulos">FECHA DE PUBLICACIÓN</td>
              
                <td class="titulos">PDF</td>

                <td class="titulos">REPORTAR</td>

                <td class="titulos">MODIFICAR</td>

                <td class="titulos">ELIMINAR</td>
            </tr> 
            
            <?php
                require_once "../modelo/daoLibro.php"; 
               
                $dao = new DaoLibro();
                $libros = $dao->listadoLibros(); 
                //$enlace ="<a href='../controlador/ctrlLibro.php?accion=eliminar&id="; 
                foreach($libros as $libro){
                    echo "<tr><td>".$libro['titulo']."</td>";
                    /*?><td><img height="200px" src="data:image/jpg;base64, <?php echo base64_encode($libro['portada'])?>"></td><?php*/
                    ?> <td><img height="100px" src="../portadas/<?php echo $libro['portada'];?>"></td><?php
                    echo "<td>".$libro['descripcion']."</td>";
                    echo "<td>".$libro['categoria']."</td>";
                    echo "<td>".$libro['fecha_publicacion']."</td>";?> 
                    <td><a href="../vista/archivo.php?id=<?php echo $libro['id']?>"><center><i class="fas fa-file-pdf"></i><center></a></td>
                    <td><a href="../vista/v_report.php?libro=<?php echo $libro['titulo']?>&id=<?php echo $libro['id'] ?>"><center><i class="fas fa-ban"></i></center></a></td>
                    <td><a href="../controlador/ctrlLibro.php?accion=modificar&id=<?php echo $libro['id']?>"><center><i class="fas fa-edit"></i><center></a></td>
                    <td><a href="../controlador/ctrlLibro.php?accion=eliminar&id=<?php echo $libro['id']?>"><center><i class="fas fa-trash-alt"></center></i></a></td>
                    </tr>
                    <?php
                } 
            ?>
        </table>
    </body>
</html>
