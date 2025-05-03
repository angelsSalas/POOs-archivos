<?php
//clase base para los miembros de la comunidad
class communityMembers
{
  private $name;
  private $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }
  public function getName()
  {
    return $this->name;
  }
    public function setName($name)
    {
        $this->name = $name;
    }
  public function getEmail()
  {
    return $this->email;
   }
    public function setEmail($email)
    {
        $this->email = $email;
    }
  public function __toString()
    {
        return "Nombre: " . $this->name . "\n" . "Email: " . $this->email . "\n";
    }
}
//primer nivel de herencia
//clase para los empleados de la comunidad
class communityEmployees extends communityMembers
{
  private $idtrabajo;
  private $sueldo;

    public function __construct($name, $email, $idtrabajo, $sueldo)
    {
        parent::__construct($name, $email);
        $this->idtrabajo = $idtrabajo;
        $this->sueldo = $sueldo;
    }
    public function getIdtrabajo()
    {
        return $this->idtrabajo;
    }
    public function setIdtrabajo($idtrabajo)
    {
        $this->idtrabajo = $idtrabajo;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }   
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    public function __toString()
    {
        return parent::__toString() . "ID Trabajo: " . $this->idtrabajo . "\n" . "Sueldo: " . $this->sueldo . "\n";
    }
}

//clase para los estudiantes de la comunidad
class student extends communityMembers
{
  private $idestudiante;
  private $carrera;

    public function __construct($name, $email, $idestudiante, $carrera)
    {
        parent::__construct($name, $email);
        $this->idestudiante = $idestudiante;
        $this->carrera = $carrera;
    }
    public function getIdestudiante()
    {
        return $this->idestudiante;
    }
    public function setIdestudiante($idestudiante)
    {
        $this->idestudiante = $idestudiante;
    }
    public function getCarrera()
    {
        return $this->carrera;
    }   
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    }
    public function __toString()
    {
        return parent::__toString() . "ID Estudiante: " . $this->idestudiante . "\n" . "Carrera: " . $this->carrera . "\n";
    }
}
//clase para los alumnos de la comunidad
class alumnus extends communityMembers
{
    private $añoingreso;
    private $añoegreso;

    public function __construct($name, $email, $añoingreso, $añoegreso)
    {
        parent::__construct($name, $email);
        $this->añoingreso = $añoingreso;
        $this->añoegreso = $añoegreso;
    }
    public function getAñoingreso()
    {
        return $this->añoingreso;
    }
    public function setAñoingreso($añoingreso)
    {
        $this->añoingreso = $añoingreso;
    }
    public function getAñoegreso()
    {
        return $this->añoegreso;
    }
    public function setAñoegreso($añoegreso)
    {
        $this->añoegreso = $añoegreso;
    }
    public function __toString()
    {
        return parent::__toString() . "Año Ingreso: " . $this->añoingreso . "\n" . "Año Egreso: " . $this->añoegreso . "\n";
    }

}
//segundo nivel de herencia
//clase para los miembros de la facultad
class faculty extends communityEmployees
{
    private $facultad;
    private $departamento;

    public function __construct($name, $email, $idtrabajo, $sueldo, $facultad, $departamento)
    {
        parent::__construct($name, $email, $idtrabajo, $sueldo);
        $this->facultad = $facultad;
        $this->departamento = $departamento;
    }
    public function getFacultad()
    {
        return $this->facultad;
    }
    public function setFacultad($facultad)
    {
        $this->facultad = $facultad;
    }
    public function getDepartamento()
    {
        return $this->departamento;
    }   
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
    public function __toString()
    {
        return parent::__toString() . "Facultad: " . $this->facultad . "\n" . "Departamento: " . $this->departamento . "\n";
    }
}
//clase para el staff de los empleados de la comunidad
class staff extends communityEmployees
{
    private $puesto;

    public function __construct($name, $email, $idtrabajo, $sueldo, $puesto)
    {
        parent::__construct($name, $email, $idtrabajo, $sueldo);
  
        $this->puesto = $puesto;
    }

    public function getPuesto()
    {
        return $this->puesto;
    }   
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }
    public function __toString()
    {
        return parent::__toString() ."Puesto: " . $this->puesto . "\n";
    }
}
//tercer nivel de herencia
class administrator extends faculty
{
    private $area;

    public function __construct($name, $email, $idtrabajo, $sueldo, $facultad, $departamento, $area)
    {
        parent::__construct($name, $email, $idtrabajo, $sueldo, $facultad, $departamento);
        $this->area = $area;
    }
    public function getArea()
    {
        return $this->area;
    }   
    public function setArea($area)
    {
        $this->area = $area;
    }
    public function __toString()
    {
        return parent::__toString() . "Area: " . $this->area . "\n";
    }
}
//clase para los profesores de la comunidad
class professor extends faculty
{
    private $materia;

    public function __construct($name, $email, $idtrabajo, $sueldo, $facultad, $departamento, $materia)
    {
        parent::__construct($name, $email, $idtrabajo, $sueldo, $facultad, $departamento);
        $this->materia = $materia;
    }
    public function getMateria()
    {
        return $this->materia;
    }   
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }
    public function __toString()
    {
        return parent::__toString() . "Materia: " . $this->materia . "\n";
    }
}