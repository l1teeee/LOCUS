<?php
    require_once '../modelo/daoLibro.php';
    require_once '../modelo/classLibro.php';  


    $accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
    $id = isset($_GET['id'])?$_GET['id']:"";
    $like = isset($_GET['n'])?$_GET['n']:"";

    if(isset($_POST['subir'])){
        if ($_FILES['archivo']['type']=='application/pdf') {
            if($_FILES['portada']['type']=='image/png' || $_FILES['portada']['type']=='image/jpeg'){
                $archivo = $_FILES['archivo']['name'];
                $ruta = $_FILES['archivo']['tmp_name'];
                $destino = "../archivos/" . $archivo;
        
                $portada = $_FILES['portada']['name']; //nombre_img
                $ruta2 = $_FILES['portada']['tmp_name'];
                $destino2 = "../portadas/" . $portada; 
         
                if($archivo!="" ) {
                    if (copy ($ruta, $destino) && copy ($ruta2, $destino2)){
                        $titulo = isset($_POST['titulo'])?$_POST['titulo']:"";
                        $descri = isset($_POST['descripcion'])?$_POST['descripcion']:""; 
                        $categoria = isset($_POST['categoria'])?$_POST['categoria']:"";
                        $usu = isset($_POST['usu'])?$_POST['usu']:"";
                        //$portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
                        $fecha = date('Y-m-d H:i:s');
                        $estado = "Pendiente"; 
                        $money = "No";
                        $dao = new DaoLibro();
                            
                        $libro = new Libro($titulo, $descri, $categoria, $portada, $fecha, $archivo, $estado, $usu, $money); 
                        $dao->insertar($libro);
                
                        ?> <script>alert('¡Su libro ahora esta en LOCUS!')
                            window.location='../vista/vistaLibro.php';</script> 
                        <?php  
                            
                    }else{
                        ?> <script>alert('No se ha podido subir su libro...')</script> 
                        <?php 
                    }
                }
            }else if ($_FILES['portada']['type']!='image/png' ||  $_FILES['portada']['type']!='image/jpeg' ){
                ?>  
                 <script>alert('La portada tiene que ser PNG o JPG');
                    window.history.back(1);
                  </script> 
                <?php 
            }
            
        }else if ($_FILES['archivo']['type']!='application/pdf'){
            ?>  
              <script>alert('El documento de su libro tiene que ser PDF');
                window.history.back(1);
              </script> 
            <?php  
        }
    }


    //Controlador Likes
    $ida = isset($_POST['id'])?$_POST['id']:"";
    require_once "../modelo/daoLibro.php";
    $dao = new DaoLibro();
    $archivos = $dao->archivos($id);  

    foreach($archivos as $archivo){
        $id = isset($_GET['id'])?$_GET['id']:"";
        $usu = isset($_GET['usu'])?$_GET['usu']:"";
        $canti = isset($_GET['canti'])?$_GET['canti']:"";
        $cantiNo = isset($_GET['cantiNo'])?$_GET['cantiNo']:"";
        if($like == "si" ){
            require_once '../modelo/classLike.php';
            require_once '../modelo/daoLike.php';
            $dao = new DaoLike();
            $like = new Like($like, $usu, $id); 
            $dao->likes($like);
            $dao->actualizarLike($id, $canti);
            
            ?>
            <script>window.location = '../vista/archivo.php?id=<?php echo $archivo['id']?>#likes'</script>
            <?php
        }else if ($like == "nou"){
            require_once '../modelo/classLike.php';
            require_once '../modelo/daoLike.php';
            $dao = new DaoLike();
            $like = new Like($like, $usu, $id); 
            $dao->likesNo($id, $usu);
            $dao->actualizarLikeNo($id, $cantiNo);
            ?>
            <script>window.location = '../vista/archivo.php?id=<?php echo $archivo['id']?>#likes'</script>
            <?php
        }
    }

    //Eliminar Libro
    if($id != "" && $accion=="eliminar"){
        require_once "../modelo/daoLibro.php";
        $daoEli = new DaoLibro();
        $archivos = $dao->archivos($id); 

        foreach ($archivos as $archivo){
            $tituloLB = $archivo['titulo'];
            $daoEli = new DaoLibro();
            $daoEli->eliminar($id);
            ?>
            <script>alert('Se ha eliminado el libro: <?php echo $tituloLB?>');
              window.location = '../vista/vistaLista.php';
            </script> 

            <?php
        } 
    }
   

    if($accion == "Modificar"){
        require_once '../modelo/classLibro.php';
        require_once '../modelo/daoLibro.php';
        $titulo = isset($_POST['titulo'])?$_POST['titulo']:"";
        $descri = isset($_POST['descripcion'])?$_POST['descripcion']:""; 
        $categoria = isset($_POST['categoria'])?$_POST['categoria']:"";
        $portada = isset($_POST['portada'])?$_POST['portada']:"";
        $estado = isset($_POST['estado'])?$_POST['estado']:"";
        $usu = isset($_POST['usu'])?$_POST['usu']:"";
        $fecha = isset($_POST['fecha'])?$_POST['fecha']:"";
        $archivo = isset($_POST['archivo'])?$_POST['archivo']:"";
        $id = isset($_POST['id'])?$_POST['id']:"";
        $money = isset($_POST['money'])?$_POST['money']:"";
        $dao = new DaoLibro();
        $libro = new Libro($titulo, $descri, $categoria, $portada, $fecha, $archivo, $estado, $usu, $money); 
        $dao->modificarL($libro, $id);
        ?>   
        <script>window.location = '../vista/perfil.php?nombreUsu=<?php echo $usu ?>'</script>
        <?php
    }

    
?>
        