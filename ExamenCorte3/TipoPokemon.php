<?php

require_once 'pokemon.php';
//clase pokemo deportivo
class SportsPokemons extends pokemon {
    //atributos
    private $FreCar;
    private $Npatas;
    private $Tamaño;
    private $velocidadTierra=0;

    //metodos
    public function __construct($Nombre, $Peso, $Npatas, $Tamaño, $FreCar){
        parent::__construct($Nombre,$Peso);
        $this->Npatas=$Npatas;
        $this->Tamaño=$Tamaño;
        $this->FreCar=$FreCar;
    }
    //setters
    public function SetNpatas($NuevoNpatas) {
        $this->Npatas = $NuevoNpatas;
    }

    public function SetTamaño($NuevoTamaño) {
        $this->Tamaño = $NuevoTamaño;
    }
    public function SetFreCar($NuevoFreCar) {
        $this->FreCar = $NuevoFreCar;
    }
    //getters
    public function GetNpatas(){
        return $this->Npatas;
    }
    public function GetTamaño(){
        return $this->Tamaño;
    }
    public function GetFreCar(){
        return $this->FreCar;
    }
    //metodo velocidad
public function Velocidad(){
    return $this->GetNpatas() * $this->GetTamaño() * 3;
}
    //metodo toString
    public function ToString(){
        return "Nombre: ".$this->GetNombre()."\n".
               "Peso: ".$this->GetPeso()."\n".
               "Numero de patas: ".$this->GetNpatas()."\n".
               "Tamaño: ".$this->GetTamaño()."\n".
               "Frecuencioa cardiaca: ".$this->GetFreCar()."\n".
                "Velocidad: ".$this->Velocidad()."\n";
    }
}
class HomePokemons extends pokemon {
    //atributos
    private $Npatas;
    private $Tamaño;
    private $HorasTele;
    private $velocidadTierra=0;
    //constructor
    public function __construct($Nombre, $Peso, $Npatas, $Tamaño, $HorasTele){
        parent::__construct($Nombre,$Peso);
        $this ->Npatas=$Npatas;
        $this->Tamaño=$Tamaño;
        $this->HorasTele=$HorasTele;
    }
    //metodos
    //setters
    public function SetNpatas($NuevoNpatas) {
        $this->Npatas = $NuevoNpatas;
    }
    public function SetTamaño($NuevoTamaño) {
        $this->Tamaño = $NuevoTamaño;
    }
    public function SetHorasTele($NuevoHorasTele) {
        $this->HorasTele = $NuevoHorasTele;
    }
    public function GetNpatas(){
        return $this->Npatas;
    }
    //getters
    public function GetTamaño(){
        return $this->Tamaño;
    }
    public function GetHorasTele(){
        return $this->HorasTele;
    }
    //metodo velocidad
    public function Velocidad(){
        return $velocidadTierra=$this->GetNpatas()*$this->GetTamaño()*3;
    }
    //metodo toString
    public function ToString(){
        return "Nombre: ".$this->GetNombre()."\n".
               "Peso: ".$this->GetPeso()."\n".
               "Numero de patas: ".$this->GetNpatas()."\n".
               "Tamaño: ".$this->GetTamaño()."\n".
               "Horas en la Tele: ".$this->GetHorasTele()."\n".
                "Velocidad: ".$this->Velocidad()."\n";
    }
}
//clase pokemon mar
class SeaPokemons extends pokemon {
    //atributos
    private $Naletas;
    private $velocidadMar=0;

    //constructor
    public function __construct($Nombre, $Peso, $Naletas){
        parent::__construct($Nombre,$Peso);
        $this ->Naletas=$Naletas;
    }
    //metodos
    //setters
    public function SetNaletas($NuevoNaletas) {
        $this->Naletas = $NuevoNaletas;
    }
    //getters
    public function GetNaletas(){
        return $this->Naletas;
    }
    //metodo velocidad
    public function Velocidad(){
return $velocidadMar=($this->GetPeso()/25)*$this->GetNaletas();
    }
    public function ToString(){
        return "Nombre: ".$this->GetNombre()."\n".
               "Peso: ".$this->GetPeso()."\n".
               "Numero de aletas: ".$this->GetNaletas()."\n".
               "Velocidad: ".$this->Velocidad()."\n";
    }
}
//clase pokemon crucero
class CruisePokemons extends pokemon {
    //atributos
    private $Naletas;
    private $velocidadMar=0;
    //constructor
    public function __construct($Nombre, $Peso, $Naletas){
        parent::__construct($Nombre,$Peso);
        $this ->Naletas=$Naletas;
    }
   //metodos
    //setters
    public function SetNaletas($NuevoNaletas) {
        $this->Naletas = $NuevoNaletas;
    }
    //getters
    public function GetNaletas(){
        return $this->Naletas;
    }
    //metodo velocidad
    public function Velocidad(){
        return $velocidadMar=($this->GetPeso()/25)*($this->GetNaletas()/2);
    }
    //metodo toString
    public function ToString(){
        return "Nombre: ".$this->GetNombre()."\n".
               "Peso: ".$this->GetPeso()."\n".
               "Numero de aletas: ".$this->GetNaletas()."\n".
               "Velocidad: ".$this->Velocidad()."\n";
    }
}


?>