<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Buku</h2>

    <form action="/tambahbuku" method="post">
        @csrf
        <h4>Nama Buku</h4>
        <input type="text" name="nama_buku">
        <h4>Rilis</h4>
        <input type="text" name="rilis">
        <br>
        <br>
        <button type="submit">Tambah</button>
    </form>

</body>
</html>
