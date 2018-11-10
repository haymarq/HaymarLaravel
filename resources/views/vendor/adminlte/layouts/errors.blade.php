<!--<!DOCTYPE html>
<html>

{{-- @include('adminlte::layouts.partials.htmlheader') --}}
<body>
    <div id="app"> -->
        <!-- Main content 
        <section class="content">
             Your Page Content Here -->
            {{-- @yield('main-content') --}}
        <!--</section>
    </div>
</body>
</html> -->

@if(count($errors))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif