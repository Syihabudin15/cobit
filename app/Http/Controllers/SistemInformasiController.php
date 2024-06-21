<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SistemInformasi;
use Exception;
use Illuminate\Http\Request;

class SistemInformasiController extends Controller
{
    public function index(){
        $data = [];
        $page = (int)request("page") || 1;
        $skip = ceil(($page-1)*20);

        if(request('nama')){
            $data = SistemInformasi::latest()->where("nama", "LIKE", "%".request('nama')."%")->get();
        }else{
            $data = SistemInformasi::latest()->skip($skip)->take(20)->get();
        }
        $total = SistemInformasi::latest()->get();

        return view("SistemInformasi", [
            "data" => $data,
            "total" => request("nama") ? count($data) : count($total),
            "page" => $page
        ]);
    }
    public function create(Request $request){
        $validate = $request->validate([
            "nama" => ['required', 'min:2'],
            "deskripsi" => ['required', 'min: 2'],
        ]);
        try{
            $find = SistemInformasi::where('nama', '=', $validate['nama'])->first();
            if($find){
                return redirect('/sistem-informasi')->with(['error' => "Data Sistem Informasi sudah tersedia!"]);
            }
            SistemInformasi::create($validate);
            return redirect('/sistem-informasi')->with(['success' => "Data Sistem Informasi berhasil ditambahkan"]);
        }catch(Exception $err){
            dd($err);
            return redirect('/sistem-informasi')->with(['error' => "Server Error!"]);
        }
    }
}
