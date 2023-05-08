<?php
    require_once '../modelo/daoLibro.php';
    require_once '../modelo/classLibro.php'; 

    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $id = isset($_GET['id'])?$_GET['id']:"";
    $like = isset($_GET['n'])?$_GET['n']:"";
     
    if (isset($_POST['subir'])) {
        $archivo = $_FILES['archivo']['name'];
        $ruta = $_FILES['archivo']['tmp_name'];
        $destino = "../archivos/" . $archivo;
 
        $portada = $_FILES['portada']['name']; //nombre_img
        $ruta2 = $_FILES['portada']['tmp_name'];
        $destino2 = "../portadas/" . $portada;

        if($archivo!="") {
            if (copy ($ruta, $destino) && copy ($ruta2, $destino2)){
                $titulo = isset($_POST['titulo'])?$_POST['titulo']:"";
                $descri = isset($_POST['descripcion'])?$_POST['descripcion']:""; 
                $categoria = isset($_POST['categoria'])?$_POST['categoria']:"";
                //$portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
                $fecha = date('Y-m-d H:i:s');
                $estado = "Pendiente";
                $dao = new DaoLibro();
            
                $libro = new Libro($titulo, $descri, $categoria, $portada, $fecha, $archivo, $estado); 
                $dao->insertar($libro);

                ?>  <script>alert('¡Su libro ahora esta en LOCUS!')
                    window.location='../vista/vistaLibro.php';</script> 
                <?php  
            
            }else{
                ?> <script>alert('No se ha podido subir su libro...')</script> <?php 
            }
        }
    }

    require_once "../modelo/daoLibro.php";
    $dao = new DaoLibro();
    $archivos = $dao->archivos();  

    foreach($archivos as $archivo){
        if($like == "si"){
            require_once '../modelo/classLike.php';
            require_once '../modelo/daoLike.php';
            $dao = new DaoLike();
            $c=1;
            $like = new Like($like); 
            $dao->likes($like);
            ?><script>window.location = '../vista/archivo.php?id=<?php echo $archivo['id']?>'</script><?php
        }
    }
?>