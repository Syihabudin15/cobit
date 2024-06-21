<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [];
        $page = (int)request("page") || 1;
        $skip = ceil(($page-1)*20);

        if(request('nama')){
            $data = User::latest()->where("nama", "LIKE", "%".request('nama')."%")->orWhere("username", "LIKE", "%".request('nama')."%")->get();
        }else{
            $data = User::latest()->skip($skip)->take(20)->get();
        }
        $total = User::latest()->get();

        return view("kelolaPengguna", [
            "data" => $data,
            "total" => request("nama") ? count($data) : count($total),
            "page" => $page
        ]);
    }
}
