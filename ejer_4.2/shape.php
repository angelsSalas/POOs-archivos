<?php
//clase base shape
class shape {
    public $nombre;
    public $color;

    public function __construct($nombre, $color) {
        $this->nombre = $nombre;
        $this->color = $color;

    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $this->color = $color;
    }

}
//segundo nivel de herencia
//clase twodimensional

class TwoDimensionalShape extends shape {
    public $area;
    public function __construct($area) {
        $this->area = $area;
    }
    public function getArea() {
        return $this->area;
    }
    public function setArea($area) {
        $this->area = $area;
    }
}
//tercer nivel de herencia
//clase circle
class Circle extends TwoDimensionalShape {
    public $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }
    public function setRadio($radio) {
        $this->radio = $radio;
    }
}
//clase square
class Square extends TwoDimensionalShape {
    public $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function getLado() {
        return $this->lado;
    }
    public function setLado($lado) {
        $this->lado = $lado;
    }
}
//clase triangle
class Triangle extends TwoDimensionalShape {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getBase() {
        return $this->base;
    }
    public function setBase($base) {
        $this->base = $base;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }
}
//clase threedimensional
class ThreeDimensionalShape extends shape {
    public $volumen;


    public function __construct($volumen) {
        $this->volumen = $volumen;
    }
    public function getVolumen() {
        return $this->volumen;
    }
    public function setVolumen($volumen) {
        $this->volumen = $volumen;
    }
}
//tercer nivel de herencia
//clase sphere
class Sphere extends ThreeDimensionalShape {
    public $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }
    public function setRadio($radio) {
        $this->radio = $radio;
    }
}
    
//clase cube
class Cube extends ThreeDimensionalShape {
    public $lado;

    public function __construct($lado) {

        $this->lado = $lado;
    }

    public function getLado() {
        return $this->lado;
    }
    public function setLado($lado) {
        $this->lado = $lado;
    }
}
//clase pyramid
class Pyramid extends ThreeDimensionalShape {

    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getBase() {
        return $this->base;
    }
    public function setBase($base) {
        $this->base = $base;
    }

    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }
}