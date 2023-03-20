<?php
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

/*Route::get('/', function () {
    return view('welcome');

});*/

// Route::get('/', 'PagesController@index');
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');



/*
Route::get('/hello', function () {
    return '<h1>Hello World!</h1>';
});

Route::get('/about', function () {
    return view('pages.about');

});
*/
Route::get('/users/{id}', function ($id) {
    return 'This is user'.$id;

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('nuposts', 'App\Http\Controllers\PostsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
