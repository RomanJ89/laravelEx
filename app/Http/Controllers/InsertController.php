<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;
use \App\Genre as Genre;

class InsertController extends Controller
  {
    public function insertBook(Request $request) {
      $newBook = new Book();
      $newBook->title = $request->input('title');
      $newBook->author = $request->input('author');
      $newBook->genre_id = $request->input('genre');
      $newBook->resume = $request->input('resume');
      $newBook->save();

      foreach ($request->input('translations') as $translation) {
        $newBook->translations()->attach($translation);
      }
      return redirect('/');
    }

    public function deleteBook(Request $request) {
      Book::destroy($request->input('id'));
      return redirect('/');
    }

    public function updateBook(Request $request) {
     $Book = Book::find($request->input('id'));
     $Book->title = $request->input('title');
     $Book->author = $request->input('author');
     $Book->genre_id = $request->input('genre');
     $Book->resume = $request->input('resume');
     $Book->save();
     $book->translations()->detach();
     foreach ($request->input('translation') as $translation) {
       $newBook->translations()->attach($translation);
     }
     return redirect('/');
    }

    public function insertGenre(Request $request) {
      $newGenre = new Genre();
      $newGenre->name = $request->input('name');
      $newGenre->save();
      return redirect('/');
    }

    public function deleteGenre(Request $request) {
      Genre::destroy($request->input('id'));
      return redirect('/');
    }

}
