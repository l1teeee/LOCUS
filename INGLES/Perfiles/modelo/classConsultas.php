<?php

    class consultas{
        
        public function insertar($nombreUsu, $nombre, $email, $pass, $tipo){
            $db = new Conexion();
            $dbh = $db->getConexion();
            
            //$hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nombreUsu, nombre, email, pass, tipo) VALUES (:nombreUsu, :nombre, :email, :pass, :tipo)";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->execute();
            return '<script>alert("Registros ingresados...")</script>';
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        }

        public function mostrar(){
            $rows = null;
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "SELECT * FROM usuarios WHERE tipo = 'user'";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
            while ($result = $stmt->fetch()){
                $rows[]=$result;
            }
            return $rows;
        }

            public function mostrarD($usu){
            $rows = null;
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "SELECT * FROM usuarios WHERE nombreUsu = :usuario";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':usuario', $usu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
            while ($result = $stmt->fetch()){
                $rows[]=$result;
            }
            return $rows;
        }

        public function mostrarMods(){
            $rows = null;
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "SELECT * FROM usuarios WHERE tipo='mod'";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
            while ($result = $stmt->fetch()){
                $rows[]=$result;
            }
            
            if($stmt->rowCount()){
                return $rows;
            }else{
                return false;
            }
        }

        public function eliminar($nombreUsu){
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "DELETE FROM usuarios WHERE nombreUsu = :nombreUsu";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        return 'Usuario eliminado correctamente.';
        }

        public function buscar($nombreUsu){
            $rows = null;
            $db = new Conexion();
            $dbh = $db->getConexion();
            $usu = "%".$nombreUsu."%";
            $sql = "SELECT * FROM usuarios WHERE nombreUsu LIKE :nombreUsu";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombreUsu', $usu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
            while ($result = $stmt->fetch()){
                $rows[]=$result;
            }
            return $rows;
        }

        public function cargarUsu($nombreUsu){
            $rows = null;
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "SELECT * FROM usuarios WHERE nombreUsu = :nombreUsu";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->execute();
            }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
            while ($result = $stmt->fetch()){
                $rows[]=$result;
            }
            return $rows;
        }

        public function modificar($campo, $valor, $nombreUsu){
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "UPDATE usuarios SET $campo = :valor WHERE nombreUsu = :nombreUsu";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
            return 'Usuario modificado correctamente, vuelve a iniciar sesión...';
        }

        public function modificarL($valor, $nombreUsu){
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "UPDATE tbl_documentos SET usuario = :valor WHERE usuario = :nombreUsu";
            try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        }

        public function insertarFoto($img, $foto, $nombreUsu){
            $db = new Conexion();
            $dbh = $db->getConexion();
            $sql = "UPDATE usuarios SET $img = :imagen WHERE nombreUsu = :nombreUsu";
            try {
                $stmt = $dbh->prepare($sql);
                $stmt->bindparam(':imagen', $foto, PDO::PARAM_LOB);
                $stmt->bindparam(':nombreUsu', $nombreUsu);
                $stmt->execute();
            } catch (PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
            }
            return 'Se ingreso esa onda';
        }

        public function userName($user){
        $db = new Conexion();
        $dbh = $db->getConexion();
        $sql = "SELECT * FROM usuarios WHERE nombreUsu = :user";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':user', $user);
        $stmt->execute();
        
        if($stmt->rowCount()){
            return true;
        }else{
            return false;
        }   
}

    public function userEmail($email){
        $db = new Conexion();
        $dbh = $db->getConexion();
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if($stmt->rowCount()){
            return true;
        }else{
            return false;
        }   
    }

    // public function listadoMods(){
    //     $db = new Conexion();
    //     $dbh = $db->getConexion();
    //     $sql = "SELECT * FROM usuarios WHERE tipo='mod'";
    //     $stmt = $dbh->prepare($sql);
    //     $stmt = execute();
    // }

    public function updateMod($nombreUsu){
        $db = new Conexion();
        $dbh = $db->getConexion();
        $sql = "UPDATE usuarios SET tipo='mod' WHERE nombreUsu=:nombreUsu";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        return 'Permisos actualizados correctamente.';
    }

    public function RevocarMod($nombreUsu){
        $db = new Conexion();
        $dbh = $db->getConexion();
        $sql = "UPDATE usuarios SET tipo='user' WHERE nombreUsu=:nombreUsu";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':nombreUsu', $nombreUsu);
            $stmt->execute();
            }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        return 'Permisos actualizados correctamente.';
    }

    public function rol($user){
        $sql = "SELECT * FROM usuarios where nombreUsu= :usu";
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':usu', $user);
        $stmt->execute();
        $rol = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rol; 
    }

    }//fin clase



?>