@extends('layouts.app')

@section ('content')
	<div class="col-md-8 offset-1 mt-5">
		<a class="btn btn-danger mb-2" href="/control">Nazad</a>
		<h3 class="text-center">Dodaj projekat</h3>
		@if( $errors -> any())
		<div class="alert alert-danger">
			<ul style="margin-bottom: 0px;">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
		</div>
		@endif
		{!! Form::open(array('route' => 'project.store')) !!}
			{{ Form::label('projekat', 'Naziv projekta:', ['class' => 'font-weight-bold']) }}
			{{ Form::text('projekat', null, array('class' => 'form-control')) }}

			{{ Form::label('link', 'Link:', ['class' => 'font-weight-bold']) }}
			{{ Form::text('link', null, array('class' => 'form-control')) }}

			{{ Form::label('email_klijenta', 'Kontakt email:', ['class' => 'font-weight-bold'])}}
			{{ Form::text('email_klijenta', null, array('class' => 'form-control')) }}

			{{ Form::label('pristupni_podaci', 'Pristupni podaci:', ['class' => 'font-weight-bold']) }}
			{{ Form::textarea('pristupni_podaci', null, array('class' => 'form-control', 'id' => 'editor')) }}

			{{ Form::submit('Kreiraj projekat', array('class' => 'btn btn-success mt-2'))}}
		{!! Form::close() !!}
	</div>
@endsection