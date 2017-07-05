<?php

class Paciente{
    private $rutPaciente;
    private $nomPaciente;
    private $fechaNacimiento;
    private $sexo;
    private $direccion;
    private $telefono;
    
    function __construct($rutP=NULL,$nomP=NULL,$fechaN=NULL,$sexo=NULL,$dir=NULL,$fono=NULL) {
        $this->rutPaciente=$rutP;
        $this->nomPaciente=$nomP;
        $this->fechaNacimiento=$fechaN;
        $this->sexo=$sexo;
        $this->direccion=$dir;
        $this->telefono=$fono;
    }
    
    function RutPaciente(){
        return $this->rutPaciente;
    }
    
    function NombrePac(){
        return $this->nomPaciente;
    }
    
    function FechaNac(){
        return $this->fechaNacimiento;
    }
    
    function Sexo(){
        return $this->sexo;
    }
    
    function Direccion(){
        return $this->direccion;
    }
    
    function Telefono(){
        return $this->telefono;
    }
    
}
