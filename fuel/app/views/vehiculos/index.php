<h2>Listing <span class='muted'>Vehiculos</span></h2>
<br>

<?php if ($vehiculos): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Año</th>
			<th>Precio</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($vehiculos as $item): ?>		<tr>
			<td><?php echo $item->marca; ?></td>
			<td><?php echo $item->modelo; ?></td>
			<td><?php echo $item->anio; ?></td>
			<td><?php echo $item->precio; ?></td>
			<td>
				<?php echo Html::anchor('vehiculos/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>
				<?php echo Html::anchor('vehiculos/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>
				<?php echo Html::anchor('vehiculos/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Vehiculos.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('vehiculos/create', 'Add new Vehiculo', array('class' => 'btn btn-success')); ?>
</p>
