@extends('layouts.admin')
@section('header', 'Edit Produk')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Input Produk</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('produk') }} " method="post">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Nama produk</label>
          <input type="text" class="form-control" name="judul" value="{{ $produk->judul }}" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" class="form-control" name="slug" value="{{ $produk->slug }}" required>
        </div>
        <div class="form-group">
            <label>Harga Produk</label>
            <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" class="form-control">
                @foreach($produks as $produk)
                <option selected="{{ $produk->id == $produk->id_produk }}" value="{{ $produk->id }} ">
                    {{ $produk->id_kategori }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Foto Produk</label>
            <input type="text" class="form-control" name="foto_produk" value="{{ $produk->foto_produk }}" required>
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input type="text" class="form-control" name="deskripsi" value="{{ $produk->deskripsi }}" required>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection