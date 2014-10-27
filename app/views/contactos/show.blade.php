@extends('layouts.master')

@section('title')
	Agenda-  Contacto
@stop

@section('header_title')
	 Contaco de  {{$contacto->usuario->name}}
@stop

@section('content')
	<p><b>Nombre: </b> {{$contacto->name}}</p>
	<p><b>Apellido: </b> {{$contacto->last_name}}</p>
	<p><b>email: </b> {{$contacto->email}}</p>
	<p><b>Direccion: </b> {{$contacto->address}}</p>
	<p><b>Fecha de Creacion: </b> {{$contacto->created_at}}</p>	
@stop

@section('footer')
	<a href="{{ route('usuarios.index') }}">Volver al Inicio</a>
@stop