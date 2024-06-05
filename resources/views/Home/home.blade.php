@extends('home.template')

@section('title')
        Halaman Home
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-3xl">Data User</div>
        <div>
            <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
  </div>
</div>

<table class="table w-full mt-5">
    <thead>
        <tr class="border p-3 bg-teal-400 text-white">
            <th class="border p-3">id</th>
            <th class="border p-3">Namaobat</th>
            <th class="border p-3">jenisobat</th>
            <th class="border p-3">deskripsi</th>
            <th class="border p-3">harga</th>
            <th class="border p-3">#</th>
       </tr>
   </thead>
   <tbody>
    
    <tr>
            
            <td class="text-center border p-3">namaobat</td>
            <td class="text-center border p-3">jenisobat</td>
            <td class="text-center border p-3">deskripsi</td>
            <td class="text-center border p-3">harga</td>
      
        
 
</tbody>
</table>
@endsection
