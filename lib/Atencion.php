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
    
    function Selecciona(){
		
		if (!$this->querysel){
		$db=dbconnect();
		//funcion que permite ingresar una nueva atencion
		
			$sqlsel="select numAtencion,fechaHrAten,pacienteAtendido,medicoTratante,estado,rangoFechas,meses,especialidad,Paciente_rutPaciente,Medico_rutMedico from atencion order by nombre";
		
			/*Preparación SQL*/
			$this->querysel=$db->prepare($sqlsel);
		
			$this->querysel->execute();
		}
		
		$registroAtencion = $this->querysel->fetch();
		if ($registroAtencion){
			return new self(
                                $registroAtencion['numAtencion'],
                                $registroAtencion['fechaHrAten'],
                                $registroAtencion['pacienteAtendido'],
                                $registroAtencion['medicoTratante'],
                                $registroAtencion['estado'],
                                $registroAtencion['rangoFechas'], 
                                $registroAtencion['meses'],
                                $registroAtencion['especialidad'],
                                $registroAtencion['Paciente_rutPaciente'],
                                $registroAtencion['Medico_rutMedico']);			
		}
		else {
			return false;
			
		}
	}
	
	function Elimina($numAtencion){
	
		$db=dbconnect();
		
			/*Definición del query que permitira eliminar una atencion*/
			$sqldel="delete from numAtencion where numAtencion=:id";
	
			/*Preparación SQL*/
			$querydel=$db->prepare($sqldel);
			
			$querydel->bindParam(':id',$id);
			
			$valaux=$querydel->execute();
	
		return $valaux;
	}
}


