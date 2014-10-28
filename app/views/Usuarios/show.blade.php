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
	<p><b>Fecha de Registro: </b> {{$user->created_at}}</p>	
	<aside>
		@if(! $user->contactos->isEmpty())
			<ul>
			<a href="{{ route('contactos.create',array($user->usuario_id)) }}">Agregar un Contacto</a>
			@foreach($user->contactos as $contacto)
				<li>
					<span class="text">{{$contacto->name." ".$contacto->last_name}}</span>
					<br>
					<span class="text">{{$contacto->email}}</span>
					<br>
					<span class="date" style="font-size: 10px;">Agregado el: {{$contacto->created_at}}</span>	
					<a href="{{ route('contactos.show',array($contacto->id)) }}">Ver </a>	
					<a href="{{ route('contactos.edit',array($contacto->id)) }}">Modificar </a>					
					{{Form::open(['route' => ['contactos.destroy', $contacto->id], 'method' => 'DELETE'])}}
					{{Form::submit('Borrar')}}
					{{Form::close()}}
				</li>
			@endforeach
			</ul>
		@else
			<p>El Contacto no tiene ni un telefono agregado.</p>
		@endif
	</aside>
@stop

@section('footer')
	<a href="{{ route('usuarios.index') }}">Volver al Inicio</a>
@stop