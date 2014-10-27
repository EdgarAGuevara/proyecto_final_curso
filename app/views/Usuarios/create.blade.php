@extends('layouts.master')

@section('title') 
	Agenda - Nuevo Usuario 
@stop

@section('header_title') 
	Nuevo Usuario 
@stop

@section('content')
	{{Form::open(array('route'=>'usuarios.store','method'=>'POST'))}}
	@include('Usuarios._formulario')
	{{Form::close()}}
@stop