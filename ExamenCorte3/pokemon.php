<?php

abstract class pokemon{
    //atributos
    private $Nombre;
    private $Peso;
    //constructor
    public function __construct($Nombre,$Peso){
        $this ->Nombre=$Nombre;
        $this ->Peso=$Peso;
    }
    //metodos
    public function SetNombre($NuevonNombre){
        $this->Nombre=$NuevoNombre;
    }
    public function SetPeso($NuevoPeso) {
        $this->Peso = $NuevoPeso;
    }
    public function GetNombre(){
        return $this->Nombre;
    }
    public function GetPeso(){
        return $this->Peso;
    }
}

?>