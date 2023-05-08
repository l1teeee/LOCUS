<?php 

    $nombreUsu = isset($_POST['usuario'])?$_POST['usuario']:"";
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $pass = isset($_POST['contraseña1'])?$_POST['contraseña1']:"";
    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $a = isset($_GET['nombreUsu'])?$_GET['nombreUsu']:"";
    $tipo = "user";

    //Si no toma datos
    if($accion == "" && $a==""){
        require "../../index.php";   
    }

    //Registrar usuario
    if($accion == "Registrar"){
        require_once "../modelo/classConexion.php";
        require_once "../modelo/classConsultas.php";
        
        $mensaje = null;
        if(strlen($nombreUsu)>0 && strlen($nombre)>0 && strlen($email)>0 && strlen($pass)>0){
            $consultas = new consultas;
            if(!$consultas->userName($nombreUsu) && !$consultas->userEmail($email)){
            $mensaje = $consultas->insertar($nombreUsu, $nombre, $email, $pass, $tipo);
            echo $mensaje;
            session_start();
            $_SESSION['usu'] = $nombreUsu;
            header('location:../../login/index.php');//Linea para cuando este listo todo
            // echo '<a href="../../registrar/registrar.php">Volvamos a introducir usuarios</a><br/>';
            // echo '<a href="../vista/vistaMostrar.php">Ver usuarios</a><br/>';
            }else{
                $nombreUsu = $_POST['usuario'];
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $pass = $_POST['contraseña1'];
                if($consultas->userName($nombreUsu)){
                $msj = 'Nombre de usuario ya existe...';
                include_once '../../registrar/registrar.php';
                }elseif($consultas->userEmail($email)){
                $msj = 'Correo en uso...';
                include_once '../../registrar/registrar.php';
                    }
            }
        }else{
            echo '<script>alert("Hay campos vacíos...");
            window.history.go(-1);</script>';
        }
    
    }

    //Eliminar usuario
    if($a != "" && $accion=="eliminar"){
        require_once "../modelo/classConexion.php";
        require_once "../modelo/classConsultas.php";
    
            $mensaje = null;
            $nombreUsu = $_GET['nombreUsu'];
            $consultas = new consultas();
            $mensaje = $consultas->eliminar($a);
            $msj = $mensaje;
            include_once '../vista/vistaMostrar.php';    
    }

    //Modificar cliente
    if($a != "" && $accion=="modificar"){
        require_once "../modelo/classConexion.php";
        require_once "../modelo/classConsultas.php";
        $consultas = new consultas();
        $usuario = $_GET['nombreUsu'];
        $filas = $consultas->cargarUsu($a);
        if (is_array($filas)){
            foreach ($filas as $fila){
                $nombreUsu = $fila['nombreUsu'];
                $nombre = $fila['nombre'];
                $email = $fila['email'];
                $pass = $fila['pass'];
                $sobre = $fila['des'];
            }
        }
        include_once '../vista/vistaModifica.php';
    }

    if($accion == "Modificar"){
        require_once "../modelo/classConexion.php";
        require_once "../modelo/classConsultas.php";
        $mensaje=null;
        $nombreUsu = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sobreMi = $_POST['des'];
        $usuario = $_POST['usu'];
        $consultas = new consultas();
        if(strlen($nombreUsu)>0 && strlen($nombre)>0 && strlen($email)>0){
            $mensaje = $consultas->modificar("nombre",$nombre, $usuario);
            $mensaje = $consultas->modificar("email",$email, $usuario);
            $mensaje = $consultas->modificar("pass",$pass, $usuario);
            $mensaje = $consultas->modificar("des",$sobreMi, $usuario);
            $mensajeb = $consultas->modificarL($nombreUsu, $usuario);
            $mensaje = $consultas->modificar("nombreUsu",$nombreUsu, $usuario);
            $msj = $mensaje; 
            ?> 
            <script>alert("Usuario modificacio correctamente, vuelve a iniciar sesion...")
            window.location='../../index.php';</script>
            <?php
        }else{
            ?>
            <script>alert("Hay campos vacíos...");
            window.history.go(-1);</script> 
        <?php
        }
    }

    if($a != "" && $accion=="foto"){
        require_once "../modelo/classConexion.php";
        require_once "../modelo/classConsultas.php";
        $consultas = new consultas();
        include_once '../vista/vistaFoto.php';
    }

    if($accion=="Confirmar"){
        require_once "../modelo/classConexion.php";
        require_once "../modelo/classConsultas.php";
        $usuario = $_POST['usu'];
        if($_FILES['foto']['tmp_name']==''){
            echo 'No se ha seleccionado ningun archivo';
        }else {
            $cargarFoto = $_FILES['foto']['tmp_name'];//Carga el archivo
            $foto = fopen($cargarFoto, 'rb');//Lee el archivo como binario
            $consultas = new consultas();
            $mensaje = $consultas->insertarFoto("foto", $foto, $usuario);
            ?> 
            <script>alert("Foto Modificada Correctamente...")
            window.location="../../login/index.php";</script>
            <?php
        }
    }
?>