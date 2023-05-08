<?php
    require_once 'classConexion.php'; 
    class DaoLike{
        public function likes($like){
            if (isset($_GET['n'])){
                if($_GET['n'] == "si"){ 
                    $cn = new Conexion();        
                    $dbh = $cn->getConexion();
                    $sql = " INSERT INTO likes (likes, nombre_usua, id_libroo) VALUE (:megusta + 1, :usuario, :id_libro)";
                    try{
                        $stmt = $dbh->prepare($sql);
                        $stmt->execute((array) $like);
                    }catch(PDOException $e){
                        echo "Error: " . $e->getMessage();
                    }
                    
                }
            }  
        }

        public function likesNo($id, $usu){
            if (isset($_GET['n'])){
                if($_GET['n'] == "nou"){ 
                    $sql = "DELETE FROM likes WHERE id_libroo =:id_like AND nombre_usua=:usu";
                    $cn = new Conexion();
                    $dbh = $cn->getConexion();
                    $stmt = $dbh->prepare($sql);
                    $stmt->bindParam(':id_like',$id);
                    $stmt->bindParam(':usu',$usu);
                    $stmt->execute();
                    
                }
            }  
        }

        public function mostrarLikes($id){
            $sql = "SELECT * FROM likes WHERE id_libroo=:id_like";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id_like',$id);
            $stmt->execute();
            $like=$stmt->rowCount();
            return $like;
        }

        public function validacion($id, $usu){
            $sql = "SELECT * FROM likes WHERE id_libroo=:id_like AND nombre_usua=:usu";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id_like',$id);
            $stmt->bindParam(':usu',$usu);
            $stmt->execute();
            $vali=$stmt->rowCount();
            return $vali;
        }

        public function actualizarLike($id, $canti){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "UPDATE tbl_documentos SET megusta=:cantidad WHERE id=:id";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':id',$id);
                $stmt->bindParam(':cantidad',$canti);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        } 

        public function actualizarLikeNo($id, $cantiNo){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "UPDATE tbl_documentos SET megusta=:cantidad WHERE id=:id";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':id',$id);
                $stmt->bindParam(':cantidad',$cantiNo);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        } 

        
 
    }

?> 