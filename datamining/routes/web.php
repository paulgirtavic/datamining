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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/2015Dashboard', function () {
    return view('2015Dashboard');
});

Route::get('/scotland', function () {
    return view('scotland');
});

Route::get('/file', function () {
    return view('file');
});

Route::get('/Scottish015ByTime', function () {
    return view('Scottish015ByTime');
});

Route::get('/fullScottishCyclist', function () {
    return view('fullScottishCyclist');
});

Route::get('/fullUkCyclist', function () {
    return view('fullUkCyclist');
});

Route::get('/general1', function () {
    return view('general1');
});

Route::get('/general2', function () {
    return view('general2');
});

Route::get('/general3', function () {
    return view('general3');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
