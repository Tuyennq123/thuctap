<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gold;

class goldController extends Controller
{
    public function index (){
        $gold = gold::all();
        // dd($gold); die;
    	return view('gold', ['gold' => $gold]);
    }
}
