<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}">
</head>

  <body>
    <header>
      <h1>Bibliotheque</h1>

      <div class="link">
        <a href="/">Accueil</a>
        <a href="/insert">Inserer un livre</a>
        <a href="/insertGenre">Ajouter un genre</a>
      </div>
    </header>
    <main>
      @yield("main")
    </main>

  </body>
</html>
