<?php
    require_once '../modelo/daoComentario.php';
    require_once '../modelo/classComentario.php'; 

    $subir = isset($_POST['comentar'])?$_POST['comentar']:"";
    $comentarios = isset($_POST['comentario'])?$_POST['comentario']:"";
    $usu = isset($_POST['usu'])?$_POST['usu']:"";
    date_default_timezone_set('America/El_Salvador');
    $fecha = date('Y-m-d h:i');
    $id = isset($_GET['id'])?$_GET['id']:"";
    $dao = new DaoComentario();
    
    $comentario = new Comentario($comentarios, $id, $fecha, $usu);  
    $dao->insertar($comentario);

    require_once "../modelo/daoLibro.php";
    $dao = new DaoLibro();
    $libros = $dao->listadoLibros($id);

    foreach($libros as $libro){
           if ($comentario !=""){
        ?><script>window.location = '../vista/archivo.php?id=<?php echo $id;?>#comentarios'</script><?php
        }else{
            alert('You have not writen any message');
        }
                    
    }   


?>