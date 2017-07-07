<?php
$oPAciente=new Paciente();
?>
<form method="post" action="accform/accPacienteEliminar.php">
<?php
While($Registro=$oPaciente->Selecciona()){
	?>
<input type="checkbox" name=elimina<?=$Registro->rutPaciente()?> value="<?=$Registro->rutPaciente()?>">
<?=$Registro->RutPaciente()?>/<?=$Registro->Ano()?>
<br>
<?php
}
?>
<input type="submit" value="Eliminar">
</form>