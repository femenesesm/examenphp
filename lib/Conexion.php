<?php
//include 'Producto';
class conexion{
    
private function Conexion(){
     $miconn = new mysqli("localhost", "root", "avaras08", "atencionpaciente");
     if ($miconn->connect_errno) {
        return "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
     }
     return $miconn;  
}
    public function Lista(){
        $sql="SELECT * FROM Atencion";
        /*Uso del metodo conexión*/
        $resultado = $this->Conexion()->query($sql);
        /*Obtención de los elementos*/
        $i=0;
        while($fila = $resultado->fetch_assoc()){
          $Atencion= new Producto($fila["numAtencion"],$fila["fechaHr"],$fila["pacienteAtendido"],$fila["medicoTratante"],$fila["estado"],$fila["rangoFechas"],$fila["meses"],$fila["especialidad"]);
          $Atencion[$i]=$Atencion;
         }
         
         /*Se devuelve "retorna el arreglo de productos"*/
        return $Atencion;
    }
    
    
}
