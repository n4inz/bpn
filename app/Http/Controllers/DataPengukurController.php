<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class DataPengukurController extends Controller
{
    public function index(){
        if(Gate::allows('pengukur')){
            return view('pengukur.dashboard');
        }else{
            return abort('404');
        }
       
    }
}
