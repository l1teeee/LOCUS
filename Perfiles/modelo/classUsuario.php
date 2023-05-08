<?php

include_once 'classConexion.php';

class user{
    private $nombre;
    private $nombreUsu;
    public $data;

    public function pass($user){
        $db = new Conexion();
        $dbh = $db->getConexion();
        $sql = "SELECT pass FROM usuarios WHERE nombreUsu = :user";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':user', $user);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function userExists($user, $pass){
        $db = new Conexion();
        $dbh = $db->getConexion();
        //$hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
        $sql = "SELECT * FROM usuarios WHERE nombreUsu = :user AND pass = :pass";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        
        if($stmt->rowCount()){
            return true;
        }else{
            return false;
        }   
    }

    // public function setUser($user){
    //     $db = new Conexion();
    //     $dbh = $db->getConexion();
    //     $sql = "SELECT * FROM usuarios WHERE nombreUsu = :user";
    //     $stmt = $dbh->prepare($sql);
    //     $stmt->bindParam(':user', $user);
    //     $stmt->execute();

    //     foreach($stmt as $usuario){
    //         $this->nombre = $usuario['nombre'];
    //         $this->nombreUsu = $usuario['nombreUsu'];
    //     }
    // }

    // public function getUsu(){
    //     return $this->nombreUsu;
    // }
}

?>