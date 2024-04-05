@extends('layout.app')

@section('subtitle', 'kategori')
@section('content_header_title', 'kategori')
@section('content_header_subtitle', 'Create')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat kategori baru</h3>
            </div>

            <form method="post" action="../kategori">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="Enter Kode Kategori">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Enter Nama Kategori">
                    </div>
                </div>
                @extends('layouts.app')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Manage Kategori
                        <a href="{{ route('kategori.create') }}" class="btn btn-success float-right">Add</a>
                    </div>
                    <div class="card-body">
                        <!-- Tambahkan tabel atau konten lainnya di sini -->
                        <!-- Contoh tombol delete dan update di dalam tabel -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <!-- Tombol update -->
                                            <a href="{{ route('kategori.edit', $category->id) }}" class="btn btn-primary">Update</a>
                                            <!-- Tombol delete dengan konfirmasi -->
                                            <form action="{{ route('kategori.delete', $category->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
