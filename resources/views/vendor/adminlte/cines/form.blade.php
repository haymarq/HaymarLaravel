<div class="form-group row">
	<div class="col-sm-6"> 
		{!! Form::label('Imagen', 'Imagen del cine') !!}
		{!! Form::file('imagenC', null, ['class' => 'form-control']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('Nombre', 'Nombre del cine') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-6">
		{!! Form::label('Contacto', 'Contacto del cine') !!}
		{!! Form::number('contacto', null, ['class' => 'form-control']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('Pagina', 'Página Web del cine') !!}
		{!! Form::text('pagina', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-12">
		{!! Form::label('Ubicacion', 'Ubicación del cine') !!}
		{!! Form::textarea('ubicacion', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="btn-group col-md-12 col-md-offset-5">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	<a href="{{ route('cines.index') }}" class="btn btn-default">Cancelar</a>
</div>