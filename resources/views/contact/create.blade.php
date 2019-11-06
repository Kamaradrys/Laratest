@extends('layouts.app')
@section('content')
	@if(!session()->has('message'))
		<h2 class="dispay-4 my-5">Contactez Nous !</h2>

		<form action="/contact" method="POST">
			@csrf
			<div class="form-group">
				<input id="name"  type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Prénoms ...">
				@error('name')
				<div class="invalid-feedback">
					{{ $errors->first('name') }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<input id="email"  type="text" name="email" value="{{ old('email')  }}"  class="form-control @error('email') is-invalid @enderror" placeholder="Adresse éléctronique ...">
				@error('email')
				<div class="invalid-feedback">
					{{ $errors->first('email') }}
				</div>
				@enderror
			</div>
			<div class="form-group">
				<textarea  name="message" type="text" id="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" placeholder="message ...">{{ old('message')  }}</textarea>
		
				@error('message')
				<div class="invalid-feedback">
					{{ $errors->first('message') }}
				</div>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>

	@endif
	 


@endsection
