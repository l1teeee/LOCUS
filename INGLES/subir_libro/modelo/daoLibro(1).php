<?php
    require_once 'classConexion.php'; 

    class DaoLibro{
        public function insertar($libro){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO tbl_documentos (titulo, descripcion, categoria, portada, fecha_publicacion, nombre_archivo, estado, usuario, monetizacion)";
            $sql.= "VALUES (:titulo, :descri, :categoria, :portada, :fecha, :archivo, :estado, :usuario, :dinero)"; 
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->execute((array) $libro);
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

        public function listadoLibros(){
            $sql = "select id, titulo, descripcion, categoria, portada, fecha_publicacion, nombre_archivo from tbl_documentos where estado='Aprobado'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libros;
        }

        public function mostrarLibro(){
            $sql = "SELECT * FROM tbl_documentos WHERE id=':id'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function librosUsu($usu){
            $sql = "SELECT * FROM tbl_documentos WHERE usuario=:usuario";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':usuario', $usu);
            $stmt->execute();
            $libroUsu = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libroUsu;
        }

        public function archivos($id){
            $sql = "SELECT id, nombre_archivo, titulo, descripcion, portada, megusta FROM tbl_documentos WHERE id=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $archivos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $archivos;
        }

        public function eliminar($id){
            $sql = "DELETE FROM `tbl_documentos` WHERE id=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function modificarL($libro, $id){
            $cn = new Conexion();        
            $dbh = $cn->getConexion();
            $sql = "UPDATE tbl_documentos SET titulo=:titulo, descripcion=:descripcion WHERE id=:id";
            try{
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':titulo',$libro->titulo);
                $stmt->bindParam(':descripcion',$libro->descri);
                $stmt->bindParam(':id',$id);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        } 

        public function mostrarL($id){
            $sql = "select * from tbl_documentos where id=:id";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $libro = $stmt->fetch();
            return $libro;
        }

        public function destacados(){
            $sql = "SELECT * FROM tbl_documentos WHERE megusta ORDER BY megusta DESC LIMIT 3";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $destacados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $destacados;
        }

        //CATEGORIAS

        public function Laccion(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Acción'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function Laventura(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Aventura'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function Lsc(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Ciencia Ficción'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function LFantasia(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Fantasia'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function LInfantiles(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Infantiles'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function LRomance(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Romance'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }

        public function LTerror(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Aprobado' AND categoria='Terror'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libro;
        }


        //MODERADOR

        public function ListLibros_p(){
            $sql = "select id, titulo, descripcion, categoria, portada, fecha_publicacion, nombre_archivo from tbl_documentos where estado='Pendiente'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libros;
        }

        public function L_aproved(){ 
            $sql = "UPDATE tbl_documentos SET estado='Aprobado' WHERE id=".$_GET['id'];
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }

        public function L_rejected(){
            $sql = "DELETE FROM `tbl_documentos` WHERE id=".$_GET['id'];
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }

        public function conteo(){
            $sql = "SELECT * FROM tbl_documentos WHERE estado='Pendiente'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $cuenta=$stmt->rowCount();
            return $cuenta;
            // if($stmt->rowCount()){
            //     $stmt = $cont;
            //     return $cont;
            // } else {
                
            //     return $cont;
            // }
            // $conteo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // return $conteo;
        }
        
        //MONETIZACION
        public function L_money(){
            $sql = "select * from tbl_documentos where estado='Aprobado' AND monetizacion='Pendiente'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $libros;
        } 

        public function conteoMoney(){
            $sql = "SELECT * FROM tbl_documentos WHERE monetizacion='Pendiente'";
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $cuenta=$stmt->rowCount();
            return $cuenta;
         
        }
        
    }
?>