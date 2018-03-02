@extends("layouts.base")
@section("title", "inserer un livre")

@section("main")
  <h2>Inserer un livre</h2>

{{ Form::open(['url' => '/insert', 'class' => 'form-base']) }}

{{ Form::label('title', 'nom du livre') }}
{{ Form::text('title') }}

{{ Form::label('author', 'auteur') }}
{{ Form::text('author') }}

{{ Form::label('genre', 'genre') }}
{{ Form::select('genre', $genres,['required' => 'required']) }}

@foreach($translations as $translation)
{{ Form::label('translations', $translation->name) }}
{{ Form::checkbox('translations[]', $translation->id,'') }}
@endforeach

{{ Form::label('resume', 'resume') }}
{{ Form::text('resume') }}

{{ Form::submit('ajouter') }}

{{ Form::close() }}
@endsection
