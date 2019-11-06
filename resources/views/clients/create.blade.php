@extends('layouts.app')
@section('content')
<h3>Cree un  nouveau clients :</h3>
<form action="/clients" method="POST">
		@include('includes.form')
		<button type="submit" class="btn btn-primary">Ajouter un client</button>
	</form>
@stop