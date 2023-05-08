<?php
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
session_start();
include_once '../modelo/classUsuario.php';
include_once '../modelo/classSession.php';
require_once "../modelo/classConexion.php";
require_once "../modelo/classConsultas.php";

$sesion = new userSesion();
$usuario = new user();
$consultas = new consultas();



if(isset($_SESSION['user'])){
    $usuario->setUser($sesion->getUsuario);
    $con = true;
    include_once "../../login/index.php";

}elseif(isset($_POST['usuario']) && isset($_POST['pass'])){

    $userForm = $_POST['usuario'];
    $passForm = $_POST['pass'];


    if($usuario->userExists($userForm, $passForm)){
        $_SESSION['usu']=$userForm;
        $con = true;

        $dao = $consultas->rol($_SESSION['usu']);
foreach($dao as $tipo){
  $rol = $tipo['tipo'];
}
if($rol == 'user'){
    $_SESSION['rol']=$rol;
    echo "<script>window.location='../../login/index.php';</script>";
}elseif($rol=='mod'){
    $_SESSION['rol']=$rol;
    echo "<script>window.location='../../login/indexMod.php';</script>";

}elseif($rol=='Admin'){
    $_SESSION['rol']=$rol;
    echo "<script>window.location='../../login/indexAdmin.php';</script>";
}

        }else{
            $msjError = "Contraseña o Usuario incorrecto...";
            include_once '../../registrar/iniciar.php';
        }
        
    }else{
        echo '<script>alert("Usuario o contraseña incorrectos...");
        window.history.go(-1);</script>';
    }




?>
