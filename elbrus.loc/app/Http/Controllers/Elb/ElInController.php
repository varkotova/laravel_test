<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElInController extends Controller
{
    public function show() {
        $array = array(
            'title' => 'ANULKI ElInController',
//            'data' => [
//                'one' => 'list 1',
//                'two' => 'list 2',
//                'three' => 'list 3',
//                'four' => 'list 4',
//                'five' => 'list 5'
//            ],
//            'dataI' => ['list 1', 'list 2', 'list 3', 'list 4', 'list 5'],
//            'bvar1' => true,
//            'script' => "<script>alert('ANULKI ALERT IN')</script>"
        );      
        
        if (view() -> exists('massively.elbrus_index')) {
            return view('massively.elbrus_index', $array);     
        } else {
            return 'страницы нету';
        }

    }
}
