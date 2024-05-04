<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Data Tabel Pembeli</h2>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Pembeli</th>
            <th>Jenis Kelamin</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($data as $pembeli)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pembeli->id }}</td>
            <td>{{ $pembeli->nama_pembeli }}</td>
            <td>{{ $pembeli->jenis_kelamin }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>