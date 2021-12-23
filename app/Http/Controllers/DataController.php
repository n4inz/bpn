<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class DataController extends Controller
{
    public function index(){
        if(Gate::allows('loket')){
            return view('data');
        }else{
            return abort('404');
        }
    }
}
