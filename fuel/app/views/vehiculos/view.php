<h2>Viewing <span class='muted'>#<?php echo $vehiculo->id; ?></span></h2>


<?php echo Html::anchor('vehiculos/edit/'.$vehiculo->id, 'Edit'); ?> |
<?php echo Html::anchor('vehiculos', 'Back'); ?>