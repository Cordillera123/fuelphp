<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Marca', 'marca', array('class' => 'control-label')); ?>
			<?php echo Form::input('marca', isset($vehiculo) ? $vehiculo->marca : '', array('class' => 'form-control', 'placeholder' => 'Marca')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Modelo', 'modelo', array('class' => 'control-label')); ?>
			<?php echo Form::input('modelo', isset($vehiculo) ? $vehiculo->modelo : '', array('class' => 'form-control', 'placeholder' => 'Modelo')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Año', 'anio', array('class' => 'control-label')); ?>
			<?php echo Form::input('anio', isset($vehiculo) ? $vehiculo->anio : '', array('class' => 'form-control', 'placeholder' => 'Año')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Precio', 'precio', array('class' => 'control-label')); ?>
			<?php echo Form::input('precio', isset($vehiculo) ? $vehiculo->precio : '', array('class' => 'form-control', 'placeholder' => 'Precio')); ?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>

<?php echo Form::close(); ?>
