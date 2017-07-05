<?php

class Atencion{
    var $numAtencion;
    var $fechaHr;
    var $pacienteAtendido;
    var $medicoTratante;
    var $estado;
    var $rangoFechas;
    var $meses;
    var $especialidad;

    function __construct($num=NULL,$fh=NULL,$pacA=NULL,$medT=NULL,$estado=NULL,$rango=NULL,$esp=NULL,$meses=NULL) {
        $this->numAtencion=$num;
        $this->fechaHr=$fh;
        $this->pacienteAtendido=$pacA;
        $this->medicoTratante=$medT;
        $this->estado=$estado;
        $this->rangoFechas=$rango;
        $this->meses=$meses;
        $this->especialidad=$esp;
    }
    
    function IdAtencion(){
        return $this->numAtencion;
    }
    
    function FechaHr(){
        return $this->fechaHr;
    }
    
    function PacienteAtendido(){
        return $this->pacienteAtendido;
    }
    
    function MedicoTratante(){
        return $this->medicoTratante;
    }
    
    function Estado(){
        return $this->estado;
    }
    
    function RangoFechas(){
        return $this->rangoFechas;
    }
    
    function Meses(){
        return $this->meses;
    }
            
    function Especialidad(){
        return $this->especialidad;
    }  
}


