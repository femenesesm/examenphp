<?php
         $miconn = new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
                if ($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        $rutPaciente = $_POST['rutPaciente'];
        $nombrePac = $_POST['nombre'];
        $infoconexion=$miconn->client_info;
        
        
                
        $sql="INSERT INTO paciente(nombre,apellido,host) VALUES ('$rutPaciente','$nombre');";
        
        /*$sqlip="select host from information_schema.processlist WHERE ID=connection_id();";
        $resultado = $miconn->query($sqlip);*/
        
         /* Consultas de selección que devuelven un conjunto de resultados */
        if ($resultado = $miconn->query($sql)) {
            /* liberar el conjunto de resultados */
            $miconn->close();
        }
        