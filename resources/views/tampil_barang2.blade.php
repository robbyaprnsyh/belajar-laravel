<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($data as $barang2)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $barang2->id }}</td>
            <td>{{ $barang2->nama_barang }}</td>
            <td>{{ $barang2->harga }}</td>
            <td>{{ $barang2->stok }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>