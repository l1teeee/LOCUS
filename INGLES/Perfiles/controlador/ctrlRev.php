<?php
    require_once "../modelo/classConexion.php";
    require_once "../modelo/classConsultas.php";

    $mensaje = null;

    if(isset($_GET['nombreUsu'])){
        $nombreUsu = $_GET['nombreUsu'];
        $consultas = new consultas();
        $mensaje = $consultas->revocarMod($nombreUsu);
        include_once '../vista/vistaMods.php';  
    }

?>