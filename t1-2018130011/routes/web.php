<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/booklist', function () {
    $books = \App\Models\Books::all(); // Assuming you have a Book model
    return view('show', ['books' => $books]);
})->name('booklist');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');
Route::get('/create', function () {
    return view('create');
})->name('create');
Route::get('/delete', function () {
    return view('delete');
})->name('delete');
Route::resource('books', 'BooksController');
