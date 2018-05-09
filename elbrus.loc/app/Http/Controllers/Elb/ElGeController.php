<?php

namespace App\Http\Controllers\Elb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElGeController extends Controller
{
    public function show() {
        $array = array(
            'title' => 'ANULKI ElGeController',
            'data' => [
                'one' => 'ON',
                'two' => 'TU',
                'three' => 'FRI',
                'four' => 'FO',
                'five' => 'FAIV'
            ],
            'dataI' => ['ON', 'TU', 'FRI', 'FO', 'FIVE'],
            'bvar' => true,
            'script' => "<script>alert('ANULKI ALERT GE')</script>"
        );      
        if (view() -> exists('massively.elbrus_generic')) {
            return view('massively.elbrus_generic', $array);     
        } else {
            return 'страницы нету';
        }
    }
}
