<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id = null)
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'unique:books,title', 'between:2,255', 'regex:/^[a-zA-Zа-яА-Я][ \d\w\W]+$/'],
            'author' =>  ['required', 'between:2,100', 'regex:/^[a-zA-Zа-яА-Я][ \d\w\W]+$/'],
            'year_of_release' => ['required', "date", 'before:today'],
            'number_of_pages' => ['required', "integer", 'min:1', 'max:99999'],
            'genre' => ['required']
        ]);

        $newBook = new Book($validated);

        $newBook->save();

        return response()->json('Book is succesfully validated and data has been saved');

    }
}
