@extends('layouts.master')

@section('title')
	Agenda-  Contacto
@stop

@section('header_title')
	 Contacto de  {{$contacto->usuario->name}}
@stop

@section('content')
	<p><b>Nombre: </b> {{$contacto->name}}</p>
	<p><b>Apellido: </b> {{$contacto->last_name}}</p>
	<p><b>email: </b> {{$contacto->email}}</p>
	<p><b>Direccion: </b> {{$contacto->address}}</p>
	<p><b>Fecha de Creacion: </b> {{$contacto->created_at}}</p>	
	<aside>
		<a href="{{ route('telefonos.create',array($contacto->id)) }}">Agregar un telefono</a>
		@if(! $contacto->telefonos->isEmpty())
			<ul>
			
			@foreach($contacto->telefonos as $tel)
				<li>
					<span class="text">{{$tel->label}}</span>
					<br>
					<span class="text">{{$tel->num_tel}}</span>
					<br>
					<span class="date" style="font-size: 10px;">Agregado el: {{$contacto->created_at}}</span>	
					
					<a href="{{ route('telefonos.edit',array($tel->id)) }}">Modificar </a>					
					{{Form::open(['route' => ['telefonos.destroy', $tel->id], 'method' => 'DELETE'])}}
					{{Form::submit('Borrar')}}
					{{Form::close()}}
				</li>
			@endforeach
			</ul>
		@else
			<p>El Contacto no tiene ni un telefono agregado.</p>
		@endif
	</aside>
	
	<a href="{{ route('contactos.edit',array($contacto->id)) }}">Modificar Contacto</a>					
	{{Form::open(['route' => ['contactos.destroy', $contacto->id], 'method' => 'DELETE'])}}
	{{Form::submit('Borrar')}}
	{{Form::close()}}
	<a href="{{ route('usuarios.show', [$contacto->usuario->id]) }}">Volver al Lsita Contacto</a>
@stop

@section('footer')
	
@stop