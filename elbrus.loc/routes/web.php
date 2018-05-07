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

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);
Route::get('/anula', ['as' => 'anula', function () {
    return view('page');
}]);

Route::get('/about/{id}', 'FirstController@show');
Route::get('/articles', ['as'=>'articles','uses'=>'Core@getArticles']);

Route::get('/article/{page}', ['as'=>'article','uses'=>'Core@getArticle', 'middleware'=>'my']);



//Route::get('/pages/add', 'Admin\CoreResource@add');
//Route::resource('/pages', 'Admin\CoreResource');










