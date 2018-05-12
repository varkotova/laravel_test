<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ElGeController extends Controller
{
    public function show() {
     
        if (view() -> exists('massively.elbrus_generic')) {
            $view = view('massively.elbrus_generic', ['title' => 'massively.elbrus_generic']) ->render();
//            return (new Response($view))
//                                ->header('Content-Type', 'newType')
//                                ->header('Anula', 'Anula')
//                                ;
            return response()->download('robots.txt', 'mytext.txt');


//            return view('massively.elbrus_generic', ['title' => 'massively.elbrus_generic']);     
        } abort(404);
    }
}
