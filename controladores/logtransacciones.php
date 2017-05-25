<?php

class logtransacciones{
    var $nomtabla = "";
    var $accion = "";
    var $descripcion = "";
    
    
    public function __construct($nomtabla = "", $accion = '', $descripcion = "") {
        $this -> nomtabla = $nomtabla;
        $this -> accion = $accion;
        $this -> descripcion = $descripcion;
    }
    
}



