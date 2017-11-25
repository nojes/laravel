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

/*
| Basic Routing
*/
Route::get('/say-hello', function () {
    return 'Hello, World!';
});

// Redirect Routes
Route::redirect('/hi', '/say-hello', 301);

// View Routes
Route::get('/', function () {
    return view('welcome');
});
Route::view('/welcome', 'welcome');


/*
| Route Parameters
*/
Route::get('/say-hello/{name}', function ($name) {
    return 'Hello, ' . ucfirst($name) . '!';
});