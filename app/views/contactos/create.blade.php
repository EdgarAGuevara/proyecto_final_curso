@extends('layouts.master')

@section('title') 
	Agenda - Nuevo Contacto  
@stop

@section('header_title') 
	Nuevo Contacto del Usuario {{$user->username }}
@stop

@section('content')
	{{Form::open(array('route'=>'contactos.store','method'=>'POST'))}}
	@include('contactos._formulario')
	{{Form::close()}}
@stop