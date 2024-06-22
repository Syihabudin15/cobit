<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JawabanRespondenController extends Controller
{
    public function index(){
        return view("IsiKuesioner");
    }
    public function create(Request $request){
        return json_decode($request["data"]);
    }
}
