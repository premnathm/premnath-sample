<?php
namespace Premnath\Sample\Http\Controllers;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index(){
        echo 'sample -index';

        return view('customviewsblade::sample');
    }
}


