@extends('layouts.app')
@section('content')
	<h1>Liste des clients</h1>
	<a href="/clients/create" class="btn btn-sm btn-success my-3">Nouveau clients</a>
	

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Entreprise</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clients as $client)
			<tr>
				<th class="scope">{{ $client->id }}</th>
				<td>{{ $client->name }}</td>
				<td>{{ $client->email }}</td>
				<td>{{ $client->status }}</td>
				<td>{{ $client->entreprise->name }}</td>
				<td>
					<a href="{{asset('clients/')}}/{{$client->id}}" class="btn btn-default">voir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>


	<ul>
		
		{{-- <li>{{ $client->name }} , <em class="text-muted">({{ $client->entreprise->name }})</em></li> --}}
		
	</ul>
@stop

