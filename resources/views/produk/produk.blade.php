@extends('layouts.admin')
@section('header', 'Daftar Produk Saya')

@section('content')
<div id="controller">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                  <a href="{{ url('produk/create') }}" class="btn btn-primary" >Tambah Produk</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">No.</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $key => $produk)
                        <tr>
                            <td class="text-center">{{ $key+1 }}.</td>
                            <td>{{ $produk->judul }}</td>
                            <td>{{ $produk->harga }}</td>
                            <td>{{ $produk->kategoris->kategori }}</td>
                            <td> 
                              {{-- <a href="{{ url('produk/'.$produk->id.'/show') }}" class="btn btn-primary"><i class='bx bx-low-vision'></i></a> --}}
                              <a href="{{ url('produk/'.$produk->id.'/edit') }}" class="btn btn-warning"><i class='bx bx-edit'></i></a>
                              
                              {{-- <form action="{{ url('produks', ['id' => $produk->id]) }}" method="post">
                                  <input class="btn btn-danger" type="submit" value="delete"
                                  onclick="return confirm('Are you sure ?')">
                                  @method('delete')
                                  @csrf
                              </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
        </div>
    </div>
</div>
@endsection