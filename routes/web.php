<?php

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
    return view('auth.login');
});

Route::get('login','PagesController@login');

Route::get('register','PagesController@register');

Route::get('news','PagesController@news');

Route::get('payments','PagesController@payments');

Route::get('profile','PagesController@profile');

Route::get('results','PagesController@results');

Route::get('security','PagesController@security');

Route::get('insurance','PagesController@insurance');

Route::get('messages','PagesController@messages');

Route::get('course','PagesController@course');

Route::get('student','PagesController@student');

Route::get('welcome','PagesController@welcome');

Route::get('createInvo','PagesController@createInvo');





Auth::routes();

Route::get('/home', 'pagesController@home');
