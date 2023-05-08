<?php

    class Visita{
        public $ip;
        public $fecha_visi;
        public $id_libro;

        public function __construct($ipp, $fechaV, $idLi){
            if(!empty($ipp))
                $this->ip = $ipp;
            else
                throw new Exception('Error. no hay IP'); 
            if(!empty($idLi))
                $this->id_libro = $idLi;
            else
                throw new Exception('Error. no hay ID libro'); 
            if(!empty($fechaV))
                $this->fecha_visi = $fechaV;
            else
                throw new Exception('Error. no hay fecha');
        }
    }



?>