@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8 offset-2">
                <h3 class="text-center mt-2">Kontrolna ploča</h3>        
        </div>
        <a href="{{ route('project.index') }}" class="btn btn-primary">Projekti</a>
        <a href="{{ route('project.create') }}" class="btn btn-primary">Dodaj projekat</a>
</div>
@endsection
