@extends('layouts.apps')
@section('content')
<h3>Editer le profil de {{ $client->name }}</h3>
<form action="{{ asset('/clients') }}/{{ $client->id }}" method="POST">
	@method('PATCH')
		@include('includes.form')
		<button type="submit" class="btn btn-primary">Sauvegarder</button>
	</form>
@stop