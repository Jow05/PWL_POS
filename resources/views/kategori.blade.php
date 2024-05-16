<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Category Barang</title>
</head>
<body>
    <h1>Data Category Barang</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->category_id}}</td>
            <td>{{ $d->category_kode }}</td>
            <td>{{ $d->category_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

//The kategori.blade.php will display the category table web page retrieved from the m_category data by using the 'view' command in the KategoriController.