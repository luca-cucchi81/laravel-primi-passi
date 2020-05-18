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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', 'ProductController@index')->name('index');

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/prodotto/{id}', function($id){
    return view('prodotto', compact('id'));
})->name('prodotto');
