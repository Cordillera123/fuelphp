<h2>Viewing <span class='muted'>#<?php echo $vehiculo->id; ?></span></h2>

<p><strong>Marca:</strong> <?php echo $vehiculo->marca; ?></p>
<p><strong>Modelo:</strong> <?php echo $vehiculo->modelo; ?></p>
<p><strong>Año:</strong> <?php echo $vehiculo->anio; ?></p>
<p><strong>Precio:</strong> <?php echo $vehiculo->precio; ?></p>

<p>
	<?php echo Html::anchor('vehiculos/edit/'.$vehiculo->id, 'Edit'); ?> |
	<?php echo Html::anchor('vehiculos', 'Back'); ?>
</p>
