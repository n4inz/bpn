<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Data_pemohon;
class DataController extends Controller
{
    
    public function index(){

        $data = Data_pemohon::all()->sortDesc();

        if(Gate::allows('loket')){
            return view('data', [
                'data' => $data
            ]);
        }else{
            return abort('404');
        }
    }
}
