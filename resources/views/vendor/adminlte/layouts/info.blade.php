@if(Session::has('info'))
	<div class="alert alert-info" style="margin-top: 10px;">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('info') }}
	</div>
@endif