<?php

class Medico{
    private $rutMedico;
    private $nomMedico;
    private $fechaContratacion;
    private $especialidad;
    private $valorConsulta;
    
    function __construct($rutM=NULL,$nomM=NULL,$fechaC=NULL,$esp=NULL,$valorC=NULL) {
        $this->rutMedico=$rutM;
        $this->nomMedico=$nomM;
        $this->fechaContratacion=$fechaC;
        $this->especialidad=$esp;
        $this->valorConsulta=$valorC;
    }
    
    function RutMedico(){
        return $this->rutMedico;
    }
    
    function NombreMed(){
        return $this->nomMedico;
    }
    
    function FechaCont(){
        return $this->fechaContratacion;
    }
    
    function Especialidad(){
        return $this->especialidad;
    }
    
    function ValorConsulta(){
        return $this->valorConsulta;
    }
    
}

