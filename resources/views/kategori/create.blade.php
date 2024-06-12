@extends('layouts.app') 

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Tambah')

{{-- @section('content_header') 
    <h1>Form Tambah User</h1> 
@stop  --}}

@section('content') 
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Tambah Kategori</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="../kategori">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="kategori_kode">Category Kode</label>
          <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" placeholder="Masukkan Category Kode">
        </div>
        <div class="form-group">
          <label for="kategori_nama">Level Nama</label>
          <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" placeholder="Masukkan Nama category">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection