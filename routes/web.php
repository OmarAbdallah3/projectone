<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/omar', function () {
    return 'omar' ;
    
});

Route::get('first','FirstController@showstring') ;

Route::resource('new', 'NewController');

Route::get('/landing', function () {
    return view(view:'front.landing');
    
});
Route::get('about', function () {
    return view('front.about');
    
});


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

