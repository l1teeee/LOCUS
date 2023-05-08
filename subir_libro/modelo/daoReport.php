<?php
    require_once 'classConexion.php';

    class Report{

        public function agregar($titu, $descr, $fecha, $libro){
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO reportes(titulo, descripcion, fechaReport, libro) VALUES (:titu, :descr, :fecha, :libro)";
    
    
            $stmt = $dbh->prepare($sql);
            
            $stmt->bindParam(':titu', $titu);
            $stmt->bindParam(':descr', $descr);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':libro', $libro);
            $stmt->execute();
            }

        public function listadoReport(){
            $cn = new Conexion();
            $sql ="SELECT idReport, titulo, descripcion, fechaReport, libro FROM reportes order by idReport";
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $reportes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $reportes;
        }

        //ADMIN
        public function libro($libro){
            $cn = new Conexion();
            $sql = "SELECT titulo FROM tbl_documentos WHERE id=". $libro;
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql); 
            $stmt->execute();
            $titulo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $titulo; 
        }
        //Eliminar libro
        public function dlibro($libro){
            $cn = new Conexion();
            $sql = "DELETE FROM tbl_documentos WHERE id=". $libro;
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }

        public function dReport($report){
            $cn = new Conexion();
            $sql = "DELETE FROM reportes WHERE idReport=". $report;
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }
        public function conteo_R(){
            $sql = "SELECT * FROM reportes ";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();


            $cuenta=$stmt->rowCount();
            return $cuenta;
        }

        public function solicitud($libro){
            $sql = "UPDATE tbl_documentos SET monetizacion='Pendiente' WHERE id=".$libro;
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }       

        
        public function solicitud_A($libro){
            $sql = "UPDATE tbl_documentos SET monetizacion='Si' WHERE id=".$libro;
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }      

        public function solicitud_R($libro){
            $sql = "UPDATE tbl_documentos SET monetizacion='No' WHERE id=".$libro;
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }      

        public function select_user($user){
            $sql = "SELECT * FROM usuarios where nombreUsu= :usu";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':usu', $user);
            $stmt->execute();
            $current=$stmt;
            // $current = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $current; 
        }

        public function agregar_money($total, $user){
            $sql = "UPDATE usuarios SET dinero=".$total." WHERE nombreUsu= :usu";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':usu', $user);
            $stmt->execute();
        }

        public function mostrarVisitas($libro){
            $sql = "SELECT * FROM visitas WHERE id_libro=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id',$libro);
            $stmt->execute();
            $like=$stmt->rowCount();
            return $like;
        }
    } //FIN CLASE

?>