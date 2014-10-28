<?php

// use Illuminate\Auth\UserTrait;
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Telefono extends Ardent /*implements UserInterface, RemindableInterface*/ {
	
	protected $table = 'telefonos';
	protected $primaryKey = 'id';
	/**
	* Ardent validation rules
	*
	* @var array
	*/
	public static $rules = array(
	'contacto_id'	=> 'required',
	'label'	=> 'required',
	'num_tel'	=> 'required',
	);

	/*Este modelo recibe UN contacto osea el modelo "Contacto" */
	public function contacto()
	{
		return $this->belongsTo('Contacto','id');
	}
}