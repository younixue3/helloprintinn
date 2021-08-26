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

Route::get('about', function () {
    return view('content/public/about');
});

Route::get('gallery', 'GalleryPublicController@index');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('/', 'AdminDashboardController');
    Route::resource('/gallery', 'GallerryController');
    Route::resource('/users', 'UsersDashController')->middleware('LevelCheck');
    Route::get('/gallery/{id}/delete', 'GallerryController@destroy');
    Route::get('/users/{id}/delete', 'UsersDashController@destroy');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect('login');
    });
});


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
