<?php
    require_once '../modelo/daoLibro.php';
    require_once '../modelo/daoReport.php';

    
    $a = $_GET['accion'];
    
    $est = (isset($_GET['megusta']))?$_GET['megusta']:"";
    $mone = (isset($_GET['mone']))?$_GET['mone']:"";
   
    
      if ($a == "Aprobar"){
         $dao = new DaoLibro;
          $libro = $_GET['id'];
         $dao->L_aproved($libro);
          ?>
               <script>alert('This book will be uploaded, Thanks!'); 
                      window.location='../vista/vmod_pend.php';</script> 
          <?php
      } else if ($a == "Rechazar"){
          $dao = new DaoLibro;
          $libro = $_GET['id'];
          $dao->L_rejected($libro);
          ?>
              <script>alert('This book will be deleted from the platform!'); 
                      window.location='../vista/vmod_pend.php';</script> 
        <?php
      }

    //ADMIN

    if($a == "Libro"){
        $dao = new Report;
        $libro = $_GET['id'];
        // $report = $_GET['report'];
        
        $dao->dlibro($libro);


        ?>
            <script>alert('The book has been deleted successfully');
                    window.location='../vista/v_admin.php';</script>
        <?php
    } else if ($a == "Reporte"){
        $dao = new Report;
        $report = $_GET['report'];
        
        $dao->dReport($report);

        ?>
            <script>alert('Report has been deleted successfully');
                    window.location='../vista/v_admin.php';</script>
        <?php


    }

    //MONETIZAR 
    
    if ($mone == "Si"){
        $usu = $_GET['nombreUsu'];
        ?>
             <script>alert('You already monetized this book'); 
                     window.location='../vista/perfil.php?nombreUsu=<?php echo $_GET['nombreUsu']?>';</script> 
         <?php
     
        
    } else if ($a=="monetizar" && $est >= 10 ){
        $libro = $_GET['libro'];
        $usu = $_GET['nombreUsu'];
        $dao = new Report;
        $dao->solicitud($libro);

         ?>
            <script>alert('The request is already done, please wait');
                   window.location='../vista/perfil.php?nombreUsu=<?php echo $_GET['nombreUsu']?>';</script> 
        <?php

    } else if ($est < 10){
        ?>
             <script>alert('You still can not monetize this book!'); 
                     window.location='../vista/perfil.php?nombreUsu=<?php echo $_GET['nombreUsu']?>';</script> 
         <?php
    }

    if ($a=="moneyA"){
        $libro = $_GET['libro'];
        $likes = $_GET['megusta'];
        $user = $_GET['user'];
        $actual = $_GET['actual'];
    
        $dao = new Report;
        $money = number_format($likes*0.15,2);

        $visitas = $dao->mostrarVisitas($libro);

        $visi = number_format($visitas*0.05,2);
        
            $total = number_format($actual + $money + $visi, 2);
            $dao->agregar_money($total, $user);
    
            
        
        $dao = new Report;
         $dao->solicitud_A($libro);
         ?>
             <script>alert('Thank you for approving the monetization, the calculation will be done!');
                      window.location='../vista/vistaMoney.php?nombreUsu=<?php echo $_GET['nombreUsu']?>';</script>
        <?php
        
        
    } else if ($a=="moneyR"){
        $libro = $_GET['libro'];
        $dao = new Report;
        $dao->solicitud_R($libro);
        ?>
            <script>alert('¡The request has been rejected, thank you for your cooperation!');
                    window.location='../vista/vistaMoney.php?nombreUsu=<?php echo $_GET['nombreUsu']?>';</script>
        <?php
    }
    
?>