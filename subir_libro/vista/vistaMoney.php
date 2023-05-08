<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCUS - MONETIZAR</title>
    <link rel="stylesheet" href="css/v_money.css">
    <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>

</head>

<body>
<section class="incio">
        <header>
                <a href="../../index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                <section class="menu">
                    <section class="panel-it">
                        <article id="items1"><a href="perfil.php"></a></article>
                        <article id="items"><a href="vistaLista.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                    </section>
                </section>
        </header>
</section>
    <center><h1> Solicitudes de monetización </h1></center>

    <?php
        require_once '../modelo/daoLibro.php';
        $dao = new DaoLibro();
        $cont = $dao->conteoMoney();
        //  echo $cont;

        if($cont==0){
            ?>
                <center><h4> Por el momento no hay peticiones, regresa luego </h4></center>
            <?php
        } else {
            $libros = $dao->L_money();
    ?>
        <center>
        <table> 
            <tr>
                <td class="titulos">TITULO</td>
                <td class="titulos">PDF</td>
                <td class="titulos">N° LIKES</td>
                <td class="titulos">CREADOR</td>
                <td class="titulos">ACCION</td>
                
            </tr>
            <?php
            foreach($libros as $l){
                require_once '../modelo/daoReport.php';
                $daou = new Report;
                $user = $l['usuario'];
                $actual = $daou->select_user($user);
                foreach($actual as $ac){
                echo "<tr>";
                echo "<td class='cuerpo'>".$l['titulo']."</td>";

                ?>
                <td class="cuerpo"><a href="../vista/archivo.php?id=<?php echo $l['id']?>"><i class="fas fa-file-pdf"></i></a></td>
                <?php
                  echo "<td class='cuerpo'>".$l['megusta']."</td>";
                  echo "<td class='cuerpo'>".$l['usuario']."</td>";

                  ?>
                  <td class="cuerpo">
                  <div class="inputBox2">
                  <a id="accion"  href="../controlador/ctrlMod.php?libro=<?php echo $l['id']?>&accion=moneyA&megusta=<?php echo $l['megusta']?>&user=<?php echo $l['usuario']?>&mone=<?php echo $l['monetizacion']?>&actual=<?php  echo $ac['dinero']?>">Aprobar</a>
                  </div>
                  <div class="inputBox2">
                  <a id="accion" href="../controlador/ctrlMod.php?libro=<?php echo $l['id'] ?>&accion=moneyR">Rechazar</a>
                  </div>
              </td>
              </tr>

              <?php

                }
                    
             }     
            
            ?>
           
        </table>
        </center>
    <?php
            
        }
    ?>
</body>
</html>