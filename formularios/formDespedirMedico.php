<?php
$oMedico=new Medico();
?>
<form method="post" action="accform/accMedicoEliminar.php">
<?php
While($Registro=$oMedico->Selecciona()){
	?>
<input type="checkbox" name=elimina<?=$Registro->rutMedico()?> value="<?=$Registro->rutMedico()?>">
<?=$Registro->RutMedico()?>/<?=$Registro->Ano()?>
<br>
<?php
}
?>
<input type="submit" value="Eliminar">
</form>