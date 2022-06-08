@if ($message = Session::get('message'))
<div class="alert alert-success alert-block m-2 text-center">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif