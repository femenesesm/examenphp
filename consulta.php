<?php
$rutPaciente=$_POST["rutPaciente"];

     $miconn = new mysqli("10.20.25.214", "root", "avaras08", "atencionPaciente");
                if ($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        
                
        $sql="SELECT * FROM persona WHERE rutPaciente=$rutPaciente";
        
         $resultado = $miconn->query($sql);
         
         ?>
<?php
         while($fila = $resultado->fetch_assoc()){
            echo $fila["rutPaciente"]."\n";
            echo "<br>\n";
            echo $fila["nombrePac"]."\n";
            echo "<br>\n";
         }
     ?>