<?php

     $miconn = new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
                if ($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        
                
        $sql="SELECT * FROM paciente";
        
         $resultado = $miconn->query($sql);
         
         echo $resultado->num_rows;
         
         ?>
<form action="consulta.php" method="post">
<?php
         while($fila = $resultado->fetch_assoc()){
             $rutPaciente=$fila["rutPaciente"];
            echo "<input type=radio name='rutPaciente' value=$rutPaciente>";
            echo $rutPaciente."/".$fila["nombre"]."\n";
            echo "<br>";
         }
     ?>
    <input type="submit" value="Consultar">
</form>