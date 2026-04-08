<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dasar PHP Form</title>
</head>
<body>
    <h2>Contoh Form Post</h2>
    <form method="POST" action="Proses.php">
        <label for="Nama">Nama</label>
        <input id="Nama" name="Nama" type="text" placeholder="Nama Anda">
</br>
        <label for="email">email</label>
        <input id="email" name="email" type="email" placeholder="nama@email.com">
</br>
        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan" rows="4" placeholder="Isi Pesan Anda"></textarea>
        </br>
        <button type="submit">Kirim (Post)</button>
    </form>
</body>
</html>