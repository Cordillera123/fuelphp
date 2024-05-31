<?php
use Orm\Model;

class Model_Vehiculo extends Model
{
	protected static $_properties = array(
		'id',
		'marca',
		'modelo',
		'anio',
		'precio',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);

		// Add validation rules for each field
		$val->add_field('marca', 'Marca', 'required|max_length[255]');
		$val->add_field('modelo', 'Modelo', 'required|max_length[255]');
		$val->add_field('anio', 'Año', 'required|valid_string[numeric]|exact_length[4]');
		$val->add_field('precio', 'Precio', 'required|valid_string[numeric]');

		return $val;
	}

}
