<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::resource('/book', BookController::class);
Route::get('/book/search', 'BookController@index');

Route::resource('/info', InfoController::class);
Route::get('/info/search', 'InfoController@index');

