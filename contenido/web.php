<?php include('../lib/constantes.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
                    <div id="contenido">
                        <form action="../lib/Atencion.php.php" method="get">
                            <br>Rut: <input id="rut" name="rut" type="text">
                            <br>Numero de atencion: <input id="nombre" name="nombre" type="text">
                            <br>Fecha Hr:<input id="fechaini" name="fechaini" type="text">
                            <br>Medico Tratante: <input id="cargo" name="cargo" type="text">
                            <br>Estado: <input id="cargo" name="cargo" type="text">
                            <br>Rango Fecha: <input id="cargo" name="cargo" type="text">
                            <br>Meses: <input id="cargo" name="cargo" type="text">
                            <br>Especialidad: <input id="cargo" name="cargo" type="text">
                            <br>Comentario<textarea id="comentario" rows="7" cols=20>   </textarea>
                            <input type="submit" value="Enviar"  >                     
                        </form>
                    </div>
        </div>        
    </body>
</html>