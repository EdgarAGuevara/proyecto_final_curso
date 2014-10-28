@extends('layouts.master')

@section('title') 
	Agenda - Modificar Contacto 
@stop

@section('header_title') 
	Modificar Contacto para el Usuarios {{$contacto->usuario->username }} 
@stop

@section('content')
	{{Form::open(array('route'=>array('contactos.update',$contacto->id),'method'=>'PUT'))}}
	@include('contactos._formulario')
	{{Form::close()}}
	<a href="{{ route('usuarios.show', [$contacto->usuario->id]) }}">Volver al Lsita Contacto</a>
@stop
@stop