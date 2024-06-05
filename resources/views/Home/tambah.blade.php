@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')

    <form action="{{ route ('tambah.save') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label>namaobat</label>
            <input type="text" name="namaobat" value="{{old('namaobat')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('namaobat')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label>jenisobat</label>
            <input type="text" name="jenisobat" value="{{old('jenisobat')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('jenisobat')}}</span>
         </div>
         <div class="flex flex-col gap-2">
            <label>deskripsi</label>
            <input type="text" name="deskripsi" value="{{old('deskripsi')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('deskripsi')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label>harga</label>
            <input type="text" name="harga" value="{{old('harga')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('harga')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label>Foto</label>
            <input type="file" name="foto"  class="p-2 border rounded-md">
            <span>{{$errors->first('foto')}}</span>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
</div>
</form>
@endsection