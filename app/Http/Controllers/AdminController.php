<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    //
    public function index(){
        if(Gate::allows('admin')){
            return view('admin');
        }else{
            return abort('404');
        }
        
    }

}
