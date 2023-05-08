<?php

    class Like{
       public $megusta;
       public $usuario;
       public $id_libro;


     
        public function __construct($like, $usu, $idL){

            if(!empty($like))
                $this->megusta = $like;
            else
                throw new Exception('Error. no hay likexd'); 
            if(!empty($usu))
                $this->usuario = $usu;
            else
                throw new Exception('Error. no hay Usuario'); 
            if(!empty($idL))
                $this->id_libro = $idL;
            else
                throw new Exception('Error. no hay id de Libro');  
        }

    }	

    
?>