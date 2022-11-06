<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-size: 40px; text-align: center">
    <table align="center" border="1">
        <tr>
            <th>Nama Buku</th>
            <th>Rilis</th>
            <th>AKSI</th>
        </tr>
        @foreach ($buku as $buk )
        <tr>
            <td>{{ $buk->nama_buku }}</td>
            <td>{{ $buk->rilis }}</td>
            <td>
                <a href="edit/{{ $buk->id }}">EDIT</a>
                <a href="delete/{{ $buk->id }}">DELETE</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="/tambah">TAMBAH</a>
</body>
</html>
