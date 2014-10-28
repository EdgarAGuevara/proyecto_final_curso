@extends('layouts.master')

@section('title') 
	Agenda - Inicio de Sesión 
@stop

@section('header')
	@parent
	<h2>Bienvenido</h2>
@stop

@section('header_title') 
	Inicio de Sesión 
@stop

@section('content')
	{{Form::open(array('method' => 'POST', 'route' => 'auth'))}}
	<fieldset>
		@if(isset($error) && ! empty($error))
			<legend>{{$error}}</legend>
		@endif
		<fieldset>
			{{Form::label('email', 'Email: ')}}
			{{Form::email('email', Input::old('email'))}}
		</fieldset>
		<fieldset>
			{{Form::label('password', 'Contraseña: ')}}
			{{Form::password('password')}}
		</fieldset>
		<fieldset>
			{{Form::submit('Iniciar sesión')}}
		</fieldset>
	</fieldset>
	{{Form::close()}}
	<a href="{{ route('usuarios.create') }}">Crear un usuario nuevo</a>
@stop