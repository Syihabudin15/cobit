<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SistemInformasi;
use Carbon\Carbon;
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
            // dd($validate);
            dd([
                "data" => $validate,
                "error" => $err
            ]);
            return redirect('/sistem-informasi')->with(['error' => "Server Error!"]);
        }
    }

    public function update(Request $request){
        $validate = $request->validate([
            "id" => ['required', 'min:1'],
            "nama" => ['required', 'min:2'],
            "deskripsi" => ['required', 'min: 2'],
        ]);
        $validate["updated_at"] = Carbon::now()->format("Y-m-d");
        try{
            $find = SistemInformasi::where('id', '=', $validate['id'])->first();
            if(!$find){
                return redirect('/sistem-informasi')->with(['error' => "Data Sistem Informasi tidak ditemukan!"]);
            }
            $find->nama = $validate["nama"];
            $find->deskripsi = $validate["deskripsi"];
            $find->updated_at = Carbon::now()->format("Y-m-d");
            $find->save();

            return redirect('/sistem-informasi')->with(['success' => "Update data berhasil!"]);
        }catch(Exception $err){
            dd([
                "data" => $request,
                "error" => $err
            ]);
            return redirect('/sistem-informasi')->with(['error' => "Server Error!"]);
        }
    }

    public function delete(Request $request) {
        try{
            SistemInformasi::destroy($request["id"]);
            return redirect('/sistem-informasi')->with(['success' => "Data Sistem Informasi berhasil dihapus"]);
        }catch(Exception $err){
            dd([
                "data" => $request,
                "error" => $err
            ]);
            return redirect('/sistem-informasi')->with(['error' => "Server Error!"]);
        }
    }
}
