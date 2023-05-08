<?php
    class Comentario{
        public $comentario;
        public $id;
        public $fech;
        public $usuario;

        public function __construct($comen, $idd, $fechaa, $usu){
            if(!empty($comen))
                $this->comentario = $comen;
            else
                throw new Exception('Error. No hay comentario.');
            if(!empty($idd))
                $this->id = $idd;
            else
                throw new Exception('Error. No hay ID.');
            if(!empty($fechaa))
                $this->fech = $fechaa;
            else
                throw new Exception('Error. No hay fecha.');
            if(!empty($usu))
                $this->usuario = $usu;
            else
                throw new Exception('Error. No hay Usuario.');
        }
    }
?>