@extends('layouts.app')
@section('content')
	 <h1>{{ $client->name }}</h1>
	 <p><strong>Nom : </strong>{{ $client->name }}</p>
	 <p><strong>Email : </strong>{{ $client->email }}</p>
	 <p><strong>Status : </strong>{{ $client->status }}</p>
	 <p><strong>Entreprise : </strong>{{ $client->entreprise->name }}</p>
	 <a href="{{ asset('/clients') }}/{{ $client->id }}/edit"	class="btn btn-sm btn-secondary">Edit</a>
	 

	 <form action="{{ asset('/clients') }}/{{ $client->id }}" method="POST" style="display: inline;">
	 	@csrf
	 	@method('DELETE')
	 	<button type="submit" class="btn btn-sm btn-danger my-3"> Delete</button>
	 </form>
@stop 