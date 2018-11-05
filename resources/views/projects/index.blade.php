@extends('layouts.app')

@section ('content')
	<div class="col-md-10 offset-md-1 table-responsive mt-5">
		<a class="btn btn-danger mb-4 mt-2" href="/control">Nazad</a>
		<table class="table table-hover">
				<thead class="thead-light">
					<th>ID</th>
					<th>Ime projekta</th>
					<th>Link projekta</th>
					<th>Email klijenta</th>
					<th>Pristupni podaci</th>
					<th>Opcije</th>
				</thead>
				<tbody>
					@foreach( $project as $projects )
					<tr>
						<td> {{ $projects->id }}</td>
						<td> {{ $projects->projekat }} </td>
						<td> <a href="{{ $projects->link }}" target="_blank">LINK</a> </td>
						<td> {{ $projects->email_klijenta }} </td>
						<td> {{ $projects->pristupni_podaci }} </td>
						<td> <a href="{{ route('project.show', $projects->id)}}" class="btn btn-sm btn-primary">Pogledaj</a> </td>
					</tr>
					@endforeach
				</tbody>
		</table>
		<div class="paginacija">
				{!! $project->links(); !!}
				@if ($project->count() < 5 && $project->count() > 1) 
				{!! $project->count(); !!} projekta na strani {!! $project->currentPage(); !!}
				@elseif ($project->count() == 1)
				{!! $project->count(); !!} projekat na strani {!! $project->currentPage(); !!}
				@else
				{!! $project->count(); !!} projekta na strani {!! $project->currentPage(); !!}
				@endif
			Ukupno: {!! $project->total(); !!}
		</div>
	</div>
@endsection