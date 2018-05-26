<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Article;

class ShaibaController extends Controller
{
    public function getArticle($id){
        return 'hihihi poluchilosya';
    }


    public function getArticles(){
        //$articles = DB::table('articles')->get();
        //$articles = Article::all();
        //$articles = Article::where('id', '>', 3)->orderBy('name')->take(3)->get();
        //$article = Article::find(2);
        //$article = Article::where('id',2)->first();
        //echo $article->text;
        
        $articles = Article::find([1,2,3]);
        
        
        
//        foreach($articles as $article){
//            echo $article->name.'<br />';
//        }
        dump($articles);

        return;

    }
}
