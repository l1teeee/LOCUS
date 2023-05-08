<?php
    class Conexion{
        public function getConexion(){ 
            $host = "localhost";
            $bdd = "LOCUS";
            $user = "Locus";
            $pass = "fonsProyec21!";
            try{
                $dsn = "mysql:host=$host;dbname=$bdd";
                $dbh = new PDO($dsn,$user,$pass);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $dbh;
        }catch(PDOException  $e){
            echo "Fallo de conexión: " . $e->getMessage();
        }
        }
    }
?>