<?php
class Perro {
    // Propiedades privadas
    private string $nombre; 
    private string $raza ; 
    

    // Constructor para inicializar las propiedades
    public function __construct(string $nombre, string $raza) {
        $this->nombre = $nombre;
        $this->raza = $raza;
    }
    //este meetodo muestra en normal el ladrido del perro
    public function ladrar() : string {
        return "Guau Guau";
    }
    //este metodo muestra en mayusculas el ladrido del perro
    public function ladrarMayus() : string {
        return strtoupper($this->ladrar());
    }
    //este metodo muestra en minusculas el ladrido del perro
    public function ladrarMinus() : string {
        return strtolower($this->ladrar());
    }
    //mostrar los datos de una manera que se entienda (nombre y raza)
    public function mostrarDatos() : string {
        return "Hola me llamo $this->nombre! y soy un $this->raza";
    }
    //getter para regresar los valores
    public function getNombre() : string {
        return $this->nombre;
    }
    public function getRaza() : string {
        return $this->raza;
    }
    //metodo para mostrar los datos de una manera entendible
    public function presentarse() : string {
        return $this->mostrarDatos() . "!";
    }
}