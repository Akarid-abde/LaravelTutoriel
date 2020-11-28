@extends('layouts.app')


@section('content')

<!-- Validateur des erreur -->
@if(count($errors))

<div class="alert alert-danger" role="alert">
     <ul>
     @foreach($errors->all() as $message)
       <li>{{ $message }}</li>
     @endforeach
     </ul>
</div>
@endif

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('cvs') }}" method="post">

                {{ csrf_field() }}

				<div class="from-group">
					<label for="">Titre</label>
					<input type="text" name="titre" class="form-control" value="{{ old('titre') }}">
				</div>

				<div class="from-group">
					<label for="">Presentation</label>
					<textarea type="text" name="presentation" class="form-control">{{ old('presentation') }}</textarea>
				</div>
                <hr>
				<div class="from-group">
					<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection