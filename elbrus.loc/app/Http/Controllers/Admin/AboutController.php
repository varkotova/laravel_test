<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show(){
        return view('about')->with('title','над шайбой динамический title');
    }
}
