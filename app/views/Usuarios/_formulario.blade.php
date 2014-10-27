<fieldset>
	@if ($errors->has('name'))
		@foreach ($errors->get('name') as $error)
			{{Form::label('name',$error)}}		
		@endforeach
	@endif
		{{Form::label('name','Nombre: ')}}
		{{Form::text('name',$user->name)}}
</fieldset>	
<fieldset>
	@if ($errors->has('username'))
		@foreach ($errors->get('username') as $error)
			{{Form::label('username',$error)}}		
		@endforeach
	@endif
		{{Form::label('username','Nombre de Usuario: ')}}
		{{Form::text('username',$user->username)}}
</fieldset>	
<fieldset>
	@if ($errors->has('email'))
		@foreach ($errors->get('email') as $error)
			{{Form::label('email',$error)}}		
		@endforeach
	@endif
		{{Form::label('email','Email: ')}}
		{{Form::text('email',$user->email)}}
</fieldset>	

<fieldset>
	@if ($errors->has('password'))
		@foreach ($errors->get('password') as $error)
			{{Form::label('password',$error)}}		
		@endforeach
	@endif
		{{Form::label('password','Contraseña: ')}}
		{{Form::password('password')}}
</fieldset>
<fieldset>
	@if ($errors->has('password_confirmation'))
		@foreach ($errors->get('password_confirmation') as $error)
			{{Form::label('password_confirmation',$error)}}		
		@endforeach
	@endif
		{{Form::label('password_confirmation','Confirmación de Contraseña: ')}}
		{{Form::password('password_confirmation')}}
</fieldset>
		{{Form::text('id',$user->id,$attributes=array('hidden'))}}
<fieldset>
	{{Form::submit()}}
</fieldset>