@extends('layouts.master')

@section('title') 
	Agenda - Nuevo Telefono 
@stop

@section('header_title') 
	Nuevo Telefono para el Contacto {{$contacto->name }} {{$contacto->last_name}}
@stop

@section('content')
	{{Form::open(array('route'=>'telefonos.store','method'=>'POST'))}}
	@include('telefonos._formulario')
	{{Form::close()}}
@stop