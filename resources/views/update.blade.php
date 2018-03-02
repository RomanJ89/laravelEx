@extends("layouts.base")
@section("title", "modifier un livre")

@section("main")
  <h2>Modifier un livre</h2>

{{ Form::open(['url' => '/update']) }}

{{ Form::label('title', 'nom du livre') }}
{{ Form::text('title', $book['title'], ['required' => 'required']) }}

{{ Form::label('author', 'auteur') }}
{{ Form::text('author', $book['author'], ['required' => 'required']) }}

{{ Form::label('genre', 'genre') }}
{{ Form::select('genre', $genres, $book->genre->id) }}

{{ Form::label('resume', 'resume') }}
{{ Form::text('resume', $book['resume'], ['required' => 'required']) }}

@foreach ($translations as $translation)
  @if($book->translationss->contains($transalation->id))
    {{ Form::label('translations', $translation->name) }}
    {{ Form::checkbox('translations[]', $translation->id, ['checked' => 'checked']) }}
  @else
    {{ Form::label('translations', $translation->name) }}
    {{ Form::checkbox('translations[]', $translation->id) }}
  @endif
@endforeach

{{ Form::submit('modifier') }}

{{ Form::close() }}

@endsection
