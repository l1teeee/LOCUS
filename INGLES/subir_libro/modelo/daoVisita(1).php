<?php
    require_once 'classConexion.php'; 

    class DaoVisita{
        public function insertarVisita($visita){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO visitas (ip, fecha_visita, id_libro) VALUES (:ip, :fecha_visi, :id_libro)"; 
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->execute((array) $visita);
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

        public function validacionV($id){
            $sql = "SELECT * FROM visitas WHERE id_libro=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $vali=$stmt->rowCount();
            return $vali;
        }

        public function mostrarVisita($id){
            $sql = "SELECT * FROM visitas WHERE id_libro=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $visi = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $visi;
        }

        public function mostrarVisitaL($id){
            $sql = "SELECT * FROM visitas WHERE id_libro=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $like=$stmt->rowCount();
            return $like;
        }
    }


?>