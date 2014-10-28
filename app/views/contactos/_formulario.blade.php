<fieldset>
	@if ($errors->has('name'))
		@foreach ($errors->get('name') as $error)
			{{Form::label('name',$error)}}		
		@endforeach
	@endif
		{{Form::label('name','Nombre: ')}}
		{{Form::text('name',$contacto->name)}}
</fieldset>	
<fieldset>
	@if ($errors->has('last_name'))
		@foreach ($errors->get('last_name') as $error)
			{{Form::label('last_name',$error)}}		
		@endforeach
	@endif
		{{Form::label('last_name','Apellido: ')}}
		{{Form::text('last_name',$contacto->last_name)}}
</fieldset>	
<fieldset>
	@if ($errors->has('email'))
		@foreach ($errors->get('email') as $error)
			{{Form::label('email',$error)}}		
		@endforeach
	@endif
		{{Form::label('email','Email: ')}}
		{{Form::text('email',$contacto->email)}}
</fieldset>	

<fieldset>
	@if ($errors->has('address'))
		@foreach ($errors->get('address') as $error)
			{{Form::label('address',$error)}}		
		@endforeach
	@endif
		{{Form::label('address','Direccion: ')}}
		{{Form::textarea('address',$contacto->address)}}
</fieldset>
{{Form::hidden('usuario_id',$contacto->usuario->id)}}

<fieldset>
	{{Form::submit()}}
</fieldset>