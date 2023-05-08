<?php 
session_start();
$varsesion = $_SESSION['usu']; 
if($varsesion == null || $varsesion = ''){
    echo  "No tiene acceso";
    die();
}
if(isset($_SESSION['usu'])){
    $dir = '../login/index.php';
    $u = $_SESSION['usu'];
}else {
    $dir = '../index.php';
}

if(isset($_SESSION['rol']) && $_SESSION['rol'] == 'user'){
  $dire = '../../login/index.php';
}elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'mod'){
  $dire = '../../login/indexMod.php';
}elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == 'Admin'){
  $dire = '../../login/indexAdmin.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../vista/css/perfi.css">
  <link rel="shortcut icon" href="../../IMG_INDEX/LOGO1.png" />
  <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>


</head>
<body>
  
    <header>
      <a href="../../login/index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
        <section class="menu">
          <section class="panel-it">
              <article id="items1"><a href="vistaLibro.php">Subir Libro</a></article>
              <article id="items"><a href="<?php echo $dire; ?>"><i class="fas fa-arrow-circle-left"></i></a></article>
              </section>
            </section>
    </header>
    <div class="card">
      <div class="hover">
          
      </div>
    <?php
    require_once "../modelo/classConexion.php";
    require_once "../../Perfiles/modelo/classConsultas.php";
    $usu = isset($_GET['nombreUsu'])?$_GET['nombreUsu']:"";
    $consultas = new consultas();
    $filas = $consultas->mostrarD($usu);
    foreach($filas as $fila){
    ?>
      <section id="cardi">
      <?php 
      if(empty($fila['foto'])){
        echo "<i id='perfil' class='far fa-user-circle'></i>";
    }else {
        echo '<img class="imgP" src="data:image/jpg;base64, '.base64_encode($fila['foto']).'" width="250px">';
    }
      ?>
      
      <h2><?php echo $fila['nombreUsu']?></h2>
      <h3><?php echo $fila['nombre']?></h3><br/>
    <?php
    if($fila['des']==''){
    ?>
      <h3>Cuentanos sobre tí...</h3>
    <?php
    }else{
      ?>
      <h3><?php echo $fila['des']?></h3>
      <?php
    }
    ?>
      <p></p>
      <h3>Dinero hecho: <?php echo $fila['dinero']?></h3>
    </section>
    <?php
    }
    ?>
    <footer class="info">
    <a href="../../Perfiles/controlador/ctrlUsuario.php?nombreUsu=<?php echo $_SESSION['usu'];?>&accion=modificar"><p id="PER">Editar Perfil<i class="fas fa-pen"></i></p></a><a href="../../Perfiles/controlador/ctrlUsuario.php?nombreUsu=<?php echo $_SESSION['usu'];?>&accion=foto"><p id="PER">Editar Foto<i class="fas fa-pen"></i></p></a>
    </footer>
  </div>

  <?php
    require_once "../modelo/daoLibro.php"; 
    $dao = new DaoLibro();
    $usus = $dao->librosUsu($u);

    foreach($usus as $usu){
      ?>
      <section class="publicas">
        <header class="titu">
          <h4>Libros publicados</h4>
        </header>

        <div class="linea">
        </div>

        <div class="libro">
          <h1 id="port">Portada:</h1>
          <img src="../portadas/<?php echo $usu['portada'];?>" alt="" class="porta">
          <section class="publi">
            <h1>Titulo: <?php echo $usu['titulo'];?></h1>
            
            <h1>Descripción: <?php echo $usu['descripcion'];?></h1>
            
            <h1>Categoria: <?php echo $usu['categoria'];?></h1>
            
            <h1 >Libro: <a  href="../vista/archivo.php?id=<?php echo $usu['id']?>"><i style="color:#fff " class="fas fa-file-pdf"></i></a></h1>
            
            <?php

            
              //Mensaje

              if ($usu['monetizacion'] == "No" && $usu['megusta'] > 10){
                ?>
                    <p id="money">Ya se puede monetizar</p>
                <?php
              } else if ($usu['monetizacion'] == "No"){
                ?>
                    <p id="money">Aún no se puede monetizar, likes deben ser mayor a 10 </p>
                    
                <?php
                
              } else if ($usu['monetizacion'] == "Pendiente") {
                 ?>
                    <p id="money">Monetización pendiente por aprobar</p>
                <?php
              } else if ($usu['monetizacion'] == "Si"){
                ?>
                    <p id="money">Monetización aprobada</p>
                <?php
              }

              if ($usu['estado'] == "Pendiente"){
                ?>
                  <p id="money">Este libro no ha sido publicado</p>
                <?php
              }else{
                ?>
                <p id="money">Este libro esta publicado</p>
              <?php
              }
              ?>

      </section>
         
      <a href="../controlador/ctrlLibro.php?id=<?php echo $usu['id']?>"></a>

	    
      <a href="../vista/editarLibro.php?usu=<?php echo $u ?>&id=<?php echo $usu['id']?>"><p id='PER'>Editar Libro<a href='#'><i id="icon" class="fas fa-pen"></i></a></p></a>
       
      <a href="../vista/archivo.php?id=<?php echo $usu['id']?>"><p id='PER'>Vista Libro<a href='#'><i id='icon' class='fas fa-eye'></i></a></p></a>
      <a href='../controlador/ctrlMod.php?libro=<?php echo $usu['id']; ?>&accion=monetizar&megusta=<?php echo $usu['megusta'] ?>&mone=<?php echo$usu['monetizacion']; ?>&nombreUsu=<?php echo $usu['usuario'];?>'><p id='PER'>Monetizar <a href='../controlador/ctrlMod.php?libro=<?php echo $usu['id'] ?>&accion=monetizar'><i class='fas fa-comment-dollar'></i></a></p></a>
              
        </div>
        <div class="linea">
        </div>
  </section>
  
  <?php
      
    }

  ?>
  
</body>
</html>