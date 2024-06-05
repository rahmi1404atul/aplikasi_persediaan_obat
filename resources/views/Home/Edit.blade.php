@extends('home.template')

@section('title')
    Edit Data
@endsection

@section('content')

<form action="{{route('update',$pengguna->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">namaobat</label>
        <input type="text" name="namaobat" value="{{$pengguna->namaobat}}" class="p-2 border rounded-md">
        <span>{{$errors->first('namaobat')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">jenisobat</label>
        <input type="text" name="jenisobat" value="{{$pengguna->jenisobat}}" class="p-2 border rounded-md">
        <span>{{$errors->first('jenisobat')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">deskripsi</label>
        <input type="text" name="deskripsi" value="{{$pengguna->deskripsi}}" class="p-2 border rounded-md">
        <span>{{$errors->first('deskripsi')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">harga</label>
        <input type="text" name="harga" value="{{$pengguna->harga}}" class="p-2 border rounded-md">
        <span>{{$errors->first('harga')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span>{{$errors->first('foto')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
    </div>
</form>

@endsection