<?php
    include './constantes.php';
    include './lib.php';
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilo.css?v=<?= time()?>" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php if(isset($_SESSION['USR'])) { ?>
        <div id="menu">
            <ul class="nav">
        
        <li><a href=""> inicio</a></li>
        
        <li><a href=""> CONSULTAS</a>
            <ul>
            <li><a href="formularios/consulta/agendarConsulta.php">Agendar Consulta</a></li>
            <li><a href="formularios/consulta/listarConsulta.php">Listar Consultas</a></li>
            <li><a href="formularios/consulta/estadoConsulta.php">Modificar Estado de Consulta</a></li>
            </ul>   
            
            <li><a href=""> MEDICOS</a>
            <ul>
            <li><a href="formularios/medico/agregarMedico.php">Contratar Medico</a></li>
            <li><a href="formularios/medico/eliminarMedico.php">Despedir Medicos</a></li>
            <li><a href="formularios/medico/listarMedico.php">Listar Medicos</a></li>
            </ul>   
                
         <li><a href=""> PACIENTE</a>
            <ul>
             <li><a href="formularios/paciente/agregarPaciente.php">Agregar Pacientes</a></li>
             <li><a href="formularios/paciente/eliminarPaciente.php">Eliminar Pacientes</a></li>
             <li><a href="formularios/paciente/listarPaciente.php">Ingresar Pacientes</a></li>
            </ul>                 
                    
         <li><a href=""> USUARIOS</a>
            <ul>
            <li><a href="formularios/usuario/agregarUsuario.php">Agregar Usuario</a></li>
            <li><a href="formularios/usuario/eliminarUsuario.php">Eliminar Usuarios</a></li>
            <li><a href="formularios/usuario/listarUsuario.php">Listar Usuarios</a></li>
            </ul>    
            </ul>
         
        </div>
        <div align="right"><button><a id="cancelar" href="lib/CerrarSesion.php">Cerrar Sesion</a></button></div>
            
        <?php } ?>
            <?php if (!isset($_SESSION['USR'])) { ?>
            <div id="login">
                </head>
                <body>
                    <div>
                        <img src="img/cruz.png"> 
                    </div>
                    <p>HOSPITAL TETENGO </p>      
                </body> 
    </html>
    <form action="lib/Login.php" method="POST">
        <div id="general"> <h1>Sistema de Ingreso </h1>
            <input type="text" placeholder="Usuario"  name="usuario">
            <input type="password" placeholder="Contraseña" name="contrasena">
            <input type="submit" value="Ingresar">
            </form>
        </div>

        <?php
    }
    ?>
    </body>
</html>