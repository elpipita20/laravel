@extends('layouts.app')

@section ('content')
	<div class="col-md-8 offset-1 mt-5">
		<a class="btn btn-danger mb-4" href="/control">Nazad</a>
		
		<h4>Naziv projekta: {{ $project->projekat }} (<a href="{{ $project->link }}" target="_blank">Link projekta</a>)</h4>
		<h4>Email klijenta: {{ $project->email_klijenta }} </h4>
		<p class="lead"> {{ $project->pristupni_podaci }} </p>
		
	</div>
@endsection