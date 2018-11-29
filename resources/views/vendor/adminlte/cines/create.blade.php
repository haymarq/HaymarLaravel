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
					<div class="panel-heading">Registro de Cine</div>

					<div class="panel-body">

						@include('vendor.adminlte.layouts.errors')

						{!! Form::open(['route' => 'cines.store', 'files' => true]) !!}

							@include('vendor.adminlte.cines.form')

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection