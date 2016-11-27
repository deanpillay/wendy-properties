@extends('layouts.admin.adminmaster')

@section('body')

 {{ Session::get('message') }}
 <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
 <h1>Leads Information</h1>
 <p></p>
 	@foreach($leads as $lead)
 	<div class="col-sm-8">
 		<small>Lead ID: {{ $lead -> id }}</small> 		
 		<h3>Firstname{{ $lead -> firstname }}</h3>
 		<h3>Lastname{{ $lead -> lastname }}</h3>
 		<p>Email {{ $lead -> email }}</p>
 		<p>Message: {{ $lead -> message }}</p>
 		<br /> 	 
 	</div>
 	<hr />
 	@endforeach
</div>
 @endsection