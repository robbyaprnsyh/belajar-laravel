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
            <th>Nama Merek</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($data as $merek)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $merek->id }}</td>
            <td>{{ $merek->nama_merek }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>