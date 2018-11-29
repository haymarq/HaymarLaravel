@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.cine') }}
@endsection


@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header" style="margin-bottom: 10px;">
	<h1>
		@yield('contentheader_title', 'Cines')
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
				<div class="panel-heading">Lista de Cines</div>

				<div class="panel-body">
					<a href="{{ route('cines.create') }}" class="btn btn-primary">Registrar</a>

					@include('vendor.adminlte.layouts.info')

					<table id="MyTable" class="table table-hover table-striped">
						<thead>
							<tr>
								<th>N°</th>
								<th>Nombre</th>
								<th>Contacto</th>
								<th>Ubicación</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cines as $cine)
							<tr>
								<td>{{ $num++ }}</td>
								<td>{{ $cine->nombre }}</td>
								<td>{{ $cine->contacto }}</td>
								<td>{{ $cine->ubicacion }}</td>
								<td style="display: flex;">
									<a href="{{ route('cines.show', $cine->id) }}"><i class="btn btn-primary fa fa-eye"></i></a>&nbsp;&nbsp;
									<a href="{{ route('cines.edit', $cine->id) }}"><i class="btn btn-warning fa fa-edit"></i></a>&nbsp;&nbsp;
									{!! Form::open(['method' => 'DELETE', 'route' => ['cines.destroy', $cine->id]]) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $cines->render() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection