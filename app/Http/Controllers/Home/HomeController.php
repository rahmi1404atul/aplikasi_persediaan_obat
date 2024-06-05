<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\obatrequest;
use App\Models\obat;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    Public function index(){
        $data['obat']=obat::get();

            return View('home/home',$data);
    }
    public function tambah(){
        return View('home/tambah');
    }

    public function save(obatrequest $r){
        if ($r->validated()){
            $foto = $r->foto->hashName();
            $r->foto->move(public_path('foto',$foto));

            obat::create([
                'namaobat'=> $r->namaobat,
                'jenisobat'=>$r->jenisobat,
                'deskripsi'=>$r->deskripsi,
                'harga'=>$r->harga,
                'foto'=> $foto
            ]);
            return redirect('home')->with('pesan','input data berhasil');
        }
        return redirect('tambah')->with('pesan','asadsa');
        
}
}