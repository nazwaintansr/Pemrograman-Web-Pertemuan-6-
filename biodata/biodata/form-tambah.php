<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="get">
        <label for="npm">NPM</label>
        <input type="text" name="npm" /><br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" /><br>
        <label for="prodi">prodi</label>
        <select name="prodi">
            <option value="Sistem Informasi (S1)">Sistem Informasi (S1)</option>
            <option value="Teknik Informatika (S1">Teknik Informatika ()S1</option>
            <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
        </select>
        <input type="submit" values="simpan" />
    </from>
</body>
</html>