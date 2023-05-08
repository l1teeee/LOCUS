<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/v_admi.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>LOCUS - REPORTS</title>
</head>
<body>
<section class="incio">
        <header>
                <a href="../../index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                <section class="menu">
                    <section class="panel-it">
                        <article id="items1"><a href="perfil.php"></a></article>
                        <article id="items"><a href="../../login/indexAdmin.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                    </section>
                </section>
        </header>
</section>
<center><h1>Reports List</h1></center>
<?php
require_once "../modelo/daoReport.php";
    $dao = new Report();
    $cont = $dao->conteo_R();

    if($cont==0){
        echo "<center><h4>Come back later, this is empty</h4></center>";
    } else {
?>
    <center>
    <table class="table caption-top">
        <tr>
            <td class="titulos">BOOK</td>
            <td class="titulos">PDF</td>
            <td class="titulos">TITLE</td>
            <td class="titulos">DESCRIPTION</td>
            <td class="titulos">DATE</td>
            <td class="titulos">ACTION</td>
        </tr>
    <?php
        if(!isset($reportes)){
            require_once "../modelo/daoReport.php";
        } else {
            require_once "../modelo/daoReport.php";
            
        }

        $dao = new Report;
        
        $reportes = $dao->listadoReport();
        foreach($reportes as $reporte){

            $libro = $reporte['libro'];

            $titu = $dao->libro($libro);

            foreach($titu as $t){
            
            echo "<tr><td class='cuerpo'>".$t['titulo']."</td>";
            ?>
            <center>
            <td class="cuerpo"><a href='../vista/archivo.php?id=<?php echo $reporte['libro'] ?>'><i class='fas fa-file-pdf'></i></a></td></td>
            </center>
            <?php
            echo "<td class='cuerpo'>".$reporte['titulo']."</td>";
            echo "<td class='cuerpo'>".$reporte['descripcion']."</td>";
            echo "<td class='cuerpo'>".$reporte['fechaReport']."</td> ";
            
            ?>
            <td class="cuerpo">
                <div class="inputBox2">
                <a id="accion" href="../controlador/ctrlMod.php?id=<?php echo $libro?>&accion=Libro">Delete Book</a>
                </div>
                <div class="inputBox2">
                <a id="accion" href="../controlador/ctrlMod.php?report=<?php echo $reporte['idReport'] ?>&accion=Reporte">Delete Report</a>
                </div>
            </td>
               
            <?php
            echo "</tr>";
            // echo "<tr><td class='cuerpo'>".$reporte['libro']."</td><td class='cuerpo'><a href='../vista/archivo.php?titu=A'><i class='fas fa-file-pdf'></i></a></td><td class='cuerpo'>".$reporte['titulo']."</td><td class='cuerpo'>".$reporte['descripcion']."</td><td class='cuerpo'>".$reporte['fechaReport']."</td><td class='cuerpo'>".$list."</td></tr>";
        }
    }
}
    ?>
    </table>
    <center>
    <!-- <a href="../index.php">Regresar</a> -->
</body>
</html>