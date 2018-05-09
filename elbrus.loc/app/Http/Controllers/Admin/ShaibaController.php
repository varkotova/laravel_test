<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShaibaController extends Controller
{
    //
    public function show() {
        return view('shaiba')->with('title','это работает Admin\ShaibaController');
    }
}
