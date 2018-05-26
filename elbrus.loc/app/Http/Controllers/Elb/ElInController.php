<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElInController extends Controller
{
    public function show() {
        $array = array(
            'title' => 'ANULKI ElInController',
        );      
        
        if (view() -> exists('massively.elbrus_index')) {
            return view('massively.elbrus_index', $array);     
        } else {
            return 'страницы нету';
        }

    }
}
