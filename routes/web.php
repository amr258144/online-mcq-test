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

Route::post('/exam', function () {
    $arr = ['Cool', 'Vue', 'React'];
    echo "<pre>"; shuffle($arr); print_r($arr);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/result', 'HomeController@output');

Route::get('/add-questions', function () {
	return view('add-questions');
});

Route::post('/insert-question', 'AddQuestions@insert');