<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;
use \App\Genre as Genre;
use \App\Translation as Translation;


class LibraryController extends Controller {
  public function index() {
    $books = Book::all();
    $genres = Genre::all();
    return view ('welcome', ['books' => $books, 'genres' => $genres]);
  }

  public function insert() {
    $arrayGenres = [];
    $genres = Genre::all();
    foreach ($genres as $genre) {
      $arrayGenres[$genre->id] = $genre->name;
    }
    $translations = Translation::all();
    return view ('insert', ['genres' => $arrayGenres], ['translations' => $translations]);
  }

  public function update(Request $request) {
    $arrayGenres = [];
        $genres = Genre::all();
        foreach ($genres as $genre) {
            $arrayGenres[$genre->id] = $genre->name;
        }
        $book = Book::findOrFail($request->input('id'));
        return view('update', ['book' => $book, 'genres' => $arrayGenres, 'translations' => $translations]);
  }
  public function insertGenre(Request $request) {
    return view('insertGenre');
  }
}
