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

//Route::get('/', ['as' => 'home', function () {
//    return view('welcome');
//}]);


//Route::get('/', ['as' => 'home', 'uses' => 'Admin\IndexController@show']);

//Route::get('/', 'Admin\IndexController@show'); //тут шайба покажется!




Route::get('/shaiba', 'Admin\ShaibaController@getArticles');
//Route::get('/anula', ['as' => 'anula', function () {
//    return view('page');
//}]);
//Route::get('/about', ['uses' =>'Admin\AboutController@show', 'name' => 'about']);

Route::get('', ['uses' => 'Elb\ElInController@show', 'name' => 'elbrus_index']);
Route::get('/elbrus_index', ['uses' => 'Elb\ElInController@show', 'name' => 'elbrus_index']);

Route::get('/generic', ['uses' => 'Elb\ElGeController@show', 'name' => 'elbrus_generic']);
Route::get('/elbrus_generic', ['uses' => 'Elb\ElGeController@show', 'name' => 'elbrus_generic']);

Route::match(['get', 'post'], '/message/{id?}', ['uses' => 'Elb\MessageController@show', 'as' => 'elbrus_message']);






//Route::get('/about/{id}', 'FirstController@show');
//Route::get('/articles', ['as'=>'articles','uses'=>'Core@getArticles']);
//
//Route::get('/article/{page}', ['as'=>'article','uses'=>'Core@getArticle', 'middleware'=>'my']);



// Route::get('/pages/add', 'Admin\CoreResource@add');
// Route::resource('/pages', 'Admin\CoreResource');
