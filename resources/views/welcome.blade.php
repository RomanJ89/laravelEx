@extends("layouts.base")
@section("title", "accueil")

@section("main")
  <h2>Accueil</h2>
  <table>
    <tr>
      <th>Titre</th>
      <th>Auteur</th>
      <th>Genre</th>
      <th>Résumé</th>
      <th>Traduction</th>
      <th>Supprimer</th>
      <th>Update</th>
    </tr>
    @foreach($books as $book)
    <tr>
      <td>{{ $book['title'] }}</td>
      <td>{{ $book['author'] }}</td>
      <td>{{ $book->genre ? $book->genre->name : 'undefined' }}</td>
      <td>{{ $book['resume'] }}</td>
      <td>
        @if ($book->translations)
          @foreach ($book->translations as $translation)
            {{ $translation->name }}
          @endforeach
        @endif
      </td>

      <td>
        {{ Form::open(['url' => '/delete']) }}
          {{ Form::hidden('id', $book['id']) }}
          {{ Form::submit('X') }}
        {{ Form::close() }}
      </td>
      <td>
        {{ Form::open(['url' => '/update', 'method' => 'get']) }}
          {{ Form::hidden('id', $book['id']) }}
          {{ Form::submit('Up') }}
        {{ Form::close() }}
      </td>
    </tr>
  @endforeach
  </table>

@endsection
