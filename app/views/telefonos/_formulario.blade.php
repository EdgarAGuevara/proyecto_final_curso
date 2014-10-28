<fieldset>
	@if ($errors->has('label'))
		@foreach ($errors->get('label') as $error)
			{{Form::label('label',$error)}}		
		@endforeach
	@endif
		{{Form::label('label','Label: ')}}
		{{Form::text('label',$tel->label)}}
</fieldset>	
<fieldset>
	@if ($errors->has('num_tel'))
		@foreach ($errors->get('num_tel') as $error)
			{{Form::label('num_tel',$error)}}		
		@endforeach
	@endif
		{{Form::label('num_tel','Número de tel: ')}}
		{{Form::text('num_tel',$tel->num_tel)}}
</fieldset>	
{{Form::hidden('contacto_id',$contacto->id)}}

<fieldset>
	{{Form::submit()}}
</fieldset>