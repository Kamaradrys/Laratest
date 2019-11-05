@csrf
		<div class="form-group">
			<input id="name"  type="text" name="name" value="{{ old('name') ?? $client->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Prénoms ...">
			@error('name')
			<div class="invalid-feedback">
				{{ $errors->first('name') }}
			</div>
			@enderror
		</div>
		<div class="form-group">
			<input id="email"  type="text" name="email" value="{{ old('name') ?? $client->email }}"  class="form-control @error('email') is-invalid @enderror" placeholder="Adresse éléctronique ...">
			@error('email')
			<div class="invalid-feedback">
				{{ $errors->first('email') }}
			</div>
			@enderror
		</div>


		<div class="form-group">
			<select name="status" class="custom-select @error('status') is-invalid @enderror" >
				@foreach($client->getStatusOptions() as $key => $value)
			 <option value="{{$key}}" {{ $client->status == $value ? 'selected' : ''}} >{{$value}}</option>
				@endforeach
			</select>
			@error('status')
			<div class="invalid-feedback">
				{{ $errors->first('status') }}
			</div>
			@enderror
		</div>

		<div class="form-group">
			<select name="entreprise_id"  class="custom-select @error('entreprise_id') is-invalid @enderror" >
				@foreach($entreprises as $entreprise)
				<option value="{{ $entreprise->id }}" {{ $client->entreprise_id == $entreprise->id ? 'selected' : ''}} >{{ $entreprise->name}}</option>
				@endforeach
			</select>
			@error('entreprise_id')
			<div class="invalid-feedback">
				{{ $errors->first('entreprise_id') }}
			</div>
			@enderror
		</div>