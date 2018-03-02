@extends("layouts.base")
@section("title", "inserer un genre")

@section("main")
  <h2>Inserer un genre</h2>

{{ Form::open(['url' => '/insertGenre']) }}

{{ Form::label('name', 'genre') }}
{{ Form::text('name') }}

{{ Form::submit('ajouter') }}

{{ Form::close() }}
@endsection
