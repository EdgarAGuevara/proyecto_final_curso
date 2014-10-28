@extends('layouts.master')

@section('title') 
	Agenda - Modificar Telefono 
@stop

@section('header_title') 
	Modificar Telefono para el Contacto {{$tel->contacto->name }} {{$tel->contacto->last_name }}
@stop

@section('content')
	{{Form::open(array('route'=>array('telefonos.update',$tel->id),'method'=>'PUT'))}}
	@include('telefonos._formulario')
	{{Form::close()}}
@stop