<?php

// use Illuminate\Auth\UserTrait;
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Contacto extends Ardent /*implements UserInterface, RemindableInterface*/ {
	
	// use UserTrait, RemindableTrait;
	
	protected $table = 'contactos';

	protected $primaryKey = 'id';
	/**
	* Ardent validation rules
	*
	* @var array
	*/

	public static $rules = array(
	'usuario_id'	=> 'required',
	'name'	=> 'required'
	// 'last_name'	=> '',
	// 'email'	=> '',
	// 'address'	=> '',
	);

	/*este modelo tiene muchos "telefonos" osea model "Telefono" */
	public function telefonos()
	{
		return $this->hasMany('Telefono');
	}

	/*Este modelo recibe UN "usuario" osea model "Usuario" */
	public function usuario()
	{
		return $this->belongsTo('Usuario');
	}
}