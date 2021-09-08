<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

Route::get('/hello1', function()
{
    return "Hello World from Laravel!!";
});

Route::get('/hello2', function()
{
    return view('hello2');
});

Route::get('hello3', [HelloController::class, 'hello3']);
Route::get('hello4', [HelloController::class, 'hello4']);

Route::get('hello5/{fisrtname}/{lastname}', [HelloController::class, 'hello5']);
Route::get('hello6/{name?}', [HelloController::class, 'hello6']);

