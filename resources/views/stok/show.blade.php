
@extends('layouts.template') 

@section('content') 
  <div class="card card-outline card-primary"> 
      <div class="card-header"> 
        <h3 class="card-title">{{ $page->title }}</h3> 
        <div class="card-tools"></div> 
      </div> 
      <div class="card-body"> 
        @empty($stock) 
            <div class="alert alert-danger alert-dismissible"> 
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>                 Data yang Anda cari tidak ditemukan. 
            </div> 
        @else 
            <table class="table table-bordered table-striped table-hover table-sm">  
                <tr> 
                    <th>Nama Barang</th> 
                    <td>{{ $stock->barang->barang_nama }}</td> 
                </tr> 
                <tr> 
                    <th>Nama user</th> 
                    <td>{{ $stock->user->nama }}</td> 
                </tr> 
                <tr> 
                    <th>Tanggal Stock</th> 
                    <td>{{ $stock->stock_tanggal }}</td> 
                </tr> 
                <tr> 
                    <th>Jumlah Stock</th> 
                    <td>{{ $stock->stock_jumlah }}</td> 
                </tr> 
            </table> 
        @endempty 
        <a href="{{ url('stock') }}" class="btn btn-sm btn-default mt-2">Kembali</a> 
    </div> 
  </div> 
@endsection 

@push('css') 
@endpush 

@push('js') 
@endpush 
