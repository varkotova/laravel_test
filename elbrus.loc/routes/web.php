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

Route::get('/about/{id}', 'FirstController@show');
Route::get('/articles', ['as'=>'articles','uses'=>'Core@getArticles']);
Route::get('/article/{id}', ['as'=>'article','uses'=>'Core@getArticle']);
Route::resource('/pages', 'Admin\CoreResource');






