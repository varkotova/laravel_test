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

//Route::get('/page', function () {
//    return view('page');
//});
//
//Route::get('/anula', function() {
//    echo '<pre>';
//    print(env);
//    echo config('app.locale');
//    echo config::set('app.locale', 'ru');
//    echo config::get('app.locale');
//    echo env('APP_ENV');
//    echo '</pre>';
//});

//Route::post('/comments', function(){
//    return view('page');
//});

//Route::match(['get', 'post'], '/comments', function(){
//    return view('page');
//});

//Route::any('/page/{id}/{cat?}', function($id, $cat='ebat'){
//    return $id.'|'.$cat;
//});

//Route::any('/page/{id}', function($id){
//    return $id;
//})->where('id','[0-9]+');
//
//Route::any('/page/{cat}/{id}', function($cat, $id){
//    return $cat.'|'.$id;
//})->where(['id'=>'[0-9]+', 'cat'=>'[A-Za-z]+']);

Route::group(['prefix'=>'admin'], function(){
    
    Route::get('/page/create', function(){
        return redirect()->route('article', array('id'=>25));
    });
    Route::get('/page/edit', function(){
        return 'page/edit';    
    });
});


Route::get('/page', ['as'=>'anula',function(){
    return view('page');
}]);

Route::get('/article/{id}', ['as'=>'article',function($id){
    return $id;
}]);







