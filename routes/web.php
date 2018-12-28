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
//http:laravel.test

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/todo', function () {
//     return view('todo');
// });



// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/{page}', 'PagesController@getPage');
// Route::get('/{page}/{id}', 'PagesIdController@getPage');

// Route::post('/register-form', 'FormController@inputData');

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/{page}', 'PagesController@getPage');
Route::get('/{page}/{id}', 'PagesIdController@getPage');

Route::post('/register-form', 'FormController@inputData');