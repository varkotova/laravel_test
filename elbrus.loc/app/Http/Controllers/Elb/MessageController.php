<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    
    public function show(Request $request, $id = FALSE) {
//        print_r($request -> all());
        print_r($request -> only('name', 'email'));        
        
        if($request -> has('name')){
            echo '<h1>' .$request->input('name'). '</h1>';
        }
        return view('massively.elbrus_message', ['title' => 'massively.elbrus_message']);

    }
}
