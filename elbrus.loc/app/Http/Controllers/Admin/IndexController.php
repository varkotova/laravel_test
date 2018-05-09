<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show() {
//        $data = array('title'=>'ura!!!');
//        return view('shaiba', $data);
        
        return view('shaiba')->with('title','это работает Admin\IndexController ');
        
//        $view = view('shaiba');
//        $view->with('title','ura2!!!' );
//        $view->with('title2','ura3!!!' );
//        $view->with('title3','ura4!!!' );
//        return $view;
        
    }
}
