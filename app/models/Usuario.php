<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Usuario extends Ardent implements UserInterface, RemindableInterface {
	
	use UserTrait, RemindableTrait;
	
	protected $table = 'usuarios';
	protected $primaryKey = 'id';
	/**
	* Ardent validation rules
	*
	* @var array
	*/
	public static $rules = array(
	'name'	=> 'required',
	'username'	=> 'required|unique:usuarios,username',
	'email'	=> 'required|email|unique:usuarios,email',
	'password'	=> 'required|min:8|confirmed',
	'password_confirmation' => 'same:password'
	);
	
	/**
	* Ardent: purge redundant attributes
	*
	* @var boolean
	*/
	public $autoPurgeRedundantAttributes = true;
	public static $passwordAttributes = array('password');
	public $autoHashPasswordAttributes = true;

	public function contactos()
	{
		/*Nos retorna la relacon del nombre indicado al nombre del model indicado como parametros*/
		return $this->hasMany('Contacto');
	}
}