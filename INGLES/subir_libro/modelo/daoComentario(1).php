<?php
    require_once 'classConexion.php'; 

    class DaoComentario{
        public function insertar($comen){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO comentarios (comentario, id_libro, fecha, usuario) VALUES (:comentario, :id, :fech, :usuario)";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->execute((array) $comen);
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            } 
        }

        public function comentarios($id){
            $sql = "SELECT * FROM comentarios WHERE id_libro=:id ORDER BY id_comentario DESC";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $comentarios;
        }
    }
?>