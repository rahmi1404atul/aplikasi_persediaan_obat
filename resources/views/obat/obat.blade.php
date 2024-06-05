@extends('home.template')

@section('title')
    Halaman obat
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data obat</div>
    <div>
        <a href="{{ route('tambah') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
    </div> 
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border border-red-700 p-3">
                <th class="border border-red-700 p-3">id</th>
                <th class="border border-red-700 p-3">Namaobat</th>
                <th class="border border-red-700 p-3">jenisobat</th>
                <th class="border border-red-700 p-3">harga</th>
                <th class="border border-red-700 p-3">deskripsi</th>
                <th class="border border-red-700 p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $i => $a)
            <tr class="border border-red-700 p-3">
               <td class="border border-red-700 p-3">{{$i+1}}</td>
               <td class="border border-red-700 p-3">{{$a->namaobat}}</td>
               <td class="border border-red-700 p-3">{{$a->jenisobat}}</td>
               <td class="border border-red-700 p-3">{{$a->harga}}</td>
               <td class="border border-red-700 p-3">{{$a->deskripsi}}</td>
               <td class="border border-red-700 p-3"><img class="max-w-32" src="{{asset('gambarbuku/'.$a->gambarbuku)}}" alt=""></td>
               <td >
                <div class="flex gap-3 justify-center">
                    <a href="{{ route('editm',$a->id) }}" class="bg-green-500 flex items-center justify-center hover:bg-green-400 text-white rounded-md w-14 h-8">Edit</a>
                    <a href="{{ route('hapusm',$a->id) }}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                </div>
               </td>
               
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection