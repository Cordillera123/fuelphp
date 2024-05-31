<h2>Editing <span class='muted'>Vehiculo</span></h2>
<br>

<?php echo render('vehiculos/_form'); ?>
<p>
	<?php echo Html::anchor('vehiculos/view/'.$vehiculo->id, 'View'); ?> |
	<?php echo Html::anchor('vehiculos', 'Back'); ?></p>
