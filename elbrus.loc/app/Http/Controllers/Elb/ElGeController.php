<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;

class ElGeController extends Controller
{
    public function show() {
        $array = array(
            'title' => 'ANULKI ElGeController',
        );  
     
        if (view() -> exists('massively.elbrus_generic')) {
            //$articles = DB::select("SELECT * FROM `articles` where id = ?", [2]);
            //DB::insert("insert into `articles` (`name`, `text`) values (?,?)", ['test 1', 'TEXT']);
            //$result = DB::update("update `articles` set `name` = ? where `id` = ?", ["TEST 2", 5]);
            //DB::delete("delete from `articles` where `id` = ?", [6]);
            
            //DB::insert("insert into `articles` (`name`, `text`) values (?,?)", ['test 1', 'TEXT']);
//            $result = DB::connection()->getPdo()->lastInsertId();
//            
//            $articles = DB::select("SELECT * FROM `articles`");
//            dump($result);
//            dump($articles);
            return view('massively.elbrus_generic', $array);     
        } else {
            return 'страницы нету';
        }
    }
}



