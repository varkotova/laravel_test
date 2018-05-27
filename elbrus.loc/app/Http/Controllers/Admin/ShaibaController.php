<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Article;
use App\User;
use App\Country;

class ShaibaController extends Controller
{
    public function getArticle($id)
    {
        return 'hihihi poluchilosya';
    }


    public function getArticles(Request $request)
    {
        //$articles = DB::table('articles')->get();
        //$articles = Article::all();
        //$articles = Article::where('id', '>', 3)->orderBy('name')->take(3)->get();
        //$article = Article::find(2);
        //$article = Article::where('id',2)->first();
        //echo $article->text;
        //$articles = Article::find([1,2,3]);
        //$articles = Article::findOrFail(1);
        //$articles = Article::where('id',2)->firstOrFail();
        // $article = new Article;
        // $article->name ='New Article';
        // $article->text ='New Text';
        // $article->save();
        // $article = Article::all();
//        foreach($articles as $article){
//            echo $article->name.'<br />';
//        }
        // Article::create([
        //                 'name' => 'Anula',
        //                 'text' => 'Anulala'
        //                 ]);
        //$article = Article::firstOrCreate([
                        //'name' => 'Blog post. Заголовок 2.1',
                      //  'text' => 'Anulala2'
                      //  ]);
        //$articles = Article::all();

        // dump($articles);
        //dump($article);
        //$user = User::find(1);
        //$country = Country::find(1);
        //$articles = $user->articles()->where('id','>',12)->first();
        // foreach ($articles as $article) {
        //   echo $article->name.'<br>';
        // }
        //$articles = Article::all();
        $articles = Article::with('user')->get();
        foreach ($articles as $article) {
          echo $article->user->name;
        }


        //dump($articles);





        return;
    }
}
