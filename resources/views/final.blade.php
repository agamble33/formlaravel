




@extends('customer')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Customer Data</h3>
		<br />
		@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif
		<div align="right">
			
			<br />
			<br />
		</div>
		<table class="table table-bordered table-striped">
			<tr>
				<th>Email</th>
				<th>Phone</th>
				<th>URL</th>
				<th>Domain Name</th>
			</tr>
			@foreach($customers as $row)
			<tr>

				<td>email : {{$row['email']}}</td>
				<td>phone : {{$row['phone']}}</td>
				<td>url : {{$row['url']}}</td>
				<td>domain : {{$row['domain']}}</td>
			</tr>

			@endforeach

		</table>
	</div>
</div>

@endsection