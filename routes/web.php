<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ServicesAdminController;
use App\Http\Controllers\Departments;
use App\Http\Controllers\Employees;

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
    return view('orange.index', ['print_form' => true]);
})->name('index');

Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/work', [SiteController::class, 'work'])->name('work');
Route::get('/services', [SiteController::class, 'services'])->name('services');

Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/post/{postId}', [SiteController::class, 'post'])->name('post');
Route::post('/blog/post/{postId}', [SiteController::class, 'post'])->name('post');

Route::get('/tools', [SiteController::class, 'tools'])->name('tools');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::get('/departament/employee/', [Departments::class, 'show'])->name('show');
Route::get('/employee/details/{id}', [Employees::class, 'index'])->name('/employee/details');Route::resource('/department', Departments::class);
Route::resource('/departament', Departments::class);

Route::resource('admin/services', ServicesAdminController::class);

//Como se va a mostrar la URL  ---  Route::post('/post_view/{post_id}'
//Como se llama el metodo en el SiteController   --- [SiteController::class, 'blog_post_view']
//Es el nombre del recurso al que estoy mandando llamar  ---  name('comment.save')



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

