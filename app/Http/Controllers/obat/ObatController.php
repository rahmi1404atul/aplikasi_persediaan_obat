<?php

namespace App\Http\Controllers\obat;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Http\Requests\UserRequest;
use App\Models\obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class ObatController extends Controller
{
    public function index(){
        $data['obat']= obat::get();
        return view('obat/obat',$data);
    }
    public function tambah(){
        return view('obat/tambah');
    }
    public function save(UpdateRequest $r){
        if($r->validated()){
            $gambarbuku = $r->gambarbuku->getClientOriginalName();
            $r->gambarbuku->move('gambarbuku/',$gambarbuku);

            Mapel::create([
                'namaobat' => $r->namaobat,
                'jenisobat' => $r->jenisobat,
                'harga' => $r->harga,
                'deskripsi' => $r->deskripsi,
                'gambarbuku' => $gambarbuku
            ]);
       return redirect('obat')->with('pesan','input data berhasil');
        }
       
    }
    
    public function edit($id){
        $data['obat']= obat::where('id',$id)->first();

        return view('obat/edit',$data);
    }
    

    public function updatem(UpdateObatRequest $r, $id){
        if($r->validated()){
            if($r->gambarbuku){
                $cek = obat::where('id',$id)->first();
                if(file::exists(public_path('gambarbuku/'.$cek->gambarbuku))){
                    file::delete(public_path('gambarbuku/'.$cek->gambarbuku));
                }
                $gambarbuku = $r->gambarbuku->getClientOriginalName();
                $r->gambarbuku->move('gambarbuku/',$gambarbuku);

                $data['gambarbuku'] = $gambarbuku;
            }
            $data['namaobat'] = $r->namaobat;
            $data['jenisobat'] = $r->jenisobat;
            $data['harga'] = $r->harga;
            $data['deskripsi'] = $r->deskripsi;

            obat::where('id',$id)->update($data);

            return redirect('obat');
        }
}

public function hapus($id){
    mapel::where('id',$id)->delete();

    return back();
}

public function dash(){
    return view('home.dashboard');
}
}
