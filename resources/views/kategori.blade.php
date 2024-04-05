<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori Barang</title>
</head>
<body>
    <h1>Data Kategori Barang</h1>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add Kategori</a> <!-- Button to create a new kategori -->
    <table border="1" cellpadding="2" cellspacing="0">
    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add</a>
<a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-success">Edit</a>
<form action="{{ route('kategori.delete', $kategori->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->category_id }}</td>
            <td>{{ $d->category_kode }}</td>
            <td>{{ $d->category_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
