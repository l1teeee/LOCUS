<?php

    class Libro{
       public $titulo;
       public $descri; 
       public $categoria; 
       public $portada; 
       public $fecha;
       public $archivo;
       public $estado;
       public $usuario;
       public $dinero; 
    
        public function __construct($titu, $descrip, $cate, $porta, $fech, $arch, $est, $usu, $money){

            if(!empty($titu))
                $this->titulo = $titu;
            else
                throw new Exception('Error. Titulo vacio');
            if (!empty($descrip))
                $this->descri = $descrip;
            else
                throw new Exception('Error. Descripción vacia');
            if(!empty($cate))
                $this->categoria = $cate;
            else
                throw new Exception('Error. Categoria vacia');
            if(!empty($porta))
                $this->portada = $porta;
            else
                throw new Exception('Error. Portada vacia');
            if(!empty($arch))
                $this->archivo = $arch;
            else
                throw new Exception('Error. Archivo vacio');
            if(!empty($fech))
                $this->fecha = $fech;
            else
                throw new Exception('Error. Fecha vacia');
            if(!empty($est))
                $this->estado = $est;
            else
                throw new Exception('Error. Fecha vacia');
            if(!empty($usu))
                $this->usuario = $usu;
            else
                throw new Exception('Error. No hay usuario');
            if(!empty($money))
                $this->dinero = $money;
            else
                throw new Exception('Error. No hay usuario');
           
        }

        public function getTitulo(){
            return $this->titulo; 
        }

        public function getDecri(){
            return $this->descri;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function getPortada(){
            return $this->portada;
        }

        public function geFecha(){
            return $this->descri;
        }

        public function getArchivo(){
            return $this->archivo;
        }

    }	

    
?>