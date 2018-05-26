<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Core extends Controller
{
    public function getArticle($id){
        return 'hihihi poluchilosya';
    }
    
    
    public function getArticles(){
        $articles = DB::table('articles')->get();
        return;
        
    }
}
