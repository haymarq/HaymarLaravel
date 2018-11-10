@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.pelicula') }}
@endsection


@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header" style="margin-bottom: 10px;">
	<h1>
		@yield('contentheader_title', 'Peliculas')
		<small>@yield('contentheader_description')</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
		<li class="active">{{ trans('adminlte_lang::message.here') }}</li>
	</ol>
</section>

<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Peliculas</div>

				<div class="panel-body">
					<a href="{{ route('peliculas.create') }}" class="btn btn-primary">Registrar</a>

					@include('vendor.adminlte.layouts.info')

					<table id="MyTable" class="table table-hover table-striped">
						<thead>
							<tr>
								<th>N°</th>
								<th>Nombre</th>
								<th>Género</th>
								<th>Clase</th>
								<th>Estreno</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($peliculas as $pelicula)
							<tr>
								<td>1</td>
								<td>{{ $pelicula->Nombre }}</td>
								<td>{{ $pelicula->Genero }}</td>
								<td>{{ $pelicula->Clase }}</td>
								<td>{{ $pelicula->Estreno }}</td>
								<td style="display: flex;">
									<a href="{{ route('peliculas.show', $pelicula->id) }}"><i class="btn btn-primary fa fa-eye"></i></a>&nbsp;&nbsp;
									<a href="{{ route('peliculas.edit', $pelicula->id) }}"><i class="btn btn-warning fa fa-edit"></i></a>&nbsp;&nbsp;
									{!! Form::open(['method' => 'DELETE', 'route' => ['peliculas.destroy', $pelicula->id]]) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $peliculas->render() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection