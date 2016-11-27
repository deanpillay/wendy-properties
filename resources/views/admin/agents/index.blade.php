 @extends('layouts.admin.adminmaster')

@section('body')

 {{ Session::get('message') }}
 <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
 <h1>Agents Information</h1>
 <p></p>
 	@foreach($agents as $agent)
 	<div class="col-sm-4">
 		<img src="{{ $agent -> profile_pic }}" width="200" />
 	</div>
 	<div class="col-sm-8">
 		<h2><a href="agents/{{ $agent->id }}">{{ $agent -> firstname }} {{ $agent -> lastname }}</a></h2>
 		<p>{{ $agent -> cellphone }}</p>
 		<!-- <a href="agents/{{ $agent->id }}/edit">Edit details</a> -->
 		<form action="agents/{{ $agent->id }}" method="POST">
 			<input type="hidden" name="_method" value="put">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">       
            <button type="submit" class="btn btn-primary" value="Delete Agent">Ed</button>
        </form>   
 	 <hr />
 	</div>
 	
 	@endforeach
</div>
 @endsection