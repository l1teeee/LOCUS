<?php
    include_once '../modelo/classSession.php';

    $sesion = new userSesion();
    $sesion->cerrarSesion();

    header('location:../../index.php');
?>