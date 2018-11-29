<div class="form-group row">
	<div class="col-sm-6"> 
		{!! Form::label('Imagen', 'Imagen de la pelicula') !!}
		{!! Form::file('imagenP', ['class' => 'form-control']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('Nombre', 'Nombre de la pelicula') !!}
		{!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-6">
		{!! Form::label('Estreno', 'Estreno de la pelicula') !!}
		{!! Form::date('Estreno', null, ['class' => 'form-control']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('Genero', 'Género de la pelicula') !!}
		{!! Form::select('Genero', array('' => 'Seleccione','Accion' => 'Acción', 'Comedia' => 'Comedia', 'Terror' => 'Terror', 'Romance' => 'Romance', 'Drama' => 'Drama'), null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-6">
		{!! Form::label('Director', 'Director de la pelicula') !!}
		{!! Form::text('Director', null, ['class' => 'form-control']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('Clase', 'Clase de la pelicula') !!}
		{!! Form::select('Clase', array('' => 'Seleccione','A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D'), null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-12">
		{!! Form::label('Descripcion', 'Descripción de la pelicula') !!}
		{!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="btn-group col-md-12 col-md-offset-5">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	<a href="{{ route('peliculas.index') }}" class="btn btn-default">Cancelar</a>
</div>