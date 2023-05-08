<?php

    require_once '../modelo/daoReport.php';
    require_once '../modelo/classConexion.php';
    $titu = isset($_POST['titu'])?$_POST['titu']:"";
    $descr = isset($_POST['descr'])?$_POST['descr']:"";
    $accion = isset($_POST['accion'])?$_POST['accion']:"";
    $libro = $_GET['id'];
    $fecha = date('Y/m/d');

    if($accion == "Enviar"){
        $dao = new Report();
        $dao->agregar($titu, $descr, $fecha, $libro);
        ?>
            <script>alert('Your report has been sent!')
                    window.location='../vista/vistaLista.php';</script> 
                <?php  
    
    }

?>