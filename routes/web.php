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
    return view('home');
});

Route::get('/nome', function () {
  $data = [
    'nome' => 'Pippo'
  ];
    return view('about', $data);
}) ->name('mio_nome');

Route::get('/eta', function () {
  $data = [
    'age' => 30
  ];
    return view('age', $data);
}) ->name('eta');
