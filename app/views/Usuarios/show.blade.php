@extends('layouts.master')

@section('title')
	Agenda-  Usuario
@stop

@section('header_title')
	 Usuario {{$user->username}}
@stop

@section('content')
	<p><b>Nombre: </b> {{$user->name}}</p>
	<p><b>Nombre de Usuario: </b> {{$user->username}}</p>
	<p><b>email: </b> {{$user->email}}</p>
	<p><b>Biografia: </b> {{$user->bio}}</p>
	<p><b>Contraseña: </b> {{$user->password}}</p>
	<p><b>Fecha de Registro: </b> {{$user->created_at}}</p>	
@stop

@section('footer')
	<a href="{{ route('usuarios.index') }}">Volver al Inicio</a>
@stop