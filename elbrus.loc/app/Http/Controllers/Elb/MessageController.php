<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class MessageController extends Controller
{


    public function show(Request $request, $id = FALSE) {

        print_r($request -> only('name', 'email'));

        if($request -> isMethod('post')){

        }
        return view('massively.elbrus_message', ['title' => 'massively.elbrus_message']);

    }
}
