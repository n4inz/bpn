<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index(){
        if(Gate::allows('loket')){
            return view('dashboard');
        }else{
            return abort('404');
        }
        
    }
}
