@extends('layouts.master')

@section('title') 
	Agenda - {{Lang::get('mensajes.welcome', ['name' => $user->name])}} 
@stop

@section('header')
	@parent
	<h2></h2>
@stop

@section('header_title') 
	{{Lang::get('mensajes.welcome') }}
	{{--Lang::get('mensajes.welcome', ['name' => $user->name])--}}  {{ $user->name}}
@stop

@section('content')
	<br>
	<a href="{{route('usuarios.index') }}">Lista de Contactos</a>
	<br>
	<a href="{{route('contactos.create',array($user->id)) }}">Nuevo Contacto</a>
	<br>
	<a href="{{route('logout')}}">Cerrar sesión</a>
	<br>
	<a href="{{ route('usuarios.index') }}">Volver al Inicio</a>
@stop